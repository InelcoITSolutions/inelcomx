@extends('templates.principal')


@section('name_title','ADM | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.adm.banner-adm')

    @include('aspel.adm.menu-adm')

    <section class="descripcion-prod adm-pages secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Gestiona tu negocio y genera los comprobantes fiscales digitales que requieras
                    </h2>
                    <p>
                        <b>
                            Aspel ADM
                        </b>
                        es una nueva aplicación en la nube que administra las principales operaciones de compra-venta de la empresa como: cotizaciones, facturas, notas de crédito, recibos de honorarios y de arrendamiento, compras, entre otras de manera fácil, eficiente y segura. Te permite conocer el inventario de tus productos, su rotación y costo. Tiene disponible en todo momento el estado de tus cuentas por cobrar y lleva un oportuno seguimiento de las ventas, gastos e ingresos. Aspel ADM lo puedes utilizar en cualquier momento desde tu dispositivo móvil, tablet o computadora.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/adm/logos/inelco-aspel-adm-logo.png" width="60%"  alt="Aspel ADM Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-adm">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    El ADM de una empresa exitosa
                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content adm-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel ADM</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/adm/inelco-aspel-adm-soluciones-comprobantes-fiscales-digitales-cfdi.png" id="1" width="88.5%" alt="Realiza tu factura electrónica|El timbrado se realiza en segundos y de acuerdo con las reformas fiscales vigentes."/>

                    <img src="/images/products/adm/inelco-aspel-adm-soluciones-emite-recibos-de-nomina.png" id="2" width="88.5%" alt="Emite recibos de nómina|Ahora podrás expedir Recibos de Nómina Electrónicos (CFDI). Con sólo capturar los datos de tu trabajador, obtendrás su recibo de pago listo para ser entregado." />

                    <img src="/images/products/adm/inelco-aspel-adm-soluciones-catalogo-de-clientes.png" id="3" width="88.5%" alt="Administra el catálogo de clientes| Podras contar con los datos requeridos y busquedas agilizadas de los clientes, realiza la captura y emisión de Comprobantes de manera sofisticada."/>

                    <img src="/images/products/adm/inelco-aspel-adm-soluciones-catalogo-de-productos.png" id="4" width="88.5%" alt="Mejora tu inventario|con el manejo de productos y servicios con las características propias de cada uno: fotografía para su fácil identificación, amplia descripción del producto y definición de precios en dólares y pesos."/>

                    <img src="/images/products/adm/inelco-metodo-pago-facture-movil.png" id="5" width="88.5%" alt="Catálogo de métodos de pago con ADM|Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT."/>

                    <img src="/images/products/adm/inelco-aspel-adm-lo-nuevo-version-basica.png" id="6" width="88.5%" alt="Genera cotizaciones (Versión BÁSICA)|Integra el módulo de cotizaciones para generar el alta, cancelación y modificación del documento."/>

                    <img src="/images/products/adm/inelco-aspel-adm-lo-nuevo-version-premium.png" id="7" width="88.5%" alt="Realiza ventas y cuentas por cobrar (Versión PREMIUM)|Define por cliente el límite de crédito y días de crédito. Consulta en todo momento el estado de cuenta de tus clientes."/>
                </div>
            </div>
        </div>
    </section>
    
    <hr id="lap-separator"/>
    <section class="secciones adm-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Realiza tu factura electrónica</div>
                    <p>El timbrado se realiza en segundos y de acuerdo con las reformas fiscales vigentes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod secciones adm-pages">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="cfdi complementos" src="/images/products/adm/inelco-aspel-productos-adm-cfdi-complementos.png"/>
                    </center>
                    <h3 class="text-center">
                        Expide múltiples comprobantes
                    </h3>
                    <p>
                        Genera Facturas Electrónicas y agrega al CFDI complementos como: Recibos de nómina, IEDU, Notarios, Donatarias, Venta de vehículos, entre otros.
                    </p>
                </div>  
                <div class="col-md-4">
                    <center>
                        <img alt="adm utiles reportes" src="/images/products/adm/inelco-aspel-productos-adm-utiles-reportes.png"/>
                    </center>
                    <h3 class="text-center">
                        Útiles reportes
                    </h3>
                    <p>
                        Obtén una visión clara del estado de tu empresa con los reportes de: Estados de cuenta de clientes, corte de caja, kárdex, lista de precios y muchos otros.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="panel de estadísticas" src="/images/products/adm/inelco-aspel-productos-adm-estadisticas.png"/>
                    </center>
                    <h3 class="text-center">
                        Panel de estadísticas
                    </h3>
                    <p>
                        Emite estadísticas que te ayudan a tomar decisiones importantes en tiempo real: clientes principales, productos más vendidos, utilidades, entre otras.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="movilidad" src="/images/products/adm/inelco-aspel-productos-facture-movil-factura-donde-quieras.png"/>
                    </center>
                    <h3 class="text-center">
                        Movilidad
                    </h3>
                    <p>
                        Accede a Aspel ADM desde tu dispositivo móvil, tablet o PC con toda la movilidad que tu empresa requiere.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="atractivo diseño de facturas" src="/images/products/adm/inelco-aspel-productos-adm-diseño-facturas.png"/>
                    </center>
                    <h3 class="text-center">
                        Atractivo diseño de facturas
                    </h3>
                    <p>
                        Un diseño exclusivo para capturar ágilmente los comprobantes.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="labora sin conexión a internet" src="/images/products/adm/inelco-aspel-productos-facture-movil-trabaja-sin-conexion-a-internet.png"/>
                    </center>
                    <h3 class="text-center">
                        Labora sin conexión a Internet
                    </h3>
                    <p>
                        Trabaja sin conexión a Internet y una vez que te conectes, se sincronizará automáticamente la información.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="facturas electrónicas" src="/images/products/adm/inelco-aspel-productos-facture-movil-facturas-ilimitadas.png"/>
                    </center>
                    <h3 class="text-center">
                        Facturas Electrónicas ilimitadas
                    </h3>
                    <p>
                        Facturación Electrónica ilimitada sin pago extra, garantizando la emisión y cancelación de todos los comprobantes fiscales que tú o tu empresa requieran.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="tiendas app store y google play" src="/images/products/adm/inelco-aspel-productos-adm-apple-android.png"/>
                    </center>
                    <h3 class="text-center">
                        Descarga la app en tiendas App Store y Google Play
                    </h3>
                    <p>
                        La aplicación está disponible para las plataformas móviles de iOS y Android, así como en su versión Web desde los navegadores Internet Explorer®, Opera®, Google Chrome®, Firefox® y Safari®.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="paquetes de facturas" src="/images/products/adm/inelco-icono_paquetes.png"/>
                    </center>
                    <h3 class="text-center">
                        Paquetes de Facturas
                    </h3>
                    <p>
                        Si tu facturación es baja, te ofrecemos la mejor solución para tus necesidades de facturación electrónica. Adquiere un Paquete de facturas de 20, 50 o 100 con vigencia de un año. Más información aquí.
                    </p>
                </div>
            </div>
        </div>
        <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

            <br>
            <br>
        <a href="{{url('contacto')}}" style="text-decoration: none" >
                        <button id="btn-adm-prob1" class="btn  btn-lg center-block">
                            Lo quiero
                        </button>
        </a>
    </section>

    

     
    

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
