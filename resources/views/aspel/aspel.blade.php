@extends('templates.principal')

@section('name_title','Aspel | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
<link rel="stylesheet" href="/css/modal-promociones.css">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.banner-aspel')


    <section id="aspel" class="descripcion-prod aspel-pages secciones ">
        <div class="container">
            <div class="row">

            <div class="col-md-12">
             <h2>Líder en el mercado de software administrativo, contable y de facturación electrónica</h2>
             <p style="text-align: center;">Aspel es una empresa 100% mexicana líder en el mercado de software y soluciones administrativas.
             <br>Automatiza los procesos de las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva. Sus Sistemas facilitan el cumplimiento de las obligaciones fiscales electrónicas incluyendo facturación, contabilidad y nómina. Te presentamos nuestros sistemas.</p>
             <br><br>
             </div>

             {{-- se agregan todos los iconos haber que tal --}}

             
              <div class="row gray-img">
              
               
                 <div class="col-md-4" id="inelco-aspel">
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" width="60%"  alt="Aspel SAE Logo" class="img-responsive first">
                    <br>
                  </div>

                  
                  
                  <div class="col-md-12">
                    <p style="text-align:justify;">Controla el ciclo de todas las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos. 
                   
                    </p>
                  <br>
                     <a style="text-decoration: none" href="{{ url('aspel-sae') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>
                 

                 
                 <div class="col-md-4" id="inelco-aspel"> 
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/coi/logos/inelco-aspel-coi-logo.png" width="60%"  alt="Aspel COI Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                     <p style="text-align:justify;">Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable. Cumple con las especificaciones y funciones para el manejo de la Contabilidad Electrónica, de acuerdo con las disposiciones fiscales vigentes.</p>
                  <br>
                      <a style="text-decoration: none" href="{{ url('aspel-coi') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>

                 <div class="col-md-4" id="inelco-aspel"> 
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/noi/logos/inelco-aspel-noi-logo.png" width="60%"  alt="Aspel NOI Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                     <p style="text-align:justify;">Automatiza el control de la Nómina Digital. Su fácil manejo y versatilidad ofrecen un cálculo exacto de las percepciones y deducciones de los trabajadores de acuerdo a las disposiciones fiscales y laborales vigentes. Genera CFDI.
                      </p>
                  <br>
                      <a style="text-decoration: none" href="{{ url('aspel-noi') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>
                </div>
                 
                <div class="row gray-img">

                
                 <div class="col-md-4" id="inelco-aspel">
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/banco/logos/inelco-aspel-banco-logo.png" width="60%"  alt="Aspel BANCO Logo" class="img-responsive first">
                    <br>
                  </div>

                  <div class="col-md-12">
                    <p style="text-align:justify;">Controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera. Ofrece información financiera en todo momento como estados de cuenta, diarios de bancos y flujo de efectivo. </p>
                    <br>
                     <a style="text-decoration: none" href="{{ url('aspel-banco') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                  </div>
                 </div>
                 
                

               
                 <div class="col-md-4" id="inelco-aspel">
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/prod/logos/inelco-aspel-prod-logo.png" alt="Aspel PROD  Logo" class="img-responsive first">
                    <br>
                  </div>

                  <div class="col-md-12">
                    <p style="text-align:justify;">Permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos. Proporciona, un eficiente seguimiento a las órdenes de producción mejorando los tiempos de entrega.</p>
                    <br>
                    <a style="text-decoration: none" href="{{ url('aspel-prod') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                  </div>
                 </div>


                 <div class="col-md-4" id="inelco-aspel">
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/caja/logos/inelco-aspel-caja-logo.png" alt="Aspel CAJA Logo" class="img-responsive first">
                    <br>
                  </div>

                  <div class="col-md-12">
                    <p style="text-align:justify;">Aspel CAJA controla, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets, cajones de dinero, básculas, etc.</p>
                    <br>
                    <a style="text-decoration: none" href="{{ url('aspel-caja') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                  </div>
                 </div>
            
                 </div>

                 <div class="row gray-img" id="mas">
               
                 <div class="col-md-4" id="inelco-aspel">
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/facture/logos/inelco-aspel-facture-logo.png" alt="Aspel FACTURE Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                    <p style="text-align:justify;">Genera Comprobantes Fiscales Digitales por Internet (CFDI) de forma segura y en segundos sin importar tu profesión o giro comercial, de acuerdo con las disposiciones fiscales vigentes. 
                   
                    </p>
                  <br>
                     <a style="text-decoration: none" href="{{ url('aspel-facture') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>
                 

                 
                 <div class="col-md-4" id="inelco-aspel"> 
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/adm/logos/inelco-aspel-adm-logo.png" alt="Aspel ADM Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                     <p style="text-align:justify;">Aspel ADM es una nueva aplicación en la nube que administra las principales operaciones de compra-venta de la empresa como: cotizaciones, facturas, notas de crédito, etc.</p>
                  <br>
                      <a style="text-decoration: none" href="{{ url('aspel-adm') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>

                 <div class="col-md-4" id="inelco-aspel"> 
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/aspel_nube/productos/sae_nube/logos/inelco-aspel-saenube-logo.png" alt="Aspel SAE nube Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                     <p style="text-align:justify;">El Sistema Administrativo Empresarial más vendido te ofrece su poderosa funcionalidad con todos los beneficios de la Nube, lo que representa máxima movilidad. 
                      </p>
                  <br>
                      <a style="text-decoration: none" href="{{ url('aspel-saenube') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>
                </div>

                 <div class="row gray-img" id="mas">
               
                 <div class="col-md-4" id="inelco-aspel">
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/aspel_nube/productos/adm_tienda/logos/inelco-aspel-admtienda-logo.png" alt="Aspel ADM Tienda Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                    <p style="text-align:justify;">Aspel ADM Tienda es ideal para emprendedores y pequeños empresarios que requieren movilidad para punto de venta. Lleva el control de tu punto de venta de manera sencilla y eficiente. 
                   
                    </p>
                  <br>
                     <a style="text-decoration: none" href="{{ url('aspel-admtienda') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>
                 

                 
                 <div class="col-md-4" id="inelco-aspel"> 
                  <div class="col-md-12">
                    <img src="/images-new/marcas/aspel/productos/aspel_nube/productos/espacio/logos/inelco-aspel-espacio-logo.png" alt="Aspel espacio Logo" class="img-responsive first">
                    <br>
                  </div>
                  
                  <div class="col-md-12">
                     <p style="text-align:justify;">Te ofrece un Buzón Contable que permite la administración e intercambio de información entre clientes y despachos de manera sencilla y eficiente. Compatible con <a style="text-decoration: none" href="{{ url('aspel-coi') }}">Aspel-COI</a>.</p>
                  <br>
                      <a style="text-decoration: none" href="{{ url('aspel-espacio') }}">
                        <button id="btn-aspel" type="button" class="btn btn-primary btn-inelco center-block ">Más Información</button>
                     </a>
                     <br>
                  </div>
                 </div>

                 
                </div>

                
                </div>

            </div>

        </div>


    </section>

      

@endsection

@push('add-js')

<script>
    $("#myModalPromo").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>

    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
