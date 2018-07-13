@extends('templates.principal')

@section('name_title','BANCO | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">
<link rel="stylesheet" href="/css/modal-promociones.css">
    
@endpush

@section('contenido')

    @include('aspel.banco.banner-banco')



    <section class="descripcion-prod banco-pages secciones" >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Tienes el control de tus cuentas y flujo de efectivo en cualquier momento
                    </h2>
                    <p>
                        <b>
                            Aspel-BANCO 4.0
                        </b>
                        Controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera. Ofrece información financiera en todo momento como estados de cuenta, diarios de bancos y flujo de efectivo. Todos los movimientos bancarios se contabilizan automáticamente en su interfaz con Aspel-COI, atendiendo los requisitos de la Contabilidad Electrónica. Además, permite la programación de movimientos periódicos, así como una eficiente conciliación de las operaciones bancarias.
                    </p>
                    <p>
                        Para una mayor eficiencia administrativa e integridad de la información con Aspel-SAE ofrece la afectación simultánea de las cuentas por cobrar y/o por pagar al registrar los movimientos bancarios y con Aspel-NOI posibilita la generación automática de los cheques para el pago de nómina.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/banco/logos/inelco-aspel-banco-logo.png" width="60%"  width="60%"  alt="Aspel BANCO Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-banco">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    Tu dinero bajo control
                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content banco-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel BANCO</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/banco/inelco-aspel-banco-soluciones-cuentas-bancarias.png" id="1" width="88.5%" alt="Accede a tus cuentas bancarias de manera facil y rapida|Se puede consultar el saldo actualizado de cada una de las cuentas bancarias y movimientos por periodos, desglosando montos en tránsito, saldo actual y saldo conciliado."/>

                    <img src="/images/products/banco/inelco-aspel-banco-soluciones-cheques-pago-proveedores.png" id="2" width="88.5%" alt="Agilidad en pagos de cheques|Es posible registrar varios conceptos de cargo en el mismo cheque (multi-concepto) es decir, pagar varios documentos con un solo movimiento. Realiza los pagos en cheque de una manera facil y sin perdidas de tiempo." />

                    <img src="/images/products/banco/inelco-aspel-banco-soluciones-movimientos-bancarios-pago-proveedores.png" id="3" width="88.5%" alt="Con facilidad de movimientos bancarios|Captura de depósitos, retiros, pagos, cheques y transferencias entre cuentas sin tener que salir al banco."/>

                    <img src="/images/products/banco/inelco-aspel-banco-mas-soluciones-consultas-y-reporte-diario-de-bancos.png" id="4" width="88.5%" alt="Consultas y reportes al momento|Diario de bancos, Estados de cuenta, Movimientos en conciliación, Pronóstico de ingresos y egresos, Flujo de efectivo, Modificación y creación de reportes (QR2)."/>

                    <img src="/images/products/banco/inelco-aspel-banco-massoluciones-acceso-remoto_bloque1.png" id="5" width="88.5%" alt="Acceso remoto y conectividad con sucursales|Aspel-BANCO te da acceso total al Sistema a través de Internet, con lo que se podrán conectar las sucursales o colaboradores remotos sin costos extra, logrando así una administración centralizada y en línea."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    
    <section class="secciones banco-pages" id="texto-img">
        <div class="container">
             <div class="row">
                <div class="tour-caption">
                    <div class="title">Accede a tus cuentas bancarias de manera facil y rapida</div>
                    <p>Se puede consultar el saldo actualizado de cada una de las cuentas bancarias y movimientos por periodos, desglosando montos en tránsito, saldo actual y saldo conciliado.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="caracteristicas-prod secciones banco-pages">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="moneda nacional y extranjera" src="/images/products/banco/inelco-aspel-productos-banco-maneja-cuentas-en-moneda-nacional-y-extranjera.png"/>
                    </center>
                    <h3 class="text-center">
                        Multimoneda
                    </h3>
                    <p>
                        Manejo de cuentas y saldos en moneda nacional y extranjera.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="movimientos periódicos" src="/images/products/banco/inelco-aspel-productos-banco-programa-movimientos-periodicos.png"/>
                    </center>
                    <h3 class="text-center">
                        Gestiona movimientos más fácil
                    </h3>
                    <p>
                        Programa movimientos periódicos como el pago de renta y servicios.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="conciliación bancaria" src="/images/products/banco/inelco-aspel-productos-banco-conciliacion-bancaria.png"/>
                    </center>
                    <h3 class="text-center">
                        Conciliación bancaria
                    </h3>
                    <p>
                        Genera conciliaciones bancarias automáticas con las principales instituciones financieras.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="contabilizacion en linea" src="/images/products/banco/inelco-aspel-productos-banco-contabilizacion-en-linea.png"/>
                    </center>
                    <h3 class="text-center">
                        Contabilidad Electrónica
                    </h3>
                    <p>
                        Contabiliza en línea operaciones bancarias atendiendo los requisitos de la Contabilidad Electrónica. Administra la información de la forma de pago y asociación automática de folios fiscales, en el caso de movimientos con interfaz SAE.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="operaciones financieras" src="/images/products/banco/inelco-aspel-productos-banco-consulta-en-cualquier-momento-tus-operaciones-financieras.png"/>
                    </center>
                    <h3 class="text-center">
                        Control de las cuentas y flujo de efectivo
                    </h3>
                    <p>
                        Ofrece información financiera precisa del estado de cuenta y diario de bancos en cualquier momento.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="integracion de procesos" src="/images/products/banco/inelco-aspel-productos-banco-integracion-procesos-empresa.png"/>
                    </center>
                    <h3 class="text-center">
                        Tu dinero bajo control
                    </h3>
                    <p>
                        Integra todos los procesos administrativos de tu empresa. ¡Al hacer un cheque, saldas la cuentas por pagar y se genera la póliza de egresos automáticamente!
                    </p>
                </div>
            </div>
        </div>
              <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>
    </section>

   {{-- Sección de comprar Aspel banco --}}
<div id="contratar-banco"></div>
    <section class="word-frase sections " id="frase-banco">
        <div class="fondo-gray" style="padding-bottom: 5%;padding-top: 5%;">
            <div class="container">
                <h2>
                    <span style="font-weight: bold">¿Aún no tienes Aspel BANCO 4.0?</span>
                    <span style="display:block;"></span>
                    ¡Consiguelo ya!
                </h2>
            </div>
        </div>
    </section>
    <span style="display:block;margin-top: 52px"></span>
    <section>
        <div class="container">
            <h3 class="title-h3" style="color:#459b43;">El nuevo Aspel BANCO 4.0 está disponible en 
            <br>
            licenciamiento permanente y en suscripción mensual para que elijas
            <br>
            la opción más conveniente para tu empresa.</h3>
        </div>
    </section>
    <span style="display:block;margin-top: 48px"></span>
    <section class="p-list  h5-list title-list1 " id="caract-icrm">
        <div class="container-fluid">
            <div class="col-md-1" id="prim2">
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2">
                <span style="text-align: center;" class="fa fa-clock-o fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿No deseas comprar el nuevo Aspel BANCO 4.0?</span></h4>
                <p> ¡Úsalo por el tiempo que lo necesites! </p>
                <h3><span style="font-weight: 400">Suscripción Mensual</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-banco">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof preci">245</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <br>
                    <span style="display:block;"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a href="#ventana1"> 
                    <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/t3CuE0" target="_blank"><button type="button" class="btn btn-lg " id="btn-banco">Adquirir ahora</button></a>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-star-o fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿Deseas obtenerlo de manera permanente? </span></h4>
                <p> ¡Adquiére hoy la licencia nueva! </p>
                <h3><span style="font-weight: 400">Licencia permante</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-banco">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">4,850</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia de Aspel BANCO 4.0 </h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <span style="display:block;"></span>
                    <span style="display:block;margin-top: 12%"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/YLCuJb" target="_blank">
                    <button type="button" class="btn btn-lg" id="btn-banco">Adquirir ahora</button>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-refresh fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿Cuentas con alguna versión anterior? </span></h4>
                <p> ¡Actualizate ahora! </p>
                <h3><span style="font-weight: 400">Actualización</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-banco">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">2,910</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0 </h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <span style="display:block;"></span>
                    <span style="display:block;margin-top: 12%"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/XJCuA5" target="_blank">
                    <button class="btn btn-lg " data-toggle="modal" id="btn-banco">Adquirir ahora</button>
                </a>
    <span style="display:block;margin-bottom: 92px"></span>
            </div>
        </div>
    </section>

    @include('aspel.banco.menu-banco')

@endsection

@push('add-js')


<script>
    $("#myModalPromo").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo').modal('hide');
  }, 10000); 
</script>
    

    <script src="/js/jquery.slides.js">
    </script>
    <script src="/js/home.js">
    </script>
    <script src="/js/global.js">
    </script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   

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
@endpush
