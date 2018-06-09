@extends('templates.master-admin')

@section('name_title','Administración Calendario | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div class="container-fluid">
            <h1>Calendario de eventos</h1>
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
                        <div class="panel-heading"><h4>Eventos</h4><a href="{{ url('/admin/calendario/create')}}" class="btn btn-white btn-sm"><i class="icon-circle-with-plus"></i> Agregar evento</a></div>
                        <div class="panel-body">
                            @if(count($eventos) > 0)
                                <div class="table-responsive">
                                    <table class="table table-eventos">
                                        <thead>
                                            <tr>
                                            <th class="text-center">ID</th>
                                                <th class="text-center td-acciones ">Acciones</th>
                                                <th>Tipo</th>
                                                <th>Evento</th>
                                                <th class="th-text">Descripción</th>
                                                <th>Producto</th>
                                                <th>Expositor</th>
                                                <th>Días</th>
                                                <th>Nombre días</th>
                                                <th>Mes</th>
                                                <th>Año</th>
                                                <th>Horario</th>
                                                <th>Duración</th>
                                                <th>Cupo</th>
                                                <th>Precio</th>
                                                <th>Link</th>
                                                <th>Tag URL</th>                                                
                                                <th>Estado</th>
                                                <th>Ciudad</th>
                                                <th>Lugar</th>
                                                <th>Dirección</th>
                                                <th>CP</th>
                                                <th>Habilitado</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($eventos as $evento)
                                            <tr>
                                                <td class="text-center"><b>{{ $evento->id }}</b></td>
                                                <td class="td-actions text-right ul-block">
                                                    <!--<button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-user"></i>
                                                    </button>-->
                                                    <ul>
                                                        <li>
                                                            <a href="calendario/{{ $evento->id }}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/calendario', $evento->id),
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
                                                                'data-title' => 'Eliminar evento con ID: '.$evento->id,
                                                                'data-message' => '¿Esta seguro de eliminar este evento: '.$evento->nombre_evento.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}

                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>
                                                    
                                                    
                                                    
                                                </td>
                                                
                                                <td>{{ $evento->tipo_evento}}</td>
                                                <td>{{ $evento->nombre_evento}}</td>
                                                <td>{{ $evento->descripcion_evento}}</td>
                                                <td>{{ $evento->producto}}</td>
                                                <td>{{ $evento->expositor}}</td>
                                                <td>{{ $evento->numero_dias_evento }}</td>
                                                <td>{{ $evento->nombre_dias_evento }}</td>
                                                <td>{{ $evento->mes}}</td>
                                                <td>{{ $evento->anio}}</td>
                                                <td>{{ $evento->horario_evento }}</td>
                                                <td>{{ $evento->duracion_evento}}</td>
                                                <td>{{ $evento->cantidad_cupo}}</td>
                                                <td>{{ $evento->precio_evento}}</td>
                                                <td>{{ $evento->link_landing_evento }}</td>
                                                <td>{{ $evento->etiqueta_url}}</td>
                                                <td>{{ $evento->estado}}</td>
                                                <td>{{ $evento->ciudad}}</td>
                                                <td>{{ $evento->lugar}}</td>
                                                <td>{{ $evento->direccion}}</td>
                                                <td>{{ $evento->cp_evento}}</td>
                                                <td>{{ $evento->habilitado}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {!! $eventos->links() !!}
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
                                        <b>Información:</b> No hay eventos registrados en la base de datos...
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