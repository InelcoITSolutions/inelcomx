@extends('templates.principal')

@section('name_title','Soluciones ADM | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.adm.banner-adm')

    <section class="secciones adm-pages soluciones-adm" id="comprobantes-fiscales-digitales">
        <div class="container" id="mas">
            <h2 class="title-h2">
                Conoce las soluciones de Aspel ADM
            </h2>
            <h3 class="title-h3">
                Comprobantes Fiscales Digitales
            </h3>
            <h4 class="title-h4">
                Con la aplicación ADM generas Facturas Electrónicas ilimitadas y tienes la opción de trabajar sin conexión a Internet y después sincronizar tu información. ¡Tu negocio nunca se detiene!
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Factura Electrónica CFDI
                    </h5>
                    <ul>
                        <li>
                            El timbrado se realiza en segundos y de acuerdo con las reformas fiscales vigentes.
                        </li>
                        <li>
                            El CFDI se envía automáticamente por e-mail en formato PDF y XML.
                        </li>
                        <li>
                            Fácil cancelación en línea con el SAT y almacenamiento del acuse.
                        </li>
                        <li>
                            Diseños predefinidos para la impresión de los Comprobantes.
                        </li>
                        <li>
                            Maneja Impuesto al Valor Agregado (IVA), Impuesto Sobre la Renta (ISR) y un impuesto local configurable (trasladado o retenido).
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="comprobantes fiscales y digitales" class="img-responsive" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/adm/inelco-aspel-adm-soluciones-comprobantes-fiscales-digitales-cfdi.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Características versión PREMIUM
                    </h5>
                    <p>
                        Incluimos Complementos:
                    </p>
                    <ul>
                        <li>
                            Para divisas, donatarias, IEDU, leyendas fiscales, nómina, notarios públicos, pago en especie y PFIC.
                        </li>
                        <li>
                            También para turista pasajero extranjero, vales de despensa, servicios parciales de construcción y venta de vehículos.
                        </li>
                        <li>
                            En todos los complementos puedes seleccionar si son opcionales o requeridos.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/adm/inelco-aspel-adm-soluciones-caracteristicas-version-premium.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Emite Recibos de Nómina
                    </h5>
                    <p>
                        Ahora podrás expedir Recibos de Nómina Electrónicos (CFDI). Con sólo capturar los datos de tu trabajador, obtendrás su recibo de pago listo para ser entregado.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/adm/inelco-aspel-adm-soluciones-emite-recibos-de-nomina.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones adm-pages soluciones-adm" id="catalogo-de-clientes">
        <div class="container">
            <h3 class="title-h3">
                Catálogo de Clientes
            </h3>
            <h4 class="title-h4">
                Lleva en tu dispositivo móvil la información más importante de tus clientes y genera sus Facturas Electrónicas desde donde te encuentres.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catálogo de clientes
                    </h5>
                    <ul>
                        <li>
                            Cuenta con los datos requeridos para agilizar la captura y emisión de Comprobantes.
                        </li>
                        <li>
                            Eficiente búsqueda para localizar a los clientes por nombre o RFC.
                        </li>
                        <li>
                            Podrás ubicar la dirección del cliente en Google Maps® con un solo clic.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="catalogo de clientes" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/images/products/adm/inelco-aspel-adm-soluciones-catalogo-de-clientes.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones adm-pages soluciones-adm" id="catalogo-de-productos">
        <div class="container">
            <h3 class="title-h3">
                Catálogo de Productos
            </h3>
            <h4 class="title-h4">
                Con ADM cuentas con un catálogo de productos muy completo, fácil de utilizar y con fotografía para identificarlos rápidamente.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catálogo de productos
                    </h5>
                    <p>
                        Manejo de productos y servicios con las características propias de cada uno: fotografía para su fácil identificación, amplia descripción del producto y definición de precios en dólares y pesos.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="visor cfdi" class="img-responsive" src="/images/products/adm/inelco-aspel-adm-soluciones-catalogo-de-productos.png">
                    </img>
                </div>
            </div>
        </div>
    </section>
    
    @include('aspel.adm.menu-adm')

@endsection

@push('add-js')    
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
