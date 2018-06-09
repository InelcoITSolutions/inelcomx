@extends('templates.master-admin')

@section('name_title','Administración Inicio | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')

    <section>
        <div class="container">
            <div class=" row">
                <h3 class="text-center">¿Que deseas realizar?</h3>
                <div class="panel-body ul-block">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Calendario de eventos</h4></div> 
                        <div class="panel-body">
                            <ul>
                            	<li><a href="{{ url('/admin/calendario')}}" class="btn btn-success"><i class="fa icon-calendar"></i> Eventos</a></li>
                            	<li><a href="{{ url('/admin/landing')}}" class="btn btn-success"><i class="fa icon-browser"></i> Landing pages</a></li>
                            	<li><a href="{{ url('/admin/categorias_eventos')}}" class="btn btn-success"><i class="fa icon-tag"></i> Categorias</a></li>
                                <li><a href="{{ url('/admin/eventos/reservaciones')}}" class="btn btn-success"><i class="fa icon-book"></i> Reservaciones</a></li>
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
            <div class=" row">
                <div class="panel-body ul-block">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Tienda</h4></div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="{{ url('/admin/productos')}}" class="btn btn-success"><i class="fa icon-box"></i> Productos</a></li>
                                <li><a href="{{ url('/admin/kit')}}" class="btn btn-success"><i class="fa icon-list3"></i> Kit</a></li>
                                <li><a href="{{ url('/admin/ventas')}}" class="btn btn-success"><i class="fa icon-shopping-cart"></i> Ventas</a></li>
                                {{-- <li><a href="{{ url('/admin/categorias_eventos')}}" class="btn btn-success"><i class="icon-tag"></i> Crear nueva categoria</a></li> --}}
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
            <div class=" row">
                <div class="panel-body ul-block">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Descargas</h4></div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="{{ url('/admin/link-descargas')}}" class="btn btn-success"><i class="fa icon-box"></i> Link de descargas</a></li>
                                <li><a href="{{ url('admin/descargas')}}" class="btn btn-success"><i class="fa icon-list3"></i> Software descargado</a></li>
                                {{-- <li><a href="{{ url('/admin/categorias_eventos')}}" class="btn btn-success"><i class="icon-tag"></i> Crear nueva categoria</a></li> --}}
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </section>




    
@endsection

@push('add-js')

@endpush