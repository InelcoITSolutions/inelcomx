<!DOCTYPE html>
<html lang="es">
<head>
{{-- este es el antiguo webinar --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Webinar {{ $landinfo->nombre_evento }} | Inelco IT Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum‐scale=1.0, user‐scalable=no">
    <link rel="alternate" hreflang="es" href="http://www.inelco.mx/" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/landing/webinar.css">
    <link rel="stylesheet" href="/fonts/style.css">
    <link href="/css/component.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet"> 
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/segment7" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
</head>
<body class="{{ $landinfo->estilos }}">
    @include('errors.errors')

    {{-- @if($landinfo->habilitado === 'NO') --}}
        {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" data-backdrop="static" data-keyboard="false"> --}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center" id="gridSystemModalLabel">Evento realizado</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">El evento: Webinar <b>{{ $landinfo->nombre_evento }}</b> ha terminado.</h3>
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
                    <p>Inelco IT Solutions</p>
                </div>
            </div>
            <div class="navbar-right">
                <div class="wow fadeInDown" data-wow-delay="0.5s">
                    <img src="/images/logo.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </nav>

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
    
    <section class="banner sections" id="curso">
        <div class="fondo-gray">
            <div class="container">
                <div class="row">
                    {{--<div class="col-md-12">
                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <img src="/images/iis_logo_blanco-letras.png">
                        </div>
                    </div>--}}
                    <div class="col-md-6 col-sm-8 ">
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <h1 class="text-left">Webinar {{ $landinfo->nombre_evento }}</h1>
                        </div>

                        {{--<div class="wow fadeInDown" data-wow-delay="0.7s">
                            <h2 class="text-center"> {{ $landinfo->descripcion_evento }} </h2>
                        </div>--}}

                        {{--<div class="wow fadeInDown" data-wow-delay="0.7s">
                            <p class="text-center date">{{ $meses[$m-1] }} {{ $landinfo->numero_dias_evento }}, {{ $landinfo->anio }}</p>
                            <p class="text-center">{{ $landinfo->ciudad }}, {{ $landinfo->estado }}</p>
                        </div>--}}
                    </div>
                    <div class="col-md-6 col-sm-4  text-right">
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <img class="img-responsive" src="{{ $landinfo->img_producto }}">
                        </div>
                    </div>
                </div>
                {{--<div class="row">
                    <div class="col-md-12">
                        <div class="wow fadeInDown text-center" data-wow-delay="0.9s">
                            <a class="ancla " href="#registrarme" id="">
                                <button class="btn btn-default btn-lg">Reservar mi lugar</button>
                            </a>
                            <p><span>Cupo limitado</span></p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

    <article class="secciones" id="info">
        <div class="container">
            <div class="row">
                <div class="wow fadeInLeft" data-wow-delay="0.5s">
                    <h2 class="text-left"> {{ $meses[$m-1] }} {{ $landinfo->numero_dias_evento }}, {{ $landinfo->anio }} | {{ $landinfo->horario_evento }}</h2>
                    <div class="col-md-7">
                        <section>
                            <div class="text-left" id="parrafo"></div>
                        </section>

                        <section class="temario">
                            <div class="container-fluid">
                                <div class="row">
                                    <h3>Temas</h3>
                                    <div class="col-md-12 col-sm-12">
                                        <ul id="lista-temas"></ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <img src="{{$landinfo->logo_coanfitrion}}" class="img-responsive">
                                </div>
                            </div>
                        </section>
                        
                
                    </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.7s">
                    <div class="col-md-5">
                        
                        @if($landinfo->precio_evento <>0)
                            <p class="text-center">¡Registrarme ahora!</p>
                        @else
                            <p class="text-center">¡Registrarme ahora! <b>¡GRATIS!</b></p>
                        @endif
                        
                        {{-- <form class="form-horizontal" > --}}
                        {!! Form::open(array('url' =>'calendario/evento/reservacion', 'class' => 'form-horizontal')) !!}
                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-v-card"></i></div>
                                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-v-card"></i></div>
                                        <input name="apellidos" type="text" class="form-control" placeholder="Apellidos">
                                    </div>
                                </div>
                            </div>    
                                
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="empresa" type="text" class="form-control" placeholder="Empresa">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                        <input name="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                        <input name="telefono" type="tel" class="form-control" placeholder="Telefono">
                                    </div>
                                </div>
                            </div>

                            <input style="display: none;" type="text" name="no_reservacion" value="{{date("y") . date("m") . date("d"). date("H"). date("i")}}">
                            <input style="display: none;" type="text" name="evento" value="Webinar {{ $landinfo->nombre_evento }}">
                            <input style="display: none;" type="text" name="fecha" value="{{ $landinfo->nombre_dias_evento }} {{ $landinfo->numero_dias_evento }} de {{ $meses[$m-1] }} de {{ $landinfo->anio }}">
                            <input style="display: none;" type="text" name="horario" value="{{ $landinfo->horario_evento }} hrs">
                            <input style="display: none;" type="text" name="lugar" value="{{ $landinfo->lugar }}">
                            <input style="display: none;" type="text" name="direccion" value="{{ $landinfo->direccion }}">
                            <input style="display: none;" type="text" name="ciudad" value="{{ $landinfo->cp_evento }}, {{ $landinfo->ciudad }}, {{ $landinfo->estado }}">
                            <input style="display: none;" type="text" name="paga" value="{{ $landinfo->precio_evento }}">
                            <input style="display: none;" type="text" name="link_webinar" value="{{ $landinfo->link_webinar }}">
                            
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    {!! Form::button('Registrarme',['type'=>'submit', 'class'=>'btn btn-lg', 'id'=>'subm']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!} 

                        <p></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </article>


    <div id="clock" style="display: none;"></div>
    

    <span class="ir-arriba  icon-chevron-thin-up"></span>
    {{--<article class="secciones">
        <div class="container">
            <div class="row">
                <p class="text-center">Compartir este evento</p>
            </div>
        </div>
    </article>--}}


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
    <script src="/js/wow.min.js"></script>
    <script src="/js/custom.js"></script>
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
        $('.ir-arriba').click(function(){
            $('body, html').animate({
            scrollTop: '0px'
            }, 700);
        });
        
        $(document).ready(function(){
            $(window).scroll(function(){
                if( $(this).scrollTop() > 0 ){
                    $('.ir-arriba').fadeIn(400);
                }else {
                    $('.ir-arriba').fadeOut(400);
                }

                var barra = $(window).scrollTop();
                var posicion =  (barra * 0.18);
                $('.sections').css({
                    'background-position': '0 -' + posicion + 'px'
                });
            });

            var imag="{{$landinfo->img_producto_banner}}";
            if(imag){
                $("#curso").css("background-image","url("+imag+")");
            }
        });
    </script>
    <script>
        var alt1 = "{{ $landinfo->parrafo1 }}";
        var desc1 = alt1.split("#");
        var how1=(alt1.match(/#/g) || []).length;
        var add1="";
        for (var i=0; i<=how1; i++) {
            add1+="<p>"+desc1[i]+"</p>";
        }
        $('#parrafo').html(add1);


        var alt = "{{ $landinfo->parrafo2 }}";
        var desc = alt.split("#");
        var how=(alt.match(/#/g) || []).length;
        var add="";
        for (var i=0; i<=how; i++) {
            add+="<li>"+desc[i]+"</li>";
        }
        $('#lista-temas').html(add);
        
    </script>
    <script>
        $( "form" ).on( "submit", function( event ) {
            
            $("#subm").attr('disabled','disabled');
            $("#subm").text('Registrando...');
        });
    </script>
    @stack('add-js')
</body>
</html>
