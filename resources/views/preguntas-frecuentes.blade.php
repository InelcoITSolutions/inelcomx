@extends('templates.principal')

@section('name_title','Preguntas Frecuentes | Inelco IT Solutions')

@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    <section class="sections" id="banner-faq">
        <div class="fondo-gray">
            <div class="container">
                <div class="wow bounceInDown" data-wow-delay="0.2s" >
                    <h2 class="title-h2">¿Tienes alguna duda?</h2>
                    <h3 class="title-h3">Obtén la respuesta que necesitas</h3>
                </div>
            </div>
        </div>        
    </section>

    <section class="secciones" id="faqs">
        <div class="container">
            <div class="row">
                <h2 class="title-h2">Preguntas frecuentes</h2>
                <div class="col-md-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">¿Qué beneficios tengo al adquirir una póliza de servicios?</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span " data-parent="#accordion" href="#collapse1"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in"> 
                                <div class="panel body"> Puedes tener acceso a nuestros <a href="{{ url('servicios')}}">servicios premium</a> como son: instalación, asesoría, soporte y más, además de obtener descuentos en nuestros cursos y presentaciones. Siempre tendrás mayor prioridad y servicio las 24 horas.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Si quiero actualizar la versión de mi sistema, ¿Ustedes me pueden ayudar?</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse2"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Por supuesto que sí, es parte de nuestros servicios el realizar la actualización de tus sistemas, conservando la integridad de tu información y garantizamos el correcto funcionamiento de tu sistema.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">¿Realizan servicios de manera remota?</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse3"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Nuestros servicios los realizamos en la mayoría de las veces de manera remota a menos que la situación lo amerite, nosotros te visitamos.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Necesito capacitar a mi personal, ¿Pueden ayudarme?</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse4"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">Ofrecemos cursos en nuestro calendario de eventos, pero en situaciones especiales, te ofrecemos los cursos para que capacites a tu personal ya sea en nuestro Centro de Capacitación Inelco o si no puedes venir hasta nuestras instalaciones lo podemos hacer vía Webinar. Además, te ofrecemos el material didáctico. <a href="{{ url('contacto') }}">Contáctanos</a></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Estoy interesado en optimizar los procesos de mi empresa, pero no sé qué sistemas necesito.</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse5"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">No te preocupes, estamos comprometidos en ofrecerte los sistemas que se adecuen a los procesos de tu empresa. Podemos visitarte para detectar las necesidades de tu empresa y te ofrecemos el software y hardware que más te convenga. Nuestra prioridad es tener a nuestros clientes satisfechos.</div>
                            </div>
                        </div>
                        
                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse6"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse7"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse8"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse9"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion" href="#collapse10"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
@push('add-js')
    <script>
        $("body").attr('pagina','Soporte');
    </script>   
@endpush