@extends('templates.principal')

@section('name_title','Soluciones ADM Tienda | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.admtienda.banner-admtienda')

    <section class="secciones admtienda-pages soluciones-admtienda" id="notas-venta">  
        <div class="container">
            <h2 class="title-h2">Notas de venta</h2>
            <h3 class="title-h3">Con ADM Tienda generas notas de venta en segundos, imprímelas y envíalas por correo electrónico a tus clientes.</h3>
             <div class="row">                
                <div class="col-md-6">  
                   
                   <br>
                   <br>
                   <ul>
                        <li>Genera las notas de venta desde tu tablet de manera rápida y sencilla.</li>
                        <li>Envía el ticket por correo electrónico o imprímelo.</li>
                        <li>Emite la factura al momento del cobro o a través del portal de facturación.</li>
                        

                    </ul>
                </div>
            
            <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-notas-venta.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>
            </div>
        </div>
    </section>

    <section class="secciones  admtienda-pages soluciones-admtienda" id="clientes">
        <div class="container">
            <h2 class="title-h2">Clientes</h2>
            <h3 class="title-h3">Registra y administra fácilmente datos generales y comerciales de tus clientes.</h3>

            <div class="row"> 
            <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-clientes.png" alt="inventario y servicios" class="img-responsive ">                    
            </div>

                           
                <div class="col-md-6">  
                    <h4 class="title-h3">Eficaz seguimiento de clientes</h4>
                    
                    <ul>
                        <li>Registra los datos generales y comerciales requeridos para agilizar la captura de comprobantes.</li>
                        <li>Controla los días y límites de crédito.</li>
                        <li>Ubica la dirección del cliente en Google Maps® de manera sencilla.</li>
                    </ul>
                       
                              
                </div>
                
            </div>
            
        </div>
    </section>

    <section class="secciones  admtienda-pages soluciones-admtienda" id="productos">
        <div class="container">
            <h2 class="title-h2">Productos</h2>
            <h3 class="title-h3">Consulta la información detallada de tus productos y visualiza la fotografía de cada uno para identificarlos fácilmente.</h3>
            
            <div class="row">                
                <div class="col-md-6">  
                    <h4 class="title-h3">Poderoso catálogo para administrar tus productos</h4>
                    
                    <ul>
                        <li>Escaneo del código de barras para ventas y control de existencias.</li>
                        <li>Clasifica tus productos por categoría.</li>
                        <li>Incluye la imagen de tu producto para su fácil identificación.</li>
                        <li>Amplia descripción y definición de precios en pesos y dólares.</li>
                    </ul>
                       
                              
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-productos.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>
            </div>
            
        </div>
    </section>

   
    <section class="secciones  admtienda-pages soluciones-admtienda" id="movimientos-caja">
        <div class="container">
            <h2 class="title-h2">Movimientos de caja</h2>
            <h3 class="title-h3">Lleva el control de tu negocio, conoce el detalle de tus ingresos y egresos.</h3>
            
            <div class="row">   
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-arqueo-caja.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>

                <div class="col-md-6">  
                    <h4 class="title-h3">Mantén una visión clara de tus ventas</h4>
                    
                    <ul>
                        <li>Movimientos de caja.</li>
                        <li>Arqueo de caja.</li>
                        <li>Pagos con tarjeta.</li>
                    </ul>
                     
                              
                </div>
                
            </div>

            <div class="row">   
                

                <div class="col-md-6">  
                    <h4 class="title-h3">Control total de tu efectivo</h4>
                    
                    <ul>
                        <li>Ingresa otros movimientos que se generen en tu negocio por concepto de entradas y/o salidas de dinero, desde el alta de la nota de venta.</li>
                       
                    </ul>
                     
                              
                </div>

                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-movimiento-caja.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>
                
            </div>
            
        </div>
    </section>

    <section class="secciones  admtienda-pages soluciones-admtienda" id="administra-venta">
         <div class="container">
            <h2 class="title-h2">Administra tu punto de venta</h2>
            <h3 class="title-h3">Controla los accesos de los dispositivos y cajeros para mayor seguridad en tu punto de venta.</h3>
            
            <div class="row">                
                <div class="col-md-6">  
                    <h4 class="title-h3">Gestiona los accesos y protege tu información</h4>
                    
                    <ul>
                        <li>El administrador será quién autorice los dispositivos y cajeros que tendrán acceso para el registro de ventas.</li>
                        
                    </ul>
                       
                              
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-cajeros.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>
            </div>
        
        </div>
    </section>

     <section class="secciones  admtienda-pages soluciones-admtienda" id="mas-soluciones">
        <div class="container">
            <h2 class="title-h2">Más Soluciones</h2>
            
            
            <div class="row">   
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/lnelco-adm-tienda-soluciones-estadisticas.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>

                <div class="col-md-6">  
                    <h4 class="title-h3">La solución inmediata para tu negocio</h4>
                    
                    <p>Toma decisiones al momento y consulta las estadísticas de:</p>
                    <ul>
                        <li>Los 5 productos más vendidos.</li>
                        <li>Notas de venta por hora.</li>
                        <li>Formas de pago.</li>
                    </ul>

                    <p>Los datos se obtienen de la información almacenada en el dispositivo y se pueden obtener aplicando los filtros.</p>
                     
                              
                </div>
                
            </div>

            <div class="row">   
                

                <div class="col-md-6">  
                    <h4 class="title-h3">Integrado con Aspel ADM</h4>
                    
                    <p>Consolida las operaciones de los puntos de venta en sinergia con <a href="{{ url('aspel/adm') }}">Aspel ADM</a>, el Sistema de Administración Móvil que gestiona fácilmente inventarios, facturas, ventas, compras y cobranza desde la nube, ofreciendo estadísticas y reportes de clientes, productos y utilidades.</p>
                     
                              
                </div>

                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-adm-tienda-soluciones-integra-adm.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>
                
            </div>
            
        </div>
    </section>

    @include('aspel.admtienda.menu-admtienda')

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