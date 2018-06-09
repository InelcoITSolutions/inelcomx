@extends('templates.store')
@section('name_title','Carrito de compras | Inelco IT Solutions')

@section('contenido')
    <section class="secciones" >
        <div class="container">
            <div class="row"><h2 class="text-center">Carrito de compras</h2>
            </div>
            @if(count($carrito)>0)
                <div class="table-responsive">
                    <table class="table table-hover" id="Cart_Totals_Container">
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
                                    Total Producto
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @foreach($carrito as $item)
                                @php $i++; @endphp
                                <tr id="fila{{ $i }}">
                                    <td>
                                        <div class="container-fluid">
                                             <div class="row">
                                                 <div class="col-sm-2">
                                                     <img class="img-responsive" src="{{$item->logo_prod}}" width="60">
                                                 </div>
                                                 <div class="col-sm-10">
                                                    <b>{{$item->nombre_prod}}</b>
                                                    <p>{{$item->descripcion_prod}}</p>
                                                 </div>
                                             </div>
                                        </div>    
                                    </td>
                                    <td>
                                        <p>$ {{number_format($item->precio_prod,2)}}</p>
                                    </td>
                                    <td>
                                        <input class="pcant" id="producto_{{$item->id}}" max="20" maxlength="2" min="1" style="width: 30%;" type="number" value="{{$item->Cantidad}}">
                                        <a class="btn btn-primary btn-xs btn-update-item" data-href="{{(route('actualizar-carrito',$item->id))}}" href="#" data-id="{{$item->id}}">
                                            <i class="fa icon-cycle"></i>
                                        </a>
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
                                        <p class="text-right">$ {{number_format($total_prod,2)}}</p>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-xs" href="{{route('carrito-eliminar',$item->id)}}">
                                            <i aria-hidden="true" class="fa icon-circle-with-cross"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <p class="text-right"><b class="b-light">TOTAL:</b><b> $ {{number_format($total,2)}}</b></p>
                </div>
                <br>
                <hr>
                <p class="text-center">
                    <a class="btn btn-danger" href="{{route('vaciar-carrito')}}">Vaciar Carrito</a>
                    <a class="btn btn-primary" href="{{url('/tienda')}}">Seguir comprando</a>
                    <a class="btn btn-success" href="{{route('detalle-pedido')}}">Continuar</a>
                </p>
            @else
                <h3 class="text-center">No hay productos en el carrito</h3>
                <hr>
                <p class="text-center">
                    <a class="btn btn-primary" href="{{url('/tienda')}}">Agregar productos</a>
                </p>
            @endif
            
        </div>
    </section>
@endsection
@push('add-js')
    <script src="/js/actualizar-carrito.js"></script>
@endpush