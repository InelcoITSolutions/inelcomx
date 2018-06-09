@extends('templates.principal')

@section('name_title','SAE Móvil | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.sae.banner-sae')

    <section class="secciones sae-pages" id="mas">
        <div class="container">
            <h2 class="title-h2">SAE Móvil</h2>
            <h3 class="title-h3">Se sincroniza con Aspel SAE para controlar desde cualquier lugar las operaciones de tu empresa.</h3>
            
            <div class="row">                
                <div class="col-md-6">  
                    <h5 class="title-h5">Control desde dispositivos móviles</h5>
                    <ul>
                        <li>Con tu smartphone o tablet puedes acceder y actualizar en línea de forma fácil y oportuna la información de tu negocio.</li>
                        <li>Con la interfaz mejorada tienes mayor facilidad de navegación, contenido organizado y más funciones de Aspel SAE que te ayudarán a potenciar tu trabajo diario.</li>
                    </ul>          
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/sae/inelco-aspel-sae-movil-pedidos-y-graficas.png" alt="sae movil" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sae-pages" id="beneficios"> 
        <div class="container">
            <h3 class="title-h3">Beneficios</h3>
            <div class="row interfaz">
                <div class="col-md-4">
                    <center><img src="/images/products/sae/inelco-sae-movil-consultas-vendedores-clientes.png" alt="SAE Móvil consultas, vendedores y clientes" class="img-responsive logo-produ"></center>                      
                    <h5 class="title-h5">Consultas de clientes y vendedores</h5>
                    <p class="p-css">Conéctate a tu propia nube, genera cotizaciones y obtén mayor información en las consultas de clientes, contactos, vendedores, productos y almacenes.</p>
                </div>
                <div class="col-md-4">
                    <center><img src="/images/products/sae/inelco-sae-movil-moneda-extranjera.png" alt="moneda extranjera" class="img-responsive logo-produ"></center>
                    <h5 class="title-h5">Cotizaciones con moneda extranjera</h5>
                    <p class="p-css">Al momento de generar cotizaciones y pedidos, también puedes realizar el cambio a moneda extranjera.</p>
                </div>
                <div class="col-md-4">
                    <center><img src="/images/products/sae/inelco-sae-movil-cotizaciones-pedidos.png" alt="cotizaciones pedidos" class="img-responsive logo-produ"></center>
                    <h5 class="title-h5">Cotizaciones y pedidos en tiempo real</h5>
                    <p class="p-css">Consulta la información de tus clientes y almacenes que tus vendedores han dado de alta para las cotizaciones y pedidos.</p>
                </div>
            </div>
            <div class="row interfaz">
                <div class="col-md-4">
                    <center><img src="/images/products/sae/inelco-sae-movil-dispositivos-nube.png" alt="dispositivos en la nube" class="img-responsive logo-produ"></center>                      
                    <h5 class="title-h5">Conexión con SAE en mi propia Nube</h5>
                    <p class="p-css">Activa la conexión de tu propia nube para intercambiar información entre tu equipo de trabajo.</p>
                </div>
                <div class="col-md-4">
                    <center><img src="/images/products/sae/inelco-sae-movil-estadisticas.png" alt="sae movil estadisticas" class="img-responsive logo-produ"></center>
                    <h5 class="title-h5">Estadísticas de tu negocio</h5>
                    <p class="p-css">Crea y envía por correo electrónico o bluetooth estadísticas personalizadas de acuerdo a tus necesidades.</p>
                </div>
                <div class="col-md-4">
                    <center><img src="/images/products/sae/inelco-sae-movil-almacen-lista-precios.png" alt="almacen lista precios" class="img-responsive logo-produ"></center>
                    <h5 class="title-h5">Control y consulta de inventarios</h5>
                    <p class="p-css">Entérate en cualquier momento de las existencias por almacén y de las listas de precio asignadas al producto.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae"> 
        <div class="container">
            <h3 class="title-h3">Descargar Aspel-SAE Móvil</h3>
            <div class="row">
                <div class="col-md-12">        
                    <p class="p-css">Para utilizar SAE Móvil, tu empresa debe tener contratado una licencia (base) de ASPEL-SAE 6.0 y realizar la configuración correspondiente para acceder a la información. De igual forma, requieres de una licencia de usuario adicional para usar esta app. Disponible para dispositivos iOS (versión 6.0 o superior) y dispositivos Android (versión 4.0 o superior).</p>

                    <div class="hover14 column">
                        <div>
                            <figure><a href="https://itunes.apple.com/us/app/aspel-sae-movil-2/id1084495908?l=es&ls=1&mt=8" target="_blank"><img src="/images/products/app store.png" class="img-responsive"/></a></figure>
                        </div>
                        <div>
                            <figure><a href="https://play.google.com/store/apps/details?id=com.aspel.SAEMovil" target="_blank"><img src="/images/products/google-play.png" class="img-responsive"/></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('aspel.sae.menu-sae')
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