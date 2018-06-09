@extends('templates.principal')


@section('name_title','Lo nuevo BANCO | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.banco.banner-banco')

    <section class="secciones banco-pages nuevo-banco" id="mas">
        <div class="container">
            <h2 class="title-h2">
                Lo Nuevo
            </h2>
            <h3 class="title-h3">
                Con su versión 4.0 Aspel-BANCO controla tus cuentas bancarias al más alto nivel y cumple con los lineamientos de la Contabilidad Electrónica de la Reforma Fiscal 2014.
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        La mejor solución de Contabilidad Electrónica
                    </h5>
                    <p>
                        Contabiliza en línea tus operaciones bancarias atendiendo los requisitos de la Contabilidad Electrónica; información de la forma de pago y asociación automática de folios fiscales en el caso de movimientos con interfaz SAE.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/banco/inelco-aspel-banco-lo-nuevo-contabilidad-electronica-rot-03.jpg">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Y también obtienes consultas más eficientes:
                </h5>
                <ul>
                    <li>
                        Consultas totalmente personalizables que te permitirán agregar, quitar, reordenar y restaurar el orden de las columnas con la información mostrada.
                    </li>
                    <li>
                        Agrega y maneja filtros inteligentes y permanentes en las consultas que realices.
                    </li>
                    <li>
                        Exporta la información en formatos TXT, XLS, HTML o XML.
                    </li>
                </ul>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Respaldos automáticos
                </h5>
                <ul>
                    <li>
                        Ahora podrás programar la generación del respaldo de tu Base de Datos o archivos de configuración.
                    </li>
                </ul>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Bitácora de usuarios
                </h5>
                <ul>
                    <li>
                        Bitácora para consultar los movimientos realizados en el Sistema por cada usuario.
                    </li>
                </ul>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Catálogo de beneficiarios
                </h5>
                <ul>
                    <li>
                        Para una mayor agilidad en la captura y mejor seguimiento en los movimientos bancarios.
                    </li>
                </ul>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Catálogo de Formas de Pago
                </h5>
                <ul>
                    <li>
                        Te permite llevar un control del tipo de operaciones de tu empresa al ser registradas en las cuentas (efectivo, cheque o transferencia).
                    </li>
                    <li>
                        Mediante la consulta de movimientos, podrás identificar rápidamente aquellos movimientos que pertenecen a las formas de pago mencionadas.
                    </li>
                </ul>
            </div>
        </div>

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
@stop

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
