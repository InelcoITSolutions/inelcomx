@extends('templates.principal')


@section('name_title','Soft Restaurant Módulos Adicionales | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel="stylesheet"/>-->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('national-soft.soft-restaurant.banner-sr')

    <section class="secciones sr-pages soluciones-sr" id="lo-nuevo-sr">
        <div class="container">
            <h2 class="title-h2">Módulos adicionales</h2>
            <h3 class="title-h3">Seguridad, facilidad y control para tu restaurante</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva1.png"/>
                        </center>
                        <h5 class="title-h5">Nuevo diseño en el comandero</h5>
                        <p>Mejore sus ventas mediante las sugerencias de producto a sus meseros, además tendrá la posibilidad de suspender productos al agotarse algún insumo de venta mientras esté operando, mejorando el control y eliminando la posibilidad de cobrar productos que no están disponibles.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva5.png"/>
                        </center>
                        <h3 class="title-h5">Evita fraudes y errores de captura</h3>
                        <p>El uso de báscula en compras te ayudará a mejorar la introducción de compras, ingresando datos exactos en peso, tomados directamente de la báscula y así aumentarás ganancias en tu restaurante.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva4.png"/>
                        </center>
                        <h5 class="title-h5">Controla tu inventario de manera más fácil</h5>
                        <p>Tome decisiones de compra y resurtido de almacenes de manera rápida y oportuna. Con esta nueva alarma siempre tendrás en existencia los insumos necesarios para la venta, ya que te avisará cuando esté en el mínimo.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva3.png"/>
                        </center>
                        <h5 class="title-h5">Diseña tus tickets y dale un plus a tu restaurante</h5>
                        <p>Al poder personalizar tus tickets no solo mejorará la apariencia de tu marca, también podrás incluir información útil para tu comensal como promociones, eventos o información adicional.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva2.png"/>
                        </center>
                        <h5 class="title-h5">Funciones de servicio a domicilio</h5>
                        <p>Con las nuevas mejoras del servicio a domicilio, tendrás un servicio más eficiente y una atención más personalizada al consultar de manera detallada y automática los últimos pedidos de tus clientes sin recapturas. También podrás ver en un solo momento las cuentas que ya han sido enviadas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva6.png"/>
                        </center>
                        <h5 class="title-h5">Impresión de movimientos de almacén</h5>
                        <p>Los movimientos como desperdicios y movimientos de almacén los podrás imprimir de manera rápida en operación, ya sea en miniprinter o tamaño carta. Para usuarios que no cuenten con impresora láser.</p>
                    </div>
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
