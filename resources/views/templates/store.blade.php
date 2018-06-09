<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('name_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/tienda/bootstrap.min.css">
    <link rel="stylesheet" href="/css/tienda/material-kit.css">
    <link rel="stylesheet" href="/css/store-styles.css">
    <link rel="stylesheet" href="/fonts/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    @stack('add-css')
</head>
<body>
    <header class="top-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <ul>
                        <li><a href="https://www.facebook.com/inelcoitsolutions/" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li><a href="https://twitter.com/inelcoit" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://plus.google.com/113306608517720796590" target="_blank"><span class="icon-google4"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <ul>
                        <li><span  class="icon-phone"></span> (81) 13552 2222</li>
                        <li><span class="icon-mail5"></span> contacto@inelco.com.mx</li>
                        <li><span class="icon-location"></span> Cintermex, Local 18 PB, Monterrey.</li>
                    </ul>
                </div>
            </div>
        </div>  
    </header>

    <nav class="navbar"><!--navbar-fixed-top -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand"><img src="/images/iis_logo_blanco.png" alt="logo Inelco IS" class="img-responsive" width="80"></p>
            </div>

            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/tienda')}}">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Otros servicios</a></li>
                        </ul>
                    </li>  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('mostrar-carrito') }}">
                            @php $carrito = \Session::get('carrito'); @endphp
                            <i class="fa icon-shopping-cart" ></i><span class="badge">{{count($carrito)}}</span>
                        </a>
                    </li>
                    <li class="text-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ url('/register') }}">Crear cuenta</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    {{--<li><a href="{{ url('/logout') }}"><i class="icon-exit"></i> Cerrar sesión</a></li>--}}
                                    <li>
                                        <a  href="{{ url('home') }}"><i class="icon-user2"></i> Mi perfíl</a>
                                    </li>
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
    </nav>
    
    @include('errors.errors')
    @include('errors.modal_confirm')

    <div class="wrapper">
        
        @if(Session::has('mensaje'))
            <div class="alert alert-success">
                <div class="container-fluid">
                    <div class="alert-icon">
                        <i class="fa icon-bell"></i>
                        <b>{{ Session::get('mensaje') }}</b>
                    </div>
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">
                            <i class="icon-cross2">
                            </i>
                        </span>
                    </button>
                </div>
            </div>
        @endif

        @yield('contenido')
   

        <span class="ir-arriba icon-arrow-up2"></span>

        <footer id="footer">
            <div class="container">
                <div class="row derechos-res">
                    <div class="col-md-12">
                        <p>Copyright © Todos los Derechos Reservados Inelco IT Solutions S.A. de C.V. Monterrey, México 2017</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/admin/jquery.min.js"></script>
    <script src="/js/admin/bootstrap.min.js"></script>
    <script src="/js/admin/material-kit.js"></script>
    <script src="/js/admin/material.min.js"></script>
    <script>
        $(document).ready(function(){
 
            $('.ir-arriba').click(function(){
                $('body, html').animate({
                scrollTop: '0px'
                }, 700);
            });
 
        $(window).scroll(function(){
            if( $(this).scrollTop() > 0 ){
                $('.ir-arriba').fadeIn(500);
            }else {
                $('.ir-arriba').fadeOut(500);
            }
        });
    });
    </script>
    <script type="text/javascript">
        var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";
        s.defer=true;s.src="https://salesiq.zoho.com/ventassyca/float.ls?embedname=ventassyca";
        t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
    </script>
    @stack('add-js')
</body>
</html>
