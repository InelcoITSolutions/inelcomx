@extends('templates.store')
@section('name_title','Tienda | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="{{route('detalle-producto','NOI 8')}}" title="Adquiere el sistema NOI 8.0 y cumple las nuevas dispocisiones fiscales"><img src="/images/inelco-tienda-banner-noi.jpg" alt="..."></a>
                    {{-- <div class="carousel-caption">
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div> --}}
                </div>
                <div class="item">
                    <a href="{{route('detalle-producto','SAE 6.0')}}" title="Adquiere el SAE 6.0 y ten el control de tu negocio"><img src="/images/inelco-tienda-banner-sae.jpg"></a>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-chevron-thin-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-chevron-thin-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="secciones">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Productos</h3>
                @if(count($prods) > 0)
                    @foreach($prods as $prod)
                        <div class="col-md-4 col-sm-6 list-prods">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>{{ $prod->marca }} - {{ $prod->nombre_prod }}</h4></div>
                                    <div class="panel-body">
                                        <img style="margin: 0 auto; max-height: 100px;" src="{{ $prod->logo_prod }}" class="img-responsive">
                                        <hr>
                                        <p><b>Precio: ${{ $prod->precio_prod }}</b></p>
                                        <p><b>Clave:</b> {{ $prod->clave }}</p>
                                        <p><b>Descripción:</b> {{ substr($prod->descripcion_prod,0 ,150) }}...</p>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="{{route('detalle-producto',$prod->nombre_prod)}}" class="btn btn-info"><i class="fa icon-eye"></i> Ver más</a>

                                        @php $carrito = \Session::get('carrito'); @endphp
                                        @if(count($carrito)>0)
                                            @if(array_key_exists($prod->id, $carrito))
                                                <a href="{{route("mostrar-carrito")}}" class="btn btn-success"><i class="fa icon-thumbs-up"></i> Agregado</a>
                                            @else
                                                <a href="{{route("añadir-carrito",$prod->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                                            @endif
                                        @else
                                            <a href="{{route("añadir-carrito",$prod->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                                        @endif
                                       {{--  <a href="{{route('añadir-carrito',$prod->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a> --}}
                                    </div>
                                </div>     
                            </div>
                        </div> 
                    @endforeach
                @endif
            </div>

            <div class="row">
                <h3 class="text-center">Servicios</h3>
                @if(count($servs) > 0)
                    @foreach($servs as $serv)
                        <div class="col-md-4 col-sm-6 list-prods">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>{{ $serv->marca }} - {{ $serv->nombre_prod }}</h4></div>
                                    <div class="panel-body">
                                        {{-- <img style="margin: 0 auto; max-height: 100px;" src="{{ $serv->logo_prod }}" class="img-responsive">
                                        <hr> --}}
                                        <p><b>Precio: ${{ $serv->precio_prod }}</b></p>
                                        <p><b>Clave:</b> {{ $serv->clave }}</p>
                                        <p><b>Descripción:</b> {{ substr($serv->descripcion_prod,0 ,150) }}...</p>
                                    </div>
                                    <div class="panel-footer">
                                        <a href="{{route('detalle-producto',$serv->nombre_prod)}}" class="btn btn-info"><i class="fa icon-eye"></i> Ver más</a>

                                        @php $carrito = \Session::get('carrito'); @endphp
                                        @if(count($carrito)>0)
                                            @if(array_key_exists($serv->id, $carrito))
                                                <a href="{{route("mostrar-carrito")}}" class="btn btn-success"><i class="fa icon-thumbs-up"></i> Agregado</a>
                                            @else
                                                <a href="{{route("añadir-carrito",$serv->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                                            @endif
                                        @else
                                            <a href="{{route("añadir-carrito",$serv->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                                        @endif
                                       {{--  <a href="{{route('añadir-carrito',$prod->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a> --}}
                                    </div>
                                </div>     
                            </div>
                        </div> 
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    
@endsection

@push('add-js')
    <script>
        $('.carousel').carousel({
          interval: 6000
        })
    </script>
@endpush