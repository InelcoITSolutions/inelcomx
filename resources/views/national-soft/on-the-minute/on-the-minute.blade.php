@extends('templates.principal')

@section('name_title','On The Minute | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.on-the-minute.banner-otm')

    <section class="descripcion-prod otm-pages secciones ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>On The Minute<sup>®</sup> es el sistema de control de asistencia ideal para tu empresa</h2>
                    <p>Con <b>On The Minute<sup>®</sup></b> elimine los engaños y tenga control de planta laboral con los sistemas, gracias a la tecnología biométrica los trabajadores registran sus entradas y salidas mediante su huella digital o reconocimiento facial, evitando falsificaciones. Gracias a esta tecnología toda la información esta respaldada en su computadora, exacta y al instante.</p>
                    <p>On The Minute<sup>®</sup> posee herramientas para concentrar toda la información de sus empleados, reportes, pre-nómina así como exportación a los principales sistemas contables como Aspel NOI<sup>®</sup>, Contpaq i<sup>®</sup> Nóminas, Microsip<sup>®</sup> entre otros.</p>
                    <p>Podrás generar tus recibos de nómina con base a las horas laboradas por tus colaboradores y realizar el proceso de timbrado (CFDI) como lo plantea la reforma a la Ley Federal del Trabajo.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="inelco-softrestaurant" class="img-responsive" src="/images/products/otm/inelco-otm-pantalla.png"/>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-otm">
        <div class="fondo-gray">
            <div class="container">
                <h2>Elimine los engaños y tenga el control</h2>
            </div>
        </div>
    </section>

    <section class="ac_content otm-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a On The Minute<sup>®</sup></h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/otm/inelco-otm-pantalla-inicio.png" id="1" width="88.5%" alt="Diseño eficiente y eficaz|Mejora gráfica para la rotación de turnos, se puede hacer de manera semanal selec- cionando el turno por día, esto permite una administración más eficiente en empresas donde existen rotaciones constantes de sus turnos."/>

                    <img src="/images/products/otm/inelco-otm-pantalla-hoja-trabajo.png" id="2" width="88.5%" alt="Administra las nómina de tu empresa|Tiene una hoja de trabajo de Nómina que permite tener una buena u control con Reloj Checador que funcionan en red. " />
                    
                    <img src="/images/products/otm/inelco-otm-pantalla-recibo-empleado.png" id="3" width="88.5%" alt="Mejor interfaz en el recibo de nómina|Con mejoras en los documentos a entregar de la nómina de emplados, se pueden crear categorías y la forma de entrega tiene una mejor interfaz gráfica ya que se pueden pre-visualizar los archivos PDF y asignarles una imagen para identificarlo."/>
                    
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones otm-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">
                        Diseño eficiente y eficaz
                    </div>
                    <p>
                        Mejora gráfica para la rotación de turnos, se puede hacer de manera semanal seleccionando el turno por día, esto permite una administración más eficiente en empresas donde existen rotaciones constantes de sus turnos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod otm-pages secciones">
    <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/otm/inelco-otm-email.png"/>
                    </center>
                    <h3 class="text-center">Notificación por Email </h3>
                    <p>Mantenga la puntualidad, el sistema envía una notificación al empleado cuando éste tenga un retardo.</p>
                </div>
               
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de nomina" src="/images/products/otm/inelco-otm-reporte.png"/>
                    </center>
                    <h3 class="text-center">Asistente de Captura</h3>
                    <p>Ahora realice la captura de catálogos de manera ordenada y sencilla</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="expediente del trabajador" src="/images/products/otm/inelco-otm-rotacion-turnos.png"/>
                    </center>
                    <h3 class="text-center">Rotación de Turnos</h3>
                    <p>Obtenga una administración más eficiente en empresas donde existan rotaciones constantes de turnos</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="calculo de impuestos" src="/images/products/otm/inelco-otm-graficas.png"/>
                    </center>
                    <h3 class="text-center">Estadísticas en Pantalla</h3>
                    <p>El sistema muestra gráficas con información relevante de último minuto.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="pago de los trabajadores" src="/images/products/otm/inelco-otm-compatible-ns-face.png"/>
                    </center>
                    <h3 class="text-center">Compatible con NS FACE RW</h3>
                    <p>Utilice On The Minute<sup>®</sup> con dispositivos de última tecnología como el reconocimiento facial.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/otm/inelco-otm-config.png"/>
                    </center>
                    <h3 class="text-center">Configuración más sencilla</h3>
                    <p>Agrupación de parámetros comunes, con lo que es más sencilla la configuración del sistema</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/otm/inelco-otm-export-office.png"/>
                    </center>
                    <h3 class="text-center">Exportación a Open Office</h3>
                    <p>Exporte sus reportes al sistema Open Office Calc.</p>
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/otm/inelco-otm-personalizacion.png"/>
                    </center>
                    <h3 class="text-center">Personalización</h3>
                    <p>Personalice su sistema colocando la imagen de fondo y su logotipo</p>
                </div>
            </div>
            <div class="col-md-12 center-block">
                <a href="{{url('national-soft/on-the-minute/caracteristicas')}}" style="text-decoration: none;"><button type="button" class="btn btn-primary btn-lg center-block">Ver más caraterísticas</button></a>

            </div>
        </div>
    </section>

    



    @include('national-soft.on-the-minute.menu-otm')

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
