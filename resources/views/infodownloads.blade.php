@extends('templates.principal')
@section('name_title','Licencia personalizada Aspel | Inelco IT Solutions')
@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush


@section('contenido')
    <div id="wrapper" class=""> 

        <section class="sections" id="banner-licpers">
            <div class="fondo-gray">
                <h2 class="title-h2">Obtén una licencia personalizada de Aspel <b>{{$info->nombre_prod}}</b> </h2>
                <h3 class="title-h3">Disfruta por 30 días todos los beneficios de una licencia de paga, adquiriendo una licencia personalizada</h3>
            </div>
        </section>  

        <section id="info-descargas" class="secciones">
            <div class="container">
                <hgroup class="text-center">
                    <h3>¿Deseas probrar {{$info->nombre_prod}}?, tenemos buenas noticias para ti.</h3>
                    <h4>Te regalamos <b>30 días de prueba</b> con <b>toda la funcionalidad</b>.</h4>
                </hgroup>
                <div class="row">
                    <div class="col-md-6">
                        <p>Así es, puedes disfrutar durante 30 días de todas las funciones sin gastar ningún peso.</p>
                        <p>Realiza las operaciones del sistema {{$info->nombre_prod}}, sin ninguna restricción, a diferencia de una demo, con la <b>licencia personalizada</b> puedes comenzar a trabajar <b>! Ya !</b>, con el sistema registrado a nombre de tu empresa.</p>
                    
                        <p>Después de los 30 días podrás decidir si deseas adquirir el sistema, para ello contamos con 2 opciones, de manera permanente o bien contratar la suscripción. </p>
                    </div>
                    <div class="col-md-6">
                        <p>Solo necesitamos los siguientes datos para obtener tu periodo de prueba:</p>
                        <ul>
                            <li>Razón social</li>
                            <li>Nombre comercial</li>
                            <li>RFC</li>
                            <li>Nombre del contacto</li>
                            <li>Correo electrónico de contacto</li>
                            <li>Teléfono</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/checked.png" class="img-responsive"></div>
                        <p class="text-center">1.- Selecciona el sistema y la cantidad de usuarios adicionales.</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/curriculum.png" class="img-responsive"></div>
                        <p class="text-center">2.- Ingresa tus datos requeridos para dar de alta tu periodo de prueba.</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/install.png" class="img-responsive"></div>
                        <p class="text-center">3.- Instala el sistema e ingresa la información, o bien <b><a href="{{ url('contacto')}}">podemos ayudarte.</a></b></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-mumber"><img src="/images/bars-chart.png" class="img-responsive"></div>
                        <p class="text-center">4.- Disfruta y sacale el mayor provecho al sistema</p>
                    </div>
                </div>
            </div>   
        </section>

        <section class="secciones" id="info-descargas2">
            <div class="container">
                <div class="row">
                    <h3>No batalles, aprovecha al máximo tu sistema Aspel</h3>
                    <div class="col-md-12">
                        <h4>Si tienes alguna dificultad podemos apoyarte</h4>
                        <p>Te ofrecemos nuestros servicios de <a target="_blank" href="{{ url('/servicios')}}">implementación</a>, <a target="_blank" href="{{ url('/servicios#soporte')}}">soporte</a>, y si aún no sabes qué sistema es apropiado para tu negocio, te ofrecemos nuestros servicios de <a target="_blank" href="{{ url('/servicios#consultoria')}}">consultoría</a> y de <a target="_blank" href="{{ url('/servicios#capacitacion')}}">capacitación</a>.</p>
                        <p>La <b>licencia personalizada</b> te permite realizar todas las tareas del sistema y a nombre de tu empresa, esta tiene una duración de 30 días y solo aplica una sola vez por empresa, es decir, solo puedes escoger un sistema.</p>
                    </div>
                </div>
            </div>   
        </section>

        <section class="secciones" id="info-producto">
            <div class="container">
                <h3 class="text-center">Has seleccionado el sistema Aspel <b>{{$info->nombre_prod}}</b></h3>
                {{--<div class="row gray-img">
                    <div class="col-md-1 col-xs-3 col-md-offset-2">
                        <a class="download" producto="ADM" ><img src="/images/products/adm/aspel-producto-adm.png" alt="Aspel ADM" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="Banco 4.0" ><img src="/images/products/inelco-banco-logo.png" alt="Aspel BANCO" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="Caja 4.0" ><img src="/images/products/inelco-caja-logo.png" alt="Aspel CAJA" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="COI 7.0" ><img src="/images/products/inelco-coi-logo.png" alt="Aspel COI" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="FACTURE 4.0" ><img src="/images/products/inelco-facture-logo.png" alt="Aspel FACTURE" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="NOI 8.0" ><img src="/images/products/inelco-noi-logo.png" alt="Aspel NOI" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="PROD 3.0" ><img src="/images/products/inelco-prod-logo.png" alt="Aspel PROD" class="img-responsive"></a>
                    </div>
                    <div class="col-md-1 col-xs-3">
                        <a class="download" producto="SAE 6.0" ><img src="/images/products/sae/inelco-sae-ciclo.png" alt="Aspel SAE" class="img-responsive"></a>
                    </div>
                </div>--}}

                <div class="row">
                    <div class="panel panel-info">
                        <div class="panel-heading">Detalles del pedido</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Producto</th>
                                            <th class="text-center">Descripción</th>    
                                            <th class="text-center">Usuarios adicionales</th> 
                                            <th class="text-center">Servicios</th>   
                                            <th class="text-center">Total</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ $info->logo_prod }}" class="img-responsive">{{--<p class="text-center">{{$info->nombre_prod}}</p>--}}</td>
                                            <td><p>{{ $info->incluye_prod}}</p></td>
                                            <td class="text-center">
                                                <input id="cant-usua" class="text-center" max="20" maxlength="2" min="0" style="width: 10%; min-width:60px;" type="number" value="0">
                                                <input class="text-center" type="text" style="width: 15%; min-width:90px;" value="$1,000.00" disabled>                                            
                                            </td>
                                            <td class="text-center">NO</td>
                                            <td class="text-right" style="width: 15%; min-width:90px;">{{number_format($info->precio_prod,2)}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="container-fluid">
                                <div class="col-sm-9 ">
                                    <button id="add-serv" class="btn btn-success xs btn-visible">Agregar servicios</button>
                                    <button id="quit-serv"type="button" class="btn btn-danger btn-no-visible">Quitar servicios</button>
                                </div>
                                <div class="col-sm-3 text-right">
                                    <p>Total: <b>$ {{number_format(1000,2)}}</b></p>
                                </div>
                            </div>   
                        </div>                  
                    </div>
                </div>

                <div style="display:none;" class="row">
                    @if (Auth::guest())
                        {!! Form::open(array('url' =>'centro-de-descarga/download', 'class' => 'form-horizontal')) !!}
                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="razon_social" type="text" class="form-control" placeholder="Razón social">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="nombre_comercial" type="text" class="form-control" placeholder="Nombre comercial">
                                    </div>
                                </div>
                            </div>    
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="rfc" type="text" class="form-control" placeholder="RFC">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-user-tie"></i></div>
                                        <input name="contribuyente" type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                            </div> 
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                        <input name="email_usuario" type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                        <input name="telefono" type="tel" class="form-control" placeholder="Telefono">
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="software" class="name-prod">

                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fa icon-download4"></i> Descargar
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(array('url' =>'centro-de-descarga/download', 'class' => 'form-horizontal')) !!}
                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="razon_social" type="text" class="form-control" placeholder="Razón social" value="{{ Auth::user()->razon_social }}">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="nombre_comercial" type="text" class="form-control" placeholder="Nombre comercial" value="{{ Auth::user()->nombre_comercial }}">
                                    </div>
                                </div>
                            </div>    
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-office"></i></div>
                                        <input name="rfc" type="text" class="form-control" placeholder="RFC" value="{{ Auth::user()->rfc }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-user-tie"></i></div>
                                        <input name="contribuyente" type="text" class="form-control" placeholder="Nombre" value="{{ Auth::user()->contribuyente }}">
                                    </div>
                                </div>
                            </div> 
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                        <input name="email_usuario" type="email" class="form-control" placeholder="Email" value="{{ Auth::user()->correo_facturacion }}">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa icon-mobile"></i></div>
                                        <input name="telefono" type="tel" class="form-control" placeholder="Telefono" value="{{ Auth::user()->telefono }}">
                                    </div>
                                </div>
                            </div>
                            
                            <input type="hidden" name="software" class="name-prod">

                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fa icon-download4"></i> Descargar
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    @endif
                </div>
                
            </div>   
        </section>

    </div>

@endsection


@push('add-js')   
    <script>
        $( ".panel-footer" ).on( "click", "button", function() {
            $(".panel-footer .btn-no-visible").addClass("btn-visible");
            $(".panel-footer .btn-no-visible").toggleClass("btn-no-visible");
            $(this).toggleClass("btn-visible");
            $(this).addClass("btn-no-visible");
        });
    </script>
    <script>
        /*$(document).ready(function(){
            prod="{{$info->nombre_prod}}";
            if(prod:contains('SAE')){
                $("#cant_usua").attr("max","50");
                alert("si tiene "+prod);
            }
        });*/
        
        $('#cant-usua').on('change', function(e) {
            var us={{ $info->precio_prod}};
            e.preventDefault();
            var cantidad = $(this).val();
            //console.log("La cantidad de usuario es: "+cantidad +" " +us);
        });
        
    </script>
@endpush