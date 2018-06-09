@extends('templates.master-admin')

@section('name_title','Iniciar sesión como administrador| Inelco IT Solutions')

@section('contenido')
    <section class="secciones sesiones">
        <div class=" container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="title-h3">Iniciar Sesión: Administradores</h3></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                                {{ csrf_field() }}

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

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Recordarme
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-3 col-xs-12">
                                        <ul class="botones">
                                            <li>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-btn icon-login"></i> Iniciar sesión
                                                </button>
                                            </li>
                                            <li><a class="" href="{{ url('/admin/password/reset') }}">¿Olvidaste tu contraseña?</a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{--<div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="{{ url('/register') }}">Registrarme</a>
                                    </div>
                                </div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
@endsection
