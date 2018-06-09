@extends('templates.master-admin')

@section('name_title','Crear nuevo Kit | Inelco IT Solutions')

@push('add-css')

@endpush

@section('contenido')
    <section>
        <div class="container">
            <h2>Crear un nuevo kit</h2>
            
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
                {{-- <div class="panel-body"> --}}
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Agregar un nuevo kit</h4></div>
                    {!! Form::open(array('url' =>'admin/kit')) !!}
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre:</label>
                                    {!! Form::text('nombre_kit',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating in-near">
                                    <label class="control-label">Total:</label>
                                    {!! Form::text('suma','$ 0.0',['class'=>'form-control','disabled','id'=>'sumar']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating in-near">
                                    <label class="control-label">Precio:</label>
                                    {!! Form::text('precio',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Descripción:</label>
                                    {!! Form::textarea('descripcion_kit',null,['class'=>'form-control','rows'=>'3']) !!}
                                </div>
                            </div>
                        </div>


                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info">
                                <div class="row">
                                    <div class="col-md-11 col-sm-10 col-xs-9 ">
                                        <h4>Articulos del kit</h4>
                                    </div>
                                    
                                    <div class="col-md-1 col-sm-2 col-xs-3 ">
                                        <p class="text-center">
                                            <a class="btn btn-success btn-sm" id="add-row"><i class="icon-add-to-list"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item prod" id="row1">
                                <div class="container-fluid">
                                    <div class="row">  
                                        <div class="col-md-1">
                                            <p class="text-center num"><b>1</b></p>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                {!! Form::select('producto[1][id_producto]',$prods,null,['class'=>'form-control select-item','id'=>1]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                {!! Form::number('producto[1][cantidad]','1',['class'=>'form-control cant','placeholder'=>'Cantidad','min'=>'1']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {!! Form::text('precio_prod',null,['class'=>'form-control precio','placeholder'=>'Precio','disabled']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-1 ">
                                            <p class="text-right">
                                                <a class="btn btn-danger btn-sm btn-remove" id="1"><i class="icon-circle-with-cross"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </li> 
                        </ul>
                        <div class="col-md-offset-5 col-md-6">
                            <div class="form-group">
                                {!! Form::button('Agregar kit',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>     
                {{-- </div> --}}
            </div>
        </div>
    </section>    
@endsection

@push('add-js')
    <script>
        $(document).ready(function(){
            $(".list-group").on("click",".select-item", function(){
                //alert('btn');
                $('select').change(function(e) {
                    var pos=$(this).attr('id');
                    var prodID=e.target.value;
                    var id=" ";
                    
                    $.get('{{url('precioprod')}}/'+prodID, function(data) {
                        id=$('#'+pos).closest('.list-group-item').attr('id');
                        //$('#'+id+' .precio').val(data.precio_prod);
                        $('#'+id+' .precio').attr('valor', data.precio_prod);
                        console.log('pos:'+pos+' prodID:'+prodID+' id:'+id );
                        var x=Number($('#'+id+' .cant').val());
                        var y=Number($('#'+id+' .precio').attr('valor'));

                        //multiplicar(x,y);
                        $('#'+id+' .precio').val(parseFloat(multiplicar(x,y)).toFixed(2));
                        sumar();
                    });
                });
            });

            function multiplicar(a, b){
                var multi=a*b;
                console.log('a: '+a+', b: '+b+ ', mult: '+multi);
                return multi;
            }
                
            function sumar(){
                var sum=0;
                $('.prod .precio').each(function () {
                    sum+=Number($(this).val());
                });
                $('#sumar').val('$ '+parseFloat(sum).toFixed(2));
            }
            
            $(".list-group").on("click",".cant", function(){
                $('.cant').change(function(){
                    var c=Number($(this).val());
                    var d=Number($(this).closest(".prod").find('input.precio').attr('valor'));

                    //$(this).closest(".prod").find('input.precio').val();
                    //$('#'+id+' .precio').val(data.precio_prod);

                    //var mult=0;
                    //mult=c*d;
                    //$(this).closest(".prod").find('input.precio').val(parseFloat(mult).toFixed(2));

                    $(this).closest(".prod").find('input.precio').val(parseFloat(multiplicar(c,d)).toFixed(2));
                    //console.log('num: '+c+', precio: '+d+ ', mult: '+mult);
                    sumar();
                });
            });
            
            var i=1;
            $('#add-row').click(function(){
                i++;
                $('.list-group').append(
                    '<li class="list-group-item prod" id="row'+i+'">'
                        +'<div class="container-fluid">'
                            +'<div class="row">  '
                                +'<div class="col-md-1">'
                                    +'<p class="text-center num"><b></b></p>'
                                +'</div>'
                                +'<div class="col-md-5">'
                                    +'<div class="form-group">'
                                        +'{!! Form::select('',$prods,null,['class'=>'form-control select-item']) !!}'
                                    +'</div>'
                                +'</div>'
                                +'<div class="col-md-2">'
                                    +'<div class="form-group">'
                                        +'{!! Form::number('','1',['class'=>'form-control cant','placeholder'=>'Cantidad','min'=>'1']) !!}'
                                    +'</div>'
                                +'</div>'
                                +'<div class="col-md-3">'
                                    +'<div class="form-group">'
                                        +'{!! Form::text('precio_prod',null,['class'=>'form-control precio','placeholder'=>'Precio','disabled']) !!}'
                                    +'</div>'
                                +'</div>'
                                +'<div class="col-md-1 ">'
                                    +'<p class="text-right">'
                                        +'<a class="btn btn-danger btn-sm btn-remove" id="'+i+'"><i class="icon-circle-with-cross"></i></a>'
                                    +'</p>'
                                +'</div>'
                            +'</div>'
                        +'</div> '
                    +'</li>');

                $('#row'+i+' .select-item').attr('id', i);
                $('#row'+i+' .select-item').attr('name', 'producto['+i+'][id_producto]');
                $('#row'+i+' .cant').attr('name', 'producto['+i+'][cantidad]');
                
                AutoNumber();
            });

            $(document).on('click','.btn-remove',function(){
                var btn_id = $(this).attr("id");
                $('#row'+btn_id+'').remove();
                //i--;
                AutoNumber();
                sumar();
            });

            function AutoNumber(){
                $('.list-group .prod').each(function (index) {
                    $(this).find('.num b').text(index+1);
                });
            }
        });
    </script>
@endpush