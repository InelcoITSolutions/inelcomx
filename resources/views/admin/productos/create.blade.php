@extends('templates.master-admin')

@section('name_title','Crear nuevo producto | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div class="container">
            <h2>Crear un nuevo producto</h2>
            
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
                        <div class="panel-heading"><h4>Agregar un nuevo producto</h4></div>
                        <div class="panel-body">
                            {!! Form::open(array('url' =>'admin/productos')) !!}
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Clave:</label>
                                        {!! Form::text('clave',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Clave del proveedor:</label>
                                        {!! Form::text('clave_proveedor',null,['class'=>'form-control']) !!}
                                    </div>
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Nombre:</label>
                                        {!! Form::text('nombre_prod',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Incluye:</label>
                                        {!! Form::textarea('incluye_prod',null,['class'=>'form-control','rows'=>'3']) !!}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Descripción:</label>
                                        {!! Form::textarea('descripcion_prod',null,['class'=>'form-control','rows'=>'3']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Marca:</label>
                                        {!! Form::select('marca', 
                                            ['Aspel' => 'Aspel', 
                                             'National Soft' => 'National Soft',
                                             'Zoho' => 'Zoho',
                                             'EC Line' => 'EC Line',
                                             'Incrementa' => 'Incrementa',
                                             ],null,['class'=>'form-control select-nopad'] )!!}
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Link:</label>
                                        {!! Form::text('link_prod',null,['class'=>'form-control', 'data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Link de pagina del producto']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo:</label>
                                        {!! Form::select('tipo', 
                                            ['Producto' => 'Producto', 
                                             'Servicio' => 'Servicio',
                                             ],null,['class'=>'form-control select-nopad'] )!!}
                                    </div>
                                </div> 

                                <div class="col-md-3">
                                    <div class="form-group label-floating in-near">
                                        <label class="control-label">Precio:</label>
                                        {!! Form::text('precio_prod',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <p class="text-center"><b>Imagenes</b></p>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm1" data-input="thumbnail" data-preview="holder" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Logo del producto:</label>
                                            {!! Form::text('logo_prod',null,['class'=>'form-control','id'=>'thumbnail']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <img id="holder" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen 1:</label>
                                            {!! Form::text('img1_prod',null,['class'=>'form-control','id'=>'thumbnail2']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <img id="holder2" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen 2:</label>
                                            {!! Form::text('img2_prod',null,['class'=>'form-control','id'=>'thumbnail3']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <img id="holder3" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm4" data-input="thumbnail4" data-preview="holder4" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen 3:</label>
                                            {!! Form::text('img3_prod',null,['class'=>'form-control','id'=>'thumbnail4']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <img id="holder4" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm5" data-input="thumbnail5" data-preview="holder5" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen 4:</label>
                                            {!! Form::text('img4_prod',null,['class'=>'form-control','id'=>'thumbnail5']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <img id="holder5" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm6" data-input="thumbnail6" data-preview="holder6" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen 5:</label>
                                            {!! Form::text('img5_prod',null,['class'=>'form-control','id'=>'thumbnail6']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <img id="holder6" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>

                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm7" data-input="thumbnail7" data-preview="holder7" class="btn btn-primary btn-xs">
                                                <i class="fa icon-image-inverted"></i>
                                            </a>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Flyer del producto:</label>
                                            {!! Form::text('flyer_prod',null,['class'=>'form-control','id'=>'thumbnail7']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img id="holder7" style="margin-top:15px;max-height:100px;" class="img-responsive">
                                </div>
                                


                                <div class="col-md-offset-5 col-md-6">
                                    <div class="form-group">
                                        {!! Form::button('Agregar producto',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
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
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('#lfm1').filemanager('image');
        $('#lfm2').filemanager('image');
        $('#lfm3').filemanager('image');
        $('#lfm4').filemanager('image');
        $('#lfm5').filemanager('image');
        $('#lfm6').filemanager('image');
        $('#lfm7').filemanager('image');
    </script>
@endpush