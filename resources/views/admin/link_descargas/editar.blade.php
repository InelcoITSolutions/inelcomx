@extends('templates.master-admin')

@section('name_title','Editar link de descargas | Inelco IT Solutions')

@section('contenido')

    <section>
        <div class="container">
            <h2>Edición de link de descarga</h2>

            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Editar link con ID: <b style="font-weight: 600">{{ $link_descarga->id }}</b></h4></div>
                        <div class="panel-body">

                            {!! Form::model($link_descarga, array('url' => ['admin/link-descargas', $link_descarga->id],'method'=>'PUT')) !!}
                                <input type="hidden" name="_method" value="PATCH">
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
                            <!--</form>-->
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </section>    
@endsection