@extends('templates.principal')

@section('name_title','Soluciones SAE | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.saenube.banner-saenube')

    <section class="secciones sae-pages soluciones-sae" id="sae-en-la-nube">  
        <div class="container">
            <h3 class="title-h3">SAE Nube te ofrece su poderosa funcionalidad con todos los beneficios de la nube, lo que representa máxima movilidad.</h3>
            
            <h4 class="p-css">El Sistema Administrativo Empresarial más vendido te ofrece máxima conexión vía un enlace seguro. Activa tu propia nube y crece el potencial de tu negocio.</4>
            <div class="row">
                <div class="col-md-4">
                    <center><span class="icon-globe"></span></center>                      
                    <h5 class="title-h5">Acceso</h5>
                    <p class="p-css">Consulta la información de tus clientes, vendedores, facturas y cuentas por cobrar desde cualquier lugar y computadora.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-share2"></span></center>
                    <h5 class="title-h5">Comparte</h5>
                    <p class="p-css">Administra tus inventarios y sincroniza existencias en automático. Actualiza datos de compras y proveedores entre sucursales y oficinas.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-cloud-check"></span></center>
                    <h5 class="title-h5">Respaldo</h5>
                    <p class="p-css">Siempre tienes respaldos de información que se generan en automático. Sin necesidad de comprar un servidor propio.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <center><span class="icon-key2"></span></center>                      
                    <h5 class="title-h5">Seguridad</h5>
                    <p class="p-css">Crea accesos seguros y personalizados, lo que garantiza máxima privacidad de tus datos. La información vive en tus equipos.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-tree"></span></center>
                    <h5 class="title-h5">Inicia tu conexión segura</h5>
                    <p class="p-css">Para activar tu propia nube, sólo requieres de una Licencia (Base) y por cada sucursal necesitas adquirir licencias de usuarios adicionales.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-info-with-circle"></span></center>
                    <h5 class="title-h5">Guía de configuración</h5>
                    <p class="p-css">Consulta la guía paso a paso para configurar con éxito conexiones remotas por VPN en Aspel-SAE 6.0.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="soluciones">
        <div class="container">
            <h2 class="title-h2">SAE en mi propia nube</h2>
            <h3 class="title-h3">Sistema bajo control</h3>
            
            <div class="row">                
                <div class="col-md-6">  
                    <h4 class="title-h3">Manejo y control de tu empresa</h4>
                    
                    <p class="p-css">Desde el Escritorio de Servicios administra tus servidores virtuales contratados<p>
                       
                              
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/saenube/inelco-solucion-sae-nube-administracion.png" alt="inventario y servicios" class="img-responsive ">                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/saenube/inelco-solucion-sae-nube-contratacion.jpg" alt="existencia costos" class="img-responsive "> 
                </div>
                <div class="col-md-6">
                    <h4 class="title-h3">Elige solo lo que necesitas.</h4>
                    <p class="p-css"> Te damos la opción de contratar sólo el Servidor Virtual o adquirirlo con la versión actualizada de Aspel SAE.</p>
                        
                    </ul>          
                </div>                                            
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="title-h3">Mantén a salvo tu información</h4>
                    <ul>
                         <p class="p-css">Administra claves de usuario para permitir o negar el acceso.</p>
                        
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images/products/saenube/inelco-solucion-sae-nube-acceso-maquinas.png" alt="alta productos servicios" class="img-responsive "> 
                </div>
            </div>
            <div class="row">
            
                <div class="col-md-6">
                    <h4 class="title-h3">Respaldos automáticos</h4>
                    <ul>
                         <p class="p-css">Olvídate de generar los respaldos manuales, el resguardo de tu información se realiza a diario.</p>
                        
                    </ul>          
                </div>                                            
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="MasSoluciones"> 
        <div class="container">
            <h3 class="title-h3">Además sigue disfrutando de las múltiples soluciones para la administración de:</h3>
            
                
            
            <div class="container">
            <div class="col-md-2">

            </div>
                <div class="col-md-4">
                    
                    <ul>
                        <li>Inventarios</li>
                        <li>Clientes</li>
                        <li>Facturación</li>
                        <li>Cuentas por cobrar</li>
                        <li>Vendedores</li>
                        <li>Compras</li>
                        <li>Proveedores</li>
                        <li>Cuentas por pagar</li>
                        <li>Autofactura de Notas de Venta</li>

                    </ul>          
                </div>
                <div class="col-md-4">
                    <img src="/images/products/saenube/inelco-solucion-collage.png" align="right" alt="clientes y cuentas por cobrar" class="img-responsive">
                </div>
            </div>
             
        </div>
    </section>

    

    

    <section class="secciones sae-pages soluciones-sae" id="Interfacez"> 
        <div class="container">
           
            <div class="row interfaz">
                <h4 class="title-h4">Interfaz con los Sistemas Aspel</h4>
                <div class="col-md-3">
                    <center><a href="{{url('aspel-coi')}}"><img src="/images/products/inelco-coi-logo.png" alt="COI" class="img-responsive logo-produ"></a></center>                      
                    <br>
                    <br>
                    <p class="p-css">Genera las pólizas correspondientes a las ventas, compras, movimientos al inventario, abonos y cargos de cuentas por cobrar y por pagar. Con <a href="{{url('aspel-coi')}}">Aspel COI</a> la contabilización de las pólizas puede ser en línea y de acuerdo a los requisitos de la Contabilidad Electrónica.</p>
                </div>
                <div class="col-md-3">
                    <center><a href="{{url('aspel-prod')}}"><img src="/images/products/inelco-prod-logo.png" alt="PROD" class="img-responsive logo-produ"></a> </center>
                    <br>
                    <br>
                    <p class="p-css">Utiliza y actualiza el catálogo de inventarios de Aspel-SAE. <br><a href="{{url('aspel-prod')}}">Aspel PROD </a> éste provee los sub-ensambles y materias primas para formar las hojas de costos del producto terminado.</p>
                </div>
                <div class="col-md-3">
                    <center><a href="{{url('aspel-banco')}}"><img src="/images/products/inelco-banco-logo.png" alt="BANCO" class="img-responsive logo-produ"></a></center>
                    <br>
                    <br>
                    <p class="p-css"><a href="{{url('aspel-banco')}}">Aspel BANCO </a>Logra que todos los movimientos bancarios registrados actualicen en línea los saldos de las cuentas por cobrar y por pagar.</p>
                </div>
                <div class="col-md-3">
                    <center><a href="{{url('aspel-caja')}}"><img src="/images/products/inelco-caja-logo.png" alt="CAJA" class="img-responsive logo-produ"></a></center>
                    <br>
                    <br>
                    <p class="p-css">El catálogo de clientes y productos de los diferentes almacenes (tiendas) y el inventario de Aspel-SAE se actualiza por <a href="{{url('aspel-caja')}}">Aspel CAJA </a>así las ventas realizadas en los puntos de venta de Aspel-CAJA 3.5.</p>
                </div>
            </div>

            <div class="row" id="espacio">
                <h3 class="title-h3"><a href="#">ⓔspacio Aspel</a></h3>
                <div class="col-md-6">
                    <h5 class="title-h5">Valioso detalle del proveedor</h5>
                    <p class="p-css">Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva.</p>         
                    <p class="p-css">Te ofrece un Buzón Contable para la organización de las operaciones contables y una fácil y correcta contabilización de las mismas en Aspel-COI. Es ideal para despachos contables y empresas a las que les llevan la contabilidad o para empresas con sucursales. Ahora todos los documentos y archivos son digitales por lo que es el fin de la era de los papeles.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/products/inelco-espacio-aspel.png" alt="espacio aspel" class="img-responsive">
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