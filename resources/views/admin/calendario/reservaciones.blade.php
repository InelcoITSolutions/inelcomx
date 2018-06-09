@extends('templates.master-admin')

@section('name_title','Reservaciones | Inelco IT Solutions')

@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    <section>
        <div class="container-fluid">
            <h2 class="text-center">Reservación de eventos</h2>
            @if(Session::has('mensaje'))
                <div class="alert alert-success">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="icon-check ico-notif"></i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-cross2"></i></span>
                        </button>
                        <b>Yuhuuu! {{ Session::get('mensaje') }}</b>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Reservaciones</h4></div>
                        <div class="panel-body">
                            @if(count($reservaciones) > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                {{-- <th class="text-center td-acciones ">Acciones</th> --}}
                                                <th>No. Reservación</th>
                                                <th>Nombre</th>
                                                <th>Empresa</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                                <th>Evento</th>
                                                <th>Fecha registro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reservaciones as $reservacion)
                                            <tr>
                                                <td class="text-center"><b>{{ $reservacion->id }}</b></td>
                                                {{-- <td class="td-actions text-right ul-block">
                                                    <ul>
                                                        <li>
                                                            <a href="calendario/{{ $reservacion->id }}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/calendario', $reservacion->id),
                                                                'method' => 'DELETE',
                                                                ))
                                                            }}

                                                            {{Form::button('', array(
                                                                'class' => 'btn btn-danger btn-simple btn-xs icon-bin',
                                                                'style'=> 'font-size: 1.5em;',
                                                                'rel' => 'tooltip',
                                                                'title' => 'Eliminar',
                                                                'data-toggle' => 'modal',
                                                                'data-target' => '#confirmDelete',
                                                                'data-title' => 'Eliminar reservacion con ID: '.$reservacion->id,
                                                                'data-message' => '¿Esta seguro de eliminar este reservacion: '.$reservacion->nombre_reservacion.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}
                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>
                                                </td> --}}
                                                <td>{{ $reservacion->no_reservacion}}</td>
                                                <td>{{ $reservacion->nombre}} {{ $reservacion->apellidos }}</td>
                                                <td>{{ $reservacion->empresa}}</td>
                                                <td>{{ $reservacion->telefono}}</td>
                                                <td>{{ $reservacion->email}}</td>
                                                <td>{{ $reservacion->evento }}</td>
                                                <td>{{ $reservacion->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {!! $reservaciones->links() !!}
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
                                        <b>Información:</b> No hay reservaciones registradas en la base de datos...
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