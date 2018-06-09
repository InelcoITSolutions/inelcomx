@extends('templates.master-admin')

@section('name_title','Ventas | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div class="container-fluid">
            <h2>Ventas</h2>
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
                        <div class="panel-heading"><h4>Ventas</h4></div>
                        <div class="panel-body">
                            @if(count($ventas) > 0)
                                @php $i=1; @endphp
                                <div class="table-responsive">
                                    <table class="table table-eventos">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>ID</th>
                                                {{-- <th class="text-center td-acciones">Acciones</th> --}}
                                                <th>Total</th>
                                                <th>Estado de la venta</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ventas as $venta)
                                            <tr>
                                                <td class="text-center"><b>{{ $i++ }}</b></td>
                                                <td>{{ $venta->id }}</td>
                                                {{-- <td class="td-actions text-right ul-block">
                                                    <ul>
                                                        <li>
                                                            <a href="ventas/{{ $venta->id }}/edit" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                                                                <i class="icon-pencil2"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            {{Form::open(array(
                                                                'url' => array('admin/ventas', $venta->id),
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
                                                                'data-title' => 'Eliminar venta con ID: '.$venta->id,
                                                                'data-message' => '¿Esta seguro de eliminar este venta: '.$venta->nombre_prod.'?',
                                                                'data-btncancel' => 'btn-default',
                                                                'data-btnaction' => 'btn-danger',
                                                                'data-btntxt' => 'Eliminar'
                                                                ))
                                                            }}
                                                            {{ Form::close() }}
                                                        </li>
                                                    </ul>
                                                </td> --}}
                                                <td>{{ $venta->total}}</td>
                                                <td>{{ $venta->estado_venta}}</td>
                                                <td>{{ $venta->created_at}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    {{ $ventas->links() }}
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
                                        No hay Ventas registradas en la base de datos...
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

