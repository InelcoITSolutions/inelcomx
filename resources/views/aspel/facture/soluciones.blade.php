@extends('templates.principal')

@section('name_title','Soluciones FACTURE | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.facture.banner-facture')

    <section class="secciones facture-pages soluciones-facture" id="factura-facil-y-rapido">
        <div class="container">
            <h2 class="title-h2">
                Conoce las soluciones de Aspel FACTURE
            </h2>
            <h3 class="title-h3">
                Factura fácil y rápido
            </h3>
            <h4 class="title-h4">
                Aspel-FACTURⓔ resuelve las necesidades de facturación de las empresas mexicanas; basta con instalarlo para que en minutos se generen Comprobantes Fiscales con todos los requisitos.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catálogo de clientes
                    </h5>
                    <p>
                        Registra fácilmente a tus clientes y define la información comercial y fiscal de manera sencilla, además agilizas la captura de los Comprobantes y minimiza errores.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="catalogo de clientes" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/facture/inelco-aspel-facture-soluciones-catalogo-de-clientes-2.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catálogo de terceros
                    </h5>
                    <p>
                        Registra a los receptores de Comprobantes de retenciones e información de pagos y genera los nuevos Comprobantes Digitales que la autoridad establece para retenciones de impuestos por concepto de dividendos, remanentes distribuibles, entre otros.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/facture/inelco-aspel-facture-soluciones-catalogo-de-terceros-2.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catálogo de productos
                    </h5>
                    <p>
                        Registra  tus productos incluyendo detalles como: descripción, imagen, precio, unidad de medida, entre otros.
                    </p>
                    <p>
                        También puedes definir impuestos por producto.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/facture/inelco-aspel-facture-soluciones-catalogo-de-productos-2.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones facture-pages soluciones-facture" id="complementos">
        <div class="container">
            <h3 class="title-h3">
                Complementos
            </h3>
            <h4 class="title-h4">
                Descubre los nuevos beneficios que Aspel-FACTURⓔ tiene para tu empresa.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Maneja múltiples complementos de retención:
                    </h5>
                    <ul>
                        <li>
                            01-Servicios profesionales.
                        </li>
                        <li>
                            02-Regalías por derechos de autor.
                        </li>
                        <li>
                            03-Autotransporte terrestre de carga.
                        </li>
                        <li>
                            04-Servicios prestados por comisionistas.
                        </li>
                        <li>
                            05-Arrendamiento.
                        </li>
                        <li>
                            06-Enajenación de acciones.
                        </li>
                        <li>
                            07-Enajenación de bienes objeto de la LIEPS, a través de mediadores, agentes, representantes, corredores, consignatarios, o distribuidores.
                        </li>
                        <li>
                            08-Enajenación de bienes inmuebles consignada en escritura pública.
                        </li>
                        <li>
                            09-Enajenación de otros bienes, no consignada en escritura pública.
                        </li>
                        <li>
                            10-Adquisición de desperdicios industriales.
                        </li>
                        <li>
                            11-Adquisición de bienes consignados en escritura pública.
                        </li>
                        <li>
                            12-Adquisición de otros bienes, no consignados en escritura pública.
                        </li>
                        <li>
                            14.Dividendos o utilidades distribuidas. Este concepto de retención incluye complemento.
                        </li>
                        <li>
                            18-Pagos realizados a favor de residentes en el extranjero.
                        </li>
                        <li>
                            19-Enajenación de acciones u operaciones en bolsa de valores.
                        </li>
                        <li>
                            25-Otro tipo de retenciones.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="retenciones" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/images/products/facture/inelco-aspel-facture-soluciones-retenciones.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Emite comprobantes con complementos fiscales:
                    </h5>
                    <ul>
                        <li>
                            Notarios.
                        </li>
                        <li>
                            Donatarias.
                        </li>
                        <li>
                            Pago en especie.
                        </li>
                        <li>
                            Compra-venta de divisa.
                        </li>
                        <li>
                            Leyendas fiscales.
                        </li>
                        <li>
                            Servicios parciales de construcción.
                        </li>
                        <li>
                            INE.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="soluciones complementos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/images/products/facture/inelco-aspel-facture-soluciones-complementos.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones facture-pages soluciones-facture" id="mas-soluciones-facture">
        <div class="container">
            <h3 class="title-h3">
                Más soluciones FACTURE
            </h3>
            <h4 class="title-h4">
                Con Aspel-FACTURe emite Facturas Electrónicas para personas Físicas con actividad empresarial y personas Morales.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Envío de CFDI por e-mail
                    </h5>
                    <p>
                        Con Aspel-FACTURⓔ puedes enviar por correo electrónico el comprobante fiscal en formato XML así como en PDF. Cuenta con un visor de comprobantes que facilita el manejo de tus CFDI.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="visor cfdi" class="img-responsive" src="/images/products/facture/inelco-aspel-facture-mas-soluciones-visor-cfdi.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Maneja los siguientes impuestos:
                    </h5>
                    <ul>
                        <li>
                            IVA.
                        </li>
                        <li>
                            Retención de IVA.
                        </li>
                        <li>
                            Retención de ISR.
                        </li>
                        <li>
                            Un impuesto local configurable (trasladado o retenido), como el Impuesto Sobre Hospedaje.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="impuestos" class="img-responsive" src="/images/products/facture/inelco-aspel-facture-mas-souciones-impuestos.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Descubre más beneficios de FACTURⓔ:
                </h5>
                <ul>
                    <li>
                        Emite comprobantes fiscales en pesos y dólares
                    </li>
                    <li>
                        Importa fácilmente por medio de un sencillo asistente, la información de tus XML de facturas, clientes y productos.
                    </li>
                    <li>
                        Consulta útiles estadísticas de los movimientos generados por un periodo de tiempo determinado.
                    </li>
                    <li>
                        Genera reportes de facturas o comprobantes emitidos.
                    </li>
                    <li>
                        Permite personalizar la representación impresa de los comprobantes disponibles.
                    </li>
                    <li>
                        Cancela los CFDI de manera fácil y directa desde el Sistema, sin que sea necesario ir a la página de Internet del SAT para ejecutar esta operación.
                    </li>
                    <li>
                        Importa fácilmente información de archivos de hojas de cálculo, para generar las facturas electrónicas automáticamente, por eso es el “facturador por excelencia”.
                    </li>
                    <li>
                        Ahora puedes descargar de portal del SAT los CFDI generados por ti o tu negocio, e integrarlos al sistema por medio del importador de Aspel-FACTURe.
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive ">
                        <img alt="espacio aspel" class="img-responsive zoom2" data-zoom-image="/img/productos/inelco-consultas-estadisticas-reportes-HD.png" src="/images/products/inelco-espacio-aspel.png">
                        </img>
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                        ⓔspacio Aspel
                    </h5>
                    <p>
                        Es un servicio inteligente en la nube que te permite respaldar la base de datos de tu sistema Aspel-FACTURⓔ, así como tus CFDI. Siempre tendrás una copia confiable de tus comprobantes.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Características generales del producto
                    </h5>
                    <ul>
                        <li>
                            Aplicación de escritorio.
                        </li>
                        <li>
                            Monousuario.
                        </li>
                        <li>
                            Maneja hasta 99 RFC´s cada uno con su propia configuración.
                        </li>
                        <li>
                            Ofrece comprobantes ya sea en pesos o dólares, a nivel estándar.*
                        </li>
                        <li>
                            Para CFDI, maneja hasta 99 Certificados de Sello Digital.
                        </li>
                    </ul>
                    <p>
                        Nota: Para el manejo de addendas, parcialidades, números de serie, lotes o pedimentos, descuentos y comisiones, se sugiere el uso del Sistema Aspel-SAE.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="caracteristicas de aspel banco" class="img-responsive" src="/images/products/facture/inelco-aspel-facture-soluciones-factura-facil-rapido-fajilla.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    @include('aspel.facture.menu-facture')

@endsection

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
