<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <title>
            Tienda | @yield('title'){{--titulo q cambia en cada pagina--}}
        </title>
        {{--estilos del framewokr bootstrap--}}
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Material Design Bootstrap -->
        <link href="/css/mdb.min.css" rel="stylesheet"/>
        {{--estilos del slider--}}
        <link href="/css/animate-slider.css" rel="stylesheet"/>
        <link href="/css/banner-styles.css" rel="stylesheet"/>
        {{--estilos de los iconos--}}
        <link href="/icomoon/style.css" rel="stylesheet"/>
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        {{--estilos para el tipo de fuente de la pagina--}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700" rel="stylesheet"/>
        {{--estilos para las animaciones--}}
        <link href="/css/animate.css" rel="stylesheet"/>
        {{--estilos para el menu de navegacion de cada producto--}}
        <link href="/css/component.css" rel="stylesheet"/>
        {{--estilos para la tienda--}}
        <link href="/css/tienda.css" rel="stylesheet"/>
        {{--añadimos los estilos para los productos--}}
        @stack('add-css')
    </head>
    <body data-offset="50" data-spy="scroll" data-target=".navbar" id="page-top">
        @section('navbar')
            @include('templates.navbar-tienda')
        @show

        @include('flash::message')
        @if(Session::has('mensaje'))
        <div class="alert alert-success">
            <div class="container-fluid">
                <div class="alert-icon">
                    <i class="icon-check ico-notif">
                    </i>
                    <b>
                        {{ Session::get('mensaje') }}
                    </b>
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
        @yield('content')

        @section('footer')
            @include('templates.footer')
        @show
        {{--boton de ir arriba--}}
        <i aria-hidden="true" class="scrollup fa fa-angle-up fa-5x">
        </i>
        {{--framework jquery--}}
        <script src="/js/jquery-3.1.0.min.js">
        </script>
        <!-- Bootstrap core JavaScript -->
        <script src="/js/bootstrap.min.js">
        </script>
        <!-- Bootstrap tooltips -->
        <script src="/js/tether.min.js" type="text/javascript">
        </script>
        <!-- MDB core JavaScript -->
        <script src="/js/mdb.min.js" type="text/javascript">
        </script>
        <!-- Include typeahead.js file -->
        <script src="/js/jquery.typeahead.min.js" type="text/javascript">
        </script>
        {{--scripts para la pagina --}}
        @stack('add-js')
        <script>
           // $('#flash-overlay-modal').modal();
        </script>
        {{--scripts para los efectos de ir de una seccion a otra--}}
        <script src="/js/jquery.easing.js" type="text/javascript">
        </script>
        <script src="/js/jquery.scrollTo.js">
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                        });
                    });
        </script>
        {{--script para el boton de ir arriba--}}
        <script type="text/javascript">
            $(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
  
    });
        </script>
        <script src="/js/wow.min.js">
        </script>
        <script src="/js/custom.js">
        </script>
        <script src="/js/seccion2.js">
        </script>
        {{--script del slider--}}
        <script src="/js/animate-slider.js">
        </script>
        <script src="/js/modernizr.js">
        </script>
        <script src="/js/actualizar-carrito.js">
        </script>
        <script>
            $(".anim-slider").animateSlider(
            {
                autoplay    :true,
                interval    :5500,
                animations  : 
                {
                    0:   //Slide No1
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        },
                        "#t1"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                        
                        "#p1"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones1"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        }                       
                          
                    },
                     1:   //Slide No2
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        },
                         "#t2"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                        
                        "#p2"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                       "#botones2"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        } 
                          
                    },
                     2:   //Slide No3
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t3"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p3"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones3"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        } 
                          
                    },                     
                    3   :   //Slide No4
                    {
                        li  : 
                        {
                            show      : "fadeInLeft",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t4"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p4"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones4"    :
                        {
                            show      : "fadeInLeft",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        }    
                       
                    },
                     /* 4   :   //Slide No5
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t5"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p5"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones5"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    5   :   //Slide No6
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t6"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p6"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones6"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    6   :   //Slide No7
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t7"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p7"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones7"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    7   :   //Slide No8
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t8"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p8"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones8"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },
                    8   :   //Slide No9
                    {
                        li  : 
                        {
                            show      : "fadeIn",
                            hide      : "fadeOutLeftBig",
                            delayShow : "delay0.5s"
                        }, 
                         "#t9"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },                       
                        "#p9"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1s"
                        },
                        "#botones9"    :
                        {
                            show      : "slideInDown",
                            hide      : "rotateOutUpLeft",
                            delayShow : "delay1-5s"
                        }    
                       
                    },*/
                }
            });
        </script>
       {{--  @include('partials.mensajes-flash') --}}
    </body>
</html>