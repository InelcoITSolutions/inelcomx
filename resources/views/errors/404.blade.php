<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Dedicados a ofrecer soluciones tecnológicas y consultoría de calidad para asesorar e implementar sistemas aspel, de restaurantes, facturación y CRM para pequeñas y medianas empresas." name="description">
    <meta content="soluciones de tecnología, consultoría, asesoria, capacitación, sistemas, aspel, cursos, national-soft, soluciones para restaurantes, sistemas de administración, aspel, soft-restaurant" name="keywords">
    <meta content="Inelco IT Solutions S.A de C.V" name="author">
    <meta content="Index, Follow" name="robots">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
    <meta https-equiv="expires" content="0">
    <meta https-equiv="Cache-Control" content="no-cache">
    <meta https-equiv="Pragma" CONTENT="no-cache">
    <title>Inelco IT Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link href="/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/footerprincipal.css">
    <link rel="stylesheet" href="/css/mis-estilos.css">
    <link rel="stylesheet" href="/css/products-styles.css">
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
                            {{--
                            <li><a href="{{ url('/register') }}">Register</a></li>--}} @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                <ul class="dropdown-menu menu-sesion" role="menu">
                                    <li>
                                        <a href="{{ url('home') }}"><i class="icon-user2"></i> Mi perfíl</a>
                                    </li>
                                    {{--
                                    <li><a href="{{ url('/logout') }}"><i class="icon-exit"></i> Cerrar sesión</a></li>--}}
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


    <section class="banner-prod sections" id="banner-error404">
        <div class="fondo-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="text-center center-block">
                        <h2 class="title-h1">
                            Whoops! Algo salio mal... 
                        </h2>
                        <h3 class="title-h3" style="margin-top:52px;color: #1E3662;">
                            La página a la que intentas ingresar no está disponible.
                        </h3>
                        <h3 class="title-h3" style="margin-top: -32px;color: #1E3662;">
                            Has clic en el botón para volver a inicio o verifica la URL.
                        </h3>
                            <a href="{{url('/')}}" id="btn-sae-prob">
                                <button class="btn iis-btn vm-banner-prod">
                                    Volver a inicio
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        {{--
                        <div class=""> --}}
                            <div id='crmWebToEntityForm'>
                                <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                                <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000001052009 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8' class="form-inline">
                                    <!-- Do not remove this code. -->
                                    <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6' />
                                    <input type='hidden' name='zc_gad' id='zc_gad' value='' />
                                    <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5d9000f3f2c4de3b5c5d16ae5ce433859' />
                                    <input type='text' style='display:none;' name='actionType' value='TGVhZHM=' />
                                    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx' />
                                    <!-- Do not remove this code. -->
                                    <input type='text' class="form-control" maxlength='100' name='Email' placeholder="Email" />
                                    <div style="display: none;">
                                        <select style='width:250px;' name='Lead Source'>
                                            <option selected value='WIISSUBSCRIPCION'>WIISSUBSCRIPCION</option>
                                        </select>
                                    </div>
                                    <div style="display: none;">
                                        <input type='text' placeholder="noo" style='width:250px;' maxlength='80' name='Last Name' value="IIS" />
                                    </div>
                                    <button class="btn btn-success btn-md" type='submit'>Suscribirme</button>
                                    <script>
                                    var mndFileds = new Array('Last Name');
                                    var fldLangVal = new Array('Last Name');
                                    var name = '';
                                    var email = '';

                                    function checkMandatory() {
                                        for (i = 0; i < mndFileds.length; i++) {
                                            var fieldObj = document.forms['WebToLeads2073942000001052009'][mndFileds[i]];
                                            if (fieldObj) {
                                                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                                    if (fieldObj.type == 'file') {
                                                        alert('Please select a file to upload.');
                                                        fieldObj.focus();
                                                        return false;
                                                    }
                                                    alert(fldLangVal[i] + ' cannot be empty.');
                                                    fieldObj.focus();
                                                    return false;
                                                } else if (fieldObj.nodeName == 'SELECT') {
                                                    if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                                        alert(fldLangVal[i] + ' cannot be none.');
                                                        fieldObj.focus();
                                                        return false;
                                                    }
                                                } else if (fieldObj.type == 'checkbox') {
                                                    if (fieldObj.checked == false) {
                                                        alert('Please accept  ' + fldLangVal[i]);
                                                        fieldObj.focus();
                                                        return false;
                                                    }
                                                }
                                                try {
                                                    if (fieldObj.name == 'Last Name') {
                                                        name = fieldObj.value;
                                                    }
                                                } catch (e) {}
                                            }
                                        }
                                    }
                                    </script>
                                </form>
                            </div>
                            {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <script language="Javascript">
        document.oncontextmenu = function() { return false }
        </script>
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