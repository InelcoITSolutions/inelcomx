@extends('templates.principal')


@section('name_title','ADM Tienda | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.admtienda.banner-admtienda')

    <section class="descripcion-prod desc-admtienda secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Es ideal para emprendedores y pequeños empresarios que requieren movilidad para punto de venta.
                    </h2>
                    <p>
                        <b>
                            Aspel ADM Tienda
                        </b>
                        es una app que lleva el control de tu punto de venta de manera sencilla y eficiente. Es ideal para tiendas y comercios que requieren generar transacciones en mostrador de forma rápida y segura con la practicidad de una tablet.

                   </p>
                                       
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/aspel_nube/productos/adm_tienda/logos/inelco-aspel-admtienda-logo.png" alt="Aspel ADM Tienda Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-admtienda">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    Ofrece tus productos desde cualquier lugar y asegura la venta en el momento oportuno

                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content " id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos Aspel ADM Tienda</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo<h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                    <div class="title">Imagen 1</div>
                    <p>A complete overview of your marketing, automation, & sales.</p>
                </div>-->
                <div id="tour-slides">
                    <img src="/images/products/ADMTienda/Inelco-ADMTienda-login.jpg"  id="1" width="88.5%" alt="Nuevo inicio de sesión con seguridad al 100%.|ADM Tienda posee una interfaz agradable en los dispositivos móviles y con protección máxima para una compra segura. "/>

                    <img src="/images/products/ADMTienda/Inelco-ADMTienda-clientes.jpg" id="2" width="88.5%" alt="Fácil administración de clientes |Registra fácilmente datos generales y comerciales de los clientes, también administra los días, límites de crédito y descuentos y logra ubicar la dirección de tus clientes con la herramienta de geolocalización." />

                    <img src="/images/products/ADMTienda/Inelco-ADMTienda-Pago.jpg" id="3"  width="88.5%" alt="Realiza pagos de manera sencilla | Consulta los movimientos generados de las formas de pago tipo Tarjeta" />

                    <img src="/images/products/ADMTienda/Inelco-ADMTienda-nueva-venta.jpg" id="4" width="88.5%" alt="Supervisa tus ventas y toma decisiones oportunas|Movilidad, ofrece tus productos desde cualquier lugar, generando ganancias inmediatas."/>

                   

                    
                </div>
            </div>
        </div>
    </section>
    <hr id="lap-separator">
    <section class="secciones" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Nuevo inicio de sesión con seguridad al 100%.</div>
                    <p>ADM Tienda posee una interfaz agradable en los dispositivos móviles y con protección máxima para una compra segura.</p>
                </div>
            </div>
        </div>
    </section>                

    <section class="caracteristicas-prod admtienda-pages secciones">
        <div class="container">
            <h2 align="center">
                    Aspel ADM Tienda ofrece
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="control de tu empresa" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-tickets.png"/>
                    </center>
                    <h3 class="text-center">
                        Fácil y rápida entrega de Tickets
                    </h3>
                    <p>
                        Genera notas de venta en segundos, imprímelas y envíalas por correo electrónico a clientes frecuentes o al público en general.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="contabilidad electrónica" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-cfdi.png"/>
                    </center>
                    <h3 class="text-center">
                        Emisión del comprobante CFDI
                    </h3>
                    <p>
                        Emite la factura al momento de la venta o permite que tu cliente la genere a través del portal de facturación.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="conoce cliente" src="/images/products/ADMTienda/Inelco-adm-tienda-gestion-cobro.png"/>
                    </center>
                    <h3 class="text-center">
                        Recibe pagos electrónicos
                    </h3>
                    <p>
                        Acepta diferentes tarjetas bancarias y consulta el reporte de todas las operaciones generadas.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="administracion del punto de venta" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-reporte-ventas.png"/>
                    </center>
                    <h3 class="text-center">
                        Supervisa tus ventas
                    </h3>
                    <p>
                        Obtén en cualquier momento del día los reportes de corte de caja y arqueo de caja, separados por formas de pago.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-estadisticas.png"/>
                    </center>
                    <h3 class="text-center">
                        Toma decisiones en tiempo real
                    </h3>
                    <p>
                        Emite estadísticas de los productos más vendidos, notas de venta por hora, formas de pago, entre otras.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-acceso-seguro.png"/>
                    </center>
                    <h3 class="text-center">
                        Acceso confiable y seguro
                    </h3>
                    <p>
                        Administra los dispositivos y los cajeros que pueden acceder a los datos, con los permisos previamente autorizados.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-productos.png"/>
                    </center>
                    <h3 class="text-center">
                        Movilidad para tu negocio
                    </h3>
                    <p>
                        Agiliza tus ventas de mostrador al ofrecer tus productos desde cualquier lugar con la practicidad de una tablet.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-movilidad.png"/>
                    </center>
                    <h3 class="text-center">
                        Labora sin conexión a Internet
                    </h3>
                    <p>
                        Trabaja sin conexión a Internet y sincroniza posteriormente tus movimientos con <a href="{{ url('aspel-adm') }}">Aspel ADM</a>.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/ADMTienda/aspel-productos-adm-android.png"/>
                    </center>
                    <h3 class="text-center">
                        Descarga la app en Google Play
                    </h3>
                    <p>
                        La aplicación está disponible para la plataforma móvil de Android.<a href="https://play.google.com/store/apps/details?id=com.aspel.ADMTienda&hl=es"> Descárgala aquí</a>
                    </p>
                </div>
                
            </div>
        </div>
             <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

            <br>
            <br>
            <a href="{{url('contacto')}}" style="text-decoration: none" >
                            <button id="btn-admtienda-prob1" class="btn  btn-lg center-block">
                                Lo quiero
                            </button>
            </a>
    </section>
    @include('aspel.admtienda.menu-admtienda')

      

    

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