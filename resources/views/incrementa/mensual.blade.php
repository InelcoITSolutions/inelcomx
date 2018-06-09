@extends('templates.principal')

@section('name_title','Precios Incrementa CRM | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('incrementa.banner-icrm')

    <section class="descripcion-prod icrm-pages secciones ">
        <div class="container" align="center">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center"><strong>Todos nuestros planes</strong></h2>
                    <p><b>Incrementa CRM</b> Selecciona el plan que más se ajuste a tus necesidades y obten hasta <b>15 días gratis</b> de prueba. <br> Sin compromiso y sin tarjeta de crédito.</p>
                </div>

                
                
            </div>
        </div>
    </section>

<section>
    <div div class="container-fluid" align="center">
    <div class="col-md-4">
        </div>
        <div class="col-md-4" >
              
            <ul class="nav nav-tabs">
              
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <strong>Precios para planes de pago mensual</strong><span class="caret"></span>
                </a>
                    <ul class="dropdown-menu" style="left: auto; right: 0">
                     <li class="active"><a href="{{ url('incrementa/lista-precios')}}">Pago Mensual</a></li>
                     <li class="divider"></li>
                     <li><a href="{{ url('/servicios')}}">Pago Trimestral</a></li>
                     <li class="divider"></li>
                     <li><a href="{{ url('/servicios')}}">Pago Semestral</a></li>
                     <li class="divider"></li>
                     <li><a href="{{ url('/servicios')}}">Pago Anual</a></li>

                    </ul>
                 
                   
                    
                    
              </li>
              
            </ul>

      
    </div>
    </div>
</section>

     <section class="secciones icrm-pages soluciones-icrm" id="caract-icrm">
        <div class="container-fluid">
            
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                    <div class="box-solutions">
                        
                        <h3 class="title-h3"><strong>Invidual</strong></h3>
                        <p align="center">1 Usuario </p>
                        <h2 align="center">Registro</h2>
                        <h2 align="center"></h2>
                        <p align="center">con invitación</p>
                        <br>
                        <br>
                        <br>
                        <H5 align="center"><span class="glyphicon glyphicon-user"></span> 100 clientes</H5>
                        <h5 align="center"><span class="glyphicon glyphicon-envelope"></span> 250 correos/mes</h5>
                        <h5 align="center"><span class="glyphicon glyphicon-paperclip"></span> 0 GB para adjuntos</h5>
                        <br>
                        <br>
                        <H5><span class="glyphicon glyphicon-ok"></span> Cotizaciones*</H5>
                        <h5><span class="glyphicon glyphicon-remove"></span>Geolocalización</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span> Seguimiento automatico</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> Campos personalizados</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> Cuenta de por vida</h5>
                        <ul>Sin compromiso</ul>


                    </div>
                </div>
               
                <div class="col-md-2">
                    <div class="box-solutions">
                        
                        <h3 class="title-list"><strong>Básico</strong></h3>
                        <p align="center"> 1 Usuario</p>
                        <h2 align="center">$ 291 MXN Mes</h2>
                        <p align="center">en pago anual</p>
                        <br>
                        <br>
                        <H5 align="center"><span class="glyphicon glyphicon-user"></span> 10000 clientes</H5>
                        <h5 align="center"><span class="glyphicon glyphicon-envelope"></span> 2000 correos/mes</h5>
                        <h5 align="center"><span class="glyphicon glyphicon-paperclip"></span> 1 GB para adjuntos</h5>
                        <br>
                        <br>
                        <H5><span class="glyphicon glyphicon-ok"></span> Cotizaciones*</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>Geolocalización</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> Seguimiento automatico</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> Campos personalizados</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> 15 días de preuba</h5>
                        <ul>Sin compromiso</ul>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="box-solutions">
                        
                        <h3 class="title-list"><strong>Professional</strong></h3>
                        <p align="center"> 5 Usuario</p>
                        <h2 align="center">$ 1,463 MXN Mes</h2>
                        <p align="center">en pago anual</p>
                        <br>
                        <br>
                        <H5 align="center"><span class="glyphicon glyphicon-user"></span> 15000 clientes</H5>
                        <h5 align="center"><span class="glyphicon glyphicon-envelope"></span> 4000 correos/mes</h5>
                        <h5 align="center"><span class="glyphicon glyphicon-paperclip"></span> 2 GB para adjuntos</h5>
                        <br>
                        <br>
                        <H5><span class="glyphicon glyphicon-ok"></span> Cotizaciones*</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>Geolocalización</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> Seguimiento automatico</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> Campos personalizados</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span> 15 días de prueba</h5>
                        <ul>Sin compromiso</ul>


                    </div>
                </div>
                <div class="col-md-2">
                        <div class="box-solutions">
                            
                            <h3 class="title-h3"><strong>Empresarial</strong></h3>
                            <p align="center"> 10 Usuario</p>
                            <h2 align="center">$ 2,360 MXN Mes</h2>
                            <p align="center">en pago anual</p>
                            <br>
                            <br>
                            <H5 align="center"><span class="glyphicon glyphicon-user"></span> 25000 clientes</H5>
                            <h5 align="center"><span class="glyphicon glyphicon-envelope"></span> 6000 correos/mes</h5>
                            <h5 align="center"><span class="glyphicon glyphicon-paperclip"></span> 3 GB para adjuntos</h5>
                            <br>
                            <br>
                            <H5><span class="glyphicon glyphicon-ok"></span> Cotizaciones*</H5>
                            <h5><span class="glyphicon glyphicon-ok"></span>Geolocalización</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span> Seguimiento automatico</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span> Campos personalizados</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span> 5 días de prueba</h5>
                            <ul>Sin compromiso</ul>


                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="box-solutions">
                            
                            <h3 class="title-h3"><strong>Corporativo</strong></h3>
                            <p align="center"> 20 Usuario</p>
                            <h2 align="center">$ 3,358 MXN Mes</h2>
                            <p align="center">en pago anual</p>
                            <br>
                            <br>
                            <H5 align="center"><span class="glyphicon glyphicon-user"></span> 45000 clientes</H5>
                            <h5 align="center"><span class="glyphicon glyphicon-envelope"></span> 9000 correos/mes</h5>
                            <h5 align="center"><span class="glyphicon glyphicon-paperclip"></span> 4 GB para adjuntos</h5>
                            <br>
                            <br>
                            <H5><span class="glyphicon glyphicon-ok"></span> Cotizaciones*</H5>
                            <h5><span class="glyphicon glyphicon-ok"></span>Geolocalización</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span> Seguimiento automatico</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span> Campos personalizados</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span> 5 días de prueba</h5>
                            <ul>Sin compromiso</ul>


                        </div>
                    

            
        </div>
    </section>

   

    @include('incrementa.menu-icrm')

@endsection

@push('add-js')
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
