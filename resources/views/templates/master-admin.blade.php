<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('name_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin/material-kit.css">
    <link rel="stylesheet" href="/css/admin/admin-styles.css">
    <link rel="stylesheet" href="/fonts/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    @stack('add-css')
</head>
<body>

    <nav class="navbar"><!--navbar-fixed-top -->
        <div class="container">
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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/admin/dashboard')}}">Principal</a></li>

                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Tienda<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu MenProd" role="menu" aria-labelledby="dropdownMenu2">
                            <!--<li role="presentation" class="dropdown-header">National Soft</li>-->
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/admin/productos')}}"><i class="icon-box"></i> Productos</a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/admin/kit')}}"><i class="icon-list3"></i> Kit</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Eventos<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu MenProd" role="menu" aria-labelledby="dropdownMenu2">
                            <!--<li role="presentation" class="dropdown-header">National Soft</li>-->
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/admin/calendario')}}"><i class="icon-calendar"></i> Calendario</a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('/admin/landing')}}"><i class="icon-browser"></i> Landing</a>
                            </li>
                            <li role="presentation" class="">
                                <a role="menuitem" tabindex="-1" href="{{ url('/admin/categorias_eventos')}}"><i class="icon-tag"></i> Categorias</a>
                            </li>
                            <li role="presentation" class="">
                                <a role="menuitem" tabindex="-1" href="{{ url('/admin/eventos/reservaciones')}}"><i class="fa icon-book"></i> Reservaciones</a>
                            </li>
                            
                        </ul>
                    </li>


                    <li class="text-right">
                        @if (Auth::guard('admin')->guest())
                            <li><a href="{{ url('/admin/login') }}">Iniciar Sesión</a></li>
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->nombre }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/admin/logout') }}"><i class="icon-exit"></i> Cerrar sesión</a></li>
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
        
        @yield('contenido')
    </div>

    <span class="ir-arriba  icon-chevron-thin-up"></span>

    <footer id="footer">
        <div class="container">
            <div class="row derechos-res">
                <div class="col-md-12">
                    <p>Copyright © Todos los Derechos Reservados Inelco IT Solutions S.A. de C.V. Monterrey, México 2018</p>
                </div>
            </div>
        </div>
    </footer>

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
                $('.ir-arriba').fadeIn(300);
            }else {
                $('.ir-arriba').fadeOut(300);
            }
        });
    });
    </script>

    @stack('add-js')
</body>
</html>
