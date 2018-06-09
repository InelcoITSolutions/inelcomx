<?php

namespace Inelco\Http\Controllers;

use Inelco\Modelos\VentasArticulos;
use Inelco\Modelos\Ventas;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaypalController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf        = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function postPayment()
    {
        $cliente = new Payer();
        $cliente->setPaymentMethod('paypal');

        $items    = array();
        $subtotal = 0;
        $iva      = 0;
        $carrito  = \Session::get('carrito');
        $moneda   = 'MXN';

        foreach ($carrito as $producto) {
            $item = new Item();
            $item->setName($producto->nombre_prod)
                ->setCurrency($moneda)
                ->setDescription($producto->descripcion_prod)
                ->setQuantity($producto->Cantidad)
                ->setPrice($producto->precio_prod);

            $items[] = $item;
            $subtotal += $producto->Cantidad * $producto->precio_prod;

        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $iva += $subtotal * .16;
        $mas_iva = new Details();
        $mas_iva->setSubtotal($subtotal)
            ->setTax($iva);

        $total = $subtotal + $iva;

        $monto_total = new Amount();
        $monto_total->setCurrency($moneda)
            ->setTotal($total)
            ->setDetails($mas_iva);

        $transaccion = new Transaction();
        $transaccion->setAmount($monto_total)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba en mi Laravel App Store');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $pago = new Payment();
        $pago->setIntent('Sale')
            ->setPayer($cliente)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaccion));

        try {
            $pago->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }

        foreach ($pago->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add cliente ID to session
        \Session::put('paypal_payment_id', $pago->getId());

        if (isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }

        return \Redirect::route('mostrar-carrito')
            ->with('mensaje', 'Ups! Error desconocido.');

    }

    public function getPaymentStatus()
    {
        // Get the cliente ID before session clear
        $pago_id = \Session::get('paypal_payment_id');

        // clear the session cliente ID
        \Session::forget('paypal_payment_id');

        $clienteId = Input::get('PayerID');
        $token     = Input::get('token');

        if (empty($clienteId) || empty($token)) {
            return redirect('/tienda')
                ->with('mensaje', 'Se ha cancelado la compra');
        }

        $pago = Payment::get($pago_id, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        $resultado = $pago->execute($execution, $this->_api_context);

        if ($resultado->getState() == 'approved') {

            $this->saveOrder();

            \Session::forget('carrito');

            return redirect('/tienda')
                ->with('mensaje', 'Compra realizada de forma correcta');
        }
        return redirect('/tienda')
            ->with('mensaje', 'La compra fue cancelada');
    }

    public function saveOrder()
    {

        $subtotal = 0;
        $carrito  = \Session::get('carrito');

        foreach ($carrito as $producto) {
            $subtotal += $producto->Cantidad * $producto->precio_prod;
        }

        $iva   = $subtotal * .16;
        $total = $subtotal + $iva;

        $venta = Ventas::create([
            //'subtotal' => $subtotal,
            //'iva'      => $iva,
            'user_id'  => \Auth::user()->id,
            'total'    => $total,
            'estado_venta' =>'pagado'
        ]);

        foreach ($carrito as $producto) {
            $this->saveOrderItem($producto, $venta->id);
        }
    }

    public function saveOrderItem($producto, $id_venta)
    {
        VentasArticulos::create([
            'id_ventas'    => $id_venta,
            'id_producto'  => $producto->id,
            'cantidad'     => $producto->Cantidad,
            'precio'       => $producto->precio_prod,
        ]);
    }
}
