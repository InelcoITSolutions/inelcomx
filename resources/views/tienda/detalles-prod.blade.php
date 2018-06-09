@extends('templates.store')
@section('name_title','Detalles del producto | Inelco IT Solutions')

@push('add-css')
    <link rel="stylesheet" href="/css/unslider.css">
    <link rel="stylesheet" href="/css/unslider-dots.css">
@endpush
@section('contenido')
<section class="secciones">
    <div class="container">
        <h3 class="text-center">{{ $detalles->marca }} - {{ $detalles->nombre_prod }}</h3>
        <br>
        <div class="row">

            <div class="col-md-9 col-sm-9">
                <div class="my-slider">
                    <ul>
                        @if($detalles->logo_prod != '')
                            <li><img style="max-height: 400px; margin: 0 auto;" src="{{ $detalles->logo_prod }}" class="img-responsive"></li>
                        @endif
                        
                        @for($i=1; $i<5; $i++)
                            @php 
                                $img='img'.$i.'_prod'; 
                                $cont[$i]= $detalles->$img;
                            @endphp
                            @if($cont[$i]!=='')
                                <li><img style="max-height: 400px; margin: 0 auto;" src="{{ $detalles->$img }}" class="img-responsive"></li>
                            @endif
                        @endfor                          
                    </ul>                    
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                {{-- <button class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</button> 
                     <a href="{{route('añadir-carrito',$detalles->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                --}}
                @php $carrito = \Session::get('carrito'); @endphp
                @if(count($carrito)>0)
                    @if(array_key_exists($detalles->id, $carrito))
                        <a href="{{route("mostrar-carrito")}}" class="btn btn-success"><i class="fa icon-thumbs-up"></i> Agregado</a>
                    @else
                        <a href="{{route("añadir-carrito",$detalles->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                    @endif
                @else
                    <a href="{{route("añadir-carrito",$detalles->id)}}" class="btn btn-primary"><i class="fa icon-shopping-cart"></i> Agregar</a>
                @endif
                <hr>
                <p><b>Precio: ${{ $detalles->precio_prod }}</b></p>
                <hr>
                <p><b>Clave:</b> {{ $detalles->clave }}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12 list-prods">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Descripción</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p class="lead">{{ $detalles->descripcion_prod }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Caracteristicas</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <img src="{{ $detalles->flyer_prod }}" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>                            
        </div>
    </div>
</section>
@endsection
@push('add-js')
    <script src="/js/unslider.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.my-slider').unslider({
                autoplay: true,
                delay:5000,
            });
        });
    </script>
@endpush