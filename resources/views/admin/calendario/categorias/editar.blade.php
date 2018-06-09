@extends('templates.master-admin')

@section('name_title','Editar categoria de eventos | Inelco IT Solutions')

@section('contenido')

    <section>
        <div class="container">
            <h1>Edición de las categorias de eventos</h1>

            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Editar categoría con ID: <b style="font-weight: 600">{{ $categoria->id }}</b></h4></div>
                        <div class="panel-body">

                            {!! Form::model($categoria, array('url' => ['admin/categorias_eventos', $categoria->id],'method'=>'PUT')) !!}
                                <input type="hidden" name="_method" value="PATCH">
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
                                        {!! Form::button('<i class="fa fa-btn icon-cycle"></i> Actualizar categoría',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>


                            {!! Form::close() !!}
                            <!--</form>-->
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </section>    
@endsection