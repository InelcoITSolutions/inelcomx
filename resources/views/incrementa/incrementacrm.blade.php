@extends('templates.principal')

@section('name_title','Incrementa CRM | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('incrementa.banner-icrm')

    <section class="descripcion-prod icrm-pages secciones ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>El sistema que te facilita todo, lleva un control preciso de todas tus acciones para que tus prospectos se conviertan en clientes</h2>
                    <p><b>Incrementa CRM</b> es fácil y rapido de implementar, mientas otros sistemas te piden que hagas grandes inversiones en equipo, Incrementa sólo necesita que tengas conexión a internet para comenzar a trabajar.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="inelco-softrestaurant" class="img-responsive" src="/images/products/icrm/inelco-icrm-screen.png"/>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-icrm">
        <div class="fondo-gray">
            <div class="container">
                <h2>Incrementa es mucho más que un CRM</h2>
            </div>
        </div>
    </section>

    <section class="ac_content icrm-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Incrementa CRM</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/icrm/inelco-icrm-dashboard.PNG" id="1" width="88.5%" alt="Dashboard intuitivo|Todo lo que necesitas al alcance de tu mano, observarás las actividades próximas e identifícalas por etiquetas."/>
                    <img src="/images/products/icrm/inelco-icrm-prospectos.PNG" id="2" width="88.5%" alt="De prospectos a clientes|Agrega a tus nuevos prospectos y dales un seguimiento, hasta hacerlos tus clientes." />
                    <img src="/images/products/icrm/inelco-icrm-campanias.PNG" id="3" width="88.5%" alt="Campañas de exito|Que tus labores de campañas no sean un fracaso, en Incrementa CRM registra tu campaña y determina las acciones que desees y ve los frutos de tus esfuerzos,"/>
                    <img src="/images/products/icrm/inelco-icrm-configuracion.PNG" id="4" width="88.5%" alt="Configuración|Acceso a toda la configuración que necesites como a: usuarios, etapas de ventas, horarios, fuentes de prospectos, campos nuevos para los módulos de clientes y oportunidades, etc."/>
                    <img src="/images/products/icrm/inelco-icrm-reportes.PNG" id="5" width="88.5%" alt="Al tanto de todo|Mantente informado de todas las actividades realizadas e implementa nuevas o mejora tus estrategias, de trabajo, gracias a los reportes que Incrementa te ofrece."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones icrm-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">
                        Dashboard intuitivo
                    </div>
                    <p>Todo lo que necesitas al alcance de tu mano, observarás las actividades próximas e identifícalas por etiquetas.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod icrm-pages secciones">
        <div class="container">
            <div class="row row-icon">
                <div class="col-md-4">
                    <center>
                        <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-seguimiento.png"/>
                    </center>
                    <h3 class="text-center">Mejora tu seguimiento</h3>
                    <p>Nunca dejes una llamada de seguimiento para después, ni pierdas clientes por falta de seguimiento. Con Incrementa todas tus oportunidades de venta llevan a una accion.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de nomina" src="/images/products/icrm/inelco-icrm-notificaciones.png"/>
                    </center>
                    <h3 class="text-center">Simplifica tus procesos</h3>
                    <p>Incrementa es la mejor manera de dar seguimiento a tus procesos porque no sólo los hace mas fáciles: los hace por ti. Descubre lo fácil que es dar segumiento automatizado a tus clientes.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="expediente del trabajador" src="/images/products/icrm/inelco-icrm-clientes.png"/>
                    </center>
                    <h3 class="text-center">Organiza tu cartera de clientes</h3>
                    <p>Nunca vuelvas a perder un contacto. Mantén segura toda la información de tus clientes y prospectos de forma ordenada y con datos que te permiten darles un mejor seguimiento.</p>
                </div>
            </div>
            <div class="row row-icon">
                <div class="col-md-4">
                    <center>
                        <img alt="Fideliza a tus clientes" src="/images/products/icrm/inelco-icrm-reporte-venta.png"/>
                    </center>
                    <h3 class="text-center">Reporte de ventas</h3>
                    <p>Incrementa la productividad de tu equipo sin distraerlos de sus funciones. Nuestro sistema hace reportes de ventas con información de tus cierres, proyecciones y más... en solo un click.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="pago de los trabajadores" src="/images/products/icrm/inelco-icrm-minutos.png"/>
                    </center>
                    <h3 class="text-center">Cotizaciones en minutos</h3>
                    <p>No dejes a tus clientes esperando. Incrementa permite hacer y enviar cotizaciones en minutos para mejorar el tiempo de respuesta que le das a tus clientes.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de impuestos" src="/images/products/icrm/inelco-icrm-seguridad.png"/>
                    </center>
                    <h3 class="text-center">Máxima seguridad</h3>
                    <p>Disponemos de una conexión cifrada segura (SSL) y además control personalizado de acceso por usuario, computadoras y hasta por horarios de trabajo.</p>
                </div>
            </div>
        </div>
    </section>

    @include('incrementa.menu-icrm')

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
