@extends('templates.store')
@section('name_title','Detalles de la compra | Inelco IT Solutions')

@section('contenido')
<section class="secciones">
    <div class="container">
        <div class="row">  
            <h3 class="text-center">Detalles del pedido</h3>
            <h4 class="h3-responsive subtitulos">1. Información del usuario</h4>
            <div class="col-md-4">
                <h5>Datos Personales</h5>
                <p>Usuario: <b>{{ Auth::user()->name }}</b></p>
                <p>Email: <b>{{ Auth::user()->email }}</b></p>
            </div>
            <div class="col-md-4">
                <h5>Datos fiscales</h5>
                <p>Razón social: <b>{{ Auth::user()->razon_social}}</b></p>
                <p>Nombre comercial: <b>{{ Auth::user()->nombre_comercial}}</b></p>
                <p>RFC: <b>{{ Auth::user()->rfc}}</b></p>
                <p>Contribuyente: <b>{{ Auth::user()->contribuyente}}</b></p>
                <p>Teléfono: <b>{{ Auth::user()->telefono}}</b></p>
                <p>Correo de facturación:<b> {{ Auth::user()->correo_facturacion}}</b></p>
            </div>
            <div class="col-md-4">
                <h5>Dirección</h5>
                <p>Calle: <b>{{ Auth::user()->calle}}</b></p>
                <p>No. exterior: <b>{{ Auth::user()->no_exterior}}</b></p>
                <p>No. interior:<b> {{ Auth::user()->no_interior}}</b></p>
                <p>Colonia: <b>{{ Auth::user()->colonia}}</b></p>
                <p>Ciudad: <b>{{ Auth::user()->ciudad}}</b></p>
                <p>Código postal: <b>{{ Auth::user()->cp}}</b></p>
                <p>País: <b>{{ Auth::user()->pais}}</b></p>
                <p>Estado<b>{{ Auth::user()->estado}}</b></p>
            </div>  
        </div>
        <div class="row">
            <h4 class="h3-responsive subtitulos">2. Datos de los productos</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Producto
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Subtotal
                            </th>
                            <th>
                                IVA
                            </th>
                            <th>
                                Total producto
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=0; @endphp
                        @foreach($carrito as $item)
                        @php $i++; @endphp
                        <tr id="fila{{ $i }}">
                            <td>
                                {{$item->nombre_prod}}
                            </td>
                            <td>
                                <p>$ {{number_format($item->precio_prod,2)}}</p>
                            </td>
                            <td>
                                <p class="text-center">{{$item->Cantidad}}</p>
                            </td>
                            <span style="visibility: hidden;">
                                {{$subtotal=$item->precio_prod * $item->Cantidad}}
                            </span>
                            <td>
                                $ {{number_format($subtotal,2)}}
                            </td>
                            <span style="visibility: hidden;">
                                {{$iva=.16}}
                            </span>
                            <td>
                                $ {{number_format($iva*$subtotal,2)}}
                            </td>
                            <span style="visibility: hidden;">
                                {{$new_iva=$iva*$subtotal}}
                                {{number_format($total_prod=$subtotal+$new_iva)}}
                            </span>
                            <td>
                                $ {{number_format($total_prod,2)}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-4 col-sm-8 col-md-9">
                    </div>
                    <div class="col-xs-8 col-sm-4 col-md-3 text-left">
                        <p>
                            <b>
                                TOTAL: $ {{number_format($total,2)}}
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="row">
            <h4 class="h3-responsive subtitulos">3. Realizar pago</h4>
            <a class="btn btn-info" href="{{route('transferencia-electronica')}}">
                <i aria-hidden="true" class="fa icon-credit-card2"></i> Transferencia electrónica
            </a>
            <a class="btn btn-warning" href="{{route('payment')}}">
                <i aria-hidden="true" class="fa icon-paypal2"></i> PayPal
            </a>
            <p class="regresar">
                <a class="btn btn-primary" href="{{route('mostrar-carrito')}}">Regresar</a>
            </p>
        </div>
    </div>
</section>
@stop
