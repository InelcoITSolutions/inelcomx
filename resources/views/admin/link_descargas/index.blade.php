@extends('templates.master-admin')

@section('name_title','Link de descargas | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')

    <section>
        <div class="container">
            <h2>Links de descargas</h2>
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
                        <div class="panel-heading"><h4>Links</h4></div>
                        <div class="panel-body">
                            @if(count($links) > 0)
                                <div class="table-responsive">
                                    <table class="table table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Software</th>
                                                <th>Link</th>
                                                <th class="text-center td-acciones">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($links as $link)
                                            <tr>
                                                <td class="text-center"><b>{{ $link->id }}</b></td>
                                                <td>{{ $link->nombre_software}}</td>
                                                <td>{{ $link->link_software}}</td>
                                                <td class="td-actions text-right ul-block">
                                                    <ul>
                                                        <li>
                                                            <a href="link-descargas/{{$link->id}}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/link-descargas', $link->id),
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
                                                                'data-title' => 'Eliminar el link con ID: '.$link->id,
                                                                'data-message' => '¿Esta seguro de eliminar el link de: '.$link->nombre_software.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger ',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}
                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {!! $links->links() !!}
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
                                        <b>Información:</b> No hay ninguna dato de descargas registrado en la base de datos...
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>     
                </div>
            </div>

            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Agregar un nuevo link de descarga</h4></div>
                        <div class="panel-body">

                            {!! Form::open(array('url' =>'admin/link-descargas')) !!}
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-12">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Nombre del software:</label>
                                        {!! Form::text('nombre_software',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ejemplo: NOI 8.0']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Link de descarga del software:</label>
                                        {!! Form::text('link_software',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                    
                                    <!-- Add Task Button -->
                                <div class="col-md-offset-5 col-md-6">
                                    <div class="form-group">
                                        {!! Form::button('<i class="fa fa-btn icon-circle-with-plus"></i> Agregar Link',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </section>


    
@endsection

@push('add-js')

@endpush