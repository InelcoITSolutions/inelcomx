@extends('templates.master-admin')

@section('name_title','Crear nueva landing Page | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')

    @if(count($calendarEv)==0)
        <div class="alert alert-warning">
            <div class="container-fluid">
                <div class="alert-icon">
                    <i class="icon-warning2 ico-notif"></i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p><b>Alerta:</b> No hay ningún evento disponible para crear la landing page correspondiente, asegurece de crear primero el evento en la sección de <a href="{{ url('admin/calendario/create') }}">calendario</a></p>
            </div>
        </div>
    @else
        <section>
            <div class="container">
                <h1>Crear una nueva landing page</h1>
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
                            <div class="panel-heading"><h4>Agregar una nueva landing</h4></div>
                            <div class="panel-body">
                                {!! Form::open(array('url' =>'admin/landing')) !!}
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Seleccione el evento:</label>
                                            {!! Form::select('id_calendario',$calendarEv,null,['id'=>'id_calendario','class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Estilos:</label>
                                            {!! Form::select('estilos', 
                                                ['default' => 'Default', 
                                                'adm' => 'ADM', 
                                                'banco' => 'BANCO',
                                                'caja' => 'CAJA',
                                                'coi' => 'COI',
                                                'facture' => 'FACTURE',
                                                'noi' => 'NOI',
                                                'prod' => 'PROD',
                                                'sae' => 'SAE',
                                                'sres' => 'SR',
                                                'sfact' => 'SF',
                                                'nsh' => 'NSH',
                                                'otm' => 'OTM',
                                                'zoho' => 'Zoho',
                                                'icrm' => 'ICRM',
                                                ],null,['class'=>'form-control select-nopad'] )!!}
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Logo del coanfitrion:</label>
                                            {!! Form::text('logo_coanfitrion',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div> --}}

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm1" data-input="thumbnail" data-preview="holder" class="btn btn-primary btn-xs">
                                                    <i class="fa icon-image-inverted"></i>
                                                </a>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Logo del coanfitrion:</label>
                                                {!! Form::text('logo_coanfitrion',null,['class'=>'form-control','id'=>'thumbnail']) !!}
                                            </div>

                                            {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <img id="holder" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                    </div>

                                    {{-- <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen del banner:</label>
                                            {!! Form::text('img_producto_banner',null,['class'=>'form-control','rows'=>'3']) !!}
                                        </div>
                                    </div>  --}}
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary btn-xs">
                                                    <i class="fa icon-image-inverted"></i>
                                                </a>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Imagen del banner:</label>
                                                {!! Form::text('img_producto_banner',null,['class'=>'form-control','id'=>'thumbnail2']) !!}
                                            </div>

                                            {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <img id="holder2" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                    </div>


                                    {{-- <div class="col-md-4">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Imagen del producto:</label>
                                            {!! Form::text('img_producto',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'ej. SAE 6.0']) !!}
                                        </div>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary btn-xs">
                                                    <i class="fa icon-image-inverted"></i>
                                                </a>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Imagen del producto:</label>
                                                {!! Form::text('img_producto',null,['class'=>'form-control','id'=>'thumbnail3']) !!}
                                            </div>

                                            {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <img id="holder3" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                    </div>



                                    {{-- <div class="col-md-7">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Link del temario:</label>
                                            {!! Form::text('link_temario',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    --}}
                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm4" data-input="file1" class="btn btn-primary btn-xs">
                                                    <i class="fa icon-news"></i>
                                                </a>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Link del temario</label>
                                                {!! Form::text('link_temario',null,['class'=>'form-control','id'=>'file1']) !!}
                                            </div>

                                            {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Descripción:</label>
                                            {!! Form::textarea('parrafo1',null,['class'=>'form-control', 'rows'=>'3']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Temario o programación:</label>
                                            {!! Form::textarea('parrafo2',null,['class'=>'form-control', 'rows'=>'3']) !!}
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-12 label-form">
                                        <p class="label label-primary">¿A quien va diridido el evento?</p>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Dirigido 1:</label>
                                            {!! Form::text('dirigido1',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Dirigido 2</label>
                                            {!! Form::text('dirigido2',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Dirigido 3:</label>
                                            {!! Form::text('dirigido3',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Dirigido 4:</label>
                                            {!! Form::text('dirigido4',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Imagen:</label>
                                            {!! Form::text('img_dirigido',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Imágen ilustrativa para quíen va dirigido el evento ']) !!}

                                        </div>
                                    </div> --}}
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm5" data-input="thumbnail5" data-preview="holder5" class="btn btn-primary btn-xs">
                                                    <i class="fa icon-image-inverted"></i>
                                                </a>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Imágen ilustrativa para quíen va dirigido el evento: </label>
                                                {!! Form::text('img_dirigido',null,['class'=>'form-control','id'=>'thumbnail5']) !!}
                                            </div>

                                            {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="holder5" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                    </div>



                                    <div class="col-md-12 label-form">
                                        <p class="label label-primary">Frase de impacto</p>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Frase</label>
                                            {!! Form::text('frase',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Escriba la frase de impacto']) !!}
                                        </div>
                                    </div>


                                    <div class="col-md-12 label-form">
                                        <p class="label label-primary">Sección de descripción del producto</p>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="col-sm-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Título 1:</label>
                                                {!! Form::text('title_desc1',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese el titulo de la descripción del producto']) !!}
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Imagen descripción 1:</label>
                                                {!! Form::text('img_desc1',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div> --}}
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm6" data-input="thumbnail6" data-preview="holder6" class="btn btn-primary btn-xs">
                                                        <i class="fa icon-image-inverted"></i>
                                                    </a>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Imagen descripción 1:</label>
                                                    {!! Form::text('img_desc1',null,['class'=>'form-control','id'=>'thumbnail6']) !!}
                                                </div>

                                                {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <img id="holder6" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                        </div>      

                                        <div class="col-sm-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Contenido descripción 1:</label>
                                                {!! Form::textarea('cont_desc1',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese la descripción del producto','rows'=>'5']) !!}
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-sm-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Título 2:</label>
                                                {!! Form::text('title_desc2',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese el titulo de la descripción del producto']) !!}
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Imagen descripción 2:</label>
                                                {!! Form::text('img_desc2',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div> --}}

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm7" data-input="thumbnail7" data-preview="holder7" class="btn btn-primary btn-xs">
                                                        <i class="fa icon-image-inverted"></i>
                                                    </a>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Imagen descripción 2:</label>
                                                    {!! Form::text('img_desc2',null,['class'=>'form-control','id'=>'thumbnail7']) !!}
                                                </div>

                                                {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <img id="holder7" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                        </div> 



                                        <div class="col-sm-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Contenido descripción 2:</label>
                                                {!! Form::textarea('cont_desc2',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese la descripción del producto','rows'=>'5']) !!}
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-sm-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Título 3:</label>
                                                {!! Form::text('title_desc3',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese el titulo de la descripción del producto']) !!}
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Imagen descripción 3:</label>
                                                {!! Form::text('img_desc3',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div> --}}
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm8" data-input="thumbnail8" data-preview="holder8" class="btn btn-primary btn-xs">
                                                        <i class="fa icon-image-inverted"></i>
                                                    </a>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Imagen descripción 3:</label>
                                                    {!! Form::text('img_desc3',null,['class'=>'form-control','id'=>'thumbnail8']) !!}
                                                </div>

                                                {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <img id="holder8" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                        </div> 


                                        <div class="col-sm-12">
                                            <div class="form-group label-floating in-near">
                                                <label class="control-label">Contenido descripción 3:</label>
                                                {!! Form::textarea('cont_desc3',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese la descripción del producto','rows'=>'5']) !!}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Ubicación del lugar:</label>
                                            {!! Form::textarea('codigo_mapa',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Ingrese el código de la Ubicación','rows'=>'3']) !!}
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm9" data-input="thumbnail9" data-preview="holder9" class="btn btn-primary btn-xs">
                                                    <i class="fa icon-image-inverted"></i>
                                                </a>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Logo del lugar:</label>
                                                {!! Form::text('img_lugar_logo',null,['class'=>'form-control','id'=>'thumbnail9', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Logo del luagr donde se realizara el evento']) !!}
                                            </div>

                                            {{-- <input id="thumbnail" class="form-control" type="text" name="logo_coanfitrion"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <img id="holder9" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group label-floating in-near">
                                            <label class="control-label">Link del webinar:</label>
                                            {!! Form::text('link_webinar',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>


                                        <!-- Add Task Button -->
                                    <div class="col-md-offset-5 col-md-6">
                                        <div class="form-group">
                                            {!! Form::button('Guardar',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@push('add-js')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('#lfm1').filemanager('image');
        $('#lfm2').filemanager('image');
        $('#lfm3').filemanager('image');
        $('#lfm4').filemanager('file');
        $('#lfm5').filemanager('image');
        $('#lfm6').filemanager('image');
        $('#lfm7').filemanager('image');
        $('#lfm8').filemanager('image');
        $('#lfm9').filemanager('image');
    </script>
@endpush