@extends('templates.principal')

@section('name_title','National Soft | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>

    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.banner-national-soft')

    <section id="national-softt" class="descripcion-prod nsoft-pages secciones ">
        <div class="container">
            <div class="row gray-img">

            <div class="col-md-12">
             <h2>Desarrollamos tecnología de punta.</h2>
             <p style="text-align: center;">Nos especializamos en el desarrollo de software ofreciéndolo en un esquema comercial favorable para la adopción de los negocios MiPyMes, apoyando la tecnificación y aumento de competitividad de las mismas.</p>
             <br><br>
             </div>

              <div class="row gray-img">
               
                 <div class="col-md-6" id="inelco-software">
                  <div class="col-md-12">
                    <img src="/images/products/sr/softrestaurant.png" alt="Aspel" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12" id="mas">

                    <p style="text-align:justify;">Software de administración y control especializado para todo tipo de restaurantes y negocios gastronómico.<br>
                    Reduce mermas, mejora tiempos y detecta áreas de oportunidad para impulsar tu negocio.<br>
                    Cons sus versiones Standard yProfesional se adapta a tus necesidades cualquiera que sea el tamaño o giro de tu negocio.</q>
                    </p>
                  <br>
                     <a style="text-decoration: none" href="{{ url('national-soft/soft-restaurant') }}">
                        <button id="btn-national" type="button" class="btn btn-lg center-block ">Más Información</button>
                     </a>
                  </div>
                 </div>
                 

                 
                 <div class="col-md-6" id="inelco-software" > 
                  <div class="col-md-12">
                    <img src="/images/products/otm/Inelco-on-the-minuthe.png" alt="National Soft" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                     <p style="text-align:justify;">Desarrollamos soluciones de control de asistencia y acceso por huella digital y reconocimiento facial <br> Puede concentrar y respaldar toda la información de los colabradores, incidencias, reportes.<br>
                     Nuestras terminales se adaptan a su empresa cualquiera que sea su giro de negocio.</p>
                  <br>
                      <a style="text-decoration: none" href="{{ url('national-soft/on-the-minute') }}">
                        <button id="btn-national" type="button" class="btn btn-lg center-block ">Más Información</button>
                     </a>
                  </div>
                 </div>
                </div>
                 
                <div class="row gray-img">

                
                 <div class="col-md-6" id="inelco-software">
                  <div class="col-md-12">
                    <img src="/images/products/sf/Inelco-soft-factura-logo.png" alt="Aspel" class="img-responsive first">
                    <br>
                  </div>

                  <div class="col-md-12">
                    <p style="text-align:justify;">Es el sistema que permite realizar o programar sus comprobantes fiscales vía internet de una manera eficiente, práctica y segura. <br>Lo puedes realizar desde cualquier navegador de internet y aplicación móvil Android.<br>
                    Posee una interfaz amigable y solo necesitas tener conexión a internet para poder usar el sistema.</p>
                    <br>
                     <a style="text-decoration: none" href="{{ url('national-soft/soft-facturas') }}">
                        <button id="btn-national" type="button" class="btn btn-lg center-block ">Más Información</button>
                     </a>
                  </div>
                 </div>
                 
                

               
                 <div class="col-md-6" id="inelco-software">
                  <div class="col-md-12">
                    <img src="/images/products/nsh/inelco-logo-nsh.png" alt="Aspel" class="img-responsive first">
                    <br>
                  </div>

                  <div class="col-md-12">
                    <p style="text-align:justify;">Software de administración y control para hoteles y moteles en general que se adapta a tus necesidades. <br>
                    Realiza eficientemente los procesos diarios como entrada y salida de huéspedes, movimientos, reservaciones y cobro. Obtén toda la información que necesitas en los diferentes paneles y reportes para tener un control profesional de su hotel, motel o posada.</p>
                    <br>
                    <a style="text-decoration: none" href="{{ url('national-soft/ns-hoteles') }}">
                        <button id="btn-national" type="button" class="btn btn-lg center-block ">Más Información</button>
                     </a>
                  </div>
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
        $("body").attr('pagina','Productos');
    </script>   
@endpush
