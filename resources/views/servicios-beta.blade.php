@extends('templates.principal')

@section('name_title','Servicios | Inelco IT Solutions')

@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush
@section('contenido')
    <section id="banner-services" class="sections">
        <div class="fondo-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-h2">Servicios Premium</h2>
                        <h3 class="title-h3">Con nuestros servicios empresariales la solución que buscas está a tu alcance</h3>
                        <p class="text-center"><a href="{{ url('/contacto') }}" class="btn btn-default">Adquiere tu póliza de servicio</a></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-services-banner">
                                        <!--<center><span class="icon-briefcase2        -->            
                                        <h4 class="h2-css i1-serv"> Implementación</h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-services-banner ">
                                        <!--<center><span class="icon-briefcase2"></span></center>             -->       
                                        <h4 class="h2-css i2-serv"> Consultoría</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-services-banner">
                                        <!--<center><span class="icon-briefcase2"></span></center>          -->          
                                        <h4 class="h2-css i3-serv"> Capacitación</h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-services-banner">
                                        <!--<center><span class="icon-briefcase2"></span></center>          -->          
                                        <h4 class="h2-css i4-serv"> Asesoría</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-services-banner">
                                        <!--<center><span class="icon-briefcase2"></span></center>        -->            
                                        <h4 class="h2-css i5-serv"> Soporte</h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="box-services-banner ">
                                        <!--<center><span class="icon-briefcase2"></span></center>             -->       
                                        <h4 class="h2-css i6-serv "> Y mucho más</h4>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>            
    </section>

    <section class="services secciones" id="implementacion">
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Implementación</h2>
                <h3 class="title-h3"><b>Implementamos</b> tu nuevo sistema para que todos los procesos de tu empresa estén en orden.</h3>
                <div class="col-md-4 ">
                    <img src="/images/inelco-implementacion.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <p>Con nuestro servicio de implementación tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu restaurante.</p>
                    <ul>
                        <li>No te preocupes por el proceso de instalación y deja que nosotros nos ocupemos de ello.</li>
                        <li>Tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu empresa.</li>
                        <li>Te damos la flexibilidad de elegir si prefieres una instalación vía remota o de forma local</li>
                    </ul>

                </div>
            </div>
            <div class="row caract-services">
                <div class="col-md-4">
                    <img src="/images/inelco-instalacion.png" class="img-responsive">
                    <p class="text-p">No necesitas preocuparte por la instalación de tu sistema</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-procesos-empresa.png" class="img-responsive">
                    <p class="text-p">Ajustamos el software a los procesos de tu empresa</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-servicio-remoto.png" class="img-responsive">                   
                    <!--<h4 class="title-h4">Software Administrativo</h4>-->
                    <p class="text-p">Podemos llevar a cabo la implementación de forma remota o de forma local</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services secciones" id="asesoria" >
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Asesoría</h2>
                <h3 class="title-h3">Permite que los expertos te <b>asesoren</b> y olvídate de las complicaciones</h3>
                <div class="col-md-4 ">
                    <img src="/images/2.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <p>Con nuestro servicio de asesoría no caminarás sólo. Estaremos contigo aclarando tus dudas y ayudándote a resolver problemas</p>
                    

                </div>
            </div>
            <div class="row caract-services">
                <div class="col-md-4">
                    <img src="/images/inelco-asesoria.png" class="img-responsive">
                    <p class="text-p">Te apoyamos con nuestra asesoría para resolver los problemas de tu empresa</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-soluciones-adecuadas.png" class="img-responsive">
                    <p class="text-p">Asesores expertos que te brindarán soluciones</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-asesores-expertos.png" class="img-responsive">                   
                    <!--<h4 class="title-h4">Software Administrativo</h4>-->
                    <p class="text-p">Servicio de asesoría profesional y completo</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="services secciones" id="consultoria">
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Consultoría</h2>
                <h3 class="title-h3">Con nuestro servicio de <b>consultoría</b> detectamos y solucionamos los problemas de tu empresa</h3>
                <div class="col-md-4 ">
                    <img src="/images/inelco-consultores.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <p>Te apoyamos ofreciendo consultoría empresarial profesional. Nosotros nos ocupamos de los problemas de tu restaurante y te ofrecemos soluciones</p>
                    

                </div>
            </div>
            <div class="row caract-services">
                <div class="col-md-4">
                    <img src="/images/inelco-estrategia.png" class="img-responsive">
                    <p class="text-p">Desarrollamos e implementamos estrategias para el correcto desempeño de tu empresa</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-econtrar-solucion.png" class="img-responsive">
                    <p class="text-p">Encontramos los problemas de tu restaurante nosotros mismos y te ofrecemos las soluciones que buscas</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-consultoria-profesional.png" class="img-responsive">                   
                    <!--<h4 class="title-h4">Software Administrativo</h4>-->
                    <p class="text-p">Servicio de consultoría profesional y completo</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services secciones" id="capacitacion">
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Capacitación</h2>
                <h3 class="title-h3">Asiste a nuestros eventos de <b>capacitación</b> y vuélvete tú mismo un experto.</h3>
                <div class="col-md-4 ">
                    <img src="/images/inelco-cursos.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <p>Te capacitamos en distintas áreas para que puedas mejorar los procesos de tu empresa y utilizar las herramientas que te ofrecemos correctamente.</p>
                    <p>Ofrecemos periódicamente una variedad de cursos, presentaciones y conferencias, tanto presenciales como en línea, para mantenerte actualizado e informado sobre todos los temas relevantes a la correcta administración de tu negocio. Recuerda visitar nuestro calendario para conocer nuestros próximos eventos.</p>
                    <a href="{{ url('/calendario') }}" alt="Visitar el calendario de eventos"><button class="btn btn-default btn-lg">Ver calendario</button></a>
                </div>
            </div>
            <div class="row caract-services">
                <div class="col-md-4">
                    <img src="/images/inelco-capacitacion.png" class="img-responsive">
                    <p class="text-p">Ofrecemos cursos y talleres para capacitarte en diferentes áreas</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-cursos.png" class="img-responsive">
                    <p class="text-p">Tenemos cursos personalizados para ayudarte con el sistema que necesites</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-calendar.png" class="img-responsive">                   
                    <!--<h4 class="title-h4">Software Administrativo</h4>-->
                    <p class="text-p">Participamos en diversas expos a través del año. Conoce las fechas en nuestro calendario de eventos</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services secciones" id="soporte">
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Soporte</h2>
                <h3 class="title-h3">Ofrecemos un inmejorable servicio de <b>soporte</b> para que estes tranquilo.</h3>
                <div class="col-md-4 ">
                    <img src="/images/inelco-soporte.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <p>Obtén acceso al mejor servicio de soporte con tu póliza y despreocúpate de cualquier problema técnico.</p>
                    
                    
                </div>
            </div>
            <div class="row caract-services">
                <div class="col-md-4">
                    <img src="/images/inelco-soporte-calidad.png" class="img-responsive">
                    <p class="text-p">Servicio de soporte profesional y completo</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-base-conocimientos.png" class="img-responsive">
                    <p class="text-p">Acceso a la base de conocimientos para que puedas resolver cualquier duda cuando sea</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/inelco-ticket-servicio.png" class="img-responsive">                   
                    <!--<h4 class="title-h4">Software Administrativo</h4>-->
                    <p class="text-p">Levantamiento de ticket</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('add-js')
    <script>
        $("body").attr('pagina','Servicios');
    </script>
@endpush