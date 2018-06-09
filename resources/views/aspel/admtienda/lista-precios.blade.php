@extends('templates.principal')


@section('name_title','Lista Precios ADM Tienda| Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.admtienda.banner-admtienda')

    <section class="descripcion-prod desc-admtienda secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center" id="mas">
                        <strong>Lista de Precios</strong>
                    </h2>
                    <h2 align="center">Elige la que mejor modalidad que se adapte a tus necesidades.</h2>
                  
                </div>


             </div>

             <div class="row">
             <div class="col-md-2">
             </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/ADMTienda/Inelco-precio-basico.png"/>
                        </center>
                        <h5  align="center"><strong>VERSIÓN BÁSICA</strong></h5>
                        <h5  align="center">$99</h5>
                        <p align="center">Al mes IVA incluido.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/ADMTienda/Inelco-precio-premium.png"/>
                        </center>
                        <h5  align="center"><strong>VERSIÓN PREMIUM</strong></h5>
                        <h5  align="center">$159</h5>
                        <p align="center">Al mes IVA incluido.</p>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
                                      
                
        
            <a href="{{url('/contacto')}}" >
                            <div class="col-md-12">
                            <p class="text-center"><input class="btn btn-primary btn-lg"  value='Lo quiero' /></p>
                            </div>
            </a>
            </div>
        </div>
    </section>


    <section class="descripcion-prod desc-admtienda secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center" id="mas">
                        <strong>Requerimientos del sistema</strong>
                    </h2>
                   
                  
                </div>


             

             
             <div class="col-md-12">
             <div class="col-md-6">
                <h3 align="center" id="mas">
                        <strong><b>Modalidades de acceso:</b></strong> 
                </h3>
                        <p>Requieres un equipo conectado a Internet con navegador web con soporte AJAX como los siguientes:</p>
                        <ul>
                            <li>Si ya eres usuario de Aspel ADM ingresa con los mismos datos.</li>
                            <li>Si eres usuario nuevo, selecciona Prueba 30 días y después confirma tu registro.*</li>
                            <li>En caso de que aún no tengas una empresa y quieres probarla, utiliza la opción Demostración de la App.*</li>
                        </ul>
                        <p>*Disponible en la versión Premium para Sistemas Android.</p>
            </div>
            <div class="col-md-6">
                        <h3 align="center" id="mas">
                        <strong><b>Requerimientos de la App:</b></strong>
                        
                        </h3>
                        <p>Para poder utilizar la app ADM Tienda requieres:</p>
                        
                        <ul>
                            <li>Tablet mínimo 10’’.</li>
                            <li>Android 4.2 o superior</li>
                            <li>iOS 9 o superior</li>
                            <li>Conexión a Internet (para registro y sincronización con <a href="" style="text-decoration: none;">Aspel ADM</a>)</li>
                            <li>Bluetooth</li>
                        </ul>
                        
                </h3>

             </div>
        </div>
                
            
        </div>
    </section>
                       
        
    </section>


       
    
    
    
    @include('aspel.admtienda.menu-admtienda')

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