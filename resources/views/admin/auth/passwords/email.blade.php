@extends('templates.master-admin')

@section('name_title','¿Olvidaste tu contraseña? | Inelco IT Solutions')

@section('contenido')
    <section class="secciones email-to-reset sesiones">
        <div class="container">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="title-h3">¿Olvidaste tu contraseña?</h3></div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Ingresa tu dirección de correo para restaurarla. Es posible que tengas que verificar tu carpeta de correos no deseados.</p>
                        <br>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/password/email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="icon-email"></span></div>
                                        <input placeholder="" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn icon-envelop"></i> Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
