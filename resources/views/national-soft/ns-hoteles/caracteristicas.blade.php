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
                <h2><b>NS Hoteles se adapta a tus necesidades</b></h2>
                
            </div>
        </div>
        </div>
    </section>

    <section class="descripcion-nsh nsh-pages secciones" >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Control Front Desk</h2>
                   
                    <p>Panel visual de reservaciones con información del huésped y de la habitación.
                    <br><br>
                    Controle la salida de los huéspedes, el pago del consumo y la facturación de su estadía y consumos adicionales. Permita el check out automático haciendo el cargo a la habitación que no realizó su salida a la hora determinada.
                    <br><br>
                    Deshabilite habitaciones, ya sea por mantenimiento, limpieza o cualquier otro posible uso de la habitación.
                    <br><br>
                    Codifique la tarjeta de acceso de cada habitación al momento de realizar el check- in. <br> *Módulo de cerradura electrónica se adquiere por separado</p>
                    
                   
                   
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="inelco-softrestaurant" class="img-responsive" src="/images/products/nsh/inelco-national-soft-hoteles-control-front-desk-monitor-md.png"/>
                    </center>
                </div>
            </div>
        </div>
    </section>

     <section class="caracteristicas-prod nsh-pages secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="title-h2">Funciones de NS Hoteles 3.0</h2>
                </div>
                <div class="col-md-6">
                    
                    <h3 class="text-center">Control Front Desk</h3>

                    
                    <p style="text-align: justify;">
                    Panel visual de reservaciones con información del huésped y de la habitación.
                    Check in: Control en las entradas de los huéspedes desde una reservación o una entrada directa.
                    <br><br>
                    Check out: Controle la salida de los huéspedes, el pago del consumo y la facturación de su estadía y consumos adicionales.
                    <br><br>
                    Permita el check out automático haciendo el cargo a la habitación que no realizó su salida a la hora determinada.</p>
                  
                
                </div>
                <div class="col-md-6">
                   
                    <h3 class="text-center">Reservaciones y captura de datos</h3>
                    <p style="text-align: justify;">Envío de confirmación de reservación por e-mail.
                    <br><br>
                    Reservación y cobro a través de su página de internet con el Módulo de Reservaciones Online*.<br> *Módulo se adquiere por separado.
                    <br><br>
                    Capture los datos de sus huéspedes como nacionalidad, dirección o teléfono de contacto e identifíquelos con su foto para una mejor atención.
                    </p>
                </div>
                <div class="col-md-6">
                   
                    <h3 class="text-center">Funciones de seguridad para evitar fraudes</h3>
                    <p style="text-align: justify;">Establezca los privilegios por medio de perfiles protegidos por contraseña (administrador, recepcionista, etc.).
                    <br><br>
                    Control de acceso al sistema por huella digital *Hardware se adquiere por separado.
                    <br><br>
                    Solicitar permiso de administrador para modificar folios (cuentas) históricos (cargos, abonos, edición y cancelación) para modificaciones o aclaraciones.
                    </p>
                </div>
                <div class="col-md-6">
                   
                    <h3 class="text-center">Manejo de cobros</h3>
                    <p style="text-align: justify;">Tarifas de habitaciones y servicios por diferentes temporada.
                    <br><br>
                    Manejo de descuentos de servicios a la habitación y general.
                    <br><br>
                    Cuentas por cobrar y apertura de folios extras en la misma habitación.
                    <br><br>
                    Manejo de divisas configurable incluyendo tarifas en doláres. Control y registro de las entradas y retiros de dinero de la caja.
                    </p>
                </div>
                <div class="col-md-6">
                   
                    <h3 class="text-center">Facturación (disponible en México)</h3>
                    <p style="text-align: justify;">Facturación ilimitada en la renta anual.
                    <br><br>
                    Facturación de servicios adicionales a hospedaje mediante folios externos.   
                    <br><br>
                    Búsqueda rápida de facturas emitidas, con filtro de rango de fechas, usuario y cliente de facturación.
                    <br><br>
                    Personalización de los formatos de facturación.
                    </p>
                </div>
                <div class="col-md-6">
                   
                    <h3 class="text-center">Control de servicios de limpieza y ama de llaves</h3>
                    <p style="text-align: justify;">Pantalla de ama de llaves para monitorear limpieza de habitaciones.
                    <br><br>
                    Manejo de turnos de empleados ligados a los movimientos de caja.
                    <br><br>
                    Control de artículos y amenidades incluidas por habitación (control remoto de televisión y aire acondicionado, etc.)
                    <br><br>
                    
                    </p>
                </div>
               
                
        
            <div class="row">
                
                <div class="col-md-12">
                   <a style="text-decoration: none" href="{{ url('national-soft/ns-hoteles/caracteristicas') }}"><button id="btn-nsh-conocemas" type="button" class="btn btn-lg center-block">Conocer más funciones</button></a> 
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
