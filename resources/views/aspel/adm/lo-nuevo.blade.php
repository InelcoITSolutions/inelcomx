@extends('templates.principal')


@section('name_title','Lo nuevo ADM | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.adm.banner-adm')

    <section class="secciones adm-pages nuevo-adm" id="mas">

        <div class="container">
            <h2 class="title-h2">
                Lo Nuevo
            </h2>
            <h3 class="title-h3">
                Con la versión Premium de ADM obtienes todas las funciones de la versión básica, y también útiles estadísticas de ventas que te ayudan a tomar las mejores decisiones.
            </h3>
            <div class="row">
                <div class="news-text">
                    <div class="col-md-6 ventajas">
                        <h5 class="title-h5">
                            Catálogo de métodos de pago con ADM
                        </h5>
                        <p>
                            Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                        </p>
                        <p>
                            ADM cumple con esta obligación de forma práctica y sencilla.
                        </p>
                    </div>
                    <div class="col-md-6 imagencontainer">
                        <img alt="metodo de pago adm" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-metodo-pago-facture-movil.png">
                        </img>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="lo nuevo adm version basica" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-aspel-adm-lo-nuevo-version-basica.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                        <b>
                            Versión BÁSICA
                        </b>
                    </h5>
                    <h5 class="title-h5">
                        Genera Cotizaciones
                    </h5>
                    <ul>
                        <li>
                            Integramos el módulo de cotizaciones para generar el alta, cancelación y modificación del documento.
                        </li>
                        <li>
                            Obtén el resumen de todas tus cotizaciones.
                        </li>
                        <li>
                            Exporta las consultas que realices en formato PFD y Excel y envíalos por correo electrónico.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="news-text">
                    <div class="col-md-6">
                        <h5 class="title-h5">
                            Fácil captura de documentos
                        </h5>
                        <p>
                            Agiliza la captura de documentos al asociar una cotización a una factura, recibo de honorarios o recibo de arrendamiento y también vincula estos documentos hacia una nota de crédito.
                        </p>
                    </div>
                    <div class="col-md-6 imagencontainer">
                        <img alt="facil captura de documentos" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-aspel-adm-lo-nuevo-captura-de-documentos.png">
                        </img>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="captura de observaciones en documentos" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-aspel-adm-lo-nuevo-captura-observaciones-documentos.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Captura de observaciones en documentos
                    </h5>
                    <p>
                        Durante la captura de cualquier tipo de documento es posible agregar información adicional. Estará visible al emitir y consultar los documentos.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="news-text">
                    <div class="col-md-6">
                        <h5 class="title-h5">
                            <b>
                                Versión PREMIUM
                            </b>
                        </h5>
                        <h5 class="title-h5">
                            Ventas y cuentas por cobrar
                        </h5>
                        <ul>
                            <li>
                                Define por cliente el límite de crédito y días de crédito.
                            </li>
                            <li>
                                Consulta en todo momento el estado de cuenta de tus clientes.
                            </li>
                            <li>
                                Al generar los comprobantes puedes realizar la recepción de pagos para facilitar el seguimiento de cargos y abonos de tus clientes.
                            </li>
                            <li>
                                Obtén estadísticas de ventas: mejor periodo de venta, productos más vendidos y clientes que más compraron.
                            </li>
                            <li>
                                Y ten un mejor control financiero con las estadísticas de cotizaciones, compras y utilidad bruta.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 imagencontainer">
                        <img alt="version premium adm" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-aspel-adm-lo-nuevo-version-premium.png">
                        </img>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="seguimiento de ventas y gastos" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-aspel-adm-lo-nuevo-administra-ventas-y-gastos.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Seguimiento de ventas y gastos
                    </h5>
                    <ul>
                        <li>
                            Realiza el alta de los documentos de gastos y/o adquisición de productos con sólo seleccionar el CFDI que el tercero te proporcione. Con ello, Aspel ADM asociará la información correspondiente a los datos del proveedor o tercero y partidas.
                        </li>
                        <li>
                            Genera el resumen de compras y gastos, la exportación de la consulta en formato PDF y Excel, así como el envío por correo de los documentos registrados.
                        </li>
                        <li>
                            Administra el inventario de tu negocio con los reportes de existencias y costos y listas de precios, también utiliza la consulta del kárdex por producto.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="news-text">
                    <div class="col-md-6">
                        <h5 class="title-h5">
                            Usuarios más seguros
                        </h5>
                        <p>
                            Para mayor seguridad de tu información podrás crear para cada persona que tenga acceso al sistema, usuarios con sus respectivas contraseñas y perfiles.
                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <img alt="usuarios mas seguros" class="img-responsive zoom1" data-zoom-image="/images/products/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/adm/inelco-aspel-adm-lo-nuevo-usuarios-seguros.png">
                        </img>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('aspel.adm.menu-adm')
@stop

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
