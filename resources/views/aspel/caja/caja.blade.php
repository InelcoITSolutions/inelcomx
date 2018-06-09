@extends('templates.principal')


@section('name_title','CAJA | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.caja.banner-caja')

    <section class="descripcion-prod caja-pages secciones " id="mas">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Controla y administra comercios, tiendas, cajas y cajeros de forma segura y sin complicaciones.</h2>
                    <p><b>Aspel-CAJA 4.0</b> controla, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets, cajones de dinero, básculas, lectores ópticos de código de barras, lectores de tarjetas de crédito y pantallas táctiles.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/caja/logos/inelco-aspel-caja-logo.png" alt="Aspel CAJA Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-caja">
        <div class="fondo-gray">
            <div class="container">
                <h2>Tan fácil como dar un clic emite Facturas Electrónicas CFDI desde tu punto de venta</h2>
            </div>
        </div>
    </section>

    <section class="ac_content caja-pages">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel CAJA</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/caja/inelco-aspel-caja-soluciones-tiendas-y-cajas-dispositivos-cajas.png" id="1" width="88.5%" alt="Tu caja bajo control|Opera con diferentes dispositivos de puntos de venta como lectores ópticos de código de barras, básculas, cajones de dinero, pantallas táctiles, lectores de tarjeta de crédito e impresoras de tickets."/>

                    <img src="/images/products/caja/inelco-aspel-caja-soluciones-inventarios.png" id="2" width="88.5%" alt="Mejora el control de inventarios|El inventario se actualiza automáticamente al capturar las ventas, y mucho más. Realiza bajas automaticas en cada compra, con facilidad de uso." />

                    <img src="/images/products/caja/inelco-aspel-caja-soluciones-clientes-y-cuentas-por-cobrar-clientes.png" id="3" width="88.5%" alt="Conoce a fondo a tu cliente|Almacena los datos de clientes con características generales y comerciales como: domicilio, límite y días de crédito, saldos, monto de ventas y cuentas contables, entre otros."/>

                    <img src="/images/products/caja/inelco-aspel-caja-soluciones-comprobantes-fiscales-digitales-factura-cfdi.png" id="4" width="88.5%" alt="Genera facturas CFDI de manera rapida|Emisión de Comprobantes Fiscales Digitales (Facturación Electrónica), con base en los estándares regulados por el SAT y a lo indicado en el art. 29 del Código Fiscal de la Federación."/>

                    <img src="/images/products/caja/inelco-aspel-caja-mas-soluciones-estadisticas-tienda.png" id="5" width="88.5%" alt="Visualiza tus ganancias en una gráfica|Ofrece estadísticas y resumen de ventas por tienda, cajero, producto o vendedor, etc. Con ayuda de una gráfica podras mejorar tu productividad en base a las estadísticas."/>

                    <img src="/images/products/caja/inelco-caja-Tecnologia-Tactil.png" id="6" width="88.5%" alt="Ahora con tecnología táctil en ventas|El sistema admite el manejo de pantallas táctiles para una captura más fácil de las ventas, y te permite visualizar tus productos por categorías. Utilízalo y agiliza tus ventas."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones caja-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Tu caja bajo control</div>
                    <p>Opera con diferentes dispositivos de puntos de venta como lectores ópticos de código de barras, básculas, cajones de dinero, pantallas táctiles, lectores de tarjeta de crédito e impresoras de tickets.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod secciones caja-pages">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="comercio inteligente" src="/images/products/caja/inelco-aspel-productos-caja-comercio-inteligente.png"/>
                    </center>
                    <h3 class="text-center">
                        Comercio inteligente
                    </h3>
                    <p>Haz tu comercio más versátil y productivo, conéctalo con diferentes dispositivos y periféricos punto de venta como lectores, miniprinters y pantallas táctiles.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="control total de tus ingresos" src="/images/products/caja/inelco-aspel-productos-caja-control-total-de-tus-ingresos.png"/>
                    </center>
                    <h3 class="text-center">
                        Control de ingresos y existencias
                    </h3>
                    <p>
                        La productividad de tu tienda o comercio está asegurada, porque tienes el control total de tus ingresos y existencias en las tiendas y cajas.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="conoce el saldo de tus clientes" src="/images/products/caja/inelco-aspel-productos-caja-conoce-el-saldo-de-tus-clientes-02.png"/>
                    </center>
                    <h3 class="text-center">
                        Conoce el saldo de tus clientes
                    </h3>
                    <p>
                        Obtén información oportuna de tus clientes. En cualquier momento puedes conocer el saldo de tus clientes y tomar las mejores decisiones.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="varios puntos de venta" src="/images/products/caja/inelco-aspel-productos-caja-varios-puntos-de-venta-o-sucursales.png"/>
                    </center>
                    <h3 class="text-center">
                        Conexión de las diferentes tiendas
                    </h3>
                    <p>
                        Si tienes varios puntos de venta o sucursales, envía la información de las existencias hacia las diferentes tiendas y recibe de las sucursales el concentrado de ventas e ingresos.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="acceso a usuarios controlado" src="/images/products/caja/inelco-aspel-productos-caja-acceso-usuarios-controlado.png"/>
                    </center>
                    <h3 class="text-center">
                        Acceso de usuarios controlado
                    </h3>
                    <p>
                        Establece claves de usuario para permitir o negar el acceso a las diferentes opciones del Sistema, tales como cambios de precios, cancelación de notas, bloqueos temporales de la caja, corte de caja por cajero, entre otros.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="reportes y estadísticas" src="/images/products/caja/inelco-aspel-productos-caja-genera-multiples-reportes-y-estadistica.png"/>
                    </center>
                    <h3 class="text-center">
                        Reportes y estadísticas oportunos
                    </h3>
                    <p>
                        Genera múltiples reportes y estadísticas, ya sea en general o por sucursal, con lo que podrás tener un amplio conocimiento de la operación tan detalladamente como lo necesites.
                    </p>
                </div>
            </div>
        </div>
                <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

                    <br>
                    <br>
                    <a href="{{url('contacto')}}" style="text-decoration: none" >
                                    <button id="btn-caja-prob1" class="btn  btn-lg center-block">
                                        Lo quiero
                                    </button>
                    </a>
    </section>
     @include('aspel.caja.menu-caja')
     

    

   

@endsection

@push('add-js')
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
