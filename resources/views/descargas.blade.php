@extends('templates.principal')
@section('name_title','Centro de descarga | Inelco IT Solutions')
@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/css/my-tabs.css" rel="stylesheet">
    <link href="/css/simple-sidebar.css" rel="stylesheet"> 
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush


@section('contenido')
    <div id="wrapper" class=""> 
        <div id="sidebar-wrapper" >
            <h4 class="title-h4">
                <a href="{{ url('/centro-de-descarga')}}" id="return-bd-download">
                    <i class="fa fa-undo" aria-hidden="true"></i> Centro de descarga
                </a>
            </h4>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Aspel</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse">
                        <button class="list-group-item" data-toggle="sae">SAE</button>
                        <button class="list-group-item" data-toggle="coi">COI</button>
                        <button class="list-group-item" data-toggle="noi">NOI</button>
                        <button class="list-group-item" data-toggle="banco">BANCO</button>
                        <button class="list-group-item" data-toggle="caja">CAJA</button>
                        <button class="list-group-item" data-toggle="prod">PROD</button>
                        <button class="list-group-item" data-toggle="facture">FACTURE</button>
                        <button class="list-group-item" data-toggle="adm">ADM</button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Aspel Nube</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <button class="list-group-item" data-toggle="saenube">SAE Nube</button>
                      
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">TeamViewer</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <button class="list-group-item" data-toggle="teamviewer">TeamViewer 10</button>
                      
                    </div>
                </div>
{{--                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">National Soft</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <button class="list-group-item" data-toggle="nsh">NS Hoteles</button>
                        <button class="list-group-item" data-toggle="otm">On The Minute</button>
                        <button class="list-group-item" data-toggle="sf">Soft Facturas</button>
                        <button class="list-group-item" data-toggle="sr">Soft Restaurant</button>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Incrementa</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <button class="list-group-item" >Incrementa CRM</button>
                    </div>
                </div> --}}
            </div>            
        </div>

        <div class="boton-descargas">
            <a class="btn btn-primary btn-circle btn-xl btn-inelco" href="#menu-toggle" id="menu-toggle"><i class="fa fa-list"></i></a>
        </div>

        <section class="sections" id="banner-download">
            <div class="fondo-gray">
                <h2 class="title-h2">Centro de descarga</h2>
                <h3 class="title-h3">Encuentra todo sobre el software que necesitas para que tu empresa opere a la perfección</h3>
            </div>
        </section>  

        {{--<section id="info-descargas" class="secciones">
            <div class="container">
                <hgroup class="text-center">
                    <h3>¿Deseas probrar algún sistema Aspel?, tenemos buenas noticias para ti.</h3>
                    <h4>Te regalamos <b>30 días de prueba</b> de cualquier sistema Aspel con <b>toda la funcionalidad</b>.</h4>
                </hgroup>
                <div class="row">
                    <div class="col-md-6">
                        <p>Así es, puedes disfrutar durante 30 días de todas las funciones sin gastar ningún peso.</p>
                        <p>Dependiendo del sistema, algunos te permiten la generación de los documentos fiscales CFDI. Incluyendo el servicio de timbrado de manera ilimitada</p>
                    
                        <p>Después de este lapso de tiempo podrás decidir si deseas adquirir el sistema, para ello contamos con 2 opciones, de manera permanente o bien contratar la suscripción. </p>
                    </div>
                    <div class="col-md-6">
                        <p>Solo necesitamos los siguientes datos para obtener tu periodo de prueba:</p>
                        <ul style="line-height:1.5em;height: auto;">
                            <li>Razón social</li>
                            <li>Nombre comercial</li>
                            <li>RFC</li>
                            <li>Nombre del contacto</li>
                            <li>Correo electrónico de contacto</li>
                            <li>Teléfono</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/checked.png" class="img-responsive"></div>
                        <p class="text-center">1.- Selecciona el sistema y la cantidad de usuarios adicionales.</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/curriculum.png" class="img-responsive"></div>
                        <p class="text-center">2.- Ingresa tus datos requeridos para dar de alta tu periodo de prueba.</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/install.png" class="img-responsive"></div>
                        <p class="text-center">3.- Instala el sistema e ingresa la información, o bien <b><a href="{{ url('contacto')}}">podemos ayudarte.</a></b></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/bars-chart.png" class="img-responsive"></div>
                        <p class="text-center">4.- Disfruta y sacale el mayor provecho al sistema</p>
                    </div>
                </div>
            </div>   
        </section>--}}

        <section class="marcas descargas secciones tabs2 tab-visible">
            <div class="container">
                <h2 class="text-center title-h2">Nuestras marcas</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-marcas" style="margin-top: 9px;">
                            <center><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="menu-toggle" ><img src="/images/products/inelco-aspel-logo.png" alt="ASPEL" class="img-responsive" /></a></center>
                            {{-- <h3 class="title-h3">Aspel</h3> --}}
                            <p>Empresa 100% mexicana líder en el mercado de software y soluciones administrativas</p>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="menu-toggle" style="text-decoration: none;"><button class="btn btn-inelco btn-lg center-block" style="margin-top:48px">Ver enlace de descarga</button></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-marcas">
                            <center><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="menu-toggle" ><img src="/images-new/marcas/teamviewer/logo/inelco-teamviewer-10-logo.png" alt="Teamviewer" style="width: 90px;height: 90px;margin-bottom: 12px" /></center>
                            {{-- <h3 class="title-h3">Aspel</h3> --}}
                            <p>Software para acceso remoto y soporte de manera segura</p>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="menu-toggle" style="text-decoration: none;"><button class="btn btn-inelco btn-lg center-block" style="margin-top:55px">Ver enlace de descarga</button></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-marcas btn-proximamente" style="margin-top: 9px;">
                        <center><a href="{{ url('/contacto')}}""><img src="/images-new/marcas/nationalsoft/logos/inelco-nationalsoft-logo.png" alt="National soft " class="img-responsive" /></a></center>
                            {{-- <h3 class="title-h3">National Soft</h3> --}}
                            <p>Soluciona las necesidades de administración y control de las empresas a través de software.</p>
                            <button class="btn btn-inelco-secundario btn-proximamente btn-lg center-block" style="margin-top:47px">Próximamente</button>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="box-marcas btn-proximamente" style="margin-top: -12px;">
                            <center><a href="{{url('incrementa/precio-mensual')}}" ><img src="/images/products/icrm/inelco-incrementa-logo.png" alt="Incrementa CRM" class="img-responsive" /></a></center>
                            {{-- <h3 class="title-h3">Incrementa CRM</h3> --}}
                            <p>Haz cotizaciones, dale seguimiento a tus clientes, organiza tus campañas, envía mailings y lleva un control preciso de todas tus acciones.</p>
                            <button class="btn btn-inelco-secundario btn-lg center-block" style="margin-top:23px">Próximamente</button>
                        </div>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="box-marcas">
                            <center><img src="/images/products/inelco-aspel-logo.png" alt="ASPEL" class="img-responsive" /></center>
                            <h3 class="title-h3">Aspel</h3>
                            <p>Empresa 100% mexicana líder en el mercado de software y soluciones administrativas</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <div id="adm" class="tabs2">
            <div class="container"> 
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-adm" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-adm" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-adm" class="tab-pane fade in active">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/adm/logos/inelco-aspel-adm-logo.png" alt="Aspel ADM Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel-ADM</h3>
                                    <h4 class="title-h4">Sistema de Administración Móvil</h4>
                                    <p><b>Actualizado: Servicio en nube (No requiere actualizar)</b> </p> 
                                    <p>Aspel ADM es la app que revoluciona el control administrativo de las empresas desde la nube de manera sencilla y poderosa.</p>
                                    <p>Descarga la versión de ADM para tu sistema operativo móvil.</p>
                                    <div class="hover14 column">
                                        <div>
                                            <figure><a href="https://itunes.apple.com/us/app/aspel-sae-movil-2/id1084495908?l=es&ls=1&mt=8" target="_blank"><img src="/images/products/app store.png" class="img-responsive"/></a></figure>
                                        </div>
                                        <div>
                                            <figure><a href="https://play.google.com/store/apps/details?id=com.aspel.SAEMovil" target="_blank"><img src="/images/products/google-play.png" class="img-responsive"/></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-adm" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos del sistema</h3>
                                    <h4 class="title-h4 text-center">Para poder utilizar Aspel ADM en su versión web necesitas:</h4>
                                    <p>Un equipo conectado a Internet con navegador web con soporte AJAX como los siguientes:</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Internet Explorer 10, 11 y Microsoft Edge.</li>
                                        <li>Firefox 43 o superior.</li>
                                        <li>Safari 9.1 o superior.</li>
                                        <li>Google Chrome 47 o superior.</li>
                                        <li>Opera 35 o superior.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="banco" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-banco" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-banco" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-banco" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-banco" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/banco/logos/inelco-aspel-banco-logo.png" alt="Aspel BANCO Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel BANCO 4.0 - R7</h3>
                                    <h4 class="title-h4">Sistema de Control Bancario</h4>
                                    <p><b>Actualizado: 16 / junio / 2017</b></p> 
                                    <p>Controla cualquier cuenta bancaria y realiza la conciliación electrónica con las principales instituciones financieras. Cuenta con interfaz en línea con Aspel-SAE y Aspel-COI para una afectación simultánea de la administración y contabilidad de la empresa.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button class="btn btn-primary btn-inelco download" producto="Banco 4.0" >Descargar Aspel Banco 4.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-banco" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-BANCO 4.0 Reinstalable 6</h4>
                                    <b>Actualizado: 13/01/2016</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>173 MB</span><a href="ftp://descargas.aspel.com.mx/download/banco/reinstal/ASPEL-BANCO40_R6.exe" title="Descargar BANCO 4.0 R6" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-BANCO 3.0 Reinstalable 15</h4>
                                    <b>Actualizado: 13/11/2012</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>60.5 MB</span><a href="ftp://descargas.aspel.com.mx/download/banco/reinstal/Aspel-BANCO_R15.exe" title="Descargar BANCO 3.0 R15" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-banco" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>1 GB de RAM*</li>
                                        <li>320 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="caja" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-caja" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-caja" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-caja" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-caja" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/caja/logos/inelco-aspel-caja-logo.png" alt="Aspel CAJA Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel CAJA 4.0 - R10</h3>
                                    <h4 class="title-h4">Sistema de Punto de Venta y Administración de Comercios</h4>
                                    <p><b>Actualizado:  23 / abril / 2018</b></p> 
                                    <p>Controla y administra las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo a una computadora en un punto de venta capaz de operar con una gran cantidad y variedad de dispositivos.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button class="btn btn-primary btn-inelco download" producto="Caja 4.0">Descargar Aspel CAJA 4.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-caja" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-CAJA 4.0 Reinstalable 9</h4>
                                    <b>Actualizado: 28 / 03 / 2018 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>144 MB</span><a href="http://ftp.aspel.com/Download/caja/reinstal/Aspel-CAJA40_R8.exe" title="Descargar CAJA 4.0 R8" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-CAJA 3.5 Reinstalable 10</h4>
                                    <b>Actualizado: 17 / 06 / 2016 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>144 MB</span><a href="ftp://descargas.aspel.com.mx/download/caja/reinstal/ASPEL-CAJA35_R10.exe" title="Descargar CAJA 3.5 R10" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-CAJA 3.0 Reinstalable 6</h4>
                                    <b>Actualizado: 30 / 12 / 2011</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>98 MB</span><a href="ftp://descargas.aspel.com.mx/download/caja/reinstal/Aspel-CAJA30_R6.exe" title="Descargar CAJA 3.0 R6" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-CAJA 2.0 Reinstalable 2</h4>
                                    <b>Actualizado: 24 / 03 / 2010</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>114 MB</span><a href="ftp://descargas.aspel.com.mx/download/caja/reinstal/Aspel-CAJA20_R2.exe" title="Descargar CAJA 2.0 R2" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-caja" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>512 MB de RAM*</li>
                                        <li>300 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="coi" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-coi" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-coi" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-coi" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-coi" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/coi/logos/inelco-aspel-coi-logo.png" alt="Aspel COI Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel COI 8.0 - R8</h3>
                                    <h4 class="title-h4">Sistema de Contabilidad Integral </h4>
                                    <p><b>Actualizado:  31 / mayo / 2018</b></p> 
                                    <p>Integra la funcionalidad de la Contabilidad Electrónica. Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa. Simplifica tus actividades y genera las declaraciones como IVA, ISR y DIOT.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button class="btn btn-primary btn-inelco download" producto="COI 8.0" >Descargar Aspel COI 8.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-coi" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 8.0 Reinstalable 7</h4>
                                    <b>Actualizado: 24 / 05 / 2018</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>157  MB</span><a href="http://ftp.aspel.com/Download/COI/reinstal/Aspel-COI80R7.exe" title="Descargar COI 8.0 R5" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 7.0 Reinstalable 16</h4>
                                    <b>Actualizado: 29 / 11 / 2016 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>157  MB</span><a href="ftp://aspelprod.cloudapp.net/Download/COI/reinstal/Aspel-COI70_R16.exe" title="Descargar COI 7.0 R16" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 6.0 Reinstalable 6</h4>
                                    <b>Actualizado: 29 / 10 / 2013 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>118  MB</span><a href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI60_R6.exe" title="Descargar COI 6.0 R6" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 5.7 Reinstalable 2</h4>
                                    <b>Actualizado: 05 / 02 / 2010 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>62.8 MB</span><a href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI5.7_R2.exe" title="Descargar COI 5.7 R2" class="a-download"></a></p>
                                </div>
                            </div>

                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Barra de Microsoft Excel® para la Declaración informativa de operaciones con terceros</h4>
                                    <b>Actualizado: 29 / 01 / 2010 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>1.2 MB</span><a href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-OperacionesconTerceros3.exe" title="Descargar Barra de Microsoft Excel®" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 5.6 Reinstalable 3</h4>
                                    <b>Actualizado: 29 / 01 / 2009</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>56.6 MB</span><a href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI5.6_R3.exe" title="Descargar COI 5.6 R3" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 5.5 Reinstalable 2</h4>
                                    <b>Actualizado: 04 / 09 / 2007</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>47.6 MB</span><a href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI5.5_R2.exe" title="Descargar COI 5.5 R2" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-COI 5.0 Reinstalable 10</h4>
                                    <b>Actualizado: 20 / 04 / 2007</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>46.7 MB</span><a href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI50r10.exe" title="Descargar COI 5.0 R10" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-coi" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>1 GB de RAM*</li>
                                        <li>320 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="facture" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-facture" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-facture" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-facture" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-facture" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/facture/logos/inelco-aspel-facture-logo.png" alt="Aspel FACTURE Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel FACTURⓔ 4.0 - R12</h3>
                                    <h4 class="title-h4">Sistema de Facturación Electrónica</h4>
                                    <p><b>Actualizado:  28 / marzo / 2018</b></p> 
                                    <p>Ideal para emprendedores, profesionistas y Pymes que expiden Comprobantes Fiscales Digitales por Internet (CFDI) como facturas, recibos de honorarios, de arrendamiento y notas de crédito y comprobantes de retenciones. Cumple con todas las disposiciones fiscales vigentes.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button producto="FACTURE 4.0" class="btn btn-primary btn-inelco download">Descargar Aspel FACTUREⓔ 4.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-facture" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-FACTURⓔ 4.0 Reinstalable 11</h4>
                                    <b>Actualizado:  02 / 03 / 2017 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>120 MB</span><a href="http://ftp.aspel.com/Download/FACTURe/reinstal/Aspel-FACTURe40_R11.exe" title="Descargar FACTURE 4.0 R8" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-FACTURⓔ 3.0 Reinstalable 8</h4>
                                    <b>Actualizado:  05 / 09 / 2016</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>65.3 MB</span><a href="ftp://descargas.aspel.com.mx/Download/FACTURe/reinstal/Aspel-FACTURe30_R8.exe" title="Descargar FACTUREⓔ 3.0 R8" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-FACTURⓔ 2.5 Reinstalable 9</h4>
                                    <b>Actualizado: 23 / 12 / 2014</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>55.9 MB</span><a href="ftp://descargas.aspel.com.mx/Download/FACTURe/reinstal/ASPEL-FACTURe25_R9.exe" title="Descargar FACTUREⓔ 2.5 R9" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-FACTURⓔ 2.0 Reinstalable 4</h4>
                                    <b>Actualizado: 03 / 10 / 2013</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>47.0 MB</span><a href="ftp://descargas.aspel.com.mx/download/facture/reinstal/Aspel-FACTURe20_R4.exe" title="Descargar FACTUREⓔ 2.0 R4" class="a-download"></a></p>
                                </div>
                            </div>

                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-FACTURⓔ 2.0</h4>
                                    <b>Actualizado: 07 / 12 / 2012</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>47.1 MB</span><a href="ftp://descargas.aspel.com.mx/download/facture/reinstal/ASPEL-FACTURe_R3.exe" title="Descargar FACTUREⓔ 2.0" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-facture" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>1 GB de RAM*</li>
                                        <li>100 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                        <li>Conexión a Internet.</li>
                                        <li>Servicio Aspel Sellado CFDI.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="noi" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-noi" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-noi" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-noi" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-noi" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/noi/logos/inelco-aspel-noi-logo.png" alt="Aspel NOI Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel NOI 8.0 - R12</h3>
                                    <h4 class="title-h4">Sistema de Nómina Integral</h4>
                                    <p><b>Actualizado:  29 / diciembre / 2017</b></p> 
                                    <p>Controla y automatiza todos los aspectos de la nómina y emite recibos de nómina electrónicos de acuerdo con la Reforma Fiscal vigente. Realiza un fácil, correcto y preciso cálculo de impuestos y aportaciones de seguridad social.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button producto="NOI 8.0" class="btn btn-primary btn-inelco download">Descargar Aspel NOI 8.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-noi" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 8.0 Reinstalable 11</h4>
                                    <b>Actualizado: 13 / 12 / 2017</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>213  MB</span><a href="http://ftp.aspel.com/Download/noi/reinstal/Aspel-NOI80_R11.exe" title="Descargar NOI 8.0 R11" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 7.0 Reinstalable 23</h4>
                                    <b>Actualizado: 21 / 12 / 2016</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>166 MB</span><a href="ftp://aspelprod.cloudapp.net/Download/Noi/reinstal/Aspel-NOI70_R23.exe" title="Descargar NOI 7.0 R23" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 6.0 Reinstalable 4</h4>
                                    <b>Actualizado: 15 / 10 / 2013</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>114 MB</span><a href="ftp://descargas.aspel.com.mx/download/noi/reinstal/Aspel-NOI60_R4.exe" title="Descargar NOI 6.0 R4" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 5.0 Reinstalable 4</h4>
                                    <b>Actualizado: 17 / 04 / 2013 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>110 MB</span><a href="ftp://descargas.aspel.com.mx/download/noi/reinstal/Aspel-NOI50_R4.exe" title="Descargar NOI 5.0 R4" class="a-download"></a></p>
                                </div>
                            </div>

                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 4.5 Reinstalable 3</h4>
                                    <b>Actualizado: 03 / 11 / 2009</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>47 MB</span><a href="ftp://descargas.aspel.com.mx/download/noi/reinstal/ASPEL-NOI45_r3.exe" title="Descargar NOI 4.5 R3" class="a-download"></a></p>
                                </div>
                            </div>

                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 4.1 Reinstalable 1</h4>
                                    <b>Actualizado: 18 / 09 / 2007 </b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>47 MB</span><a href="ftp://descargas.aspel.com.mx/download/noi/reinstal/NoiWin4.1R1.exe" title="Descargar NOI 4.1 R1" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-NOI 4.0 Reinstalable 8</h4>
                                    <b>Actualizado: 04 / 10 / 2006</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>44.5 MB</span><a href="ftp://descargas.aspel.com.mx/download/noi/reinstal/ASPEL-NOI40_r8.exe" title="Descargar NOI 4.0 R8" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-noi" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>1 GB de RAM*</li>
                                        <li>320 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="prod" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-prod" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-prod" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-prod" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-prod" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/prod/logos/inelco-aspel-prod-logo.png" alt="Aspel PROD  Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel PROD 3.0 - R1</h3>
                                    <h4 class="title-h4">Sistema de Control de Producción</h4>
                                    <p><b>Actualizado: 30 / junio / 2014</b></p> 
                                    <p>Planea y controla los procesos de producción optimizando el consumo de materiales, su integración total con el inventario de Aspel-SAE permite un seguimiento en línea de existencias, movimientos, números de serie y lotes, entre otros. Entre sus diversas consultas se encuentra la de Implosión y Explosión de materiales.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button producto="PROD 3.0" class="btn btn-primary btn-inelco download">Descargar Aspel PROD 3.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-prod" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-PROD 2.0 Reinstalable 4</h4>
                                    <b>Actualizado: 09 / 05 / 2011</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>49 MB</span><a href="ftp://descargas.aspel.com.mx/download/prod/reinstal/ASPEL-PROD20_R4.exe" title="Descargar PROD 2.0 R4" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-prod" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>1 GB de RAM*</li>
                                        <li>320 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                        <li>Aspel-SAE 6.x.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="sae" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-sae" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-sae" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-sae" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-sae" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" alt="Aspel SAE Logo" class="img-responsive first"></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">Aspel SAE 7.0 - R17</h3>
                                    <h4 class="title-h4">Sistema Administrativo Empresarial</h4>
                                    <p><b>Actualizado: 20 / junio / 2018</b></p> 
                                    <p>Administra y controla todas las operaciones del ciclo de compra-venta de la empresa, incluye herramientas de CRM y Facturación Electrónica para optimizar los esfuerzos de las áreas administrativas y comerciales. </p>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                        
                                    </ul>
                                    <button producto="SAE 7.0" class="btn btn-primary btn-inelco download">Descargar Aspel SAE 7.0</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-sae" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-SAE 7.0 Reinstalable 16</h4>
                                    <b>Actualizado: 01 / 06 / 2018</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>340 MB</span><a href="http://ftp.aspel.com/Download/SAE/reinstal/ASPEL-SAE70_R16.exe" title="Descargar SAE 7.0 R16" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-SAE 6.0 Reinstalable 12</h4>
                                    <b>Actualizado: 06 / 01 / 2017</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>294 MB</span><a href="ftp://aspelprod.cloudapp.net/Download/SAE/reinstal/ASPEL-SAE60_R12.exe" title="Descargar SAE 6.0 R12" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-SAE 5.0 Reinstalable 24</h4>
                                    <b>Actualizado: 12 / 12 / 2014</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>241 MB</span><a href="ftp://descargas.aspel.com.mx/download/sae/reinstal/ASPEL-SAE50_R24.exe" title="Descargar SAE 5.0 R24" class="a-download"></a></p>
                                </div>
                            </div>

                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-SAE 4.6 Reinstalable 7</h4>
                                    <b>Actualizado: 23 / 09 / 2011</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>126 MB</span><a href="ftp://descargas.aspel.com.mx/download/sae/reinstal/Aspel-SAE4.6_R7.exe" title="Descargar SAE 4.6 R7" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Barra de Microsoft Excel® para la Declaración informativa de operaciones con terceros</h4>
                                    <b>Actualizado: 29 / 01 / 2010</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>1.2 MB</span><a href="ftp://descargas.aspel.com.mx/download/sae/reinstal/Aspel%20-%20Operaciones%20con%20Terceros.exe" title="Descargar Barra de Microsoft Excel®" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-SAE 4.5 Reinstalable 2</h4>
                                    <b>Actualizado: 02 / 10 / 2009</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>115 MB</span><a href="ftp://descargas.aspel.com.mx/download/sae/reinstal/Aspel-SAE4.5_R2.exe" title="Descargar SAE 4.5 R2" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-SAE 4.0 Reinstalable 23</h4>
                                    <b>Actualizado: 13 / 08 / 2009</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>74 MB</span><a href="ftp://descargas.aspel.com.mx/download/sae/reinstal/ASPEL-SAE40_R23.exe" title="Descargar SAE 4.0 R23" class="a-download"></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="requeriments-sae" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
                                        <li>1 GB de RAM*</li>
                                        <li>400 MB de espacio libre en disco duro.</li>
                                        <li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
                                    </ul>
                                    <p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
                                    <p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!--sae nube-->
    <div id="saenube" class="tabs2">
            <div class="container">
            <h2 align="center">Revisa nuestros precios</h2>
            <br>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#basico-saenube" ><span>Básico</span></a></li>
                    <li><a data-toggle="tab" href="#estandar-saenube" ><span>Estándar</span></a></li>
                    <li><a data-toggle="tab" href="#premium-saenube" ><span>Premium</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="basico-saenube" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                
                                <div class="col-md-7">
                                    <h3 class="title-h3">$ 449 mensual</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li><b>Máximo 5 usuarios remoto recomendados </b></li>
                                        <br>
                                        <li><b>Servidor Virtual: Equipo Windows 2012 R2</b>
                                        <ul style="line-height:1.5em;height: auto;">
                                        <li>1 CPU</li>
                                        <li>1 GB memoria de RAM</li>
                                        <li>40 GB almacenamiento</li>
                                        </ul>
                                        <br>
                                        <li><b>Transferencia de salida: 5 GB </b></li>
                                        <br>
                                        <li><b>1 IP fija </b></li>
                                        <br>
                                        <li><b>Respaldo Automático </b></li>
                                        <br>
                                        <li><b>Monitoreo </b></li>
                                      </li>
                                    </ul>

                                   <a href="{{ url('/contacto')}}" class="btn btn-primary btn-lg active" role="button">Lo quiero</a>
                                    
                                </div>

                                <div class="col-md-3">
                                    <center><img src="/images/products/saenube/aspel-sae-por-internet-1.png" alt="ASPEL SAE" /></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="estandar-saenube" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row ">
                                <div class="col-md-7">
                                    <h3 class="title-h3">$ 899 mensual</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li><b>Máximo 10 usuarios remoto recomendados </b></li>
                                        <br>
                                        <li><b>Servidor Virtual: Equipo Windows 2012 R2</b>
                                        <ul style="line-height:1.5em;height: auto;">
                                        <li>1 CPU</li>
                                        <li>2 GB memoria de RAM</li>
                                        <li>50 GB almacenamiento</li>
                                        </ul>
                                        <br>
                                        <li><b>Transferencia de salida: 8 GB </b></li>
                                        <br>
                                        <li><b>1 IP fija </b></li>
                                        <br>
                                        <li><b>Respaldo Automático </b></li>
                                        <br>
                                        <li><b>Monitoreo </b></li>
                                        </li>
                                    </ul>
                                    <a href="{{ url('/contacto')}}" class="btn btn-primary btn-lg active" role="button">Lo quiero</a>
                                </div>

                                <div class="col-md-3">
                                    <center><img src="/images/products/saenube/aspel-sae-por-internet-1.png" alt="ASPEL SAE" /></center>
                                </div>
                        </div>
                    </div>
                    </div>
                    <div id="premium-saenube" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="title-h3">$ 1655 mensual</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li><b>Máximo 15 usuarios remoto recomendados </b></li>
                                        <br>
                                        <li><b>Servidor Virtual: Equipo Windows 2012 R2</b>
                                        <ul style="line-height:1.5em;height: auto;">
                                        <li>2 CPU's</li>
                                        <li>4 GB memoria de RAM</li>
                                        <li>70 GB almacenamiento</li>
                                        </ul>
                                        <br>
                                        <li><b>Transferencia de salida: 8 GB </b></li>
                                        <br>
                                        <li><b>1 IP fija </b></li>
                                        <br>
                                        <li><b>Respaldo Automático </b></li>
                                        <br>
                                        <li><b>Monitoreo </b></li>
                                        </li>
                                    </ul>
                                    <a href="{{ url('/contacto')}}" class="btn btn-primary btn-lg active" role="button">Lo quiero</a>
                                </div>

                                <div class="col-md-3">
                                    <center><img src="/images/products/saenube/aspel-sae-por-internet-1.png" alt="ASPEL SAE" /></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--TEAM VIEWER 10 PORTABLE/INSTALADOR-->
<div id="teamviewer" class="tabs2">
    <div class="container">
        <h2 align="center">TeamViewer 10</h2>
        <br>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#teamviewer-instalador"><span>Instalador</span></a></li>
            <li><a data-toggle="tab" href="#teamviewer-portable"><span>Portable</span></a></li>
        </ul>
        <div class="tab-content secciones">
            <div id="teamviewer-instalador" class="tab-pane fade in active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="title-h3">TeamViewer 10 - Instalador</h3>
                            <p style="line-height:1.5em;height: auto;">
                                TeamViewer es un software informático privado de fácil acceso, que permite conectarse remotamente a otro equipo. Entre sus funciones están: compartir y controlar escritorios, reuniones en línea, videoconferencias y transferencia de archivos entre ordenadores. 
                            </p>

                            <a href="http://download.teamviewer.com/download/version_10x/TeamViewer_Setup.exe" class="btn btn-primary btn-lg active" role="button" style="top:24px">Descargar</a>
                        </div>
                        <div class="col-md-3">
                            <center><img src="/images-new/marcas/teamviewer/logo/inelco-teamviewer-10-logo.png" alt="Teamviewer" style="max-width: 70%;max-height: 70%;"/></center>
                        </div>
                    </div>
                </div>
            </div>
            <div id="teamviewer-portable" class="tab-pane fade">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-7">
                            <h3 class="title-h3">TeamViewer 10 - Portable</h3>
                                <p style="height: auto;">
                                    TeamViewer es un software informático privado de fácil acceso, que permite conectarse remotamente a otro equipo. Entre sus funciones están: compartir y controlar escritorios, reuniones en línea, videoconferencias y transferencia de archivos entre ordenadores. 
                                </p>
                            <a href="http://download.teamviewer.com/download/version_10x/TeamViewerPortable.zip" class="btn btn-primary btn-lg active" role="button" style="top:24px">Descargar</a>
                        </div>
                        <div class="col-md-3">
                            <center><img src="/images-new/marcas/teamviewer/logo/inelco-teamviewer-10-logo.png" alt="Teamviewer" style="max-width: 70%;max-height: 70%;"/></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    

    <div id="nsh" class="tabs2">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#download-nsh" class="icon-download4"><span>Descargas</span></a></li>
                    <li><a data-toggle="tab" href="#updates-nsh" class="icon-cycle"><span>Actualizaciones</span></a></li>
                    <li><a data-toggle="tab" href="#requeriments-nsh" class="icon-info-with-circle"><span>Requerimientos</span></a></li>
                </ul>
                <div class="tab-content secciones">
                    <div id="download-nsh" class="tab-pane fade in active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <center><img src="/images/products/nsh/nshoteles.png" alt="nsh" /></center>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title-h3">National Soft Hoteles</h3>
                                    <h4 class="title-h4">Sistema de Control de hoteles</h4>
                                    <p><b>Actualizado: 12 / 11 / 2012</b></p> 
                                    <p>Realiza de forma eficaz y eficiente los procesos comunes (entrada y salida de huéspedes, movimientos, reservaciones y cobro), ofreciéndole así el control adecuado de su hotel o motel.</p>
                                    <ul style="line-height:1.5em;height: auto;">
                                    <li>Una vez instalado puedes utilizarlo durante 30 días sin costo, al concluir este periodo el Sistema no funcionará sino hasta que adquieras el Número de Serie Electrónico. Si necesitas una licencia <a href="{{ url('contacto') }}">Contáctanos</a></li>
                                    
                                    </ul>
                                    <button producto="NS Hoteles" class="btn btn-primary btn-inelco download">Descargar National Soft Hoteles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="updates-nsh" class="tab-pane fade">
                        <div class="container-fluid ">
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-PROD 3.0 Reinstalable 1</h4>
                                    <b>Actualizado: 12 / 11 / 2012</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>83 MB</span><a href="ftp://descargas.aspel.com.mx/download/prod/reinstal/ASPEL-PROD30_R1.exe" title="Descargar PROD 3.0 R1" class="a-download"></a></p>
                                </div>
                            </div>
                            <div class="row row-download">
                                <div class="col-md-9">
                                    <h4 class="title-h4">Aspel-PROD 2.0 Reinstalable 4</h4>
                                    <b>Actualizado: 09 / 05 / 2011</b>
                                </div>
                                <div class="col-md-3">
                                    <p><span>49 MB</span><a href="ftp://descargas.aspel.com.mx/download/prod/reinstal/ASPEL-PROD20_R4.exe" title="Descargar National Soft Hoteles" class="a-download"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="requeriments-nsh" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-h3">Requerimientos mínimos de hardware y software</h3>
                                    <ul style="line-height:1.5em;height: auto;">
                                        <li>Procesador Intel® Core i3 2.0 Ghz o superior.</li>
                                        <li>Memoria RAM 4 GB.</li>
                                        <li>Disco Duro 80GB disponibles.</li>
                                        <li>Monitor 1024 x 768.</li>
                                        <li>Sistema Operativo: Windows® 7 Professional SP2 ó Ultimate, Windows 8.1 Pro o superior.</li>
                                        <li>Requisitos adicionales del Servidor: SQL Server 2008 (mínimo), servidores y PC’s en español</li>
                                        <li>Unidad de DVD ROM, USB 2.0, Puerto de Red Ethernet, Conexión a Internet para registro de licencia.</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('errors.descargademo')
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