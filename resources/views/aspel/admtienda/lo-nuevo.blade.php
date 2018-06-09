@extends('templates.principal')


@section('name_title','Lo nuevo ADM Tienda | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.admtienda.banner-admtienda')

    <section class="secciones admtienda-pages nuevo-admtienda" >
        <div class="container">
            <h2 class="title-h2"><strong>Lo nuevo</strong></h2>
            <h3 class="title-h3">Además de toda las características que ADM Tienda te ofrece, ahora en sinergia con Aspel ADM gestiona los movimientos de compra-venta desde la nube.</h3>
            
           <div class="row" >
            <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-soluciones-sinergia-2.png"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>ADM Tienda + ADM  </strong></h5>
                    <p >En sinergia con Aspel ADM, el sistema de administración móvil que gestiona movimientos de compra-venta desde la nube consolida tus operaciones de punto de venta.</p>
                    <ul>
                        <li> Conoce los productos más vendidos</li>
                        <li> Catálogo de productos </li>
                        <li> Agiliza la captura con el enlace de documentos </li>
                        <li> Genera el CFDI a clientes que lo soliciten </li>
                        <li> Registra tus productos y visualízalos al instante </li>
                    </ul>  

                        
                </div>
               
            </div>
            <div class="row" id="mas">                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Tu punto de venta en la nube</strong></h5>
                      
                    <ul>
                        <li> Ofrece tus productos desde cualquier sitio con la comodidad de una tablet</li>
                        <li> Concluye tus ventas de mostrador de manera inmediata y exitosa </li>
                        <li> Agiliza el cobro de tus productos, mejorando la atención a tus clientes</li>
                        
                    </ul>  
                        
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-admtienda-lo nuevo-nota-venta.png"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>
            </div>
            <div class="row" >
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-ADMTienda-Pago.jpg" alt="catalogo de metodos de pago" class="img-responsive ">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5"><strong>Versión Básica</strong></h5>
                    
                     <ul>
                        <li> Generación de notas de venta</li>
                        <li> Catálogo de clientes</li>
                        <li> Catálogo de productos</li>
                        <li> Generación de facturas mediante una nota de venta.</li>
                        <li> Recepción de pagos (sin control de cuentas por cobrar)</li>
                        <li> 1 caja activa.</li>
                        <li> Cajeros ilimitados</li>
                        
                    </ul>  
                        
                </div>                                            
            </div>

             <div class="row" >                
                <div class="col-md-6">  
                    <h5 class="title-h5"><strong>Versión Premium </strong></h5>
                    <ul>
                        <li> Generación de notas de venta</li>
                        <li> Catálogo de clientes</li>
                        <li> Catálogo de productos</li>
                        <li> Generación de facturas mediante una nota de venta.</li>
                        <li> Recepción de pagos</li>
                        <li> Manejo y control de cuentas por cobrar</li>
                        <li> Control de existencias de productos.</li>
                        <li> Hasta 3 cajas activas.</li>
                        <li> Cajeros ilimitados</li>
                        
                    </ul>  
                           
                        
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/ADMTienda/Inelco-ADM-tienda-pago-con-tarjeta.png"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>
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