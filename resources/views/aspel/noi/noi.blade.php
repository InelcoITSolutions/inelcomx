@extends('templates.principal')

@section('name_title','NOI | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('contenido')

    @include('aspel.noi.banner-noi')



    <section class="descripcion-prod noi-pages secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Cumple con las nuevas obligaciones de la <b><a href="{{ url('nomina-digital') }}">Nómina Digital</a></b></h2>
                    <p><b>Aspel-NOI</b> automatiza el control de la <b><a href="{{ url('nomina-digital') }}">Nómina Digital.</a></b> Su fácil manejo y versatilidad ofrecen un cálculo exacto de las percepciones y deducciones de los trabajadores de acuerdo a las disposiciones fiscales y laborales vigentes.</p>
                    <p>Genera <b>Comprobantes Fiscales Digitales por Internet (CFDI)</b> de los Recibos de Nómina y asimilables a salarios. Además, calcula la retención de ISR, cuotas obrero-patronales IMSS e INFONAVIT, subsidio para el empleo y previsión social, entre otros. </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/noi/logos/inelco-aspel-noi-logo.png" alt="Aspel NOI Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-noi">
        <div class="fondo-gray">
            <div class="container">
                <h2>Expide y entrega los recibos de Nómina Electrónicos en menos de un segundo</h2>
            </div>
        </div>
    </section>

    <section class="ac_content noi-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel NOI</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/noi/inelco-noi-pantalla-principal.png" id="1" width="88.5%" alt="Diseño amigable y fácil de usar|Pensando en los clientes se reemplaza el menu tradicional por carpetas de forma horizontal para brindar una mejor administración de la nómina y facilidad en la operación."/>

                    <img src="/images/products/noi/inelco-noi-trabajadores.png" id="2" width="88.5%" alt="Realiza la consulta de trabajadores en tarjetas|Ahora con una nueva imagen del catálogo de trabajadores, donde la consulta cuenta con un panel de detalles en el que se observa la información del trabajador." />

                    <img src="/images/products/noi/inelco-noi-nomina-trabajador.png" id="3" width="88.5%" alt="Administración de nómina más eficiente|Con NOI La administración de tu nómina es más eficiente con la sección nómina del trabajador donde se registra todos los movimientos del trabajador en un solo lugar."/>

                    <img src="/images/products/noi/inelco-noi-administrador-de-periodos.png" id="4" width="88.5%" alt="Optimiza los pendientes de timbrado|Ahora puedes consultar si existen CFDI de los recibos de nómina de tus trabajadores que están pendientes de timbrado, antes de crear el siguiente periodo."/>

                    <img src="/images/products/noi/inelco-noi-liquidacion-imss.png" id="5" width="88.5%" alt="Visualiza rus reporte de liquidación del IMSS|La nueva versión te ofrece más beneficios para la administración de tus reportes."/>

                    <img src="/images/products/noi/inelco-noi-cancelacion-masiva.png" id="6" width="88.5%" alt="Agiliza operaciones con la cancelación masiva de CFDI|Para facilitar la operación de tu nómina, ya puedes cancelar los recibos timbrados de forma masiva mejorando el tiempo de espera."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones noi-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Interfaz gráfica</div>
                    <p>Reemplaza el menu tradicional por carpetas de forma horizontal para brindar una mejor administración de la nómina y facilidad en la operación.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod noi-pages secciones">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="disposiciones fiscales" src="/images/products/noi/inelco-aspel-noi-cumplir-disposiciones-fiscales.png"/>
                    </center>
                    <h3 class="text-center">Recibos de Nómina CFDI</h3>
                    <p>Genera Comprobantes Fiscales Digitales por Internet (CFDI) de los recibos de pago de nómina de los trabajadores.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de nomina" src="/images/products/noi/inelco-aspel-noi-percepciones-deducciones.png"/>
                    </center>
                    <h3 class="text-center">Percepciones y deducciones</h3>
                    <p>La consulta de percepciones y deducciones es más poderosa, incluye gráfica de acumulados y diferentes tipos de vistas.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="expediente del trabajador" src="/images/products/noi/inelco-aspel-noi-nomina-trabajador.png"/>
                    </center>
                    <h3 class="text-center">Nómina del trabajador</h3>
                    <p>La administración de la nómina es más eficiente e integral con el potente panel Nómina del Trabajador.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de impuestos" src="/images/products/noi/inelco-aspel-noi-calculo-de-impuestos.png"/>
                    </center>
                    <h3 class="text-center">Exacto cálculo de impuestos</h3>
                    <p>Realiza un fácil, correcto y automatizado cálculo de los impuestos y aportaciones de seguridad social, tanto de los trabajadores, como de la empresa.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="pago de los trabajadores" src="/images/products/noi/inelco-aspel-noi-el-pago-de-los-trabajadores.png"/>
                    </center>
                    <h3 class="text-center">
                        Claridad en el pago por hora
                    </h3>
                    <p>
                        Administra el pago por hora a los trabajadores calculando debidamente faltas, vacaciones, horas extras y aportaciones de seguridad social.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/noi/inelco-aspel-noi-comunicacion-directa-con-el-imss.png"/>
                    </center>
                    <h3 class="text-center">
                        Movimientos afiliatorios al IMSS
                    </h3>
                    <p>
                        Establece comunicación directa con el IMSS para el envío de movimientos afiliatorios en línea.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="dispersion de la nomina" src="/images/products/noi/inelco-aspel-noi-envio-xml.png"/>
                    </center>
                    <h3 class="text-center">Agilidad en tus procesos</h3>
                    <p>Realiza en segundos el envío automático del XML al depósito de documentos, para asociarlos a la contabilidad.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="relojes checadores" src="/images/products/noi/inelco-aspel-noi-menu-inteligente.png"/>
                    </center>
                    <h3 class="text-center">Menú inteligente</h3>
                    <p>Utiliza el menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="integracion de procesos" src="/images/products/noi/inelco-aspel-noi-integracion-procesos.png"/>
                    </center>
                    <h3 class="text-center">
                        Interfaz con los Sistemas Aspel
                    </h3>
                    <p>Tiene una interfaz con los Sistemas <b><a href="{{ url('aspel-coi') }}">Aspel-COI</a></b> y <b><a href="{{ url('aspel-banco') }}">Aspel-BANCO</a></b> para incorporar los montos del pago de la nómina y los registros financieros a la contabilidad.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Sección de comprar Aspel noi --}}
<div id="contratar-noi"></div>
    <section class="word-frase sections " id="frase-noi">
        <div class="fondo-gray" style="padding-bottom: 5%;padding-top: 5%;">
            <div class="container">
                <h2>
                    <span style="font-weight: bold">¿Aún no tienes Aspel NOI 8.0?</span>
                    <span style="display:block;"></span>
                    ¡Consiguelo ya!
                </h2>
            </div>
        </div>
    </section>
    <span style="display:block;margin-top: 52px"></span>
    <section>
        <div class="container">
            <h3 class="title-h3" style="color:#df6c1e;">El nuevo Aspel NOI 8.0 está disponible en 
            <br>
            licenciamiento permanente y en suscripción mensual para que elijas
            <br>
            la opción más conveniente para tu empresa.</h3>
        </div>
    </section>
    <span style="display:block;margin-top: 48px"></span>
    <section class="p-list  h5-list title-list1 " id="caract-icrm">
        <div class="container-fluid">
            <div class="col-md-1" id="prim2">
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2">
                <span style="text-align: center;" class="fa fa-clock-o fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿No deseas comprar el nuevo Aspel NOI 8.0?</span></h4>
                <p> ¡Úsalo por el tiempo que lo necesites! </p>
                <h3><span style="font-weight: 400">Suscripción Mensual</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-noi">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof preci">328</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel NOI 8.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <br>
                    <span style="display:block;"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a href="#ventana1"> 
                    <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/MFB55M" target="_blank"><button type="button" class="btn btn-lg " id="btn-noi">Adquirir ahora</button></a>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-star-o fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿Deseas obtenerlo de manera permanente? </span></h4>
                <p> ¡Adquiére hoy la licencia nueva! </p>
                <h3><span style="font-weight: 400">Licencia permante</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-noi">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">5,883</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia de Aspel NOI 8.0 </h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <span style="display:block;"></span>
                    <span style="display:block;margin-top: 12%"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/5sB5MC" target="_blank">
                    <button type="button" class="btn btn-lg" id="btn-noi">Adquirir ahora</button>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-refresh fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿Cuentas con alguna versión anterior? </span></h4>
                <p> ¡Actualizate ahora! </p>
                <h3><span style="font-weight: 400">Actualización</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-noi">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">3,530</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel NOI 8.0 </h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <span style="display:block;"></span>
                    <span style="display:block;margin-top: 12%"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/XZB5Jr" target="_blank">
                    <button class="btn btn-lg " data-toggle="modal" id="btn-noi">Adquirir ahora</button>
                </a>
    <span style="display:block;margin-bottom: 92px"></span>
            </div>
        </div>
    </section>
    @include('aspel.noi.menu-noi')

    




@endsection

@push('add-js')
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   

<script>
    $("#myModalPromo").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>
@endpush
