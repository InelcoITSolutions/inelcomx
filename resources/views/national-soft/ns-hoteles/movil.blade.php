@extends('templates.principal')


@section('name_title','Soft Restaurant Móvil | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel="stylesheet"/>-->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('national-soft.soft-restaurant.banner-sr')

    <section class="secciones sr-pages soluciones-sr sr-movil" >
        <div class="container">
            <h2 class="title-h2">Soft Restaurant<sup>®</sup> Móvil</h2>
            <h4 class="title-h4">Rapidez y eficiencia en operación, reduce tiempos de espera y genera mayores oportunidades de venta</h4>
            <h3 class="title-h3"><b>Razones</b> para adquirir Soft Restaurant<sup>®</sup> Móvil</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="/images/products/sr/inelco-sr-movil.jpg" class="img-responsive" alt="Soft Restaurant Movil">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-clock icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Rapidéz y eficiencia en la operación</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-users icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Gestión de afluencia de clientes</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-spinner6 icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Transacciones de venta más rápidas</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-pencil2 icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Reducción de errores al capturar órdenes</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-coin-dollar icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Más oportunidades de venta</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-user-check icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Mejor servicio al cliente</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-hour-glass icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Reduce el tiempo de espera de los clientes</p>
                        </div>
                        <div class="col-xs-1 col-sm-1">
                            <p class="icon-shop icon-movil-sr"></p>
                        </div>
                        <div class="col-xs-5 col-sm-5">
                            <p>Libera espacio en el establecimiento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr sr-movil">
        <div class="container">
            <h3 class="title-h3">Funciones del sistema</h3>
            <h4 class="title-h4">Soft Restaurant<sup>®</sup> Móvil cuenta con muchas funciones esenciales para una correcta y fácil administración de comandas, entre las que podemos destacar</h4>
            <div class="row">
                <div class="col-md-3">
                    <img src="/images/products/sr/c-movil.png" class="img-responsive" alt="Soft Restaurant Movil">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li>Captura de productos y envío de comandas</li>
                                <li>Apertura de cuentas libres y cuentas asignadas a una mesa</li>
                                <li>Filtros de las mesas por estado (ocupadas, impresas, todas y disponibles)</li>
                                <li>Resumen de cuenta</li>
                                <li>Repetir productos</li>
                                <li>Impresión de cuenta</li>
                                <li>Pagar cuenta</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                
                                <li>Mi venta</li>
                                <li>Agregar tiempos de preparación</li>
                                <li>Agregar comentarios de preparación</li>
                                <li>Cancelar productos</li>
                                <li>Reabrir cuenta</li>
                                <li>Descuentos (generales y por producto)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Obtiene los catálogos de grupos, productos (días visibles y precios de promoción por día), modificadores, áreas de venta, mesas, meseros, usuarios, imagenes asignadas a los grupos y productos, comentarios, colores para los botones de los productos, estaciones, perfiles y configuraciones de seguridad para los usuarios.</p>
                    <p>Se obtienen los cambios realizados al dividir cuentas, juntar mesas y cualquier tipo de operación con la cuenta.</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/products/sr/inelco-movil-sr-2.png" class="img-responsive" alt="Soft Restaurant Movil">
                </div>
            </div>
        </div>
    </section>



    @include('national-soft.soft-restaurant.menu-sr')
@stop

@push('add-js')
    @stack('files-menu')
    <script src="/js/comp-table.js"></script>
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
