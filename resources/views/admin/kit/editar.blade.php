@extends('templates.master-admin')

@section('name_title','Editar Kit | Inelco IT Solutions')

@section('contenido')
    <section>
        <div class="container">
            <h1>Edición de kit</h1>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Editar kit: <b style="font-weight: 600">{{ $kit->nombre_kit }}</b></h4></div>

                    <div class="panel-body">
                        {!! Form::model($kit, ['url' => ['admin/kit',$kit->id],'method'=>'PATCH']) !!}
                            <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
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
                            </div>
                            <div class="row">
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

                                @php $i=0; @endphp
                                @if(count($kitarts) > 0)
                                    @foreach($kitarts as $art)
                                        @php $i++; @endphp
                                        <li class="list-group-item prod" id="row{{ $i }}" >
                                            <div class="container-fluid">
                                                <div class="row">  
                                                    <div class="col-md-1">
                                                        <p class="text-center num"><b>{{ $i }}</b></p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            {!! Form::select('actualizar['.$i.'][id_producto]',$prods,$art->id_producto,['class'=>'form-control select-item','id'=>"$i"]) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            {!! Form::number('actualizar['.$i.'][cantidad]',$art->cantidad,['class'=>'form-control cant','placeholder'=>'Cantidad','min'=>'1']) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            {!! Form::text('precio_prod',null,['class'=>'form-control precio','placeholder'=>'Precio','disabled']) !!}
                                                        </div>
                                                        <input style="display: none;" type="text" name="actualizar[{{ $i }}][id]'" value="{{ $art->id }}">
                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <p class="text-right">
                                                            <a class="btn btn-danger btn-sm btn-remove" id="{{ $i }}" idart="{{ $art->id }}"><i class="icon-circle-with-cross"></i></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>                                        
                                    @endforeach
                                @endif
                            </ul>

                            <div class="col-md-offset-5 col-md-6">
                                <div class="form-group">
                                    {!! Form::button('Actualizar kit',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div> 
            </div>
        </div>
    </section>    
@endsection

@push('add-js')
    <script>
        $(document).ready(function(){
           
            $('.list-group .prod').each(function (index) {
                var pos=index+1;
                var prodID=$('#row'+pos+' select').val();
                var id=" ";
                $.get('{{url('precioprod')}}/'+prodID, function(data) {
                    id=$('#'+pos).closest('.list-group-item').attr('id');
                    $('#'+id+' .precio').attr('valor', data.precio_prod);
                    var x=Number($('#'+id+' .cant').val());
                    var y=Number($('#'+id+' .precio').attr('valor'));
                    $('#'+id+' .precio').val(parseFloat(multiplicar(x,y)).toFixed(2));
                    sumar();
                });
            });

            $(".list-group").on("click",".select-item", function(){
                $('select').change(function(e) {
                    var pos=$(this).attr('id');
                    var prodID=e.target.value;
                    var id=" ";
                    
                    $.get('{{url('precioprod')}}/'+prodID, function(data) {
                        id=$('#'+pos).closest('.list-group-item').attr('id');
                        $('#'+id+' .precio').attr('valor', data.precio_prod);
                        console.log('pos:'+pos+' prodID:'+prodID+' id:'+id );
                        var x=Number($('#'+id+' .cant').val());
                        var y=Number($('#'+id+' .precio').attr('valor'));

                        $('#'+id+' .precio').val(parseFloat(multiplicar(x,y)).toFixed(2));
                        sumar();
                    });
                });
            });

            function multiplicar(a, b){
                var multi=a*b;
                //console.log('a: '+a+', b: '+b+ ', mult: '+multi);
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
                    $(this).closest(".prod").find('input.precio').val(parseFloat(multiplicar(c,d)).toFixed(2));
                    sumar();
                });
            });
            
            var i={{ $i }};
            //$(document).on("click","#add-row", function(){
            $(function(){
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
            });

            $(document).on('click','.btn-remove',function(){
                var btn_id = $(this).attr("id");

                if ($(this).attr('idart')) {
                    //alert('tiene id art: '+$(this).attr('idart'));
                    var idarti=$(this).attr('idart');
                    var token = $('input[name="_token"]').val();

                    $.ajax(
                        {   
                            url: "{{ url('admin/kitarts')}}"+'/'+idarti,
                            type: 'DELETE',
                            dataType: "JSON",
                            data: {
                                "_token": token,
                                "id": idarti,
                            },
                            // success: function ()
                            // {
                            //     console.log("it Work");
                            // }
                        });
                        //console.log("It failed");
                }

                $('#row'+btn_id+'').remove();
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