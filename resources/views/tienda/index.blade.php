@extends('tienda.plantilla')
@section('title','Sistemas Aspel')


@section('content')
{{-- @include('partials.slider') --}}
<section class="secciones-tienda" id="td1">
    <div class="container text-center">
        <h1 class="h1-responsive titulo">
            Productos Destacados
        </h1>
        <!--Card-->
        <div class="row fila1">
            @foreach($productos as $producto)
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="borde">
                    <!--Card image-->
                    <div class="view hm-zoom imagen">
                        <center>
                            <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                <img alt="" class="img-fluid" src="{{$producto->imagen}}">
                                    <div class="mask">
                                    </div>
                                </img>
                            </a>
                        </center>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Category & Title-->
                        <h5>
                        </h5>
                        <h4 class="card-title">
                            <strong>
                                <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                    {{$producto ->nombre}}
                                </a>
                            </strong>
                        </h4>
                        <!--Description-->
                        <p class="card-text">
                            {{$producto->descripcion}}
                        </p>
                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="left">
                                <b>
                                    Licencia Base: $ {{number_format($producto->precio,2)}}
                                </b>
                            </span>
                        </div>
                    </div>
                    <!--/.Card content-->
                    <center>
                        <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                            <button class="btn btn-primary" type="button">
                                Añadir al carrito
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
        <!--/.Card-->
    </div>
</section>
<section class="parallax" id="td2">
    <div class="carousel-caption hidden-xs" id="brand-caption">
        <div class="animated fadeInDown">
            <h3>
                <strong>
                    <span class="color">
                        Shop By Brands
                    </span>
                </strong>
            </h3>
            <h6 id="random_brands">
                <a href="http://davidtrushkov.com/store/brand/17">
                    Sony
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="http://davidtrushkov.com/store/brand/2">
                    ASUS
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="http://davidtrushkov.com/store/brand/10">
                    Lenovo
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="http://davidtrushkov.com/store/brand/21">
                    Astro
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="http://davidtrushkov.com/store/brand/18">
                    Toshiba
                </a>
            </h6>
            <h6 id="random_brands">
                <a href="http://davidtrushkov.com/store/brand/20">
                    CyberPowerPC
                </a>
            </h6>
        </div>
    </div>
</section>
<section class="news-products" id="td3">
    <div class="container text-center">
        <h1 class="h1-responsive titulo">
            Productos Nuevos
        </h1>
        <div class="row fila2">
            @foreach($productos2 as $producto)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="borde">
                    <!--Card image-->
                    <div class="imagen">
                        <center>
                            <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                <img alt="" class="img-fluid" src="{{$producto->imagen}}">
                                    <div class="mask">
                                    </div>
                                </img>
                            </a>
                        </center>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Category & Title-->
                        <h5>
                        </h5>
                        <h4 class="card-title">
                            <strong>
                                <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                    {{$producto ->nombre}}
                                </a>
                            </strong>
                        </h4>
                        <!--Description-->
                        <p class="card-text">
                            {{$producto->descripcion}}
                        </p>
                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="left">
                                <b>
                                    Licencia Base: $ {{number_format($producto->precio,2)}}
                                </b>
                            </span>
                        </div>
                    </div>
                    <!--/.Card content-->
                    <center>
                        <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                            <button class="btn btn-primary" type="button">
                                Añadir al carrito
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row fila2">
            @foreach($productos3 as $producto)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="borde">
                    <!--Card image-->
                    <div class="imagen">
                        <center>
                            <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                <img alt="" class="img-fluid" src="{{$producto->imagen}}">
                                    <div class="mask">
                                    </div>
                                </img>
                            </a>
                        </center>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Category & Title-->
                        <h5>
                        </h5>
                        <h4 class="card-title">
                            <strong>
                                <a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
                                    {{$producto ->nombre}}
                                </a>
                            </strong>
                        </h4>
                        <!--Description-->
                        <p class="card-text">
                            {{$producto->descripcion}}
                        </p>
                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="left">
                                <b>
                                    Licencia Base: $ {{number_format($producto->precio,2)}}
                                </b>
                            </span>
                        </div>
                    </div>
                    <!--/.Card content-->
                    <center>
                        <a class="a-class" href="{{route('añadir-carrito',$producto->etiqueta)}}">
                            <button class="btn btn-primary" type="button">
                                Añadir al carrito
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop
{{--
<a class="a-class" href="{{route('detalle-producto',$producto->etiqueta)}}">
    <button class="btn btn-info" type="button">
        Ver más
    </button>
</a>
--}}
