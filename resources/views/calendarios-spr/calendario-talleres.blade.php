<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendario | Soluciones para Restaurantes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/spr-calendario/mis-estilos-solucionespararestaurantes.css">
    <link rel="stylesheet" href="/css/spr-calendario/solucionespararestaurantes-footer.css">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/icomoon/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/fonts/style.css">
    <link href="/css/component.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    @stack('add-css')
</head>
<body>

    <header class="top-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 col-xs-1">
                    <ul>
                        <li><a id="twi" href="https://twitter.com/inelcoit" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/inelcoitsolutions/" target="_blank"><span class="icon-facebook"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-11 col-xs-11">
                    <ul>
                        <li><span class="icon-location"></span><a href="https://www.google.com/maps/place/Inelco+IT+Solutions/@25.678022,-100.289007,16z/data=!4m5!3m4!1s0x0:0xa261ff913e98ee9e!8m2!3d25.6780221!4d-100.2890072?hl=es-MX" target="_blank"> MTY Cintermex</a></li>
                        <li><span class="icon-phone"></span><a href="tel:528113522222"> (81) 1352 2222</a></li>
                        <li>|</li>
                        <li><span class="icon-location"></span><a href="https://www.google.com/maps/place/SYCA+CAMBIA+INNOVA+Y+CRECE+SA+DE+CV/@22.4670902,-101.5905836,8.25z/data=!4m5!3m4!1s0x0:0xf1fd872896dfa8!8m2!3d22.1494476!4d-100.9930479" target="_blank"> S.L.P Centro</a></li>
                        <li><span class="icon-phone"></span><a href="tel:524442119009"> (444) 211 9009</a></li>
                        <li>|</li>
                        <li><span class="icon-mail5"></span><a href="mailto:contacto@solucionespararestaurantes.mx"> contacto@solucionespararestaurantes.mx</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
        
    @section('contenido')
    
    <section class="sections " id="banner-calendario">
        <div class="fondo-gray">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p align="center">
                        <img alt="inelco-aspel-coi-transp" class="img-responsive" src="/images-new/inelco/logos/inelco-logo-solucionespararestaurantes.png">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 id="tias" class="title-h2"><b>Calendario de eventos Soluciones para Restaurantes</b></h2>
                    <h3 id="tias" class="title-h3">Encuentra nuestros próximos eventos y mejorar los procesos de tu negocio</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="eventos secciones">
        <div class="container">
            <div id="filtros" class="text-center">
           <h3 class="title-h3"> Selecciona el tipo de evento que deseas </h3>
            <br>
{{-- se cambia --}}
            <a class="btn btn-default btn-lg " href="{{ url('/solucionespararestaurantes-calendario')}}" >Todos</a>
            <a class="btn btn-default btn-lg" href="{{ url('/solucionespararestaurantes-calendario/webinar')}}" >Webinar</a>
            <a class="btn btn-default btn-lg" href="{{ url('/solucionespararestaurantes-calendario/cursos')}}" >Cursos</a>
            <a class="btn btn-default btn-lg" href="{{ url('/solucionespararestaurantes-calendario/presentaciones')}}" >Presentaciones</a>
            <a id='activo' class="btn btn-default btn-lg" href="{{ url('/solucionespararestaurantes-calendario/talleres')}}" >Talleres</a>
            <a class="btn btn-default btn-lg" href="{{ url('/solucionespararestaurantes-calendario/conferencias')}}" >Conferencias</a>


                      
            </div>

        @if(count($sprTalleres) > 0)
            @php
                $lastmes=0;
                $lastanio=0;
            @endphp

            
            

            @foreach ($sprTalleres as $evento)
            {{--@if($evento->habilitado==='SI')--}}
                
                @php
                    $m= $evento->mes;
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                @endphp
                <div class="wow fadeInDown" data-wow-delay="0.3s">
                    
                    @if($lastanio!=$evento->anio)
                        <h3 class="text-center title-h2 ">{{ $evento->anio}}</h3>
                    @endif
                </div>
                <div class="wow fadeInLeft" data-wow-delay="0.6s">
                    @if($lastmes!=$evento->mes)
                        <h3 class="text-center title-h3 ">{{ $meses[$m-1] }}</h3>
                    @endif
                </div>
                <div class="wow fadeInLeft" data-wow-delay="1s">
                    <div class="row caevento" precio="{{$evento->precio_evento}}">
                        <div class="col-md-2 fechaev">
                            <div class="postfechaev">
                                <p class="numero">{{ $evento->numero_dias_evento}}</p>
                                <p class="dia">{{ $evento->nombre_dias_evento }}</p>
                            </div>                                
                        </div>
                        <div class="col-md-8">
                            <h4 class="title-h3">{{ $evento->tipo_evento }} {{ $evento->nombre_evento }}</h4>
                            <p>{{ $evento->descripcion_evento }}</p>
                            <p>{{ $evento->ciudad }}, {{ $evento->estado }} | {{ $evento->horario_evento }} | 
                                @if($evento->precio_evento>0)
                                    ${{number_format( $evento->precio_evento ,0)}}+IVA
                                @else
                                    Gratis
                                @endif</p>
                        </div>
                        <div class="col-md-2">
                            <p class="text-center"><a class="btn btn-default btn-lg" target="_blank" href="{{ $evento->link_landing_evento.$evento->etiqueta_url }}">Ver evento</a></p>
                        </div>
                    </div>
                </div>
                @php
                    $lastmes=$evento->mes;
                    $lastanio=$evento->anio;
                @endphp
            {{--@endif--}}
            @endforeach
            @else 
            <br>
            <h3 class="title-h3"> Por el momento no hay eventos disponibles </h3>
            
        @endif
        
        </div>
    </section>
@endsection


@push('add-js')   
    <script>
        $("body").attr('pagina','Calendario');

        $( ".filtros ul li" ).on( "click", "a", function() {
            var elemento= $(this).text();
            console.log( elemento );
            $(".filtros button").html( elemento +' <span class="caret"></span>' );
            if(elemento=="Gratuitos"){
                console.log( 'Es gratis' );
                $( ".caevento" ).each(function() {
                    var evprec=$(this).attr('precio');
                    if(evprec != 0){
                        $(this).css("display","none");
                    }else{
                        $(this).css("display","block");
                    }
                });
            }else{
                $( ".caevento" ).each(function() {
                    var evprec=$(this).attr('precio');
                    if(evprec == 0){
                        $(this).css("display","none");
                    }else{
                        $(this).css("display","block");
                    }
                });
                console.log( 'Hay que pagar' );
            }
        });
    </script>

    
    
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
    @yield('contenido')

    <span class="ir-arriba  icon-arrow-up2"></span>

    @include('templates.footercalendariospr')

    <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
    <script src="/js/header.js"></script>
    <script src="/js/toggleMenu.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/custom.js"></script>
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

            /*$(window).scroll(function(){
                var barra = $(window).scrollTop();
                var posicion =  (barra * 0.10);
                $('.sections').css({
                    'background-position': '0 -' + posicion + 'px'
                });
            });*/

            var nombre= $('body').attr('pagina');
            $( ".navbar-nav li" ).each(function( index, element ) {
                //console.log( index + ": " + $( this ).text() );
                
                if($(this).attr("esta")){
                    var actual=$(this).attr("esta");
                    if(actual === nombre){
                        $(element).addClass("active");
                        //console.log( index + ": " + $( this ).text() );
                        return false;
                    }
                }/*else{
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
    @stack('add-js')
</body>
</html>




