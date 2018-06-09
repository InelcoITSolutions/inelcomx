@extends('templates.principal')


@section('name_title','Lo nuevo FACTURE | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
      <link href="/css/animations.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.js">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.facture.banner-facture-nuevo')

    <section class="secciones facture-pages nuevo-facture" >
        <div class="container">
            <h2 class="title-h2">Lo Nuevo</h2>
            <h3 class="title-h3">
                Descubre los nuevos beneficios que Aspel-FACTURⓔ 4.0 tiene para tu empresa.
            </h3>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catálogo de métodos de pago con FACTURe
                    </h5>
                    <p>
                        Todos los contribuyentes que emitan comprobantes digitales deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                    </p>
                    <p>
                        Aspel-FACTURe 4.0 cumple con esta obligación de forma práctica y sencilla.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="facture metodo de pago" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/facture/inelco-aspel-productos-facture-lo-nuevo-metodo-de-pago.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Útil y práctica importación de CFDI.
                    </h5>
                    <p>
                        Por medio de un sencillo asistente puedes agregar información a partir de un CFDI de facturas, recibos de honorarios y de arrendamiento, así como de clientes y productos.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="facture lo nuevo importación" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/facture/inelco-aspel-facture-lo-nuevo-importacion.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Emite CFDI de retenciones
                    </h5>
                    <p>
                        Genera los comprobantes digitales para registrar retenciones de impuestos y emite comprobantes de retenciones de dividendos o remanentes distribuibles, de acuerdo con la regla I.2.7.5.4 de la Segunda Resolución de Modificaciones a la Resolución Miscelánea Fiscal para 2014, publicada el 4 de julio de 2014.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="cfdi retenciones" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/images/products/facture/inelco-aspel-facture-lo-nuevo-cfdi-retenciones.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-facture">
        <div class="fondo-gray" id="mas">
            <div class="container">
                <h2>
                    Adquiere una de nuestras promociones
                </h2>
            </div>
        </div>
    </section>
    <br>
    <section class="p-list  h5-list title-list1 secciones facture-pages nuevo-facture" id="caract-icrm" >
        <div class="container-fluid">
           
           
            <div class="col-md-5" id="prim2">
            
            </div>
                <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2" >
                <span style="text-align: center;" class="fa fa-clock-o fa-3x fa-fw"></span>
                <h4> <b> ¿No deseas comprar el nuevo Aspel Facture 4.0?</b></h4>
            <p> ¡Úsalo por el tiempo que lo necesites! </p>

                 
                  <h3><b>Suscripción Mensual</b></h3>

                  <br>
                <div  class="row plan-features-facture">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">88 </span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi ">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel Facturⓔ 4.0</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario / 99 empresas</H5>
                       
                        
                        <br>
                        <br>
                        <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        <br>
                        </div>
                        <a href="#ventana1"> 
                        <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/byCuL1" target="_blank"><button type="button" class="btn btn-lg " id="btn-promo-facture" data-toggle="modal" >Adquirir ahora</button></a>
                        </a>

                        
 


                    </div>
                
               
                  <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1" >
                  <span class="fa fa-star-o fa-3x fa-fw"></span>

                <h4> <b> ¿Deseas obtenerlo de manera permanente? </b></h4>
            <p> ¡Adquiére hoy la licencia nueva!  </p>

                  <h3><b>Licencia permante</b></h3>

                  <br>
                <div  class="row plan-features-facture">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">1,575 </span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi ">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel FACTURⓔ 4.0 ($1,575)</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario / 99 empresas</H5>
                        
                        
                        <br>
                        <br>
                        <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>

                        
                        <br>
                        </div>
                        
                        <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/mCCu4B" target="_blank"><button type="button" class="btn btn-lg" id="btn-promo-facture" data-toggle="modal">Adquirir ahora</button></a>
                        
 


                    </div>
                
                   <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1" >
                   <span class="fa fa-refresh fa-3x fa-fw"></span>
                 <h4> <b> ¿Cuentas con alguna versión anterior? </b></h4>
                    <p> ¡Actualizate ahora! </p>

                  
                  <h3><b>Actualización</b></h3>

                  <br>
                <div  class="row plan-features-facture">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">945</span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel FACTURⓔ 4.0 </H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario / 99 empresas</H5>
                         
                       
                        
                        <br>
                        <br>
                        <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        <br>
                        </div>
                        <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/RhCu2J" target="_blank"><button class="btn btn-lg "  data-toggle="modal" id="btn-promo-facture">Adquirir ahora</button></a>
 


                    </div>
                
                

         

        </div>

    </section>
    @include('aspel.facture.menu-facture')
@stop

@push('add-js')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
    @stack('files-menu')
@endpush
