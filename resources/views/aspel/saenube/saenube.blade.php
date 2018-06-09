@extends('templates.principal')


@section('name_title','SAENube | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.saenube.banner-saenube')

    <section class="descripcion-prod desc-sae secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="text-align: justify;">
                    <h2>
                        Administra y controla tu empresa desde cualquier lugar
                    </h2>
                    <p >
                        <b>
                            Aspel SAE Nube
                        </b>
                       está dirigido a pequeñas y medianas empresas, ya sea fabricantes, comercializadoras y negocios de servicios.

                   </p>
                    <p>
                        El Sistema Administrativo Empresarial más vendido te ofrece su poderosa funcionalidad con todos los beneficios de la Nube, lo que representa máxima movilidad. Comparte tu información entre oficinas y sucursales en tiempo real, para la correcta toma de decisiones.

                    </p>

                    <p>

                    Administra todas las operaciones del ciclo de compra-venta de la empresa desde Centros de Datos Internacionalmente reconocidos como Amazon Web Services, vía servidores virtuales conectados a Internet.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/aspel_nube/productos/sae_nube/logos/inelco-aspel-saenube-logo.png" alt="Aspel SAE nube Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-sae">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    Nuevo Aspel SAE Nube todo incluido, conéctate desde cualquier lugar a tu sistema administrativo.
                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content " id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel SAE Nube</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo<h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                    <div class="title">Imagen 1</div>
                    <p>A complete overview of your marketing, automation, & sales.</p>
                </div>-->
                <div id="tour-slides">
                    <img src="/images/products/saenube/Inelco-sae-nube.jpg" id="1" width="88.5%" alt="Nuevo SAE nube|Con el nuevo método de SAE puedes realizarlo todo desde cualquier lugar sin necesidad de estar en tu empresa."/>

                    <img src="/images/products/saenube/inelco_saenube_presentacion.jpg" id="2" width="88.5%" alt="Lleva tu empresa hasta las nubes|Porque nos importa tu tiempo, agilizamos los acceso con el nuevo SAE Nube." />

                    <img src="/images/products/saenube/inelco_saenube_dispositivos.jpg" id="3" width="88.5%" alt="Accede desde cualquier dispostivo|Con SAE nube accede desde cualquier computadora y con SAE movil desde cualquier Smartphone a tu empresa y administrarlo de manera rápido y facil."/>

                    <img src="/images/products/sae/inelco-sae-facturas-vendedores-HD.png" id="4" width="88.5%" alt="Factura Electrónica 100% segura|Emite CFDI cumpliendo con todos los requisitos fiscales. Envío automático de PDF y XML por correo electrónico."/>

                    <img src="/images/products/sae/inelco-sae-compras-HD.png" id="5" width="88.5%" alt="Dinamismo en tus compras|Manejo de requisición, orden de compra, recepción de mercancía, compras y devoluciones, cada uno de ellos con la respectiva afectación a inventarios y cuentas por pagar."/>
                </div>
            </div>
        </div>
    </section>
    <hr id="lap-separator">
    <section class="secciones" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Nuevo SAE nube</div>
                    <p>Con el nuevo SAE nube accede a la información de tu empresa desde cualquier lugar en cualquier momento</p>
                </div>
            </div>
        </div>
    </section>                

    <section class="caracteristicas-prod secciones">
        <div class="container">
            <h2 align="center">
                    SAE en la nube ofrece
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="control de tu empresa" src="/images/products/saenube/aspel-productos-sae-nube-movilidad.png"/>
                    </center>
                    <h3 class="text-center">
                        Alcance
                    </h3>
                    <p>
                        Actualiza y comparte tus datos entre sucursales y oficinas. Administra inventarios y sincroniza existencias en automático.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="contabilidad electrónica" src="/images/products/saenube/aspel-productos-sae-nube-alcance.png"/>
                    </center>
                    <h3 class="text-center">
                        Tranquilidad
                    </h3>
                    <p>
                        Siempre cuentas con el respaldo de tu información.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="conoce cliente" src="/images/products/saenube/aspel-productos-sae-nube-seguridad.png"/>
                    </center>
                    <h3 class="text-center">
                        Seguridad
                    </h3>
                    <p>
                        La información está disponible únicamente para las personas que definas, lo que garantiza la privacidad.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="administracion del punto de venta" src="/images/products/saenube/aspel-productos-sae-nube-disponibilidad.png"/>
                    </center>
                    <h3 class="text-center">
                        Disponibilidad
                    </h3>
                    <p>
                        La información de tu empresa siempre está disponible las 24 horas del día los 365 días del año.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/images/products/saenube/aspel-productos-sae-nube-tranquilidad.png"/>
                    </center>
                    <h3 class="text-center">
                        Administración
                    </h3>
                    <p>
                        Gestiona todas tus máquinas contratadas desde tu escritorio de servicios.
                    </p>
                </div>
                
            </div>
        </div>

        <h3 style="color:#BF273E" class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

                <br>
                <br>
        <a href="{{url('contacto')}}" style="text-decoration: none" >
                        <button id="btn-saenube-prob1" class="btn  btn-lg center-block">
                            Lo quiero
                        </button>
        </a>
    </section>

    @include('aspel.saenube.menu-saenube')

   

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