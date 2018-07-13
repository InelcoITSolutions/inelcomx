@extends('templates.principal')

@section('name_title','Soluciones COI | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.coi.banner-coi')

 <section class="secciones coi-pages soluciones-coi" id="catalogo-de-cuentas">
    <div class="container">
        <h2 class="title-h2">
            Conoce las soluciones de Aspel COI
        </h2>
        <h3 class="title-h3">
            Catálogo de cuentas
        </h3>
        <h4 class="title-h4">
            Aspel-COI 8.0 te ofrece el catálogo de cuentas más robusto y eficiente del mercado. ¡Compruébalo!
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Catálogo rápido y fácil de usar
                </h5>
                <ul>
                    <li>
                        Ofrece 9 catálogos de cuentas predefinidos.
                    </li>
                    <li>
                        Hasta 20 dígitos y 9 niveles, en los números de cuenta.
                    </li>
                    <li>
                        Elige el tipo de moneda para el registro de los movimientos.
                    </li>
                    <li>
                        En cada cuenta puedes asociar los códigos agrupadores, el RFC del cliente, proveedor o tercero.
                    </li>
                    <li>
                        Configura las cuentas para ver el detalle de la transacción y la captura de comprobantes para la contabilidad electrónica.
                    </li>
                </ul>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="inelco-aspel-coi-soluciones-multimoneda" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-catalogo-cuentas.png">
            </div>
        </div>
        <h5 class="title-h5">
            Además, consigues un ágil acceso a la información financiera. Puedes consultar:
        </h5>
        <ul>
            <li>
                El auxiliar de cada cuenta.
            </li>
            <li>
                Los saldos históricos en moneda contable y en moneda extranjera.
            </li>
            <li>
                Pólizas y muchas funciones más.
            </li>
        </ul>
    </div>
</section>
<section class="secciones coi-pages soluciones-coi" id="departamentos-centro-de-costos-y/o-proyectos">
    <div class="container">
        <h3 class="title-h3">
            Departamentos, centro de costos y/o proyectos
        </h3>
        <h4 class="title-h4">
            Mantén la certidumbre financiera en todos los niveles con Aspel-COI.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Certeza financiera
                </h5>
                <ul>
                    <li>
                        Registra hasta 999 departamentos para controlar gastos, ingresos y presupuestos.
                    </li>
                    <li>
                        Diferentes reportes por departamento: auxiliares, balanza de comprobación, estado de resultados y balance general.
                    </li>
                    <li>
                        Además cuenta con dos clasificaciones: centros de costos y proyectos, que te ofrecen claridad financiera por cada proyecto.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="clientes y cuentas por cobrar" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-departamentos-centro-costos.png">
            </div>
        </div>
    </div>
</section>
<section class="secciones coi-pages soluciones-coi" id="polizas">
    <div class="container">
        <h3 class="title-h3">
            Pólizas
        </h3>
        <h4 class="title-h4">
            El control administrativo de tus pólizas es eficiente, sencillo y con tu información disponible en cualquier momento.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Fácil captura:
                </h5>
                <ul>
                    <li>
                        Copia y pega información a partir de otras pólizas.
                    </li>
                    <li>
                        Sin capturar puedes crear automáticamente las pólizas a partir de un CFDI.
                    </li>
                    <li>
                        Utiliza las cuentas de contrapartida para un cuadre automático.
                    </li>
                    <li>
                        En pólizas capturadas en Microsoft Excel®, una por una o varias a la vez.
                    </li>
                    <li>
                        A partir de pólizas modelo para registrar movimientos frecuentes y con fórmulas para definir automáticamente los montos
                    </li>
                    <li>
                        Asocia los CDFI a los asientos contables, incluyendo el folio fiscal, así como la forma de pago en un solo paso.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="alta de factura" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-captura-polizas.png">
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                    También obtén gran versatilidad en tus pólizas con:
                </h5>
            <ul>
                <li>
                    Auditoría de pólizas que impide modificaciones posteriores.
                </li>
                <li>
                    Manejo ilimitado de tipos de pólizas.
                </li>
                <li>
                    Números de pólizas con folios numéricos y alfanuméricos.
                </li>
                <li>
                    Y Pólizas privadas para mantener la confidencialidad de la información de los comprobantes y formas de pago.
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- CONTABILIDA 1.3 INICIO -->
<section class="secciones coi-pages soluciones-coi" id="contabilidad-electronica">
    <div class="container">
        <h3 class="title-h3">
            Contabilidad Electrónica 1.3
        </h3>
        <h4 class="title-h4">
            El Sistema de Contabilidad Integral te ayuda a cumplir a tiempo con las obligaciones fiscales de la nueva era de la Contabilidad Electrónica.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Contabilidad Electrónica al instante
                </h5>
                <ul>
                    <li>
                        Con un solo clic se generan los archivos ZIP del catálogo de cuentas, balanza de comprobación, pólizas, auxiliares de folios y auxiliares de cuentas requeridos por el SAT.
                    </li>
                    <li>
                        Podrás firmar digitalmente tus archivos para mayor seguridad de la información que vas a enviar.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="proveedores y cuenta por pagar" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-generacion-xml.png">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img alt="proveedores y cuenta por pagar" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-polizas.png">
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Ágil captura de movimientos
                </h5>
                <ul>
                    <li>
                        Con la información del CFDI, obtén los valores de IVA, IEPS e impuestos locales y calcula la base de impuesto de acuerdo a la tasa e importe correspondiente.
                    </li>
                    <li>
                        Consulta los folios fiscales de los CFDI asociados a las pólizas, o hazlo también por cada una de las partidas.
                    </li>
                    <li>
                        Crea automáticamente la póliza de pago de la nómina a partir de uno o varios CFDI de los trabajadores.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                    Además, administra fácilmente los CFDI asociados al Sistema:
                </h5>
            <ul>
                <li>
                    Los concentra y organiza por empresa.
                </li>
                <li>
                    Valida en línea su integridad.
                </li>
                <li>
                    Los organiza en ingresos, egresos y demás categorías.
                </li>
                <li>
                    Asociación automática de los CFDI a las pólizas, en caso de creación automática de pólizas, y si no es el caso se ofrece una fácil asociación.
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- CONTABILIDA 1.3 FIN -->

<section class="secciones coi-pages soluciones-coi" id="fiscales">
    <div class="container">
        <h3 class="title-h3">
            Fiscales
        </h3>
        <h4 class="title-h4">
            Maneja el Impuesto al Valor Agregado (IVA) y la Declaración Informativa de Operaciones con Terceros (DIOT) de forma transparente y segura.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Fácil control del IVA y DIOT
                </h5>
                <ul>
                    <li>
                        Bitácora de ingresos efectivamente cobrados y egresos efectivamente pagados.
                    </li>
                    <li>
                        Cálculo y desglose del IVA relacionado a los movimientos y su retención.
                    </li>
                    <li>
                        Genera la bitácora con los pagos realizados a proveedores y desglose por tasa del IVA relacionado (DIOT).
                    </li>
                    <li>
                        Reportes con el IVA trasladado y acreditable, con selecciones por tasa de impuesto.
                    </li>
                    <li>
                        Reportes de IVA e ISR retenido, tanto en pagos a proveedores como en ingresos.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="proveedores y cuenta por pagar" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-iva-y-diot.png">
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                    También fiscales tiene más funciones para ti:
                </h5>
            <ul>
                <li>
                    Determina el ajuste anual por inflación detallado por rubro y por mes.
                </li>
                <li>
                    Genera automáticamente las declaraciones fiscales de ISR en Microsoft Excel®.
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="secciones coi-pages soluciones-coi" id="activos-y-depreciacion">
    <div class="container">
        <h3 class="title-h3">
            Activos y depreciación
        </h3>
        <h4 class="title-h4">
            Haz reportes de activos de manera automática y facilita las actividades de tu trabajo.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Control de activos:
                </h5>
                <ul>
                    <li>
                        Mantenimiento y seguros, con base a los datos de mantenimientos realizados y pólizas de servicio contratados, el Sistema proporciona diferentes reportes.
                    </li>
                    <li>
                        Generación automática de pólizas de alta, baja y depreciación de activos.
                    </li>
                    <li>
                        Realiza el cálculo de la depreciación contable y fiscal de activos de acuerdo con la LISR.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="inelco-aspel-coi-soluciones-Activosydepreciacion" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-depreciacion-activos.png">
            </div>
        </div>
    </div>
</section>
<section class="secciones coi-pages soluciones-coi" id="multimoneda">
    <div class="container">
        <h3 class="title-h3">
            Multimoneda
        </h3>
        <h4 class="title-h4">
            Ten a tu disposición diversas monedas extranjeras y realiza diferentes operaciones controlando en todo momento el tipo de cambio elegido.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Múltiples beneficios:
                </h5>
                <ul>
                    <li>
                        Control de saldos de las cuentas contables y activos en moneda extranjera.
                    </li>
                    <li>
                        Estados financieros en dólares.
                    </li>
                    <li>
                        Auxiliares y balanza de comprobación en la moneda y tipo de cambio elegido.
                    </li>
                    <li>
                        Generación automática de pólizas por el ajuste de ganancia o pérdida cambiaria.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="inelco-aspel-coi-soluciones-Activosydepreciacion" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-soluciones-moneda-extranjera.png">
            </div>
        </div>
    </div>
</section>
<section class="secciones coi-pages soluciones-coi" id="mas-soluciones">
    <div class="container">
        <h3 class="title-h3">
            Más soluciones COI
        </h3>
        <h4 class="title-h4">
            Descubre más soluciones de Aspel-COI 8.0 y comprueba por qué es el Sistema de Contabilidad más confiable de México.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Consultas, reportes y hojas de cálculo
                </h5>
                <ul>
                    <li>
                        Balanza de comprobación acumulada de más de un periodo o por departamentos.
                    </li>
                    <li>
                        Balance general, estado de resultados, diario general, libro mayor, presupuestos, depreciación contable y fiscal de activos.
                    </li>
                    <li>
                        Asistente de reportes que permite diseñar nuevos reportes fácilmente.
                    </li>
                    <li>
                        Auxiliares de cuenta con información de los comprobantes y formas de pago.
                    </li>
                    <li>
                        Las consultas en el Sistema pueden ser exportadas en formato XLS, TXT, XML y HTML.
                    </li>
                    <li>
                        Envío de consultas y reportes por correo electrónico con un solo clic.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="Consultas_reportes" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-mas-soluciones-reportes.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" alt="eficiente-interfaz-excel" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-mas-soluciones-interfaz-excel.png">
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Eficiente interfaz con Microsoft Excel®
                </h5>
                <ul>
                    <li>
                        Toda la información contable disponible en Microsoft Excel® tales como: estado de resultados, balance general.
                    </li>
                    <li>
                        Desde tu hoja de cálculo podrás ingresar a tu catálogo de cuentas para obtener saldos y valores.
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row interfaz">
                <h4 class="title-h4" style="color:#03aebd">Interfaz con los Sistemas Aspel</h4>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-sae')}}"><img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" width="60%"  alt="SAE" class="img-responsive logo-produ"></a></div>  
                    <h5 class="title-h5"><a href="{{url('aspel-sae')}}" style="text-decoration:none;color:#cb0c12;">Aspel SAE</a></h5>
                    <p class="p-css">Genera las pólizas correspondientes a las ventas, compras, movimientos al inventario, abonos y cargos de cuentas por cobrar y por pagar.</p>
                </div>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-banco')}}"><img src="/images-new/marcas/aspel/productos/banco/logos/inelco-aspel-banco-logo.png" width="60%"  width="60%"  alt="BANCO" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-banco')}}" style="text-decoration:none;color:#32912f;">Aspel BANCO</a></h5>
                    <p class="p-css">Logra que todos los movimientos bancarios registrados actualicen en línea los saldos de las cuentas por cobrar y por pagar.</p>
                </div>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-noi')}}"><img src="/images-new/marcas/aspel/productos/noi/logos/inelco-aspel-noi-logo.png" width="60%"  alt="NOI" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-noi')}}" style="text-decoration:none;color:#dd5d07;">Aspel NOI</a></h5>
                    <p class="p-css">Genera las pólizas modelo correspondientes a las provisiones y pagos de nómina, ya sea de forma general o desglosadas por trabajador, departamento o cuenta auxiliar.</p>
                </div>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-caja')}}"><img src="/images-new/marcas/aspel/productos/caja/logos/inelco-aspel-caja-logo.png" width="60%"  alt="CAJA" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-caja')}}" style="text-decoration:none;color:#fbb500;">Aspel CAJA</a></h5>
                    <p class="p-css">El catálogo de clientes y productos de los diferentes almacenes (tiendas) y el inventario de Aspel-SAE se actualiza por las ventas realizadas en los puntos de venta de Aspel-CAJA 4.0.</p>
                </div>
            </div>

        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    ⓔspacio Aspel
                </h5>
                <p class="p-css">
                    Servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva.
                </p>
                <p class="p-css">
                    En tu ⓔspacio podrás almacenar los respaldos de las bases de datos y archivos de configuración, además administra los Comprobantes Fiscales Digitales por Internet (CFDI) generados por los Sistemas Aspel. ⓔspacio también se puede sincronizar con Aspel-COI 8.0, para descargar todas las operaciones contables y contabilizarlas automáticamente.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="espacio aspel" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-espacio-aspel.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Características del producto
                </h5>
                <ul>
                    <li>
                        Base de Datos en formato Firebird® y posibilidad de uso en formato MS-SQL®.
                    </li>
                    <li>
                        Traductor automático de datos de versiones Aspel-COI 5.x y 6.0.
                    </li>
                    <li>
                        Actualización en línea vía internet a las últimas mejoras de la versión (Aspel-AL).
                    </li>
                    <li>
                        Perfiles de usuario para un acceso seguro a la información.
                    </li>
                    <li>
                        Disponible en versiones de 1 usuario con 99 empresas y licencias de usuarios adicionales.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="espacio aspel" class="img-responsive" src="/images-new/marcas/aspel/productos/coi/otros/soluciones/inelco-aspel-coi-mas-soluciones-caracteristicas.png">
            </div>
        </div>
    </div>
    <hr>
    <h3 style="color:#BF273E" class="text-center">
        Consigue Aspel COI, el brazo derecho del Contador
    </h3>
    <span style="display:block;"></span>
    <span style="display:block;"></span>
    <a href="{{url('aspel-coi#contratar-coi')}}" style="text-decoration: none;" >
        <button id="btn-coi-prob1" class="btn  btn-lg center-block">
            Lo quiero
        </button>
    </a>
</section>
    
    @include('aspel.coi.menu-coi')

@endsection

@push('add-js')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
    @stack('files-menu')
@endpush
