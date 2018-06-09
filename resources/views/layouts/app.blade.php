<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('name_title')</title>

    <!-- Styles 
    <link href="/css/app.css" rel="stylesheet">-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mis-estilos.css">
    <link rel="stylesheet" href="/fonts/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/images/logo2.jpg" alt="Inelco IT Solutions" class="img-responsive" width="60">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('tienda') }}">Tienda</a></li>
                        <li><a href="{{ url('calendario') }}">Calendario</a></li>
                        <li><a href="{{ url('centro-de-descarga') }}">Centro de descarga</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
                            <li><a href="{{ url('/register') }}">Registrarme</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon-exit"></i> Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if(Session::has('mensaje'))
            <div class="alert alert-success">
                <div class="container-fluid">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-cross2"></i></span>
                    </button>
                    <b>{{ Session::get('mensaje') }}</b>
                </div>
            </div>
        @endif  

        @include('errors.errors')
        @yield('content')

    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script>
        $('.edit-perfil').on('click',function(){
            $("#modalUser").modal('show');
        });
    </script>
    <script>
        /*$(document).ready(function(){
            $(".update-profile").on("submit", function(ev){
                ev.preventDefault();
                var $form= $(this);
                var $button = $form.find("[type='submit']");

                $.ajax({

                });

                return false;
            });
        });*/
    </script>
    @stack('add-js')
</body>
</html>
