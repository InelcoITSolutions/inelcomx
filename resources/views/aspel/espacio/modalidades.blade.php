@extends('templates.principal')

@section('name_title','Modalidades Espacio Aspel | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    
@endpush

@section('contenido')
    @include('aspel.espacio.banner-espacio')

    <section class="secciones espacio-pages soluciones-espacio" id="Buzon-contable">  
        <div class="container">
            <h2 class="title-h2">Modalidades</h2>
            
            <h4 class="p-css">Elige la que mejor se adapte a tus necesidades.</h4>
            <br>
            <br>
        <div class="table-responsive" >
            <table class="table table-bordered " align="center" style="text-align: center;" >
                  <thead>
                    <tr>
                      <th style="text-align: center;" class="bg-primary">1 GB GRATUITO*</th>
                      <th style="text-align: center;" class="bg-primary">ⒺSPACIO 4 GB</th>
                      <th style="text-align: center;" class="bg-primary">ⒺSPACIO 10 GB</th>
                      <th style="text-align: center;" class="bg-primary">ⒺSPACIO 40 GB</th>
                      <th style="text-align: center;" class="bg-primary">ⒺSPACIO 80 GB</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <td>1 usuario</td>
                      <td>10 usuarios</td>
                      <td>30 usuarios</td>
                      <td>Usuarios ilimitados</td>
                      <td>Usuarios ilimitados</td>
                    </tr>
                    
                  </tbody>
                </table>
                <p class="p-css">*Aplica para los Sistemas que se adquieran en modalidad Suscripción y Licencia al crear tu “Escritorio de Servicios”.<p>
            </div>
           
        </div>
    </section>

    <section class="secciones espacio-pages soluciones-espacio" id="soluciones">
        <div class="container">
            <h2 class="title-h2">Caractéristicas principales</h2>
            
            
            <div class="row">                
                <div class="col-md-6">  
                    <h3 class="title-h3">Servicio en internet</h3>
                    
                    <p class="p-css">Es un servicio en Internet que se hospeda en los servidores de Aspel, ubicados en centros de datos que cuentan con altos estándares de calidad y certificaciones internacionales en su infraestructura, en sus procesos, garantizando así la disponibilidad del servicio.<p>
                    
                    <p class="p-css">Se crea automáticamente desde los Sistemas Aspel:<p>
                    <ul>
                         <li>Administra claves de usuario para permitir o negar el acceso.</li>
                         <li>Cuando emites tu primer Comprobante Fiscal Digital mediante el servicio Aspel Sellado CFDI.</li>
                        
                    </ul>  
                    <p class="p-css">Tendrán acceso a ⓔspacio Aspel el administrador y los usuarios a los que él asigne permisos.<p>

                    <p class="p-css">ⓔspacio Aspel almacena en Internet diferentes archivos como hojas de cálculo de Microsoft Excel®, documentos de Microsoft Word®, archivos ZIP, XML, PDF, por mencionar algunos y puedes abrirlos, consultarlos y descargarlos con un solo clic, constituyendo así un centro de descarga para colaboradores, clientes y proveedores.<p>

                    <p class="p-css">ⓔspacio Aspel ofrece diferentes filtros para que la ubicación de datos en las consultas y estadísticas sea ágil y tan específica o general como se requiera.<p>

                                                                              
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/espacio/Inelco-aspel-espacio_buzón.png" adata-zoom-image="/images/products/espacio/Inelco-aspel-espacio_buzón.png"  alt="catalogo de metodos de pago" class="img-responsive zoom1">                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 imagencontainer" >
                    <img src="/images/products/espacio/Inelco-espacio-aspel-actual.png" alt="existencia costos" class="img-responsive "> 
                </div>
                <div class="col-md-6">
                    <h3 class="title-h3">Usuarios</h3>
                    <p class="p-css">Garantizamos la seguridad de tu información. Asigna permisos a través de claves de usuario de acuerdo a su perfil y ten controlados los accesos. ¡No encontrarás una solución más segura! Cada uno de los usuarios registrados en el ⓔspacio Aspel podrá consultar, agregar, modificar y/o eliminar:</p>
                        
                    <ul>
                        <li>Carpetas</li>
                        <li>Archivos</li>
                        <li>Buzón Contable y operaciones realizadas</li>
                        <li>Consultar información proveniente de un Sistema Aspel</li>

                    </ul>        
                </div>                                            
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-5">
                    <h3 class="title-h3">Requerimientos</h3>
                    
                    <p class="p-css">Un equipo con Internet y con navegador compatible:</p>

                    <ul>
                        <li>Internet Explorer 9 o superior.</li>
                        <li>Mozilla Firefox 24 o superior.</li>
                        <li>Google Chrome 30 o superior.</li>
                        <li>Se requiere Adobe Flash Player con el plug-in Shockwave Flash Object.</li>
                    </ul> 

                    <p class="p-css">Cualquiera de los siguientes sistemas:</p>

                    <ul>
                        <li><a href="{{ url('aspel-sae')}}">Aspel-SAE 6.0</a></li>
                        <li><a href="{{ url('aspel-caja')}}">Aspel-CAJA 4.0</a></li>
                        <li><a href="{{ url('aspel-noi')}}">Aspel-NOI 8.0</a></li>
                        <li><a href="{{ url('aspel-coi')}}">Aspel-COI 7.0</a></li>
                        <li><a href="{{ url('aspel-banco')}}">Aspel-BANCO 4.0</a></li>
                    </ul>          
                </div>
                
            </div>
            
        </div>
    </section>

    
    

     

       @include('aspel.espacio.menu-espacio')

@endsection

@push('add-js')
    <script src="/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom1").elevateZoom({
                zoomWindowPosition: 10,
                /*zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,*/
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom2").elevateZoom({
                zoomWindowPosition:2,
                /*zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,*/
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>

    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush