@extends('templates.principal')

@section('name_title','Lo Nuevo SAE Nube | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.saenube.banner-saenube')

    <section class="secciones sae-pages nuevo-sae" >
        <div class="container">
            <h2 class="title-h2"><strong>Lo nuevo</strong></h2>
            <h3 class="title-h3">Aspel-SAE Nube te ofrece su poderosa funcionalidad con todos los beneficios de la nube, lo que representa máxima movilidad.</h3>
            
            <div class="row" id="mas">                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Emite facturas electrónicas las 24 horas con addendas y complementos </strong></h5>
                    <p class="p-css">Cumpliendo con los requisitos fiscales vigentes, emite tus facturas de manera muy rápida y fácil de usar.</p>   
                    <p>No te quedes atrás y adquiere esta herramienta de trabajo en donde el tiempo para el acceso a la empresa no importa.</p>      
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/saenube/inelco-saenube-lonuevo-beneficios.jpg"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>
            </div>
            <div class="row" >
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/saenube/inelco-saenube-lonuevo-funcion-listprecio.jpg" alt="catalogo de metodos de pago" class="img-responsive ">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5"><strong>Nuevas funciones que sorprenden</strong></h5>
                    
                    <ul>
                        <li>Conoce la rotación y costo real de tu inventario.</li>
                        <li>Lleva el seguimiento de los pagos realizados por clientes y proveedores.</li>
                        <li>Maneja múltiples listas de precios.</li>
                        <li>Asigna hasta 4 impuestos por producto.</li>
                        <li>Establece políticas de oferta o descuentos.</li>
                        
                    </ul>          
                </div>                                            
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5"><strong>Conecta tus sucursales con SAE en mi propia Nube</strong></h5>
                    <p class="p-css">Configura el servicio de Internet Information Services (IIS) en tu Servidor e interactúa con tu equipo de trabajo por medio de una Red Privada Virtual (VPN).</p>
                    <ul>
                        <li>No requieres de una dirección IP pública fija o dominio.</li>
                        <li>Accede desde cualquier computadora con acceso a Internet.</li>
                        <li>Crea accesos personalizados para mayor seguridad.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-sae-nuevo-conecta-tus-sucursales.png" alt="conecta tus sucursales" class="img-responsive"> 
                </div>
            </div>
            <div class="row">     
                <div class="col-md-6">
                   <img src="/images/products/saenube/inelco-saenube-lonuevo-edocuenta.jpg" alt="conecta tus sucursales" class="img-responsive"> 
                </div>           
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Toma las mejores decisiones con los distintos reportes que te ofrecemos:</strong></h5>
                    <ul>
                        <li>Estados de cuenta.</li>
                        <li>Resumen de movimientos.</li>
                        <li>Antigüedad de saldos.</li>
                        <li>Resumen de facturas.</li>
                        <li>Corte de caja.</li>
                        <li>Ventas anuales.</li>
                        <li>Ventas y utilidad.</li>
                        <li>Lista de precios.</li>
                        <li>Movimientos al inventario.</li>
                        <li>Productos caducos.</li>
                        <li>Catálogo de kits y muchos más..</li>
                    </ul>     
                </div>
            </div>

            <div class="row">                               
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Facilidad en el control de los CFDI del Depósito de documentos</strong></h5>
                    <p class="p-css">Controla y maneja tus CFDI configurando un depósito de documentos digitales por empresa, disponible al instalar únicamente el sistema Aspel-SAE para gozar de este beneficio.</p>   
                </div>
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-aspel-sae-facilidad-en-el-control.png" alt="facilidad de control" class="img-responsive">
                </div> 
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-h5"><strong>Más funcionalidades de SAE Nube:</strong></h5>
                    <p class="p-css">Punto de venta:</p>
                    <ul>
                        <li>Maneja Aspel-SAE en un punto de venta. En la recepción de pagos se clasifica el ingreso, además calcula y registra el cambio, proporcionando el reporte de corte de caja.</li>
                    </ul>
                    <p class="p-css">Facilidades para el timbrado y cancelación de CFDI:</p>
                    <ul>
                        <li>Timbra varias facturas simultáneamente y solicita la cancelación para un grupo de documentos.</li>
                        <li>Reporte de cancelación para un mejor control de tus documentos cancelados.</li>
                    </ul>
                    <p class="p-css">Generación automática y masiva de facturas:</p>
                    <ul>
                        <li>Aspel-SAE es ideal para generar automáticamente documentos parecidos, tú le indicas el modelo y el grupo de clientes y el Sistema genera automáticamente las facturas, atendiendo las características del cliente.</li>
                    </ul>
                    <p class="p-css">Importación de campos libres:</p>
                    <ul>
                        <li>Importa los principales catálogos y los campos libres para facilitar la puesta en marcha del Sistema.</li>
                    </ul>
                </div>                                            
            </div>

            <div class="row">  
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-sae-movil-grafica-utilidad-de-venta.jpg" alt="SAE Movil" class="img-responsive">
                </div>                              
                <div class="col-md-6">  
                    <h5 class="title-h5">Con SAE Móvil puedes:</h5>
                    <ul>
                        <li>Consultar en todo momento la situación crediticia de tus clientes.</li>
                        <li>Localizar la dirección de tus clientes y ubicarlos geográficamente mediante el link a Google Maps®.</li>
                        <li>Revisar los pedidos remisionados y facturados.</li>
                        <li>Examinar los precios de los productos y sus existencias.</li>
                    </ul>
                    <a href="/aspel-saenube/sae-nube-movil" title="Ir a móvil">Leer más</a>  
                </div>
            </div>
        </div>
    </section>

    @include('aspel.saenube.menu-saenube')
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