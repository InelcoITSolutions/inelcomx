<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Dedicados a ofrecer soluciones tecnológicas y consultoría de calidad para asesorar e implementar sistemas aspel, de restaurantes, facturación y CRM para pequeñas y medianas empresas." name="description">
    <meta content="soluciones de tecnología, consultoría, asesoria, capacitación, sistemas, aspel, cursos, national-soft, soluciones para restaurantes, sistemas de administración, aspel, soft-restaurant" name="keywords">
    <meta content="Inelco IT Solutions S.A de C.V" name="author">
    <meta content="Index, Follow" name="robots"> {{-- esto eliminara la cache --}}
    <meta http-equiv="expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
    <meta https-equiv="expires" content="0">
    <meta https-equiv="Cache-Control" content="no-cache">
    <meta https-equiv="Pragma" CONTENT="no-cache">
    <title>Inelco IT Solutions | Promociones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png"> {{--
    <link href="/css/ripples.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/footerprincipal.css">
    <link rel="stylesheet" href="/css/mis-estilos.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/component.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/new/animate.min.css">
    <link rel="stylesheet" href="/css/new/font-awesome.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/icomoon/style.css">
    <link rel="stylesheet" href="/fonts/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800">
    <link rel="canonical" href="https://inelco.mx/">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css"> {{--
    <link rel="stylesheet" href="/css/normalize.css"> --}}
    <link rel="stylesheet" href="/css/banner-styles.css">
    <link rel="stylesheet" href="/css/icon-hover.css">
    <link rel="stylesheet" href="/css/my-tabs.css">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/promociones/promociones.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
    <link href="/css/products-styles.css" rel="stylesheet"/>
</head>

<body>
    <header class="top-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-xs-3">
                    <ul>
                        <li><a id="twi" href="https://twitter.com/inelcoit" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/inelcoitsolutions/" target="_blank"><span class="icon-facebook"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-xs-9">
                    <ul>
                        <li><span class="icon-phone"></span><a href="tel:528113522222"> (81) 1352 2222</a></li>
                        <li><span class="icon-mail5"></span><a href="mailto:contacto@inelco.com.mx"> contacto@inelco.com.mx</a></li>
                        <li><span class="icon-location"></span><a href="https://www.google.com/maps/place/Inelco+IT+Solutions/@25.678022,-100.289007,16z/data=!4m5!3m4!1s0x0:0xa261ff913e98ee9e!8m2!3d25.6780221!4d-100.2890072?hl=es-MX" target="_blank"> Cintermex, Local 18PB, Monterrey, México.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

@include('promociones.banner-promociones')
<!-- =========================================================
        INICIO   Sección que muestra el diseño de la página
    -+-+-+-+-+-+-+-+-+-+-+-+-+--+-+-+-+-+-+-+-+-+-+-+-+-+-+-+- -->
    <div id="promociones">
        <div class="container">
            <div class="row">
{{--                 <div class="col-md-8 col-md-offset-2">

                </div>  
 --}}       </div>
            <div class="row">
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo.png" alt="" id="scnb" class="img-responsive">
                    </p>
                    <br>
                    <h3 align="center">
                        <span class="special-text">Automatización</span> <br/>de procesos
                    </h3>
                </div>
                <div class="col-md-4">
                    <p align="center">
                        Compra el kit <br/><span style="color:#92232f;">Aspel SAE</span>+<span style="color:#009cb5;">Aspel COI</span>
                        +<span style="color:#e36800;">Aspel NOI</span> 
                        <br>y llévate de regalo:
                        <br><span style="color:#4c8b2b;">Aspel BANCO</span><br/> 
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        
                        <a href="{{ url('/promocion-sae-coi-noi-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
                <hr>
            </div>


            <div class="row separador-vertical">
                <!-- Promoción SAE + BANCO -->
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/sae-banco/logos/inelco-promocion-sae-banco-logo-small.png" alt="" class="img-responsive">
                    </p>
                    <br/>
                    <h3 align="center">
                        <span class="special-text">Máximo</span> <br/>control del efectivo
                    </h3>
                    <br/>
                    <p align="center">
                        Combo <br/><span style="color:#92232f;">Aspel SAE</span> + <span style="color:#4c8b2b;">Aspel BANCO</span><br/> a sólo: $12,799*
                    </p>
                    <br>
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        <a href="{{ url('/promocion-sae-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>

                <!-- Promoción COI + NOI -->
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/coi-noi/logos/inelco-promocion-coi-noi-logo.png" alt="" class="img-responsive">
                    </p>
                    <br/>
                    <h3 align="center">
                        <span class="special-text">Excelencia</span> <br/>en el manejo del capital humano
                    </h3>
                        <br>
                        <p align="center">
                             Combo <br/><span style="color:#009cb5;">Aspel COI</span> + <span style="color:#e36800;">Aspel NOI</span><br/> a sólo: $10,199*
                        </p>
                        <br>
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        <a href="{{ url('/promocion-coi-noi') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
                <!-- Promoción COI + BANCO -->
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/coi-banco/logos/inelco-promocion-coi-banco-logo.png" alt="" class="img-responsive">
                    </p>
                    <br/>
                    <h3 align="center">
                         <span class="special-text">Control total</span> <br/>del registro de finanzas
                    </h3>
                    <br>
                        <p align="center">
                             Combo <br/><span style="color:#009cb5;">Aspel COI</span> + <span style="color:#4c8b2b;">Aspel BANCO</span><br/> a sólo: $8,599*
                        </p>
                        <br>
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        <a href="{{ url('/promocion-coi-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
            </div>

            <!-- Promoción COI + BANCO -->
            {{-- <div class="row grey-space" id="changePosition">
                <div class="col-md-3" id="blockA">
                    <div class="text-center">
                        <a href="https://survey.zohopublic.com/zs/3fCunm" class="btn btn-promo">¡Contáctame!</a>
                        <br>
                        <a href="{{ url('/promocion-coi-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
                <div class="col-md-3" id="blockB">
                    <h3 align="center">
                        <span class="special-text">Control total</span> <br/>del registro <br/>de finanzas
                    </h3>
                </div>
                <div class="col-md-3" id="blockC">
                    <p align="center">
                        El combo <br/><span style="color:#009cb5;">Aspel COI</span> + <span style="color:#4c8b2b;">Aspel BANCO</span><br/> incluye:
                    </p>
                    <br/>
                    <div class="center-block">
                        <ul>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel COI 8.0 
                            <br/>(1 usuario/99 empresas)</p></li>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel BANCO 4.0
                            <br/>(1 usuario/99 empresas)</p></li>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Cupón de 20% en curso <br/>Aspel COI y Aspel BANCO</p></li>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Cupón de 20% en póliza <br/>de asesoria y soporte</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" id="blockD">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/coi-banco/logos/inelco-promocion-coi-banco-logo.png" alt="" class="img-responsive">
                    </p>
                </div>
            </div> --}}

        </div>
    </div>
<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+
        FIN   Sección que muestra el diseño de la página
    ========================================================= -->

    <span class="ir-arriba icon-arrow-up2"></span>

    <footer>
        <div class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <center><img src="/images/iis_logo_blanco.png" class="img-responsive"></center>
                        <p>Soluciones de tecnología para tu empresa</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 center-block">
                        <h6>¡Síguenos!</h6>
                        <hr>
                        <div class="center-block" style="margin-left: 38%">
                            <a id="twi" href="https://twitter.com/inelcoit" target="_blank"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/inelcoitsolutions/" target="_blank"><span class="icon-facebook"></span></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h6>Sitios relacionados</h6>
                        <hr>
                        <ul>
                            <li><a style="text-decoration: none" href="http://syca.com.mx/" target="_blank">Syca</a></li>
                            <li><a style="text-decoration: none" href="http://solucionespararestaurantes.mx/" target="_blank">Soluciones para restaurantes</a></li>
                            <li><a style="text-decoration: none" href="http://aspelsoluciones.com/" target="_blank">Aspel soluciones</a></li>
                            <li><a style="text-decoration: none" href="https://www.comprobantesfiscales.org/" target="_blank">Comprobantes fiscales</a></li>
                            {{--
                            <li><a href="" target="_blank">Lemon Development</a></li>
                            <li><a href="" target="_blank">Asegurame ya!</a></li>
                            <li><a href="" target="_blank">ISCO Consultores</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h6>Suscribete</h6>
                        <hr>
                        <p class="p-css">Enterate de las últimas noticias e información sobre descuentos y promociones</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section id="footer">
        <div class="container">
            <div class="row derechos-res">
                <div class="col-md-12">
                    <p>Copyright © Todos los Derechos Reservados Inelco IT Solutions S.A. de C.V. Monterrey, México 2018</p>
                </div>
            </div>
        </div>
    </section>
    
 

     <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>

    <script src="/js/jquery.js"></script>
    <script src="/js/banner.js"></script>
    <script src="/js/animate-slider.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/hover-services.js"></script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-88068915-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script>
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = this.href.split('#');
        $('.nav-tabs').filter('a[href="#' + target[1] + '"]').tab('show');
    })
    </script>
    <script>
    $("body").attr('pagina', 'Inicio');
    </script>
    <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/header.js"></script>
    <script src="/js/toggleMenu.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/custom.js"></script>
    <script>
    $(document).ready(function() {

        $('.ir-arriba').click(function() {
            $('body, html').animate({
                scrollTop: '0px'
            }, 700);
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('.ir-arriba').fadeIn(500);
            } else {
                $('.ir-arriba').fadeOut(500);
            }
        });

        /*$(window).scroll(function(){
            var barra = $(window).scrollTop();
            var posicion =  (barra * 0.10);
            $('.sections').css({
                'background-position': '0 -' + posicion + 'px'
            });
        });*/

        var nombre = $('body').attr('pagina');
        $(".navbar-nav li").each(function(index, element) {
            //console.log( index + ": " + $( this ).text() );

            if ($(this).attr("esta")) {
                var actual = $(this).attr("esta");
                if (actual === nombre) {
                    $(element).addClass("active");
                    //console.log( index + ": " + $( this ).text() );
                    return false;
                }
            }
            /*else{
                                console.log("No tiene el atributo esta: "+ index + ": " + $( this ).text() );
                            }*/
        });
    });
    </script>
    <script type="text/javascript">
    var $zoho = $zoho || {};
    $zoho.salesiq = $zoho.salesiq || { widgetcode: "1dc4c98165c407cfefa99db3ae1a0e5c915f5a241c58e53e7a7a3a1f85989e2a", values: {}, ready: function() {} };
    var d = document;
    s = d.createElement("script");
    s.type = "text/javascript";
    s.id = "zsiqscript";
    s.defer = true;
    s.src = "https://salesiq.zoho.com/widget";
    t = d.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(s, t);
    d.write("<div id='zsiqwidget'></div>");
    </script>
    {{--
    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <script>
    $.material.init();
    </script>
    --}}
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-97845785-3', 'auto');
    ga('send', 'pageview');
    </script>    
</body>

</html>