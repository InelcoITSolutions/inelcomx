@extends('templates.master-admin')

@section('name_title','Categorias de eventos | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')

    <section>
        <div class="container">
            <h1>Categorías de eventos</h1>
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
                        <div class="panel-heading"><h4>Categorías</h4></div>
                        <div class="panel-body">
                            @if(count($categorias) > 0)
                                <div class="table-responsive">
                                    <table class="table table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Nombre de la categoría</th>
                                                <th class="text-center td-acciones">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categorias as $categoria)
                                            <tr>
                                                <td class="text-center"><b>{{ $categoria->id }}</b></td>
                                                <td>{{ $categoria->evento_categoria}}</td>
                                                <td class="td-actions text-right ul-block">
                                                    <ul>
                                                        <li>
                                                            <a href="categorias_eventos/{{$categoria->id}}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/categorias_eventos', $categoria->id),
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
                                                                'data-title' => 'Eliminar la categoría con ID: '.$categoria->id,
                                                                'data-message' => '¿Esta seguro de eliminar esta categoria: '.$categoria->evento_categoria.'?',
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
                                    {!! $categorias->links() !!}
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
                                        <b>Información:</b> No hay categorias registradas en la base de datos...
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
                        <div class="panel-heading"><h4>Agregar una nueva categoria</h4></div>
                        <div class="panel-body">

                            {!! Form::open(array('url' =>'admin/categorias_eventos')) !!}
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-12">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Nombre de la categoría:</label>
                                        {!! Form::text('evento_categoria',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ejemplo: Presentación']) !!}
                                    </div>
                                </div>
                                    
                                    <!-- Add Task Button -->
                                <div class="col-md-offset-5 col-md-6">
                                    <div class="form-group">
                                        {!! Form::button('<i class="fa fa-btn icon-circle-with-plus"></i> Agregar categoria',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
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