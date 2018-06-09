@extends('templates.master-admin')


@section('name_title','Registro administrador | Inelco IT Solutions')

@section('contenido')
    <section class="secciones sesiones">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="title-h3">Crear una cuenta</h3></div>
                        <div class="panel-body">
                            <p>Disfruta de todos los beneficios como acceso a la base de conocimientos, al centro de descarga, y muchos beneficios más que solo Inelco IT Solutions te puede ofrecer.</p>
                            <br>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-user-tie"></span></div>
                                            <input placeholder="Nombre" id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                                        </div>
                                        @if ($errors->has('nombre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-user-tie"></span></div>
                                            <input placeholder="Apellidos" id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}">
                                        </div>
                                        @if ($errors->has('apellidos'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('apellidos') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-mobile"></span></div>
                                            <input placeholder="Telefono" id="telefono" type="tel" class="form-control" name="telefono" value="{{ old('telefono') }}">
                                        </div>
                                        @if ($errors->has('telefono'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('telefono') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-email"></span></div>
                                            <input placeholder="E-mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-key2"></span></div>
                                            <input placeholder="Contraseña" id="password" type="password" class="form-control" name="password">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-key2"></span></div>
                                            <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-3 col-xs-offset-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn icon-user"></i> Registrarme
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
