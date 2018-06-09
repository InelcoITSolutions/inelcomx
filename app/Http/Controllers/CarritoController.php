<?php

namespace Inelco\Http\Controllers;

//use Inelco\Modelos\Pedido;
use Inelco\Modelos\Ventas;
use Inelco\Modelos\VentasArticulos;
use Inelco\Modelos\Productos;
use Mail;

class CarritoController extends Controller
{
    public function __construct()
    {

        if (!\Session::has('carrito')) {
            \Session::put('carrito', array());
        }

    }

    // Mostrar carrito
    public function show(){
        $carrito = \Session::get('carrito');
        $total   = $this->total();
        return view('tienda.carrito', compact('carrito', 'total'));
    }

    // Añadir articulo
    public function add(Productos $producto){
        $carrito                      = \Session::get('carrito');
        $producto->Cantidad           = 1;
        $carrito[$producto->id] = $producto;
        \Session::put('carrito', $carrito);

        return redirect()->route('mostrar-carrito');
    }

    // Borrar articulo
    public function delete(Productos $producto){
        $carrito = \Session::get('carrito');
        unset($carrito[$producto->id]);
        \Session::put('carrito', $carrito);
        return redirect()->route('mostrar-carrito');
    }

    // Actualizar articulo
    public function update(Productos $producto, $cantidad){
        $carrito = \Session::get('carrito');
        $carrito[$producto->id]->Cantidad = $cantidad;
        \Session::put('carrito', $carrito);
        return redirect()->route('mostrar-carrito');
    }

    // Vaciar carrito
    public function trash(){
        \Session::forget('carrito');
        return redirect()->route('mostrar-carrito');
    }

    //Generamos el pdf
    public function pdf(){
        $carrito = \Session::get('carrito');
        $sub     = $this->subtotal();
        $total   = $this->total();
        $pdf     = \PDF::loadView('tienda.pdf', compact('carrito', 'sub', 'total'));
        return $pdf->stream('Detalles de su compra.pdf');

        //$pdf = \PDF::loadView('templates.landings.tres-promociones.pedido-pdf', $cliente);
        //return $pdf->stream('pedido.pdf');

        //return view('templates.landings.tres-promociones.pedido-pdf', compact('pedido', 'subtotal', 'iva', 'total', 'referencia'));
    }

    public function enviarPedido(){
        $this->guardarPedido();
        $data = [];

        Mail::send(['pdf' => 'pedido.pdf'], $data, function ($message) {
            $pdf = $this->pdf();
            //remitente
            $message->from('jovany.hernandez@inelco.com.mx');
            //asunto
            $message->subject('Detalles de pedido realizado en inelco.mx/tienda');
            //archivo adjunto
            $message->attachData($pdf, 'Detalle-de-pedido.pdf');
            //receptor
            $message->to(\Auth::user()->email, \Auth::user()->name);
        });

        \Session::forget('carrito');

        return redirect('/tienda')->with('mensaje', 'Su pedido ha sido realizado, Le hemos enviado a su correo electrónico los datos bancarios para que realice el pago');
    }

    //Detalle del pedido
    public function detallePedido(){
        if (count(\Session::get('carrito')) <= 0) {
            return redirect('/tienda');
        }

        $carrito = \Session::get('carrito');
        $total   = $this->total();
        return view('tienda.detalle-pedido', compact('carrito', 'total'));
    }

    public function guardarPedido(){
        $subtotal = 0;
        $carrito  = \Session::get('carrito');
        $venta=new Ventas;
        $articulos = array();

        foreach ($carrito as $producto) {
            $articulos[]=new VentasArticulos(array(
                'id_producto' => $producto->id,
                'cantidad'     => $producto->Cantidad,
                'precio'       => $producto->precio_prod
            ));
            $subtotal += $producto->Cantidad * $producto->precio_prod;
        }

        $iva   = $subtotal * .16;
        $total = $subtotal + $iva;

        /*$venta = Pedido::create([
            'user_id'  => \Auth::user()->id,
            'subtotal' => $subtotal,
            'iva'      => $iva,
            'total'    => $total,
            'estado'   => 'Pendiente',
        ]);*/        
        $venta->user_id      = \Auth::user()->id;
        $venta->total        = $total;
        $venta->estado_venta = 'Pedido';

        $venta->save();
        $venta->articulosVendidos()->saveMany($articulos);
    }

    // subtotal de la compra para enviarlo al pdf
    private function subtotal()
    {
        $carrito  = \Session::get('carrito');
        $subtotal = 0;
        foreach ($carrito as $item) {
            $subtotal += $item->precio_prod * $item->Cantidad;
        }
        return $subtotal;
    }

    // total de la compra
    private function total()
    {
        $carrito = \Session::get('carrito');
        $total   = 0;

        foreach ($carrito as $item) {
                $subtotal = $item->precio_prod * $item->Cantidad;
                $iva      = $subtotal * .16;
                $total += $subtotal + $iva;
        }
        return $total;
    }

}
