<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendario eventos | Syca consultores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mis-estilos-sycacalendario.css">
    <link rel="stylesheet" href="/css/footercalendariosyca.css">
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
                <div class="col-md-3 col-xs-2">
                    <ul>
                        <li><a href="https://www.facebook.com/SYCACONSULTORES" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li><a href="https://twitter.com/@SYCACONSULTORES" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://www.linkedin.com/company/syca-consultores?report%2Esuccess=8zaNG1HwhPbAR9iQhZ5rfGeqz_vQFftHun0ZWU0Wy9vNemRJ8vtcKdJvzQfW8XagyOJSKg0XvfJ1dp" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                         <li><a href="https://www.youtube.com/channel/UCKRDtGHIJnGIaC6CHnK3SAQ" target="_blank"><span class="fa fa-youtube"></span></a></li>
                        

                    </ul>
                </div>
                <div class="col-md-9 col-xs-8">
                    <ul>

                        <li><span class="icon-location"></span> SLP, Centro.</li>
                        <li><span  class="icon-phone"></span> (444) 211 9009</li>
                        <li>|</li>
                        <li><span class="icon-location"></span> MTY Cintermex.</li>
                        <li><span  class="icon-phone"></span> (81) 1352 2222</li>
                        <li>|</li>
                        <li><span class="icon-mail5"></span> ventas@syca.com.mx</li>
                        
                        
                           
                                <li><a href="{{ url('http://www.syca.com.mx/') }} "><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                         
                      
                    </ul>
                </div>
            </div>
        </div>  
    </header>
        
    @section('contenido')
    
    <section class="sections " id="banner-calendario">
    <div class="col-md-12 fondo-gray">
        <div class="col-md-9 ">
            <h2 id="tias" class="title-h2"><b>Calendario de eventos SYCA consultores</b></h2>
            <h3 id="tias" class="title-h3">Encuentra nuestros próximos eventos y no dejes pasar la oportunidad de asistir y mejorar los procesos de tu empresa</h3>
        </div>
        <div class="col-md-3 ">
        <img alt="inelco-aspel-coi-transp" class="img-responsive" width="100%" src="/images/calendarioSyca/Inelco-logo-syca.png" >
        </div>
    </div>
          
  


    </section>  

    <section class="eventos secciones">
        <div class="container">

        <div id="filtros" class="text-center">
           <h3 class="title-h3"> Selecciona el tipo de evento que deseas </h3>
            <br>

            <a  class="btn btn-default btn-lg " href="{{ url('/syca-calendario')}}" >Todos</a>
            <a  class="btn btn-default btn-lg" href="{{ url('calendarios-syca/calendario-webinar')}}" >Webinar</a>
            <a class="btn btn-default btn-lg" href="{{ url('syca-calendario/cursos')}}" >Cursos</a>
            <a id='activo' class="btn btn-default btn-lg" href="{{ url('syca-calendario/presentaciones')}}" >Presentaciones</a>
            <a class="btn btn-default btn-lg" href="{{ url('syca-calendario/talleres')}}" >Talleres</a>
            <a class="btn btn-default btn-lg" href="{{ url('syca-calendario/conferencias')}}" >Conferencias</a>


                      
        </div>

        @if(count($sycaPresentaciones) > 0)
            @php
                $lastmes=0;
                $lastanio=0;
            @endphp

            
            

            @foreach ($sycaPresentaciones as $evento)
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

    @include('templates.footercalendariosyca')

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
        var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";
        s.defer=true;s.src="https://salesiq.zoho.com/ventassyca/float.ls?embedname=ventassyca";
        t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
    </script>
    @stack('add-js')
</body>
</html>




{{-- nuevo --}}