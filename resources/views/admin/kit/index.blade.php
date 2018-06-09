@extends('templates.master-admin')

@section('name_title','Administración Kit | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div class="container-fluid">
            <h2>Kit</h2>
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
                        <div class="panel-heading"><h4>Kit</h4><a href="{{ url('/admin/kit/create')}}" class="btn btn-white btn-sm"><i class="icon-circle-with-plus"></i> Agregar kit</a></div>
                        <div class="panel-body">
                            @if(count($kits) > 0)
                                <div class="table-responsive">
                                    <table class="table table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center td-acciones">Acciones</th>
                                                <th>Nombre</th>
                                                <th class="th-text">Descripción</th>
                                                <th>Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kits as $kit)
                                            <tr>
                                                <td class="text-center"><b>{{ $kit->id }}</b></td>
                                                <td class="td-actions text-right ul-block">
                                                    <ul >
                                                        {{-- <li>

                                                            <button href="" rel="tooltip" title="Ver" class="btn btn-info btn-simple btn-xs modal-btn" idkit="{{ $kit->id }}";>
                                                                <i class=" icon-eye2"></i>
                                                            </button>
                                                        </li> --}}
                                                        <li>
                                                            <a href="kit/{{ $kit->id }}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/kit', $kit->id),
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
                                                                'data-title' => 'Eliminar kit con ID: '.$kit->id,
                                                                'data-message' => '¿Esta seguro de eliminar este kit: '.$kit->nombre_kit.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}
                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>     
                                                </td>
                                                
                                                <td>{{ $kit->nombre_kit}}</td>
                                                <td>{{ $kit->descripcion_kit}}</td>
                                                <td>{{ $kit->precio}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {{ $kits->links() }}
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
                                        No hay kits registrados en la base de datos...
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

{{-- <div class="modal fade" id="showKit" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="gridSystemModalLabel">Información del Kit: </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group label-floating in-near">
                                <label class="control-label">Nombre:</label>
                                <input class="form-control" id="nombre" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group label-floating in-near">
                                <label class="control-label">Precio:</label>
                                <input class="form-control" id="precios" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group label-floating in-near">
                                <label class="control-label">Descripción:</label>
                                <textarea class="form-control" id="descripcion" rows="1" disabled></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Productos</div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>nose</td>
                                                <td>23</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> --}}


{{-- @push('add-js')
    <script>
        $(document).ready(function(){
            $(".table").on("click",".modal-btn", function(e){
                e.preventDefault();

                var kitID=$(this).attr('idkit');
                
                $.get('{{url('admin/kit')}}/'+kitID, function(data) {
                    var txt="data: "+data['nombre_kit'];

                    console.log(data);
                    console.log(data.articulos[0].cantidad);
                    $('#showKit #nombre').val(txt);
                    $('#showKit #descripcion').val(data.descripcion_kit);
                    $('#showKit #precios').val(data['precio']);
                    $('.modal-body table tbody').append('<tr><td>1</td><td>'+data.articulos[0].cantidad+'</td><td>23</td></tr>');
                    $('#showKit').modal('show');
                });
                //$('#showKit').modal('show'); 
            });      
        });
    </script>
@endpush --}}