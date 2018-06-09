@extends('templates.master-admin')

@section('name_title','Editar evento | Inelco IT Solutions')

@section('contenido')

    <section>
        <div class="container">
            <h1>Edición del calendario de eventos</h1>

            <div class="row">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Editar evento con ID: <b style="font-weight: 600">{{ $calendario->id }}</b></h4></div>
                        <div class="panel-body">

                            {!! Form::model($calendario, ['url' => ['admin/calendario',$calendario->id],'method'=>'PATCH']) !!}
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo del evento:</label>
                                        {!! Form::select('id_categoria',$category,null,['id'=>'id_categoria','class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre del evento:</label>
                                        {!! Form::text('nombre_evento',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Descripción del evento:</label>
                                        {!! Form::textarea('descripcion_evento',null,['class'=>'form-control','rows'=>'2']) !!}
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Producto:</label>
                                        {!! Form::text('producto',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'ej. SAE 6.0']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Expositor:</label>
                                        {!! Form::text('expositor',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Nombre del expositor']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Fecha del evento:</label>
                                        {!! Form::text('numero_dias_evento',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'ej. 11 y 12']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Dia del evento:</label>
                                        {!! Form::text('nombre_dias_evento',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'ej. lunes y martes']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Mes:</label>
                                        {!! Form::select('mes', 
                                            ['1' => 'Enero', 
                                             '2' => 'Febrero',
                                             '3' => 'Marzo',
                                             '4' => 'Abril',
                                             '5' => 'Mayo',
                                             '6' => 'Junio',
                                             '7' => 'Julio',
                                             '8' => 'Agosto',
                                             '9' => 'Septiembre',
                                             '10' => 'Octubre',
                                             '11' => 'Noviembre',
                                             '12' => 'Diciembre',
                                             ],null,['class'=>'form-control select-nopad'] )!!}
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Año:</label>
                                        {!! Form::text('anio',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Horario del evento:</label>
                                        {!! Form::text('horario_evento',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'ej. 12:00 a 18:00']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Duración del evento:</label>
                                        {!! Form::text('duracion_evento',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'ej. 12: horas']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Cantidad Cupo:</label>
                                        {!! Form::text('cantidad_cupo',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Solo números. Ej. 24']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Precio:</label>
                                        {!! Form::text('precio_evento',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Números y decimales. Ej. 1280.00']) !!}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Link de landing page:</label>
                                        {!! Form::text('link_landing_evento',null,['id'=>'url','class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ejemplo: http://www.inelco.mx/landing']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Etiqueta:</label>
                                        {!! Form::text('etiqueta_url',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ej. nuevo-noi']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Estado:</label>
                                        {!! Form::text('estado',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Ciudad:</label>
                                        {!! Form::text('ciudad',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Lugar:</label>
                                        {!! Form::text('lugar',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ej. Centro de Capacitación Inelco']) !!}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Dirección y teléfono:</label>
                                        {!! Form::text('direccion',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ejemplo: Av. Fundidora No. 501']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Código postal:</label>
                                        {!! Form::text('cp_evento',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox" id="habile" value="{{ $calendario->habilitado}}">
                                            <input style="display: none;visibility: hidden;" type="text" id="inhabil" name="habilitado" value="{{ $calendario->habilitado}}">
                                            <p class="mensaje"></p>
                                        </label>
                                    </div>
                                </div>
                                    
                                    <!-- Add Task Button -->
                                <div class="col-md-offset-5 col-md-6">
                                    <div class="form-group">
                                        {!! Form::button('Actualizar evento',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
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

@push('add-js')
    <script>
        $(function() {
            var ver = $("#inhabil").val();
            if ( ver ==='SI' ) {
                $("#habile").prop('checked', true);
                $(".mensaje").html("Habilitado");
                //alert($("#inhabil").val());
            }else{
                $(".mensaje").html("Deshabilitado");
                $("#habile").prop('checked', false);
                //alert($("#inhabil").val());
            }
        });

        $( "#habile" ).on( "click", function() {
          if ( $("#habile").is(":checked") ) {
                $("#inhabil").val('SI');
                //alert($(this).val());
                $(".mensaje").html("Habilitado");
            }else{
                $(".mensaje").html("Deshabilitado");
                $("#inhabil").val('NO');
                //alert($(this).val());
            }
        });
    </script>
    <script>
        var ruta="{{Request::root()}}";
        $("#url").val(ruta +"/"+ $("#id_categoria option:selected").text().toLowerCase() +"/");

        $("#id_categoria").on( "change", function() {
            $("#url").val(ruta +"/"+ $("#id_categoria option:selected").text().toLowerCase() +"/");
        });
    </script>
@endpush