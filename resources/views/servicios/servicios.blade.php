@extends('templates.principal')

@section('name_title','Servicios | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/mis-estilos.css">

    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('servicios.banner-servicios')

{{-- <div class="row gray-img" id="mas"></div> --}}

<section id="aspel" class="descripcion-prod aspel-pages secciones ">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 30px;">
                <h2>
                    Los servicios necesarios para tu organización</h2>
{{--                 <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illum eveniet minus facere aliquid facilis rem sed dolores qui, eaque, obcaecati quod eligendi deleniti ab provident asperiores distinctio veniam tempora amet architecto voluptas? Unde ipsum alias, adipisci quae pariatur, expedita, natus fuga, aut aperiam omnis sint impedit. Magnam, blanditiis ducimus.</p> --}}
            </div>
            <div class="row gray-img">
                <div class="col-md-4" id="inelco-aspel">
                    <div class="col-md-12" id="mas">
                        <img src="/images-new/inelco/otros/seccion-servicios/iconos/implementacion.png" alt="icono implementacion" class="img-responsive first">
                    </div>
                    <div class="col-md-12">
                        <h3 class="h3">Implementación</h3>
                        <p style=" height: 270px; padding-top: 20px">
                            Implementamos tu nuevo sistema para que todos los procesos de tu empresa estén en orden. Con nuestro servicio de implementación tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu empresa.</p>
                        <a style="text-decoration: none" href="{{ url('contacto') }}">
                            <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block">
                                Contáctanos</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" id="inelco-aspel">
                    <div class="col-md-12">
                        <img src="/images-new/inelco/otros/seccion-servicios/iconos/asesoria.png" alt="icono asesoría" class="img-responsive first">
                    </div>
                    <div class="col-md-12">
                        <h3 class="h3">Asesoría</h3>
                        <p style="/*text-align:justify*/; height: 270px; padding-top: 20px">
                            Permite que los expertos te asesoren y olvídate de las complicaciones. Con nuestro servicio de asesoría no caminarás sólo. Estaremos contigo aclarando tus dudas y ayudándote a resolver problemas.</p>
                        <a style="text-decoration: none" href="{{ url('contacto') }}">
                            <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">
                                Contáctanos</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" id="inelco-aspel">
                    <div class="col-md-12">
                        <img src="/images-new/inelco/otros/seccion-servicios/iconos/consultoria.png" alt="icono consultoria" class="img-responsive first">
                    </div>
                    <div class="col-md-12">
                        <h3 class="h3">Consultoría</h3>
                        <p style=" height: 270px; padding-top: 20px">
                            Con nuestro servicio de consultoría detectamos y solucionamos los problemas de tu empresa. Te apoyamos ofreciendo consultoría empresarial profesional. Nosotros nos ocupamos de los problemas de tu empresa y te ofrecemos soluciones.</p>
                        <a style="text-decoration: none" href="{{ url('contacto') }}">
                            <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block">
                                Contáctanos</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row gray-img">
                <div class="col-md-4" id="inelco-aspel">
                    <div class="col-md-12">
                        <img src="/images-new/inelco/otros/seccion-servicios/iconos/capacitacion.png" alt="icono capacitacion" class="img-responsive first">
                    </div>
                    <div class="col-md-12">
                        <h3 class="h3">Capacitación</h3>
                        <p style=" height: 270px; padding-top: 20px">
                            Asiste a nuestros eventos de capacitación y vuélvete tú mismo un experto.Te capacitamos en distintas áreas para que puedas mejorar los procesos de tu empresa y utilizar las herramientas que te ofrecemos correctamente.</p>
                        <a style="text-decoration: none" href="{{ url('contacto') }}">
                            <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block">
                                Contáctanos</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" id="inelco-aspel">
                    <div class="col-md-12">
                        <img src="/images-new/inelco/otros/seccion-servicios/iconos/soporte.png" alt="icono soporte" class="img-responsive first">
                    </div>
                    <div class="col-md-12">
                        <h3 class="h3">Soporte</h3>
                        <p style=" height: 270px; padding-top: 20px">
                            Ofrecemos un inmejorable servicio de soporte para que estes tranquilo. Obtén acceso al mejor servicio de soporte con tu póliza y despreocúpate de cualquier problema técnico.</p>
                        <a style="text-decoration: none" href="{{ url('contacto') }}">
                            <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block">
                                Contáctanos</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-4" id="inelco-aspel">
                    <div class="col-md-12">
                        <img src="/images-new/inelco/otros/seccion-servicios/iconos/seguridad.png" alt="icono seguridad informatica" class="img-responsive first">
                    </div>
                    <div class="col-md-12">
                        <h3 class="h3">Seguridad Informática</h3>
                        <p style=" height: 270px; padding-top: 20px;padding-bottom: ">
                            Nuestros servicios de seguridad informática brindan una opción al alcance de las necesidades de cada empresa, para asegurar la integridad y la privacidad de los datos pertenecientes a la misma.</p>
                        <a style="text-decoration: none" href="{{url('contacto')}}">
                            <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block">
                                Contáctanos</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 @endsection

@push('add-js')
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Servicios');
    </script>   
@endpush
