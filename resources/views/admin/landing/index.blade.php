@extends('templates.master-admin')

@section('name_title','Administración de Landing Pages| Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')

    <section>
        <div class="container-fluid">
            <h1>Landing pages</h1>
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
                        <div class="panel-heading"><h4>Landing pages existentes</h4> <a href="{{ url('/admin/landing/create')}}" class="btn btn-white btn-sm"><i class="icon-circle-with-plus"></i> Agregar landing</a></div>
                        <div class="panel-body">
                            @if(count($landing) > 0)
                                <div class="table-responsive">
                                    <table class="table table-condensed table-hover table-landing">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center td-acciones">Acciones</th>
                                                <th>Nombre evento</th>
                                                <th>Estilos</th>
                                                <th class="th-img">Logo coanfitrion</th>
                                                <th class="th-img">Img banner</th>
                                                <th class="th-img">Img producto</th>
                                                <th class="th-text">Parrafo 1</th>
                                                <th class="th-text">Parrafo 2</th>
                                                <th>Link temario</th>
                                                <th>Dirigido 1</th>
                                                <th>Dirigido 2</th>
                                                <th>Dirigido 3</th>
                                                <th>Dirigido 4</th>
                                                <th>Imagen dirigido</th>
                                                <th>Frase</th>
                                                <th>Título Descripción 1</th>
                                                <th class="th-text">Contenido Descripción 1</th>
                                                <th class="th-img">Imagen Descripción 1</th>
                                                <th>Título Descripción 2</th>
                                                <th class="th-text">Contenido Descripción 2</th>
                                                <th class="th-img">Imagen Descripción 2</th>
                                                <th>Título Descripción 3</th>
                                                <th class="th-text">Contenido Descripción 3</th>
                                                <th class="th-img">Imagen Descripción 3</th>
                                                <th class="th-code">Codigo mapa</th>
                                                <th>Logo del lugar</th>
                                                <th>Link webinar</th>            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($landing as $land)
                                            <tr>
                                                <td class="text-center"><b>{{ $land->id }}</b></td>
                                                <td class="td-actions text-right ul-block">
                                                    <!--<button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-user"></i>
                                                    </button>-->
                                                    <ul>
                                                        <li>
                                                            <a href="landing/{{$land->id }}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/landing', $land->id),
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
                                                                'data-title' => 'Eliminar landing con ID: '.$land->id,
                                                                'data-message' => '¿Esta seguro de eliminar la landing page del evento: '.$land->nombre_evento.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}

                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>
                                                            
                                                </td>
                                                <td>{{ $land->nombre_evento}}</td>
                                                <td>{{ $land->estilos}}</td>
                                                <td>{{ $land->logo_coanfitrion}}</td>
                                                <td>{{ $land->img_producto_banner}}</td>
                                                <td>{{ $land->img_producto}}</td>
                                                <td>{{ $land->parrafo1}}</td>
                                                <td>{{ $land->parrafo2}}</td>
                                                <td>{{ $land->link_temario }}</td>
                                                <td>{{ $land->dirigido1}}</td>
                                                <td>{{ $land->dirigido2}}</td>
                                                <td>{{ $land->dirigido3}}</td>
                                                <td>{{ $land->dirigido4}}</td>
                                                <td>{{ $land->img_dirigido}}</td>
                                                <td>{{ $land->frase}}</td>
                                                <td>{{ $land->title_desc1}}</td>
                                                <td>{{ $land->cont_desc1}}</td>
                                                <td>{{ $land->img_desc1}}</td>
                                                <td>{{ $land->title_desc2}}</td>
                                                <td>{{ $land->cont_desc2}}</td>
                                                <td>{{ $land->img_desc2}}</td>
                                                <td>{{ $land->title_desc3}}</td>
                                                <td>{{ $land->cont_desc3}}</td>
                                                <td>{{ $land->img_desc3}}</td>
                                                <td>{{ $land->codigo_mapa}}</td>
                                                <td>{{ $land->img_lugar_logo}}</td>
                                                <td>{{ $land->link_webinar}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {!! $landing->links() !!}
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
                                        <b>Información:</b> No hay landing pages registradas en la base de datos...
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