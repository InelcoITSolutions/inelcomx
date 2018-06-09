@extends('templates.principal')


@section('name_title','Lo nuevo NOI | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.noi.banner-noi')

    <section class="secciones noi-pages nuevo-noi" id="mas">
        <div class="container">
            <h2 class="title-h2">
                Lo Nuevo
            </h2>
            <h3 class="title-h3">Genera y entrega a tus trabajadores los Comprobantes Fiscales Digitales por Internet (CFDI) de los recibos de nómina y cumple en segundos con la Reforma Fiscal vigente.</h3>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Nuevas obligaciones de la Nómina Digital</h5>
                    <p>A partir del 1° de enero de 2017, los <b><a href="{{ url('nomina-digital')}}">Recibos de Nómina Electrónicos</a></b> deben contener de manera obligatoria el complemento versión 1.2, que proporcionará información más detallada sobre el pago que los patrones realizan a los trabajadores.¡Hazlo con tiempo!</p>
                    <p><b>Aspel-NOI 8.0</b> cumple con esta obligación de forma práctica y sencilla.</p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/noi/inelco-aspel-noi-lo-nuevo-complemento-nomina.png">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/noi/inelco-aspel-noi-lo-nuevo-envio-cfdi-coi.png">
                </div>

                <div class="col-md-6">
                    <h5 class="title-h5">Fácil asociación de los CFDI a las pólizas</h5>
                    <ul>
                        <li>Realiza en segundos el envío automático de los CFDI de tus recibos de nómina al depósito de documentos, para asociarlos a las pólizas desde la interfaz con <b><a href="{{ url('aspel-coi')}}">Aspel-COI.</a></b></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Catálogo de métodos de pago</h5>
                    <ul>
                        <li>Todos los contribuyentes que emitan recibos de nómina electrónicos deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.</li>
                    </ul>
                    <p><b>Aspel-NOI 8.0</b> cumple con esta obligación de forma práctica y sencilla.</p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/noi/inelco-aspel-noi-lo-nuevo-metodo-de-pago.png">
                    </img>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/noi/inelco-aspel-noi-lo-nuevo-ventana-sar-infonavit.png">
                </div>

                <div class="col-md-6">
                    <h5 class="title-h5">Proyección SAR e INFONAVIT</h5>
                    <ul>
                        <li>Ahora obtén el reporte de la proyección SAR e INFONAVIT que incluye los cambios en el cálculo de amortización del crédito.</li>
                        <li>Incluye el cálculo para determinar la amortización para "Veces de salario" y "Cuota fija".</li>
                        <li>Y se agregó el campo “Seguro de daños de vivienda”.</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h5 class="title-h5">Conoce más funcionalidades al manejar tu nómina con NOI</h5>
                <ul>
                    <li>Define en parámetros de la nómina, el concepto que aparecerá en el CFDI.</li>
                    <li>En el CFDI de pago se visualiza la clave del banco del trabajador de acuerdo con el catálogo del SAT.</li>
                    <li>Hemos agregado una nueva plantilla para generar recibos de nómina de los trabajadores con el régimen de asimilables a salarios.</li>
                    <li>Cambia fácilmente la información de una empresa a otra (antes de realizarlo haz un respaldo de los datos).</li>
                    <li>Migración de reportes a QR2.</li>
                </ul>
            </div>
        </div>

        <hr>

        <h3 style="color:#dd5d07;font-size: 30px" class="text-center">
            Cumple con las nuevas obligaciones de la Nómina Digital
        </h3>
        <span style="display:block;margin-top: 36px;"></span>
        <a href="{{url('aspel-noi#contratar-noi')}}" style="text-decoration: none;" >
            <button id="btn-noi-prob1" class="btn  btn-lg center-block">
                Lo quiero
            </button>
        </a>
    </section>

    @include('aspel.noi.menu-noi')
@stop

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
