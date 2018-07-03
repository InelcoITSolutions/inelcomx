@extends('templates.principal')
@section('name_title','Confirmación de registro| Inelco IT Solutions')
@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush


@section('contenido')
    
    <section class="confirmacion secciones sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-h2">¡Gracias por registrarte!</h2>
                    <p>Registro completo</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Has reservado tu asistencia al evento:</p>
                    <br>
                    {{-- <p><b>{{ $request->eventoname }}</b></p>
                    <p>{{ $request->dircompleta }}</p> --}}
                    <p><b>{{ $request->evento }}</b></p>
                    
                </div>
                <div class="col-md-6">
                    <br>
                    <br>
                    <p>Te hemos enviado un correo electrónico con tu numero de reservación e instrucciones para que completes tu registro.
                    <br>
                    (En caso de no recibir el correo verifique en la carpeta de no deseado o comuniquese al teléfono: 81 1352 2020)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary btn-lg" href="{{url('calendario')}}">Regresar al calendario</a>
                    <a class="btn btn-default btn-lg" href="{{url('/')}}">Ir a Inicio</a>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('add-js')   

@endpush