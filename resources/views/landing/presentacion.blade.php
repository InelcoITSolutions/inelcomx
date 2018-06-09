<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Presentación {{ $landinfo->nombre_evento }} | Inelco IT Solutions</title>{{-- sepaporquieno jala --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum‐scale=1.0, user‐scalable=no">
    <link rel="alternate" hreflang="es" href="http://www.inelco.mx/" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/landing/presentacion.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/fonts/style.css">
    <link href="/css/component.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet"> 
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/segment7" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
</head>
<body class="{{ $landinfo->estilos }}">

    {{-- @if($landinfo->habilitado === 'NO') --}}
        {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" data-backdrop="static" data-keyboard="false"> --}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h4 class="modal-title text-center" id="gridSystemModalLabel">Evento realizado</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">El evento: Presentación <b>{{ $landinfo->nombre_evento }}</b> ha terminado.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Pero no te pierdas nuestros proximos eventos, dejanos tu correo y con gusto te notificaremos.</p>
                        </div>
                        <div class="col-md-6">
                            {{-- <form class="form-inline">
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                  <input type="email" class="form-control" id="exampleInputAmount" placeholder="E mail" autofocus>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-default">Notificarme</button>
                            </form> --}}

                            <div id='crmWebToEntityForm'>
                               <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                               <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000001052009 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8' class="form-inline">

                                 <!-- Do not remove this code. -->
                                <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
                                <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                                <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5d9000f3f2c4de3b5c5d16ae5ce433859'/>
                                <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                                <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx' /> 
                                 <!-- Do not remove this code. -->

                                

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                        <input type='email' class="form-control" maxlength='100' name='Email' placeholder="Email" />
                                    </div>
                                </div>

                                <div style="display: none;">
                                    <select style='width:250px;' name='Lead Source'>
                                        <option selected value='WIISSUBSCRIPCION'>WIISSUBSCRIPCION</option>
                                    </select>
                                </div>
                                
                                <div style="display: none;">
                                    <input type='text' placeholder="noo" style='width:250px;'  maxlength='80' name='Last Name' value="IIS"  />
                                </div>

                                <button  class="btn btn-success btn-md" type='submit'>Suscribirme</button>
                                
                                <script>
                                  var mndFileds=new Array('Last Name');
                                  var fldLangVal=new Array('Last Name');
                                    var name='';
                                    var email='';

                                  function checkMandatory() {
                                    for(i=0;i<mndFileds.length;i++) {
                                      var fieldObj=document.forms['WebToLeads2073942000001052009'][mndFileds[i]];
                                      if(fieldObj) {
                                        if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                                         if(fieldObj.type =='file')
                                            { 
                                             alert('Please select a file to upload.'); 
                                             fieldObj.focus(); 
                                             return false;
                                            } 
                                        alert(fldLangVal[i] +' cannot be empty.'); 
                                          fieldObj.focus();
                                          return false;
                                        }  else if(fieldObj.nodeName=='SELECT') {
                                         if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                                            alert(fldLangVal[i] +' cannot be none.'); 
                                            fieldObj.focus();
                                            return false;
                                           }
                                        } else if(fieldObj.type =='checkbox'){
                                         if(fieldObj.checked == false){
                                            alert('Please accept  '+fldLangVal[i]);
                                            fieldObj.focus();
                                            return false;
                                           } 
                                         } 
                                         try {
                                             if(fieldObj.name == 'Last Name') {
                                            name = fieldObj.value;
                                            }
                                        } catch (e) {}
                                        }
                                    }
                                     }
                                </script>
                                </form>
                                </div>
                            </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center">¡Siguenos en nuestras redes sociales!</h4>
                            <p class="text-center">Y no te pierdas ningúna noticia</p>

                            <ul class="sociales">
                                <li><a href="https://www.facebook.com/inelcoitsolutions/"><span class="icon-facebook-with-circle"></span></a></li>
                                <li><a href="https://twitter.com/inelcoit"><span class="icon-twitter-with-circle"></span></a></li>
                                <li><a href="https://plus.google.com/113306608517720796590/posts"><span class="icon-google-with-circle"></span></a></li>
                            </ul>

                        </div>
                    </div>
                  </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <a href="http://aspelsoluciones.com/nuevo-noi" target="_blank"><button type="button" class="btn btn-primary" >SABER MÁS</button></a>
              </div>-->
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
       
     {{--    <script>
            window.onload = function() {
                $("#myModal").modal();
            }; 
        </script> --}}
    {{-- @endif --}}

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-left">
                <div class="wow fadeInDown" data-wow-delay="0.2s">
                    <img src="/images/logo.jpg" class="img-responsive">
                </div>
            </div>
            <div class="navbar-right">
                <div class="wow fadeInDown" data-wow-delay="0.5s">
                    <img src="{{ $landinfo->logo_coanfitrion }}" class="img-responsive">
                </div>
            </div>
        </div>
    </nav>

    <section class="banner sections" id="">
        <div class="fondo-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <h1 class="text-left">Presentación {{ $landinfo->nombre_evento }}</h1>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.7s">
                            <h2> {{ $landinfo->descripcion_evento }} </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.9s">
                            <img class="img-responsive" src="{{ $landinfo->img_producto_banner }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="wow fadeInDown" data-wow-delay="0.9s">
                            <a class="ancla" href="#registrarme" id="">
                                <button class="btn btn-default btn-lg">Registrarme</button>
                            </a>
                            <a class="ancla" href="#asistir" id="">
                                <button class="btn btn-default btn-lg">Ver más</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="asistir secciones" id="asistir">
        <div class="container">
            <div class="row">
                <div class="wow fadeInDown" data-wow-delay="0.3s">
                    <h2 class="text-right"><span>¿</span>Por qué asistir<span>?</span></h2>
                </div>
                <div class="wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="col-md-4">
                        <img class="img-responsive" src="{{ $landinfo->img_producto }}">
                    </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.7s">
                    <div class="col-md-8">
                        <p class="text-right">{{ $landinfo->parrafo1 }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wow fadeInRight" data-wow-delay="0.7s">
                        <p class="text-left">{{ $landinfo->parrafo2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="paraquien secciones">
        <div class="container">
            <div class="row">
                <div class="wow fadeInLeft" data-wow-delay="0.5s">
                        <h2 class="text-left"><span>¿</span>Para quién es esta presentación<span>?</span></h2>
                </div>
                <div class="col-md-6">
                    @for($i=1; $i<5; $i++)
                        <?php 
                            $para='dirigido'.$i; 
                            $cont[$i]= $landinfo->$para;
                        ?>
                        @if($cont[$i]!=='')
                            <div class="wow fadeInDown" data-wow-delay="0.{{ $i }}s">
                                <p><span class="icon-pushpin color-prod"></span>  {{ $landinfo->$para }}</p>
                            </div>
                        @endif
                    @endfor  
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInLeft" data-wow-delay="0.5s">
                        <img class="img-responsive" src="{{ $landinfo->img_dirigido }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="frase sections">
        <div class="fondo-gray">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="text-center">{{ $landinfo->frase }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="descripcion secciones">
        <div class="container">
            {{-- <div class="wow fadeInLeft" data-wow-delay="0.3s">
                <h2>Descubre <b>{{ $landinfo->producto }}</b></h2>
            </div> --}}
            <div class="row">
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                    <h3 class="text-left">{{ $landinfo->title_desc1 }}</h3>
                </div>
                <div class="col-md-8">
                    <div class="wow fadeInLeft" data-wow-delay="0.5s">
                        <p>{{ $landinfo->cont_desc1 }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow fadeInLeft" data-wow-delay="0.6s">
                        <img class="img-responsive" src="{{ $landinfo->img_desc1 }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wow fadeInRight" data-wow-delay="0.7s">
                    <h3 class="text-right">{{ $landinfo->title_desc2 }}</h3>  
                </div>
                <div class="col-md-4">
                    <div class="wow fadeInRight" data-wow-delay="0.8s">
                        <img class="img-responsive" src="{{ $landinfo->img_desc2 }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wow fadeInRight" data-wow-delay="0.9s">
                        <p class="text-right">{{ $landinfo->cont_desc2 }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wow fadeInLeft" data-wow-delay="0.5s">
                    <h3 class="text-left">{{ $landinfo->title_desc3 }}</h3>
                </div>
                <div class="col-md-8">
                    <div class="wow fadeInLeft" data-wow-delay="0.6s">
                        <p>{{ $landinfo->cont_desc3 }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow fadeInLeft" data-wow-delay="0.7s">
                        <img class="img-responsive" src="{{ $landinfo->img_desc3 }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $m= $landinfo->mes;
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 

        $dias= $landinfo->numero_dias_evento;
        $dia=substr($dias,0,2);

        $horas= $landinfo->horario_evento;
        $hora=substr($horas,0,2);
        $mins=substr($horas,3,2);

        $dircompleta= $landinfo->nombre_dias_evento.' '.$landinfo->numero_dias_evento.' '.$meses[$m-1].' de '.$landinfo->anio.', '.$landinfo->horario_evento;

        $eventoname='Presentación  '.$landinfo->nombre_evento;
    @endphp

    <section class="lugar secciones">
        <div class="container">
            <div class="row">
                <div class="wow fadeInDown" data-wow-delay="0.8s">
                <h3>La presentación se llevará a cabo en: </h3>
                    <div class="col-md-6">
                        
                        <p><b>{{ $landinfo->lugar }}</b></p>
                        <p class="dir">{{ $landinfo->direccion }}</p> 
                        <p class="dir">{{ $landinfo->cp_evento }}, {{ $landinfo->ciudad }}, {{ $landinfo->estado }}</p>
                        <p class="">{{ $landinfo->horario_evento }}</p>
                        <p> Costo:
                            @if($landinfo->precio_evento <>0)
                                <b>$ {{ $landinfo->precio_evento }}</b>
                            @else
                                <b>GRATIS</b>
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6">
                        @if($landinfo->img_lugar_logo ==='')
                            <p class="text-right"><img src="{{ $landinfo->logo_coanfitrion }}" class="img-responsive"></p>
                        @else
                            <p class="text-right"><img src="{{ $landinfo->img_lugar_logo }}" class="img-responsive"></p>
                        @endif
                        
                        
                        {{-- <p>link: <a href="http://lemon.development/confirmacion/ {{ $eventoname }} / {{ $dircompleta }} ">haber</a></p> --}}
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="wow fadeInUp" data-wow-delay="1s">
            <div class="canvas1">{!! $landinfo->codigo_mapa !!}</div>
        </div>
        <div class="container">
            <div class="row fecha">
                <div class="wow fadeInUp" data-wow-delay="0.9s">
                    <p class="text-center dia">{{ $landinfo->numero_dias_evento }} de {{ $meses[$m-1] }} de {{ $landinfo->anio }}</p>
                    <p class="text-center">{{ $landinfo->horario_evento }}</p>     
                </div>           
            </div>
        </div>
        <div id="count">
            <div class="container">
                <div class="row">
                    <div id="clock"></div>
                </div>
            </div>
        </div>
    </section> 

    <section class="timing secciones" id="registrarme"> 
        <div class="container">
            <div class="row">          
                <div class="countdown">
                    <span id="clock"></span>
                </div>
                @if($landinfo->precio_evento <>0)
                    <p class="text-center">¡No dejes pasar esta oportunidad! Regístrate hoy mismo</p>
                @else
                    <p class="text-center">¡No dejes pasar esta oportunidad! Regístrate hoy mismo <b>¡GRATIS!</b></p>
                @endif
                
                {{-- <form class="form-horizontal" > --}}
                {!! Form::open(array('url' =>'calendario/evento/reservacion', 'class' => 'form-horizontal')) !!}
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa icon-v-card"></i></div>
                                <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa icon-v-card"></i></div>
                                <input name="apellidos" type="text" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>
                    </div>    
                        
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                <input name="empresa" type="text" class="form-control" placeholder="Empresa">
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <div class="input-group ">
                                <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                <input name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                <input name="telefono" type="tel" class="form-control" placeholder="Telefono">
                            </div>
                        </div>
                    </div>

                    <input style="display: none;" type="text" name="no_reservacion" value="{{date("y") . date("m") . date("d"). date("H"). date("i")}}">
                    <input style="display: none;" type="text" name="evento" value="Presentación {{ $landinfo->nombre_evento }}">
                    <input style="display: none;" type="text" name="fecha" value="{{ $landinfo->nombre_dias_evento }} {{ $landinfo->numero_dias_evento }} de {{ $meses[$m-1] }} de {{ $landinfo->anio }}">
                    <input style="display: none;" type="text" name="horario" value="{{ $landinfo->horario_evento }} hrs">
                    <input style="display: none;" type="text" name="lugar" value="{{ $landinfo->lugar }}">
                    <input style="display: none;" type="text" name="direccion" value="{{ $landinfo->direccion }}">
                    <input style="display: none;" type="text" name="ciudad" value="{{ $landinfo->cp_evento }}, {{ $landinfo->ciudad }}, {{ $landinfo->estado }}">
                    
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            {!! Form::button('Registrarme',['type'=>'submit', 'class'=>'btn btn-primary btn-lg', 'id'=>'subm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!} 
            </div>
        </div>
    </section>

    <span class="ir-arriba  icon-chevron-thin-up"></span>

    <section id="footer">
        <div class="container">
            <div class="row derechos-res">
                <div class="col-md-12">
                    <p><span style="color:transparent;">C: {{ $landinfo->id_calendario}}</span> Copyright © Todos los Derechos Reservados Inelco IT Solutions S.A. de C.V. Monterrey, México 2016<span style="color:transparent;"> L: {{ $landinfo->id}}</span></p>
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
    <script src="/js/seccion.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script>
        $('#clock').countdown('{{ $landinfo->anio }}/{{ $landinfo->mes }}/{{ $dia }} {{ $hora }}:{{ $mins }}:00')
        .on('update.countdown', function(event) {
          var format = '<span>%H:%M:%S</span>';
          if(event.offset.totalDays > 0) {
            format = '<span>%-d</span> dia%!d ' + format;
          }
          if(event.offset.weeks > 0) {
            format = '<span>%-w</span> semana%!w ' + format;
          }
          $(this).html(event.strftime(format));
        })
        .on('finish.countdown', function(event) {
            $(this).html('00:00:00 El evento ha terminado').parent().addClass('disabled');
            $("#myModal").modal('show');
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.canvas1 iframe').addClass('map_canvas1');
            $('.map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready

            $('.canvas1').on('click', function () {
                $(this).find('.map_canvas1').stop(true,true).removeClass('scrolloff'); // set the pointer events true on click
            });
                // you want to disable pointer events when the mouse leave the canvas area;
            $(".map_canvas1").mouseleave(function () {
                $('.map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
            });
 

            $('.ir-arriba').click(function(){
                $('body, html').animate({
                scrollTop: '0px'
                }, 700);
            });
 
            $(window).scroll(function(){
                if( $(this).scrollTop() > 0 ){
                    $('.ir-arriba').slideDown(300);
                }else {
                    $('.ir-arriba').slideUp(300);
                }
            });
            
            $( "form" ).on( "submit", function( event ) {
                $("#subm").attr('disabled','disabled');
                $("#subm").text('Registrando...');
            });

        });
    </script>    
</body>
</html>
