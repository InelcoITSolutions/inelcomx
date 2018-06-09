@extends('templates.master-admin')

@section('name_title','Productos Administración | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div class="container-fluid">
            <h2>Productos</h2>
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
                        <div class="panel-heading"><h4>Productos</h4><a href="{{ url('/admin/productos/create')}}" class="btn btn-white btn-sm"><i class="icon-circle-with-plus"></i> Agregar producto</a></div>
                        <div class="panel-body">
                            @if(count($productos) > 0)
                                <div class="table-responsive">
                                    <table class="table table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center td-acciones">Acciones</th>
                                                <th>Clave</th>
                                                <th>Clave proveedor</th>
                                                <th>Nombre</th>
                                                <th class="th-text">Descripción</th>
                                                <th>Incluye</th>
                                                <th>Marca</th>
                                                <th>Link</th>
                                                <th>Tipo</th>
                                                <th>Precio</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($productos as $producto)
                                            <tr>
                                                <td class="text-center"><b>{{ $producto->id }}</b></td>
                                                <td class="td-actions text-right ul-block">
                                                    <ul>
                                                        <!--<li>
                                                            <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                                <i class="fa fa-user"></i>
                                                            </button>
                                                        </li>-->
                                                        <li>
                                                            <a href="productos/{{ $producto->id }}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/productos', $producto->id),
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
                                                                'data-title' => 'Eliminar producto con ID: '.$producto->id,
                                                                'data-message' => '¿Esta seguro de eliminar este producto: '.$producto->nombre_prod.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}
                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>
                                                </td>
                                                
                                                <td>{{ $producto->clave}}</td>
                                                <td>{{ $producto->clave_proveedor}}</td>
                                                <td>{{ $producto->nombre_prod}}</td>
                                                <td>{{ $producto->descripcion_prod}}</td>
                                                <td>{{ $producto->incluye_prod}}</td>
                                                <td>{{ $producto->marca}}</td>
                                                <td>{{ $producto->link_prod }}</td>
                                                <td>{{ $producto->tipo }}</td>
                                                <td>{{ $producto->precio_prod}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {{ $productos->links() }}
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
                                        No hay productos registrados en la base de datos...
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

