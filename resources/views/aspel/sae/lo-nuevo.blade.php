@extends('templates.principal')

@section('name_title','Lo Nuevo SAE | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
@endpush

@section('contenido')

@include('aspel.sae.banner-sae-nuevo')
    <section class="secciones sae-pages nuevo-sae">
        <div class="container">
            <h2 class="title-h2">Lo nuevo</h2>
            <h3 class="title-h3" style="color:#B81029;">Aspel-SAE 7.0 Te permite controlar inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos. </h3>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Nuevo y poderoso SAE 7.0</h5>
                    <p class="p-css"> Cumple con las nuevas dispociciones fiscales correspondientes a las reglas de validación del Anexo 20 </p>
                    <ul>
                    </ul>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" width="60%"  alt="catalogo de metodos de pago" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img src="/images/Inelco-logo-SAT-SAE70.png" width="40%" alt="catalogo de metodos de pago" class="img-responsive">
                    <span style="display:block;"></span>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">¿Que cambios trae la facturación electronica 3.3? </h5>
                    <ul>
                        <li>Timbrado de pagos parciales.</li>
                        <li>17 nuevos catálogos .</li>
                        <li>Nuevas reglas en la cancelación de facturas.</li>
                        <li>Timbrado al aplicar la cobranza</li>
                        <li>Modificación de la estructura para el XML</li>
                        <li>Formato de datos.</li>
                        <li>Reglas de cálculos entre otras</li>
                    </ul>
                    <a style="text-align: right;" href="/descargas/aspelsoluciones-guia-anexo20.pdf" target="_blank">
                              Conoce la guía para el anexo "20" 2017
                           </a>
                </div>
            </div>
            <section>
                <h2 class="title-h2">SAE Nube</h2>
            </section>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">¡Administra y controla tu empresa desde cualquier lugar! </h5>
                    <p class="p-css">Su poderosa funcionalidad con todos los beneficios de la Nube, lo que representa la máxima movilidad. Comparte tu información entre tus oficinas y sucursales en tiempo real, para la correcta toma de decisiones. </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images/products/sae/lo-nuevo/inelco-sae-nube.png" alt="catalogo de metodos de pago" class="img-responsive">
                </div>
            </div>
            <section>
                <h2 class="title-h2">Novedades</h2>
            </section>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/sae/lo-nuevo/inelco-barra-de-busqueda.png" alt="nuevo complemento INE" class="img-responsive zoom">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Barra de búsqueda </h5>
                    <p>Utiliza esta práctica herramienta para localizar información de tu interés y visualizarla inmediatamente sin perder tiempo. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Menú del sistema</h5>
                    <p class="p-css">Ahora te presentamos un diseño renovado con mejoras en cada menú, iconos y temas personalizables que incrementan tu productividad. </p>
                </div>
                <div class="col-md-6">
                    <img src="/images/products/sae/lo-nuevo/inelco-menu-del-sistema.png" alt="conecta tus sucursales" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/sae/lo-nuevo/inelco-temas-skin.png" alt="poliza editar datos comprobante" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Temas/ Skin</h5>
                    <p class="p-css">Selecciona el tema de tu sistema para una mejor visualización. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Módulo de perfiles</h5>
                    <p class="p-css">Administra los accesos al sistema e incluye la fotografía de los usuarios. ¡Protege tu información! </p>
                </div>
                <div class="col-md-6">
                    <img src="/images/products/sae/lo-nuevo/inelco-perfiles-usuario.png" alt="facilidad de control" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 64px">
        <div class="container">
           <h2 class="text-center">
                <span style="font-weight: bold">
                    ¿Aún no tienes Aspel SAE 7.0?
                </span>
                <span style="display:block;">
                    ¡Consiguelo ya!
                </span>     
            </h2>
                <span style="display:block; margin-top: 32px"></span>
                <span style="display:block;"></span>
                <a href="{{url('aspel-sae#contratar-sae')}}" style="text-decoration: none" >
                    <button id="btn-sae-prob1" class="btn  btn-lg center-block">
                        Lo quiero
                    </button>
                </a>
        </div>
    </section>
    @include('aspel.sae.menu-sae')
@endsection
@push('add-js')
    <script src="/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".zoom1").elevateZoom({
                zoomWindowPosition: 10,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                easing: true,
                scrollZoom: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".zoom2").elevateZoom({
                zoomWindowPosition: 2,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,
                easing: true,
                scrollZoom: true
            });
        });
    </script>
    <script>
        function numeros(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>
    <!--Script que sirve para validar solo letras en mayusculas y minusculas en el input-->
    <script>
        function minus(a) {
            tecla = (document.all) ? a.keyCode : a.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta letras en minusculas y mayusculas asi como las acentuada en la parte de \8 la diagonal es para poner otra tecla y el 8 es el valor del espaciado
            patron = /[A-Za-z ]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
    </script>
@stack('files-menu')
    <script>
        $("body").attr('pagina', 'Productos');
    </script>
@endpush