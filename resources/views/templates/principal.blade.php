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
    <title>@yield('name_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    {{-- <link href="/css/ripples.min.css" rel="stylesheet"> --}}
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
    @stack('add-css')
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
                        <li class="text-right">
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}"> Iniciar Sesión</a></li>
                                {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu menu-sesion" role="menu">
                                        <li>
                                            <a href="{{ url('home') }}"><i class="icon-user2"></i> Mi perfíl</a>
                                        </li>
                                        {{--<li><a href="{{ url('/logout') }}"><i class="icon-exit"></i> Cerrar sesión</a></li>--}}
                                        <li>
                                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-exit"></i> Cerrar sesión </a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <nav class="navbar navbar-default ">
        <!-- navbar-fixed-top -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">
                    <a href="{{url('/')}}"><img src="/images-new/inelco/logos/iis_logo_letras_azul.png" alt="Inelco IT Solutions" class="img-responsive" width="70"></a>
                </p>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav navbar-right">
                    <li esta="Inicio"><a href="{{ url('/')}}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                    <li esta="Servicios"><a href="{{ url('/servicios')}}">Servicios</a></li>
                    <li esta="Productos" class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> Productos<b class="caret"></b>
                                                </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="{{ url('aspel')}}"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> Aspel</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('aspel-sae')}}"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> SAE</a></li>
                                    <li><a href="{{ url('aspel-coi')}}">COI</a></li>
                                    <li><a href="{{ url('aspel-noi')}}">NOI</a></li>
                                    <li><a href="{{ url('aspel-banco')}}"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> BANCO</a></li>
                                    <li><a href="{{ url('aspel-caja')}}">CAJA</a></li>
                                    <li><a href="{{ url('aspel-prod')}}">PROD</a></li>
                                    <li><a href="{{ url('aspel-facture')}}">FACTURE</a></li>
                                    <li><a href="{{ url('aspel-adm')}}">ADM</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="{{ url('aspel')}}">Aspel en la nube</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('aspel-saenube')}}">SAE nube</a></li>
                                    <li><a href="{{ url('aspel-admtienda')}}">ADM Tienda</a></li>
                                    <li><a href="{{ url('aspel-espacio')}}">ⓔspacio</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="{{ url('national-soft')}}">National Soft</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('national-soft/soft-restaurant')}}">Soft Restaurant</a></li>
                                    <li><a href="{{ url('national-soft/on-the-minute')}}">On The Minute</a></li>
                                    <li><a href="{{ url('national-soft/soft-facturas')}}">Soft Facturas</a></li>
                                    <li><a href="{{ url('national-soft/ns-hoteles')}}">NS Hoteles</a></li>
                                </ul>
                            </li>
                            <li><a tabindex="-1" href="{{ url('incrementacrm')}}">Incrementa CRM</a></li>
                            <li><a tabindex="-1" href="{{ url('http://tractosoft.com/')}}" target="_blank">Tractosoft Systems</a></li>
                            <li><a tabindex="-1" href="{{ url('http://boxmecanic.com/')}}" target="_blank">Box Mecanic</a></li>
                        </ul>
                    </li>
                    <li esta="Calendario"><a href="{{ url('/calendario')}}">Calendario</a></li>
                    <li esta="Soporte" class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Soporte<b class="caret"></b>
                            </a>
                        <ul class="dropdown-menu MenProd" role="menu" aria-labelledby="dropdownMenu2">
                            <!-- <li role="presentation" class="dropdown-header">National Soft</li>-->
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/preguntas-frecuentes')}}">Preguntas frecuentes</a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/centro-de-descarga')}}">Centro de descarga</a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/base-de-conocimientos')}}">Base de conocimientos</a>
                            </li>
                            <!-- <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="softfacturas">Levantar ticket</a>
                                </li> -->
                        </ul>
                    </li>
                    <li esta="Contacto" class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Contacto<b class="caret"></b>
                            </a>
                        <ul class="dropdown-menu MenProd" role="menu" aria-labelledby="dropdownMenu2">
                            <!-- <li role="presentation" class="dropdown-header">National Soft</li> -->
                            <li role="presentation">
                                <a href="{{ url('/nosotros')}}" role="menuitem" tabindex="-1">Nosotros</a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/contacto')}}">Contáctanos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="buscador" style="width: 242px!important;">
                            <script>
                            (function() {
                                var cx = '009790934449038631271:txzi-w6kbgg';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                            })();
                            </script>
                            <gcse:search></gcse:search>
                        </div>
                    </li>
                    <!-- <li esta="Tienda"><a href="#contacto" class="ancla">Tienda</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    @if(Session::has('mensaje')) {{--
        <div class="alert alert-success">
            <div class="container-fluid">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cross2"></i></span>
                </button>
                <p style="text-align: center;font-weight: 600;color:black">{{ Session::get('mensaje') }}</p>
            </div>
        </div> --}}
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">¡Descarga exitosa!</h4>
                    </div>
                    <div class="modal-body">
                        <p>{{ Session::get('mensaje') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif 
    
    @push('add-js')
        <script>
            $(window).load(function() {
                $('#myModal').modal('show');
            });
        </script>
    @endpush

    @include('errors.errors')
    
    @yield('contenido')
    <span class="ir-arriba icon-arrow-up2"></span> @include('templates.footer')
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

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1144102389032524');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1"src="https://www.facebook.com/tr?id=1144102389032524&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    @stack('add-js')
</body>

</html>
