@extends('templates.principal')

@section('name_title','Soluciones BANCO | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.banco.banner-banco')

    <section class="secciones banco-pages soluciones-banco" id="cuentas-bancarias mas">
        <div class="container">
            <h2 class="title-h2">
                Conoce las soluciones de Aspel BANCO
            </h2>
            <h3 class="title-h3">
                Cuentas bancarias
            </h3>
            <h4 class="title-h4">
                Aspel-BANCO 4.0 te brinda control total de todas y cada una de tus cuentas bancarias. ¡Consúltalas cuando las necesites!
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Cuentas bancarias
                    </h5>
                    <p>
                        Se puede consultar el saldo actualizado de cada una de las cuentas bancarias y movimientos por periodos, desglosando montos en tránsito, saldo actual y saldo conciliado.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/banco/inelco-aspel-banco-soluciones-cuentas-bancarias.png">
                </div>
            </div>
        </div>
    </section>

    <section class="secciones banco-pages soluciones-banco" id="cheques">
        <div class="container">
            <h3 class="title-h3">
                Cheques
            </h3>
            <h4 class="title-h4">
                ¡Elaborar y registrar un cheque es muy fácil! Con el nuevo Aspel-BANCO 4.0 tienes todas las herramientas para llevar un óptimo control de cheques.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Cheques
                    </h5>
                    <ul>
                        <li>
                            Es posible registrar varios conceptos de cargo en el mismo cheque (multi-concepto) es decir, pagar varios documentos con un solo movimiento.
                        </li>
                        <li>
                            Catálogo de beneficiarios para una mayor agilidad en la captura.
                        </li>
                        <li>
                            Formatos de impresión personalizables.
                        </li>
                        <li>
                            Póliza-cheque pre-llenada con los datos del movimiento.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="cheques y pagos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/images/products/banco/inelco-aspel-banco-soluciones-cheques-pago-proveedores.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones banco-pages soluciones-banco" id="movimientos-bancarios">
        <div class="container">
            <h3 class="title-h3">
                Movimientos bancarios
            </h3>
            <h4 class="title-h4">
                Con Aspel-BANCO 4.0 realiza cualquier tipo de movimiento bancario con la seguridad de tener tu dinero bajo control.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Movimientos bancarios
                    </h5>
                    <ul>
                        <li>
                            Captura de depósitos, retiros, pagos, cheques y transferencias entre cuentas.
                        </li>
                        <li>
                            Realiza pagos a varios documentos de un mismo proveedor o cliente.
                        </li>
                        <li>
                            Ofrece una captura masiva para agilizar el registro de movimientos con y sin interfaz con Aspel-SAE.
                        </li>
                        <li>
                            Asocia y consulta cualquier archivo por cada movimiento, incluyendo Comprobantes Fiscales Digitales.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="pago proveedores" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-alta-de-factura-HD.png" src="/images/products/banco/inelco-aspel-banco-soluciones-movimientos-bancarios-pago-proveedores.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones banco-pages soluciones-banco" id="agenda-de-movimientos">
        <div class="container">
            <h3 class="title-h3">
                Agenda de movimientos
            </h3>
            <h4 class="title-h4">
                Lleva el control de todos los movimientos que realizas con la productiva agenda de Aspel-BANCO 4.0.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Agenda de movimientos
                    </h5>
                    <ul>
                        <li>
                            Programación de cargos y abonos repetitivos. Por ejemplo, podrás definir la renta mensual y el Sistema genera automáticamente los pagos de todo el año, listos para su autorización.
                        </li>
                        <li>
                            Integra los pagos pendientes a proveedores de Aspel-SAE, listos para su aplicación.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="Agenda de movimientos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-proveedores-y-cuenta-por-pagar-HD.png" src="/images/products/banco/inelco-aspel-banco-soluciones-agenda-de-movimientos.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones banco-pages soluciones-banco" id="multimoneda-y-conciliacion">
        <div class="container">
            <h3 class="title-h3">
                Multimoneda y conciliación
            </h3>
            <h4 class="title-h4">
                Haz transacciones en cualquier tipo de moneda, ¡contamos con 12 diferentes! Además, con la versión 4.0 de Aspel-BANCO las funciones de conciliación son más fáciles, rápidas y productivas.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Multimoneda
                    </h5>
                    <ul>
                        <li>
                            Posibilidad de elegir la moneda a utilizar por cuenta bancaria y movimiento.
                        </li>
                        <li>
                            Histórico de tipos de cambio para cada moneda.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="multimoneda" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/images/products/banco/inelco-aspel-banco-soluciones-multimoneda-guarda-movimiento-dolar.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Y por medio de la Conciliación obtienes más beneficios:
                </h5>
                <ul>
                    <li>
                        Facilidad para identificar los movimientos y conciliarlos fácilmente.
                    </li>
                    <li>
                        A partir de un archivo en Microsoft Excel®, el Sistema lee los movimientos bancarios del estado de cuenta del banco, los compara con lo registrado en la cuenta bancaria del Sistema y los concilia automáticamente. ¡Esto es eficiencia administrativa!
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="secciones banco-pages soluciones-banco" id="consultas-y-reportes">
        <div class="container">
            <h3 class="title-h3">
                Consultas y reportes
            </h3>
            <h4 class="title-h4">
                Obtén una gran cantidad de útiles reportes con toda la información de las cuentas bancarias y sus movimientos con la precisión y rapidez que necesitas.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Consultas y reportes al momento
                    </h5>
                    <ul>
                        <li>
                            Diario de bancos.
                        </li>
                        <li>
                            Estados de cuenta.
                        </li>
                        <li>
                            Movimientos en conciliación.
                        </li>
                        <li>
                            Pronóstico de ingresos y egresos.
                        </li>
                        <li>
                            Flujo de efectivo.
                        </li>
                        <li>
                            Modificación y creación de reportes (QR2).
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="reportes diarios de bancos" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/images/products/banco/inelco-aspel-banco-mas-soluciones-consultas-y-reporte-diario-de-bancos.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones banco-pages soluciones-banco" id="mas-soluciones-banco">
        <div class="container">
            <h3 class="title-h3 text-center">
                Más soluciones BANCO
            </h3>
            <h4 class="title-h4">
                Descubre más soluciones de Aspel-BANCO 4.0 y comprueba por qué controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Acceso remoto y conectividad con sucursales
                    </h5>
                    <p>
                        Aspel-BANCO te da acceso total al Sistema a través de Internet, con lo que se podrán conectar las sucursales o colaboradores remotos sin costos extra, logrando así una administración centralizada y en línea.
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="Acceso remoto" class="img-responsive" src="/images/products/banco/inelco-aspel-banco-massoluciones-acceso-remoto_bloque1.png">
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
                        Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva. Desde Aspel-BANCO se pueden publicar de forma segura las consultas y reportes del Sistema, así como cualquier tipo de documento requerido (hojas de cálculo, diagramas o imágenes).
                    </p>
                </div>
            </div>
            <div class="row interfaz">
                <h4 class="title-h4" style="color:#32912f">Interfaz con los Sistemas Aspel</h4>
                <div class="col-md-4">
                    <div class="center-block"><a href="{{url('aspel-coi')}}"><img src="/images-new/marcas/aspel/productos/coi/logos/inelco-aspel-coi-logo.png" alt="COI" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-coi')}}" style="text-decoration:none;color:#009cb1;">Aspel COI</a></h5>
                    <p class="p-css">para todos los movimientos capturados en Aspel-BANCO, se genera automáticamente la póliza correspondiente.</p>
                </div>
                <div class="col-md-4">
                    <div class="center-block"><a href="{{url('aspel-noi')}}"><img src="/images-new/marcas/aspel/productos/noi/logos/inelco-aspel-noi-logo.png" alt="BANCO" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-noi')}}" style="text-decoration:none;color:#dd5d07;">Aspel NOI</a></h5>
                    <p class="p-css">Genera automáticamente los cheques para el pago de las nóminas..</p>
                </div>
                <div class="col-md-4">
                    <div class="center-block"><a href="{{url('aspel-sae')}}"><img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" alt="BANCO" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-sae')}}" style="text-decoration:none;color:#cb0c12;">Aspel SAE</a></h5>
                    <p class="p-css">A partir del movimiento que se capture en Aspel-BANCO, automáticamente se graba el abono en las cuentas por cobrar y por pagar.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Características generales del producto
                    </h5>
                    <ul>
                        <li>
                            Base de Datos en formato Firebird® y posibilidad de uso en formato SQL Server®.
                        </li>
                        <li>
                            Traductor automático de datos de la versión 3.0 de Aspel-BANCO.
                        </li>
                        <li>
                            Actualización en línea a las últimas mejoras de la versión.
                        </li>
                        <li>
                            Módulo mejorado de perfiles del usuario para la asignación de permisos a los usuarios.
                        </li>
                        <li>
                            Disponible en versiones de 1 usuario con 99 empresas y licencias adicionales.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="caracteristicas de aspel banco" class="img-responsive" src="/images/products/banco/inelco-aspel-banco-massoluciones-caracteristicas-generales.png">
                    </img>
                </div>
            </div>
        </div>
        <hr>

        <h3 style="color:#469b47;font-size: 30px" class="text-center">
            Aspel BANCO, el control efectivo de tu negocio
        </h3>
        <span style="display:block;margin-top: 36px;"></span>
        <a href="{{url('aspel-banco#contratar-banco')}}" style="text-decoration: none;" >
            <button id="btn-banco-prob1" class="btn btn-lg center-block">
                Lo quiero
            </button>
        </a>
    </section>
    
    @include('aspel.banco.menu-banco')

@endsection

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
