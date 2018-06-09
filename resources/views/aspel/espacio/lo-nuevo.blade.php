@extends('templates.principal')

@section('name_title','Lo Nuevo Espacio Aspel | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.espacio.banner-espacio')

    <section class="secciones espacio-pages nuevo-espacio" >
        <div class="container">
            <h2 class="title-h2"><strong>Lo nuevo</strong></h2>
            <h3 class="title-h3">Te damos mayor movilidad a tus operaciones con la descarga masiva y control de datos de acceso, para un intercambio de información eficiente.</h3>
            
           <div class="row" >
            <div class="col-md-6 imagencontainer">
                    <img src="/images/products/espacio/inelco-aspel-espacio-buzon-contable.jpg"  data-zoom-image="/images/products/espacio/inelco-aspel-espacio-buzon-contable.png"  alt="catalogo de metodos de pago" class="img-responsive zoom2">
                </div>                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Cuenta con buzón contable  </strong></h5>
                    <p >Esta función de ⓔspacio Aspel permite la administración e intercambio de información entre clientes y despachos contables de manera sencilla y eficiente. Organiza los comprobantes fiscales de las operaciones contables para su registro automático en Apel-COI. </p>
                    <p>¡Es el fin de la era de los papeles! Ideal para despachos contables o empresas con sucursales.</p>   
                        
                </div>
               
            </div>
            <div class="row" id="mas">                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Descarga masiva de documentos </strong></h5>
                    <p >Ahora es más rápido descargar los documentos que necesitas desde su consulta. Con solo seleccionarlos marcando la columna “Descargar”, ⓔspacio Aspel creará un archivo ZIP listo para que lo compartas fácilmente.</p>   
                        
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/espacio/inelco-espacio-descarga-masiva-documentos.png"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>
            </div>
            <div class="row" >
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/espacio/inelco-espacio-lo-nuevo-mover-operaciones.png" alt="catalogo de metodos de pago" class="img-responsive ">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5"><strong>Mayor movilidad en tus operaciones</strong></h5>
                    
                    <p>Utiliza la herramienta “Mover” para cambiar la ubicación de una operación con sus respectivos archivos dentro del Buzón Contable. ¡Para tener tu información más organizada!</p>
                </div>                                            
            </div>

             <div class="row" >                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Más herramientas para la administración de archivos </strong></h5>
                    <p >Mejoramos tu trabajo con las opciones de “Copiar” y “Pegar” que incluimos en el menú principal. Úsalas para relacionar una o más operaciones, así como copiar archivos entre carpetas.</p>   
                        
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/espacio/Inelco-espacio-lo-nuevo-herramientas-administracion-archivos-copiar.png"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>
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
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom2").elevateZoom({
                zoomWindowPosition:2,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
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