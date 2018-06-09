@extends('templates.principal')

@section('name_title','NS Hoteles | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.ns-hoteles.banner-nsh')

    <section class="descripcion-nsh nsh-pages secciones" >
        <div class="container">
            <div class="row">
            <div class="text-center">
                <h2><b>Dale una estrella más a tu hotel</b></h2>
                <p>El sistema para la gestión profesional de hoteles y moteles</p>
            </div>
        </div>
        </div>
    </section>

    <section class="descripcion-nsh nsh-pages secciones" >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>NS Hoteles</h2>
                    <p>Realiza eficientemente los procesos diarios como entrada y salida de huéspedes, movimientos, reservaciones y cobro. Obtén toda la información que necesitas en los diferentes paneles y reportes para tener un control profesional de su hotel, motel o posada.<br><br>
                    
                   
                   <b>Evita</b> fraudes con las funciones de seguridad ya que NS Hoteles cuenta con niveles de acceso al sistema; restringiendo mediante contraseñas y un módulo especial de huella digital, el acceso a los diferentes módulos y funcionalidades del sistema para que tu decidas quien autoriza diferentes actividades.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="inelco-softrestaurant" class="img-responsive" src="/images/products/nsh/inelco-nsh-monito-hotel.png"/>
                    </center>
                </div>
            </div>
        </div>
    </section>

    

    <section class="ac_content nsh-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos su entorno</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title"></div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/nsh/entorno.jpg" id="1" width="88.5%" alt="Administración de tu negocio| Gestión de habitación por día y hora, Genera diversos reportes e identifica oportunidades, Gestion de precios de habitación y servicios por temporadas"/>

                    <img src="/images/products/nsh/seg.jpg" id="2" width="88.5%" alt="Seguridad anti-fraudes y control| Acceso al sistema por huella digital*. Uso de perfiles de seguridad para delimitar funciones. Compatibilidad con cámaras de vigilancia*."/>

                    <img src="/images/products/nsh/tmp.jpg" id="3" width="88.5%" alt="Control de servicios y personal| Ama de llaves: monitorea la limpieza de habitaciones. Contol de amenidades incluidas por habitación. Back Office: control de almacenes, inventarios y cuentas por pagar a proveedores*."/>

                    <img src="/images/products/nsh/control.jpg" id="4" width="88.5%" alt="Gestión de pagos recibidos| Control de entradas y salidas de dinero de caja. Configuración de múltiples divisas, incluyendo tarifas en dólares. Emisión de tickets de consumo con el uso de miniprinters."/>

                    <img src="/images/products/nsh/use.jpg" id="5" width="88.5%" alt="Reportes| Gráfica de ocupación esperada para la noche. Reporte de habitaciones en status. Reporte de ingresos por rango de tiempo."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones nsh-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">
                        Entorno facil de usar
                    </div>
                    <p>
                        Diseño amigable al usuario y facil de usar. Sistema con capacidad de trabajar en red con pantalla de reservaciones: asignando al huésped, habitación y permitiendo cargar abonos anticipados.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-nsh">
        <div class="fondo-gray">
            <div class="container text-center">
                <h2><b>La opción más accesible para tu operación</b></h2>
                <h3>Gestiona toda la operación de tu hotal desde $0.99 USD/habitación*</h3>
                <p style="color: #fff">*Precio mensual por habitación basado en paquete de 100 habitaciones</p>
                <br><br>
                 <a style="text-decoration: none" href="{{ url('national-soft/ns-hoteles/caracteristicas') }}"><button id="btn-nsh-frase" type="button" class="btn btn-lg center-block">Ver paquetes</button></a> 
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod nsh-pages secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="title-h2">Funciones</h2>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Administracion hoteles" src="/images/products/nsh/inelco-nsh-timbre.png"/>
                    </center>
                    <h3 class="text-center">Administración</h3>
                    <p>Panel de reservaciones y monitor de limpieza de habitaciones. Reservación y cobro a través de su página de internet con el Módulo de Reservaciones Online*</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Seguridad" src="/images/products/nsh/inelco-national-soft-hoteles-seguridad.png"/>
                    </center>
                    <h3 class="text-center">Seguridad</h3>
                    <p>Función de seguridad para evitar fraudes. Establezca los privilegios por medio de perfiles protegidos por contraseña (administrador, recepcionista, etc.)</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Back Office" src="/images/products/nsh/inelco-national-soft-hoteles-backoffice.png"/>
                    </center>
                    <h3 class="text-center">Back Office</h3>
                    <p>Con este módulo es posible conocer el costo y existencia de sus artículos así como el control del saldo de proveedores por sus compras. Mantenga el control con su almacén y proveedores al día. Control de almacenes, compras e inventarios. </p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Reportes" src="/images/products/nsh/inelco-national-soft-hoteles-reloj.png"/>
                    </center>
                    <h3 class="text-center">Control del hotel</h3>
                    <p>Gestión de habitación por día y por hora. Control de artículos y amenidades incluidas por habitación (control remoto de televisión y aire acondicionado, etc.)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <center>
                        <img alt="cobro con tarjeta" src="/images/products/nsh/inelco-national-soft-reportes.png"/>
                    </center>
                    <h3 class="text-center">Reportes</h3>
                    <p>Reportes para identificar oportunidades.</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Tarificador de llamadas" src="/images/products/nsh/inelco-national-soft-hoteles-tarificador.png"/>
                    </center>
                    <h3 class="text-center">Tarificador de llamadas</h3>
                    <p>El módulo de Tarificador permite registrar las llamadas salientes en su hotel, puede configurar las diferentes LADAS con el servicio y tarifa para cobrar, definiendo si es por minuto o por llamada. (Incluido en tu renta anual)</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Reporte ForeCast" src="/images/products/nsh/inelco-nsh-timbre.png"/>
                    </center>
                    <h3 class="text-center">Reservación en línea con pago PayPal</h3>
                    <p>Módulo se adquiere por separado.</p>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-md-12">
                   <a style="text-decoration: none" href="{{ url('national-soft/ns-hoteles/caracteristicas') }}"><button id="btn-nsh-conocemas" type="button" class="btn btn-lg center-block">Conocer más características</button></a> 
                </div>
                
            </div>
        </div>
    </section>

    @include('national-soft.ns-hoteles.menu-nsh')

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
