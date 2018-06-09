@extends('templates.principal')

@section('name_title','Precios Incrementa CRM | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/animate.css">
    <link href="/css/animations.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('incrementa.banner-precios')

    <br>
    
<section>
    <div div class="container-fluid" align="center">
    <div class="col-md-4">
        </div>
        <div class="col-md-4" >
              
                 
          
            <h4 class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <b>Precios para planes de <button id="buscar" type="button" >pago trimestral<span class="caret"></span></button></b>

            </h4>
                    <ul class="dropdown-menu" style="left: auto; right: 0">

                     <li ><a href="{{ url('incrementa/precio-mensual')}}"><b>Pago Mensual</b></a></li>
                     <li class="divider"></li>
                     <li><a href="{{ url('incrementa/precio-trimestral')}}"><b>Pago Trimestral</b></a></li>
                     <li class="divider"></li>
                     <li><a href="{{ url('incrementa/precio-semestral')}}"><b>Pago Semestral</b></a></li>
                     <li class="divider"></li>
                     <li><a href="{{ url('incrementa/precio-anual')}}"><b>Pago Anual</b></a></li>

                    </ul>
                    
                    
          
       

      
    </div>
    </div>
</section>
<br>


     <section class="p-list  h5-list title-list1  " id="caract-icrm" >
        <div class="container-fluid">
           
<div class="col-md-1" id="prim">
            </div>
                <div class="col-md-2 box-solutions pullUp" id="listpres-color1" >
                        
                        <h3 ><b>Individual</b></h3>
                        <p >1 Usuario </p>
                        <p class="text-center"> <span class="preci">Gratis</span></p>
                        
                        <p align="center">obtén tu cuenta</p>
                        <br>
                        
                        <div class="plan-features">
                        <h5 ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;1,000 clientes</h5>
                        <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;250 correos/mes</h5>
                        <h5><span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;0 GB para adjuntos</h5>
                        </div>
                        <br>
                        <div class="plan-features1">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cotizaciones*</H5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Geolocalización</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Seguimiento automático</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Campos personalizados</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cuenta de por vida</h5>
                        
                        </div>
                        <a href="https://incrementacrm.com/invite-code/inelco" target="_blank"> 
                        <button type="button" class="btn btn-success">Registrate</button>
                        </a>
 


                    </div>
                
               
                <div class="col-md-2 box-solutions pullUp" id="listpres-color" > 
                   
                        
                        <h3><b>Básico</b></h3>
                        <p align="center"> 1 Usuario</p>
                        <p class="text-center"> <span class="symbol">$</span><span class="preci">392 </span><span class="code">MXN</span><span class="period">Mes</span></p>
                        <p align="center">en pago trimestral</p>
                        <br>
                        
                        <div class="plan-features">
                        <H5 ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;10,000 clientes</H5>
                        <h5 ><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;2,000 correos/mes</h5>
                        <h5 ><span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;1 GB para adjuntos</h5>
                        </div>
                        <br>
                        <div class="plan-features1">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cotizaciones</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Geolocalización</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Seguimiento automático</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Campos personalizados</h5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;15 días de prueba</h5>
                        </div>

                        <a href="#"> 
                        <button type="button" class="btn btn-success">¡Contrata ahora!</button>
                        </a>


                </div>
                <div class="col-md-2 box-solutions pullUp" id="profes-color1" > 
                        
                       <h3><b>Profesional</b></h3>
                        <p align="center"><span class=" colorprof"> 5 Usuarios<span></p>
                        <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">1,658 </span><span class=" colorprof  code">MXN</span><span class="colorprof period">Mes</span></p>
                        <p align="center"><span class=" colorprof">en pago trimestral</span></p>
                        <br>
                        
                        <div class="plan-features">
                        <H5 ><span class=" colorprof glyphicon glyphicon-user" aria-hidden="true"></span><span class=" colorprof">&nbsp;&nbsp;15,000 clientes</span></H5>
                        <h5 ><span class="colorprof glyphicon glyphicon-envelope"></span><span class=" colorprof">&nbsp;&nbsp;4,000 correos/mes</span></h5>
                        <h5 ><span class="colorprof glyphicon glyphicon-paperclip"></span><span class=" colorprof">&nbsp;&nbsp;2 GB para adjuntos</span></h5>
                        </div>
                        <br>
                        
                        <div class="plan-features1">
                        <H5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Cotizaciones</span></H5>
                        <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Geolocalización</span></h5>
                        <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Seguimiento automático</span></h5>
                        <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Campos personalizados</span></h5>
                        <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;15 días de prueba</span></h5>
                        </div>

                        <a href="#" > 
                        <button type="button" class="btn btn-default">¡Contrata ahora!</button>
                        </a>
                        
                    
                </div>
                <div class="col-md-2 box-solutions pullUp" id="listpres-color" >
                            
                            <h3 ><b>Empresarial</b></h3>
                            <p align="center"> 10 Usuarios</p>
                            <p class="text-center"> <span class="symbol">$</span><span class="preci">2,655 </span><span class="code">MXN</span><span class="period">Mes</span></p>
                            <p align="center">en pago trimestral</p>
                            <br>
                            
                            <div class="plan-features">
                            <H5><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;25,000 clientes</H5>
                            <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;6,000 correos/mes</h5>
                            <h5><span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;3 GB para adjuntos</h5>
                            </div>
                            <br>
                            
                            <div class="plan-features1">
                            <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cotizaciones</H5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Geolocalización</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Seguimiento automático</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Campos personalizados</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;5 días de prueba</h5>
                            </div>
                            <a href="#" > 
                                <button  type="button" class="btn btn-success">¡Contrata ahora!</button>
                            </a>

                       
                    </div>
                    <div class="col-md-2 box-solutions pullUp" id="listpres-color" >
                            
                            <h3 ><b>Corporativo</b></h3>
                            <p align="center"> 20 Usuarios</p>
                            <p class="text-center"> <span class="symbol">$</span><span class="preci">3,753 </span><span class="code">MXN</span><span class="period">Mes</span></p>
                            <p align="center">en pago trimestral</p>
                            <br>
                            
                            <div class="plan-features">
                            <H5><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;45,000 clientes</H5>
                            <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;9,000 correos/mes</h5>
                            <h5><span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;4 GB para adjuntos</h5>
                            </div>
                            <br>
                            
                            <div class="plan-features1">
                            <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cotizaciones</H5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Geolocalización</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Seguimiento automático</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Campos personalizados</h5>
                            <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;5 días de prueba</h5>
                            </div>

                            <a href="#"> 
                             <button type="button" class="btn btn-success">¡Contrata ahora!</button>
                            </a>
  
            
        </div>

         

        </div>

    </section>
    <div class="col-md-1">
        </div>
         <div class="container-fluid icrm-pages soluciones-icrm">
            <div class="col-md-4">
            
                <p>> Precios en moneda nacional no incluye IVA.</p>
                <p>> Sin compromiso y sin tarjeta de crédito.</p>
            
            </div>
        </div>

   

    @include('incrementa.menu-icrm')

@endsection

@push('add-js')
     <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
    

    
@endpush
