<div class="modal fade" id="modalDownload" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="gridSystemModalLabel">¿Como deseas descargar <b></b> ?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Descargar y obtener todas las funciones por 30 días.</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span " data-parent="#accordion1" href="#all"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="all" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <p>Obtén el sistema <b>sin límites</b> por 30 días gratis. Enviaremos a tu email el link de descarga.</p>

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
                                                    <button type="submit" class="btn btn-primary">
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
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa icon-download4"></i> Descargar
                                                    </button>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-10 col-xs-10">
                                            <h4 class="panel-title">Solo quiero descargar</h4>
                                        </div>
                                        <div class="col-sm-2 col-xs-2">
                                            <a data-toggle="collapse" class="faq-span collapsed" data-parent="#accordion1" href="#only"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="only" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    
                                    <p>Enviaremos a tu email el link de descarga.</p>
                                    @if (Auth::guest())
                                        {!! Form::open(array('url' =>'centro-de-descarga/download', 'class' => 'form-inline')) !!}
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            
                                            <div class="form-group">
                                                <div class="input-group ">
                                                    <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                                    <input name="email_usuario" type="email" class="form-control" placeholder="Email" >
                                                </div>
                                            </div>

                                            <input type="hidden" name="software" class="name-prod">

                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa icon-download4"></i> Descargar
                                            </button>                                              
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(array('url' =>'centro-de-descarga/download', 'class' => 'form-inline')) !!}
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            
                                            <div class="form-group">
                                                <div class="input-group ">
                                                    <div class="input-group-addon"><i class="fa icon-mail"></i></div>
                                                    <input name="email_usuario" type="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>

                                            <input type="hidden" name="software" class="name-prod">

                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa icon-download4"></i> Descargar
                                            </button>                                              
                                        {!! Form::close() !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>

@push('add-js')
    <script>
        $('.download').on('click',function(){
            $("#modalDownload").modal('show');
            $message = $(this).attr('producto');
            $("#modalDownload").find('.modal-header h4 b').text($message);
            $("#modalDownload").find('.name-prod').val($message);
        });
    </script>
@endpush