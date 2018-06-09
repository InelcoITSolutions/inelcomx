@extends('templates.principal')


@section('name_title','SAE | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('contenido')

    @include('aspel.sae.banner-sae')

        <div id="myModalPromo" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="font-size:1.7em;color:red;opacity: 1;"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                        {{--
                        <h4 class="modal-title">¡Descarga exitosa!</h4> --}}
                    </div>
                    <div class="modal-body">
                        <a href="{{ url('/promociones') }}" target="_blank">
                                        <img src="/images-new/inelco/promocion/banner/promocion-popup.png" class="img-responsive img-promocion" alt="prom">
                                    </a>
                    </div>
{{--                    <div class="modal-footer">
                        <div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-3">
                            <a class="btn btn-inelco" href="https://inelco.mx/promociones" target="_blank">Ver promoción</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

    <section class="descripcion-prod desc-sae secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Aspel SAE 7.0 está listo para ayudarte a emitir Comprobantes Fiscales Digitales por Internet <span style="display:block"><span>versión 3.3
                    </h2>
                    <p>
                        <span style="font-weight: 400">
                            Aspel SAE 
                        </span>
                         controla el ciclo de todas las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos. Ofrece movilidad a las empresas conectando las sucursales remotamente y por medio de dispositivos móviles; permite el acceso a la información comercial y administrativa, brindando una integración total. Poderosa interfaz con Aspel COI para relacionar los folios fiscales de los Comprobantes Fiscales Digitales a las pólizas, de acuerdo con los requerimientos de la Contabilidad Electrónica.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" alt="Aspel SAE Logo" class="img-responsive first">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-sae" >
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    El éxito necesita administrarse
                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content laptop-sae">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel SAE</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo<h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                    <div class="title">Imagen 1</div>
                    <p>A complete overview of your marketing, automation, & sales.</p>
                </div>-->
                <div class="center-block" id="tour-slides">
                    <img class="img-laptop" src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-inventario.png" id="1" alt="Mejor control del inventario">

                    <img src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-existencia-costos.png" id="2" alt="Obten un control de costos|Manejo de costos: Estándar, PEPS, UEPS, Promedio e Identificado. Eficiente consulta de kárdex y costeo por almacén. Reporte de existencias y costos a una fecha determinada."/>

                    <img src="/images-new/marcas/aspel/productos/sae/otros/ineco-aspel-sae-manejo-clientes.png" id="3" alt="Eficaz seguimiento del cliente|Realiza un manejo de diferentes características con los datos generales, lista de precios y vendedor asignado. Días y límite de crédito."/>

                    <img src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-facturas-vendedores.png" id="4" alt="Factura Electrónica 100% segura|Emite CFDI cumpliendo con todos los requisitos fiscales. Eficiente manejo de addendas y complementos. Envío automático de PDF y XML por correo electrónico."/>

                    <img src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-compras.png" id="5" alt="Dinamismo en tus compras|Manejo de requisición, orden de compra, recepción de mercancía, compras y devoluciones, cada uno de ellos con la respectiva afectación a inventarios y cuentas por pagar."/>
                </div>
            </div>
        </div>
    </section>
    <hr id="lap-separator">
    <section class="secciones" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Mejor control del inventario</div>
                    <p>Manejo y control del inventario con fotografías y claves de identificación por producto, servicio, kit y/o grupo de productos.</p>
                </div>
            </div>
        </div>
    </section>                

    <section class="caracteristicas-prod secciones">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img alt="Ciclo de control total en SAE" src="/images-new/marcas/aspel/productos/sae/iconos/inelco-aspel-sae-ciclo.png"/>
                    </div>
                    <h3 class="text-center">
                        Control total de tu empresa
                    </h3>
                    <p>
                        El ciclo de compra-venta está cubierto totalmente, desde el registro del producto hasta la Factura Electrónica 3.3, lista para ser entregada al cliente.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img alt="contabilidad electrónica" src="/images/products/sae/inelco-aspel-coi-cont-electronica.png"/>
                    </div>
                    <h3 class="text-center">
                        Contabilidad electrónica más fácil
                    </h3>
                    <p>
                        Cumple fácilmente los requisitos de la Contabilidad Electrónica, al realizar la interfaz con Aspel COI, en las pólizas de ventas y compras, automáticamente se relacionan los folios fiscales de los CFDI. ¡Trabaja menos con las interfaces Aspel!
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img alt="conoce cliente" src="/images/products/sae/inelco-aspel-sae-conoce-cliente.png"/>
                    </div>
                    <h3 class="text-center">
                        Conoce mejor a tu cliente
                    </h3>
                    <p>
                        En una sola sección tendrás los saldos, pedidos pendientes, productos apartados, estados de cuenta, antigüedad de saldos, productos más vendidos, ventas mensuales y citas programadas, para un seguimiento sencillo.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img alt="administracion del punto de venta" src="/images/products/sae/inelco-aspel-sae-administracion-del-punto-de-venta.png"/>
                    </div>
                    <h3 class="text-center">
                        Administración como punto de venta
                    </h3>
                    <p>
                        Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img alt="app sae-movil" src="/images-new/marcas/aspel/productos/sae/iconos/inelco-aspel-sae-saenube.png"/>
                    </div>
                    <h3 class="text-center">
                        Aplicación SAE Móvil
                    </h3>
                    <p>
                        Levanta pedidos, da de alta clientes, consulta los inventarios y sus existencias, en el momento y en el lugar en el que te encuentres, a través de un cliente web y/o dispositivos móviles. ¡Y actualiza automáticamente Aspel SAE 7.0 en línea!
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="center-img text-center center-block">
                        <img alt="sae interfaces" src="/images/products/sae/inelco-aspel-productos-sae-interfaces.png"/>
                    </div>
                    <h3 class="text-center">
                        Interfaces Sistemas Aspel
                    </h3>
                    <p>
                        Aspel SAE 7.0 tiene interfaz con los Sistemas: Aspel COI, Aspel BANCO, Aspel PROD y Aspel CAJA. Aprovecha todas las interfaces y haz mejores negocios.
                    </p>
                </div>
            </div>
        </div>
    </section>

{{-- ============================================
        INICIO SECCIÓN PARA COMPRAR ASPEL SAE 
    ============================================= --}}
<div id="contratar-sae"></div>
    <section class="word-frase sections " id="frase-sae">
        <div class="fondo-gray" style="padding-bottom: 5%;padding-top: 5%;">
            <div class="container">
                <h2>
                    <span style="font-weight: bold">¿Aún no tienes Aspel SAE 7.0?</span>
                    <span style="display:block;"></span>
                    ¡Consiguelo ya!
                </h2>
            </div>
        </div>
    </section>
    <span style="display:block;margin-top: 52px"></span>
    <section>
        <div class="container">
            <h3 class="title-h3" style="color:#c10b11;">
                El nuevo Aspel SAE 7.0 está disponible en 
                <br>
                licenciamiento permanente y en suscripción para que elijas
                <br>
                la opción más conveniente para tu empresa.
            </h3>
        </div>
    </section>
    <span style="display:block;margin-top: 48px"></span>
    <section class="p-list  h5-list title-list1 " id="caract-icrm">
        <div class="container-fluid">
            <div class="row col-md-offset-2">
            
            <!-- === LINK ZOHO SUSCRIPCIÓN SAE === -->
                <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2">
                    <span style="text-align: center;" class="fa fa-clock-o fa-3x fa-fw"></span>
                    <h4>
                        <span style="font-weight: 400">
                            ¿No deseas comprar el nuevo Aspel SAE 7.0?
                        </span>
                    </h4>
                    <p>¡Sólo el tiempo que necesites!</p>
                    <h3>
                        <span style="font-weight: 400">
                            Suscripción Mensual
                        </span>
                    </h3>
                    <span style="display:block;"></span>
                    <div class="row plan-features-sae" style="display:flex;justify-content:center;align-items:center;padding-top: 2%">
                        <p class="text-center block-center">
                            <span class="colorprof preci">$517</span>
                        </p>
                    </div>
                    <span style="display:block;"></span>
                    <h4>Incluye:</h4>
                    <div class="row" style="padding-left: 32px;">
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Licencia Aspel SAE 7.0
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;1 usuario/99 empresas
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Timbres ilimitados
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Cupón de 20% en curso
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Cupón de 20% en pólizas
                            </h5>
                            <span style="display:block;height:4px"></span>
                    </div>
                    <br>
                    <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/deCuf4" target="_blank">
                        <button type="button" class="btn btn-sae btn-lg" id="btn-sae">
                                Contratar ahora
                        </button>
                    </a>
                    <span style="display:block;margin-bottom:36px"></span>
                </div>
            <!-- === LINK ZOHO LICENCIA SAE === -->
                <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                    <span class="fa fa-star-o fa-3x fa-fw"></span>
                    <h4>
                        <span style="font-weight: 400">
                            ¿Deseas obtenerlo de manera permanente?
                        </span>
                    </h4>
                    <p>¡Adquiére hoy la licencia nueva!</p>
                    <h3>
                        <span style="font-weight: 400">
                            Licencia permante
                        </span>
                    </h3>
                    <span style="display:block;"></span>
                    <div class="row plan-features-sae" style="display:flex;justify-content:center;align-items:center;padding-top: 2%">
                        <p class="text-center">
                            <span class="colorprof preci">$10,225</span>
                        </p>
                    </div>
                    <span style="display:block;"></span>
                    <h4>Incluye:</h4>
                    <div class="row" style="padding-left: 32px;">
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Licencia Aspel SAE 7.0
                        </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;1 usuario/99 empresas
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Cupón de 20% en curso
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Cupón de 20% en pólizas
                            </h5>
                        <span style="display:block;height:30px"></span>
                    </div>
                    <br>
                    <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/HLCulK" target="_blank">
                        <button type="button" class="btn btn-sae btn-lg" id="btn-sae">
                            Contratar ahora
                        </button>
                    </a>
                    <span style="display:block;margin-bottom:36px"></span>
                </div>
            <!-- === LINK ZOHO ACTUALIZACIÓN SAE === -->
                <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                    <span class="fa fa-refresh fa-3x fa-fw"></span>
                    <h4>
                        <span style="font-weight: 400">
                            ¿Cuentas con alguna versión anterior?
                        </span>
                    </h4>
                    <p>¡Actualizate ahora!</p>
                    <h3>
                        <span style="font-weight: 400">
                            Actualización
                        </span>
                    </h3>
                    <span style="display:block;"></span>
                    <div class="row plan-features-sae" style="display:flex;justify-content:center;align-items:center;padding-top: 2%">
                        <p class="text-center">
                            <span class="colorprof preci">$6,620</span>
                        </p>
                    </div>
                    <span style="display:block;"></span>
                    <h4>Incluye:</h4>
                    <div class="row" style="padding-left: 32px;">
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Licencia Aspel SAE 7.0
                        </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;1 usuario/99 empresas
                        </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Cupón de 20% en curso
                            </h5>
                        <h5>
                            <span class="glyphicon glyphicon-ok"></span>
                                &nbsp;&nbsp;Cupón de 20% en pólizas
                            </h5>
                        <span style="display:block;height:30px"></span>
                    </div>
                    <br>
                    <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/nvCuRB" target="_blank">
                        <button class="btn btn-sae btn-lg " data-toggle="modal" id="btn-sae">
                            Contratar ahora
                        </button>
                    </a>
                    <span style="display:block;margin-bottom:36px"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeInDown" data-wow-delay="0.5s">
                <p style="text-align:justify;font-size: 1em;color:grey;margin:auto 12px;">
                    Terminos y condiciones: Precios en MXN + IVA. No incluye servicio de implementación. Precio por sólo un usuario. El costo por usuario adicional varia. Promoción válida sólo en mayo 2018.
                </p>
           </div>
        </div>
    </section>

        

{{-- -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-
        FIN SECCIÓN PARA COMPRAR ASPEL SAE
    ============================================= --}} 

    @include('aspel.sae.menu-sae')
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