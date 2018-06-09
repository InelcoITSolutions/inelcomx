@extends('templates.principal')


@section('name_title','Soft Restaurant Móvil | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel="stylesheet"/>-->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('national-soft.soft-facturas.banner-sf-movel')

    <section class="secciones sf-pages soluciones-sf sf-movil" >
        <div class="container">
            <h2 class="title-h2">Soft Facturas<sup>®</sup> Móvil</h2>
            <h4 class="title-h4">Rapidez y eficiencia en operación, ahora es posible realizar tus comprobantes fiscales desde tu celular o tablet</h4>
            <h3 class="title-h3">Todo el <b>poder</b> de Soft Facturas<sup>®</sup> ahora en tu smartphone</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="/images/products/sf/inelco-sf-phone.png" class="img-responsive" alt="Soft Restaurant Movil">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-coin-dollar icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>No perderas ventas</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-shield2 icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Seguridad</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-android icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Compatible para Android OS</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-rocket2 icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Todas las funciones</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-grin icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Clientes felices</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-stopwatch2 icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Rapidéz y eficiencia en la operación</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-stats-dots icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Aumenta tu producción</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-cloud-check icon-movil-sf"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Tus operaciones en un solo lugar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sf-pages">
        <div class="container">
            <div class="row">
                <h3 class="title-h3">Requerimientos para usar Soft Facturas<sup>®</sup> Móvil</h3>
                <div class="col-md-6 col-sm-6">
                    <ul class="ul-sf-req">
                        <li>Conexión a Internet</li>
                        <li>Navegadores recomendados: Google Chrome, Mozilla Firefox, Safari</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="ul-sf-req">
                        <li>Obtener con el SAT su certificado de Sello Digital</li>
                        <li>Adquirir algún paquete de CFDI para comenzar a facturar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=" secciones sf-pages" id="descargar">
        <div class="container">
            <div class="row">
            <h2 align="center">Descarga la aplicación GRATIS desde Play Store</h2>
               

                <div class="tour-caption " ">

                    <a href="https://play.google.com/store/apps/details?id=com.nationalsoft.softfacturas" target="_blank"><img alt="inelco-aspel-coi-transp" class="img-responsive" onmouseover="this.width=250;this.height=150;" onmouseout="this.width=200;this.height=100;" width="200" height="100" alt="" src="/images/products/google-play.png"></a>
                </div>
            </div>
        </div>
    </section>

    @include('national-soft.soft-facturas.menu-sf')
@stop

@push('add-js')
    @stack('files-menu')
    <script src="/js/comp-table.js"></script>
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
