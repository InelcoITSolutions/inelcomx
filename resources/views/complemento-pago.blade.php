@extends('templates.principal')
@section('name_title','Complemento de Pago | Inelco IT Solutions')
@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/css/my-tabs.css" rel="stylesheet">
    <link href="/css/simple-sidebar.css" rel="stylesheet"> 
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush


@section('contenido')
 <section class="services secciones" id="implementacion">
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Complemento de Pago</h2>
                <h3 class="title-h3">Cumple con el <b>complemento de pago</b> siguiendo nuestro manual para su correcta configuración e implementación.</h3>
                <div class="col-md-4 ">
                    <img src="/images-new/inelco/wallpaper/inelco-factura-electronica.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <p>Este complemento debe emitirse en los casos de operaciones con pago en parcialidades o cuando al momento de expedir el CFDI no se reciba el pago de la contraprestación. Para cumplir con esta obligación sigue estos pasos:</p>
                    <ul>
                        <li>Configurar manejo de crédito y datos bancarios de cada cliente que se realizara el comprobante.</li>
                        <li>Generar la factura (a crédito sin enganche/con enganche).</li>
                        <li>Generar Recepciones de pago. </li>
                        <li>Generar comprobante de pago.</li>
                    </ul>

                </div>
            </div>
            <div class="row caract-services">
                <div class="col-md-4">
                    <img src="/images-new/inelco/logos/inelco-sat-logo.png" class="img-responsive" style="margin-bottom: 12px;">
                    <p class="text-p">Entra en vigor el 1ro de septiembre del 2018</p>
                </div>
                <div class="col-md-4">
                    <img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" width="60%"  class="img-responsive" style="margin-bottom: 12px;">
                    <p class="text-p">Aspel SAE 7.0 te ayuda a realizar el complemento de pago</p>
                </div>
                <div class="col-md-4">
                    <img src="/images-new/inelco/iconos/factura.png" class="img-responsive" style="margin-bottom: 12px;">                   
                    <!--<h4 class="title-h4">Software Administrativo</h4>-->
                    <p class="text-p">Cumple con tu facturación de manera correcta</p>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <p class="title-h3" style="margin:24px 0;font-size: 22px">Descarga el manual del complemento de pago aquí: </p>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <a href="descargas/aspel/sae/sae7/docs/001-Manual-de-comprobante-de-pago-SAE-7.0.pdf" title="Ir al centro de descargas" target="_blank" style="text-decoration: none;">
                        <button class="btn btn-primary btn-lg btn-inelco center-block" style="width:50%;margin-top:5%;">Descargar PDF</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('add-js')   
    <script src="/js/hover-services.js"></script>
    <script src="/js/menu-donwload.js"></script>
    <script>
        var hash = document.location.hash;
        if (hash) {
            $(".tab-visible").toggleClass("tab-visible");
            $(hash).addClass("tab-visible");   
        }
    </script>
    <script>
        $("body").attr('pagina','Soporte');
    </script>
@endpush