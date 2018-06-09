@extends('templates.principal')


@section('name_title','Espacio Aspel | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.espacio.banner-espacio')

    <section class="descripcion-prod desc-espacio secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="text-align: justify;"">
                    <h2>
                        Buzón Inteligente Empresarial
                    </h2>
                    <p>
                        <b>
                            ⓔspacio Aspel
                        </b>
                        es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva.


                   </p>
                    <p>
                        Espacio Aspel te ofrece un Buzón Contable que permite la administración e intercambio de información entre clientes y despachos de manera sencilla y eficiente. Organiza los Comprobantes Fiscales de las operaciones contables para su registro automático en Aspel-COI. Es ideal para despachos contables y empresas a las que les llevan la contabilidad o para empresas con sucursales.

                    </p>

                   
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/aspel_nube/productos/espacio/logos/inelco-aspel-espacio-logo.png" alt="Aspel espacio Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-espacio">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    ¡El fin de la era de los papeles!

                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content " id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a ⓔspacio Aspel</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo<h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                    <div class="title">Imagen 1</div>
                    <p>A complete overview of your marketing, automation, & sales.</p>
                </div>-->
                <div id="tour-slides">
                    <img src="/images/products/espacio/Inelco-aspel-espacio-inicio-sesion.jpg" id="1" width="88.5%" alt="Puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva|Te ofrece un Buzón Contable que permite la administración eintercambio de información entre clientes y despachos de manera sencilla y eficiente."/>

                    <img src="/images/products/espacio/Inelco-aspel-espacio_buzon-slider.png" id="2" width="88.5%" alt="Agiliza el envío y recepción de comprobantes entre despacho de contadores y empresa o sucursales|El registro contable es eficiente, se tiene información del detalle de la transacción, no sólo el CFDI." />

                    <img src="/images/products/espacio/inelco-aspel-espacio-interfaz-grafica.jpg" id="3" width="88.5%" alt="Interfaz gráfica amigable y facil de usar|Para ofrecerte una facil captura ahora se incluye una nueva vista de carpetas y archivos así como una barra de herramientas para una mejor control y acceso a la información." />

                    <img src="/images/products/espacio/inelco-espacio-gratissub.jpg" id="4" width="88.5%" alt="El ⓔspacio Aspel gratuito|Se activa de manera gratuito con el RFC registrado en el escritorio de servicios"/>

                    <img src="/images/products/espacio/inelco-aspel-espacio-buzon-contable.jpg" id="5" width="88.5%" alt="Configurando buzón contable en Aspel-COI|Mantiene siempre bajo control la información contable y fiscal de la empresa"/>

                    
                </div>
            </div>
        </div>
    </section>
    <hr id="lap-separator">
    <section class="secciones" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva</div>
                    <p>Te ofrece un Buzón Contable que permite la administración eintercambio de información entre clientes y despachos de manera sencilla y eficiente.</p>
                </div>
            </div>
        </div>
    </section>                

    <section class="caracteristicas-prod espacio-pages secciones">
        <div class="container">
            <h2 align="center">
                    ⓔspacio Aspel ofrece
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="control de tu empresa" src="/images/products/espacio/Inelco-espacio-proteccion-de-cfdi.png"/>
                    </center>
                    <h3 class="text-center">
                        Protección total
                    </h3>
                    <p>
                        Es 100% seguro y siempre está accesible, ya que se hospeda en servidores con altos estándares de seguridad y disponibilidad.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="contabilidad electrónica" src="/images/products/espacio/Inelco-espacio-comparte-informacion.png"/>
                    </center>
                    <h3 class="text-center">
                        Comparte con tu equipo
                    </h3>
                    <p>
                        Funciona como una herramienta para compartir la información contable y financiera que tú decidas con las personas que elijas, ¿te imaginas compartir las estadísticas de ventas con todos tus ejecutivos de cuenta o que tus directivos siempre puedan consultar el último estado de resultados actualizado? Estos son algunos ejemplos de su potencial.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="conoce cliente" src="/images/products/espacio/inelco-espacio-control-de-accesos.png"/>
                    </center>
                    <h3 class="text-center">
                        Control total de accesos
                    </h3>
                    <p>
                        Proporciona seguridad total de tu información, ya que el acceso a los datos siempre es a través de claves de usuario que tú asignas.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="administracion del punto de venta" src="/images/products/espacio/Inelco-espacio-almacena-informacion.png"/>
                    </center>
                    <h3 class="text-center">
                        Guarda todo tipo de información
                    </h3>
                    <p>
                        Es una unidad que trabaja como disco duro virtual para almacenar toda la información que necesites. Como guardar por ejemplo, las Bases de Datos e información de tus Sistemas Aspel, además estos respaldos se generan automáticamente, a través de la opción “Respaldos Automáticos” que los Sistemas Aspel te ofrecen.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/espacio/inelco-productos-espacio-respalda-cfdi.png"/>
                    </center>
                    <h3 class="text-center">
                        Resguarda tus CFDI de los Sistemas Aspel
                    </h3>
                    <p>
                        Almacena y administra los CFDI generados por los Sistemas Aspel, así siempre tendrás una copia confiable.
                    </p>
                </div>
                
            </div>
        </div>
                <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

            <br>
            <br>
                <a href="{{url('contacto')}}" style="text-decoration: none" >
                                <button id="btn-espacio-prob1" class="btn  btn-lg center-block">
                                    Lo quiero
                                </button>
                </a>
    </section>

    @include('aspel.espacio.menu-espacio')
    
   

    

@endsection

@push('add-js')   
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush