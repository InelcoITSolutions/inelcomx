@extends('templates.principal')

@section('name_title','Soluciones CAJA | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.caja.banner-caja')

    <section class="secciones caja-pages soluciones-caja" id="tienda-y-cajas mas">
        <div class="container">
            <h2 class="title-h2">
                Conoce las soluciones de Aspel CAJA
            </h2>
            <h3 class="title-h3">
                Tienda y cajas
            </h3>
            <h4 class="title-h4">
                El Sistema de Punto de Venta y Administración de Comercios controla todas las operaciones del punto de venta como ingresos, existencias, ventas, cajas, cajeros y muchos aspectos más.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Tu caja bajo control
                    </h5>
                    <p>
                        Opera con diferentes dispositivos de puntos de venta como pantallas de torreta, lectores ópticos de código de barras, básculas, cajones de dinero, lectores de tarjeta de crédito e impresoras de tickets.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="Tiendas y cajas dispositivos" class="img-responsive" src="/images/products/caja/inelco-aspel-caja-soluciones-tiendas-y-cajas-dispositivos-cajas.png">
                    </img>
                </div>
            </div>
            <h5 class="title-h5">
                Conoce más funciones de tiendas y cajas
            </h5>
            <ul>
                <li>
                    Maneja diferentes perfiles de usuarios, con sus respectivos derechos de acceso a las opciones del Sistema.
                </li>
                <li>
                    Cuenta con una bitácora, para consultar las actividades realizadas en el Sistema por cada usuario.
                </li>
            </ul>
        </div>
    </section>

    <section class="secciones caja-pages soluciones-caja" id="inventarios">
        <div class="container">
            <h3 class="title-h3">
                Inventarios
            </h3>
            <h4 class="title-h4">
                Con Aspel-CAJA los productos del inventario de tu tienda o comercio están controlados y disponibles con la claridad y rapidez que necesitas.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Control de inventarios:
                    </h5>
                    <ul>
                        <li>
                            Manejo de las diferentes características de los productos y servicios: fotografía, claves de identificación, asignación de líneas de producto, departamentos, listas de precios y manejo de hasta 4 impuestos.
                        </li>
                        <li>
                            El inventario se actualiza automáticamente al capturar las ventas, mostrando las existencias reales de los productos, para una adecuada administración y una óptima planeación de compras.
                        </li>
                        <li>
                            Por cada una de las tiendas se maneja un inventario diferente.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="Soluciones inventarios" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/images/products/caja/inelco-aspel-caja-soluciones-inventarios.png">
                    </img>
                </div>
            </div>
            <h5 class="title-h5">
                Y tienes más beneficios al administrar tus inventarios:
            </h5>
            <ul>
                <li>
                    Manejo de kits, para agrupar varios productos y/o servicios para conformar un solo producto y agilizar la venta.
                </li>
                <li>
                    Proceso de inventario físico con ajustes automáticos.
                </li>
            </ul>
        </div>
    </section>

    <section class="secciones caja-pages soluciones-caja" id="clientes-y-cuentas-por-cobrar">
        <div class="container">
            <h3 class="title-h3">
                Clientes y cuentas por cobrar
            </h3>
            <h4 class="title-h4">
                Con el software Aspel-CAJA 3.5 controlas las cuentas por cobrar y su seguimiento de una forma sencilla, rápida y eficiente.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Conoce a fondo a tu cliente
                    </h5>
                    <ul>
                        <li>
                            Almacena los datos de clientes con características generales y comerciales como: domicilio, límite y días de crédito, saldos, monto de ventas y cuentas contables, entre otros.
                        </li>
                        <li>
                            Si tu comercio o empresa maneja crédito, Aspel-CAJA controla las cuentas por cobrar para que de manera fácil y rápida conozcas los saldos de tus clientes y puedas registrar sus pagos.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="clientes y cuentas por cobrar" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-alta-de-factura-HD.png" src="/images/products/caja/inelco-aspel-caja-soluciones-clientes-y-cuentas-por-cobrar-clientes.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones caja-pages soluciones-caja" id="documentos-de-venta">
        <div class="container">
            <h3 class="title-h3">
                Documentos de venta
            </h3>
            <h4 class="title-h4">
                El sistema de punto de venta está listo para generar notas de venta, tickets y facturas impresas o electrónicas rápido, y con todos los requisitos fiscales vigentes.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Genera tickets o facturas
                    </h5>
                    <ul>
                        <li>
                            Emisión, cancelación y devolución de notas de venta.
                        </li>
                        <li>
                            Generación de Comprobantes Fiscales Digitales de facturas, devoluciones y notas de crédito.
                        </li>
                        <li>
                            Facilidad en la captura de documentos de acuerdo con las necesidades de la empresa. Personalización de la ventana de captura, teclas de función rápida, aplica automáticamente políticas de descuento, entre otras.
                        </li>
                        <li>
                            Recibe pagos en diferentes monedas.
                        </li>
                        <li>
                            Manejo de propinas.
                        </li>
                        <li>
                            Diversas formas de pago: efectivo, tarjetas de crédito o débito y vales.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="recibos electrónicos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-proveedores-y-cuenta-por-pagar-HD.png" src="/images/products/caja/inelco-aspel-caja-soluciones-documentos-de-venta-tickets-o-facturas.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    También los documentos de venta te ofrecen:
                </h5>
                <ul>
                    <li>
                        Formatos de impresión que son adaptables (tickets y facturas).
                    </li>
                    <li>
                        Consulta y reimpresión de notas de venta.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="secciones caja-pages soluciones-caja" id="comprobantes-fiscales-digitales-cfdi">
        <div class="container">
            <h3 class="title-h3">
                Comprobantes Fiscales Digitales
            </h3>
            <h4 class="title-h4">Con Aspel-CAJA genera Facturas Electrónicas CFDI cumpliendo con todas las disposiciones fiscales vigentes.</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Genera facturas CFDI
                    </h5>
                    <ul>
                        <li>
                            Emisión de Comprobantes Fiscales Digitales (Facturación Electrónica), con base en los estándares regulados por el SAT y a lo indicado en el art. 29 del Código Fiscal de la Federación.
                        </li>
                        <li>
                            Método de pago por documento y número de cuenta bancaria en su caso.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="comprobantes fiscales digitales" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/images/products/caja/inelco-aspel-caja-soluciones-comprobantes-fiscales-digitales-factura-cfdi.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Modalidad de venta
                </h5>
                <ul>
                    <li>
                        <b>
                            Aspel-CAJA Administrador:
                        </b>
                        su función es llevar a cabo la administración de las tiendas de la empresa, concentra todas las operaciones efectuadas en los puntos de venta.
                    </li>
                    <li>
                        <b>
                            Aspel-CAJA Punto de Venta:
                        </b>
                        realiza todas las operaciones de ventas, facturación e inventarios.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="secciones caja-pages soluciones-caja" id="consolidacion-de-informacion">
        <div class="container">
            <h3 class="title-h3">
                Consolidación de información
            </h3>
            <h4 class="title-h4">Te permite analizar la información obtenida en las consultas de inventarios, clientes y ventas.</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Información real y confiable
                    </h5>
                    <p>
                        Cuenta con diversos controles para manejar los inventarios, ingresos y ventas de los diferentes puntos de venta. Además la información puede ser verificada a través de las consultas de inventarios, clientes y ventas.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="consolidacion" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/images/products/caja/inelco-aspel_productos_caja_consolidacion.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones caja-pages soluciones-caja" id="mas-soluciones">
        <div class="container">
            <h3 class="title-h3">
                Más soluciones CAJA
            </h3>
            <h4 class="title-h4">
                Descubre más soluciones de Aspel-CAJA y comprueba por qué es el Sistema de punto de venta líder.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Reportes y consultas
                    </h5>
                    <ul>
                        <li>
                            Maneja un historial de ingresos por tienda, por cajero o por vendedor.
                        </li>
                        <li>
                            Reporte de corte de caja.
                        </li>
                        <li>
                            Comprobación fiscal con las ventas diarias desglosadas por tasa de impuesto.
                        </li>
                        <li>
                            Resumen de ventas por periodo requerido.
                        </li>
                        <li>
                            Comisión por vendedor.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="Consultas reportes de la nomina" class="img-responsive" src="/images/products/caja/inelco-aspel-caja-mas-soluciones-reportes-y-consultas-reporte-corte-de-caja.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Obtén más reportes y consultas con Aspel-CAJA:
                </h5>
                <ul>
                    <li>
                        Impresión de etiquetas y código de barras de los productos.
                    </li>
                    <li>
                        Kárdex.
                    </li>
                    <li>
                        Lista de precios.
                    </li>
                    <li>
                        Inventario físico para conocer el stock disponible en cualquier momento.
                    </li>
                    <li>
                        Ventas y utilidad.
                    </li>
                    <li>
                        Estados de cuenta.
                    </li>
                    <li>
                        Antigüedad de saldos que facilitan la cobranza.
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Estadísticas
                    </h5>
                    <ul>
                        <li>
                            Ofrece estadísticas y resumen de ventas por tienda, cajero, producto o vendedor.
                        </li>
                        <li>
                            Gráficas avanzadas que hacen más sencillo el análisis de la información de ventas.
                        </li>
                        <li>
                            Control de ingresos totales por tienda, cajero o por un periodo determinado.
                        </li>
                        <li>
                            Proporciona un resumen semanal de ingresos.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="estadisticas tienda" class="img-responsive" src="/images/products/caja/inelco-aspel-caja-mas-soluciones-estadisticas-tienda.png">
                    </img>
                </div>
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
                        Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva.
                    </p>
                    <ul>
                        <li>
                            Publica en Internet las consultas, estadísticas y reportes del Sistema, así como archivos externos como documentos de Microsoft Excel®, Word®, archivos .zip, dll, .pdf. Además en tu ⓔspacio podrás almacenar los respaldos de tu Base de Datos y archivos de configuración.
                        </li>
                        <li>
                            Todos los Comprobantes Fiscales Digitales por Internet (CFDI) que emita tu empresa a través del Servicio Aspel Sellado CFDI serán almacenados junto con los acuses respectivos.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Respaldos automáticos
                </h5>
                <p>
                    El Sistema programa la generación automática del respaldo de tu Base de Datos y/o archivos de configuración con alguna de las siguientes periodicidades: de forma diaria, semanal, mensual o con la periodicidad que se requiera.
                </p>
            </div>
            <div class="row interfaz">
                <h4 class="title text-center">
                    Interfaz con los Sistemas Aspel
                </h4>
                <div class="col-md-6">
                    <center>
                        <a href="{{url('aspel-coi')}}"><img class="img-responsive logo-produ" src="/images/products/inelco-coi-logo.png" /></a>
                    </center>
                    <p><a href="{{url('aspel-coi')}}"><b>Aspel COI</b></a> genera las pólizas de ingresos, movimientos al inventario y ventas, mismas que pueden ser detalladas por clientes o impuestos, así como la integración automática del folio fiscal del CFDI de ventas y devoluciones en las pólizas.
                    </p>
                </div>
                <div class="col-md-6">
                    <center>
                        <a href="{{url('aspel-sae')}}"><img class="img-responsive logo-produ" src="/images/products/inelco-sae-ciclo.png"/></a>
                    </center>
                    <p>Con <a href="{{url('aspel-sae')}}"><b>Aspel SAE</b></a> es posible integrar los datos de inventarios y clientes, además de mantener actualizada la información de movimientos al inventario y existencias, información del cliente, cuentas por cobrar y saldo del cliente.
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
                            Base de Datos en formato FIREBIRD®.
                        </li>
                        <li>
                            Traductor automático de datos de la versión Aspel-CAJA 3.0
                        </li>
                        <li>
                            Actualización en línea a las últimas mejoras de la versión.
                        </li>
                        <li>
                            Módulo mejorado de perfiles del usuario para la asignación de permisos a los usuarios.
                        </li>
                        <li>
                            Disponible en versiones de 1 empresa (usuario administrador), 99 tiendas y 99 cajas, así como licencias de usuarios adicionales para los puntos de venta.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="caracteristicas de aspel caja" class="img-responsive" src="/images/products/caja/inelco-aspel-caja-mas-soluciones-caracteristicas-del-producto.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    @include('aspel.caja.menu-caja')

@endsection

@push('add-js')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
    @stack('files-menu')
@endpush
