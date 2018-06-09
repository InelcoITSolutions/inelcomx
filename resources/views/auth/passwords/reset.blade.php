@extends('templates.principal')

@section('name_title','Reestablecer constraseña | Inelco IT Solutions')

@section('contenido')
    <section class="secciones reset-contra">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="title-h3">Reestablecer contraseña</h3></div>
                        <div class="panel-body">
                            
                            <p>Para que tu contraseña sea segura, te recomendamos que como minimo sean 8 caracteres y que contenga: mayusculas, minusculas, simbolos y números.</p>
                            <br>

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="icon-email"></span></div>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
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
                                            <input placeholder="Nueva contraseña" id="password" type="password" class="form-control" name="password">
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
                                            <input placeholder="Confirmar nueva contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn icon-cycle"></i> Reestablecer contraseña
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
