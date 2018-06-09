<?php

namespace Inelco\Http\Controllers;

use Illuminate\Http\Request;

use Inelco\Http\Requests;
use Inelco\Modelos\Productos;

class StoreController extends Controller
{
    public function inicio(){
    	$prods=Productos::where('tipo','Producto')
    			 ->get();
        $servs=Productos::where('tipo','Servicio')
                 ->get();

        

    	//$carrito = \Session::get('carrito');
    	return view('tienda.tienda', compact('prods','servs'));
    }

    public function show($etiqueta)
    {
        /*$query = Input::get('search');
        $search = Productos::where('nombre', 'LIKE', '%' . $query . '%')->paginate(200);
        $producto = Productos::where('etiqueta', $etiqueta)->first();
        $productodos = Productos::where('etiqueta', $etiqueta)->where('nombre', 'LIKE', '%' . $query . '%')->first();
        return view('templates.tienda.ver-mas', compact('search', 'producto', 'productodos'));*/
        $detalles=Productos::where('nombre_prod',$etiqueta)->first();
        return view('tienda.detalles-prod',['detalles'=>$detalles]);


    }
}
