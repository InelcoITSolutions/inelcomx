@extends('templates.principal')
@section('name_title','Calendario| Inelco IT Solutions')
@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush


@section('contenido')
    
    <section class="sections" id="banner-calendario">
        <div class="fondo-gray">
            <h2 class="title-h2">Calendario de eventos</h2>
            <h3 class="title-h3">Encuentra nuestros proximos eventos y no dejes pasar la oportunidad de asistir y mejorar los procesos de tu empresa</h3>
            
        </div>
    </section>  
    
       
   

    <section class="eventos secciones">
        <div class="container">
          <div id="filtros" class="text-center">
            <h3 class="title-h3">Selecciona el tipo de evento que deseas</h3> 
            <br>

            <a class="btn btn-default btn-lg" href="{{ url('/calendario')}}">Todos</a>
            <a id='activo' class="btn btn-default btn-lg" href="{{ url('/calendario-webinar')}}" >Webinar</a>
            <a class="btn btn-default btn-lg" href="{{ url('/calendario-cursos')}}" >Cursos</a>
            <a class="btn btn-default btn-lg" href="{{ url('/calendario-presentaciones')}}" >Presentaciones</a>
            <a class="btn btn-default btn-lg" href="{{ url('/calendario-talleres')}}" >Talleres</a>
            <a class="btn btn-default btn-lg" href="{{ url('/calendario-conferencias')}}" >Conferencias</a>


                      
            </div>
            
            
        
        @if(count($calendarioWebinar) > 0  )
            @php
                $lastmes=0;
                $lastanio=0;
            @endphp

            
            

            @foreach ($calendarioWebinar as $evento)
           
                
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

    <script type="text/javascript">
        
         function webinar(){
       
                 $calendario=Calendario::join('categorias_eventos', 'calendario.id_categoria','=','categorias_eventos.id')
                    ->select('calendario.*','categorias_eventos.evento_categoria as tipo_evento')
                    ->where('habilitado','SI')
                    ->where('id_categoria','7')
                    ->orderBy('anio','asc')
                    ->orderBy('mes','asc')
                    ->orderBy('numero_dias_evento','asc')            
                    ->get();
                    return view('calendario',['calendario' =>$calendario]);
              
       



    }
    </script>

@endpush