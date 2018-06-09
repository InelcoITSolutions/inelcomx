@extends('templates.master-admin')

@section('name_title','Software descargado | Inelco IT Solutions')

@section('contenido')
    <section>
        <div class="container-fluid">
            <h2 class="text-center">Software descargado</h2>
            @if(Session::has('mensaje'))
                <div class="alert alert-success">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="icon-check ico-notif"></i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-cross2"></i></span>
                        </button>
                        <b>{{ Session::get('mensaje') }}</b>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Descargas</h4></div>
                        <div class="panel-body">
                            @if(count($descargas) > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Email</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Razón social</th>
                                                <th>Nombre comercial</th>
                                                <th>RFC</th>
                                                <th>Software descargado</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($descargas as $descarga)
                                            <tr>
                                                <td class="text-center"><b>{{ $descarga->id }}</b></td>
                                                <td>{{ $descarga->email_usuario}}</td>
                                                <td>{{ $descarga->contribuyente}}</td>
                                                <td>{{ $descarga->telefono}}</td>
                                                <td>{{ $descarga->razon_social}}</td>
                                                <td>{{ $descarga->nombre_comercial}}</td>
                                                <td>{{ $descarga->rfc }}</td>
                                                <td>{{ $descarga->nom_soft}}</td>
                                                <td>{{ $descarga->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {!! $descargas->links() !!}
                                </div>
                            @else
                                <div class="alert alert-info">
                                    <div class="container-fluid">
                                        <div class="alert-icon">
                                            <i class="icon-info-with-circle ico-notif"></i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="icon-cross2"></i></span>
                                        </button>
                                        <b>Información:</b> No hay descargas registradas en la base de datos...
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </section>
    
@endsection

@push('add-js')

@endpush