@extends('templates.principal')

@section('name_title','Soft Restaurant | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.soft-restaurant.banner-sr')

    <section class="descripcion-prod sr-pages secciones ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>El sistema que te ayudará a impulsar tu negocio y detectar áreas de oportunidad.</h2>
                    <p><b>Soft Restaurant</b> es una herramienta completa que le permitirá administrar su negocio evitando errores u omisiones, proporcionando una mayor seguridad en el manejo de su empresa. Su diseño lo convierte en una herramienta fácil de utilizar y dominar. Soft Restaurant® es ideal para todo tipo de restaurantes, bares, cafeterías, pizzerías, fast food, taquerías, y muchos más.</p>
                    <p>Cuenta con diversos reportes, facturación, control de recetas, inventarios, almacenes, mesas, reservaciones, servicio rápido, drive thru, a domicilio, módulos de fidelización de clientes, monitor de producción, módulos adicionales, mapeo de mesas, control antifraudes y muchas características más.</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="inelco-softrestaurant" class="img-responsive" src="/images/products/sr/compu-soft.png"/>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-sr">
        <div class="fondo-gray">
            <div class="container">
                <h2>El sistema especializado para todo tipo de restaurantes</h2>
            </div>
        </div>
    </section>

    <section class="ac_content sr-pages" id="sing">
        <div class="ac_content-wrapper notpadding" id="mas">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Soft Restaurant</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/sr/inelco-sr-ventana-principal.jpg" id="1" width="88.5%" alt="Excelente interfaz|Para poder llevar su operación en el punto de venta con los diferentes tipos de servicios: rápido, comedor, a domicilio y drive thru, contando con opciones."/>

                    <img src="/images/products/sr/inelco-sr-comandero.jpg" id="2" width="88.5%" alt="La seguridad es lo primordial |Cuenta con la protección necesaria para llevar el control de los perfiles y los usuarios, permisos de acceso, contraseñas, programar envíos de alertas Antifraudes y diferentes opciones y herramientas que ofrece el sistema para el mejor desempeño de su personal y de su empresa." />

                    <img src="/images/products/sr/inelco-sr-captura-productos.jpg" id="3" width="88.5%" alt="Administra y controla tus precios|Captura de productos en venta y los precios que facilitan la productividad de los recursos en la empresa con el manejo correcto de éstos le ayudará a reducir la merma e incrementar sus ganancias."/>

                    <img src="/images/products/sr/inelco-sr-personalizar-comandero.jpg" id="4" width="88.5%" alt="Verifica tus productos más cotizados|Facilita la administración de los productos más cotizados y de la totalidad de clientes en el restaurante."/>

                    <img src="/images/products/sr/inelco-sr-servicio-domicilio.jpg" id="5" width="88.5%" alt="Mejora tus ventas|Podrá enfocarse en crecer su negocio, ya que cuenta con los reportes necesarios para crear estrategias, incrementar sus ventas y dirigir de manera adecuada."/>
                    
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones sr-pages" id="texto-img">
        <div class="container">
            
            <div class="row">
                <div class="tour-caption">
                    <div class="title">
                        Excelente interfaz
                    </div>
                    <p>
                        Para poder llevar su operación en el punto de venta con los diferentes tipos de servicios: rápido, comedor, a domicilio y drive thru, contando con opciones.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr" id="lo-nuevo-sr">
        <div class="container">
           
            <h2 class="title-h2">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva1.png"/>
                        </center>
                        <h5 class="title-h5">Nuevo diseño en el comandero</h5>
                        <p>Mejore sus ventas mediante las sugerencias de producto a sus meseros, además tendrá la posibilidad de suspender productos al agotarse algún insumo de venta mientras esté operando, mejorando el control y eliminando la posibilidad de cobrar productos que no están disponibles.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva5.png"/>
                        </center>
                        <h3 class="title-h5">Evita fraudes y errores de captura</h3>
                        <p>El uso de báscula en compras te ayudará a mejorar la introducción de compras, ingresando datos exactos en peso, tomados directamente de la báscula y así aumentarás ganancias en tu restaurante.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva4.png"/>
                        </center>
                        <h5 class="title-h5">Controla tu inventario de manera más fácil</h5>
                        <p>Tome decisiones de compra y resurtido de almacenes de manera rápida y oportuna. Con esta nueva alarma siempre tendrás en existencia los insumos necesarios para la venta, ya que te avisará cuando esté en el mínimo.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva3.png"/>
                        </center>
                        <h5 class="title-h5">Diseña tus tickets y dale un plus a tu restaurante</h5>
                        <p>Al poder personalizar tus tickets no solo mejorará la apariencia de tu marca, también podrás incluir información útil para tu comensal como promociones, eventos o información adicional.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva2.png"/>
                        </center>
                        <h5 class="title-h5">Funciones de servicio a domicilio</h5>
                        <p>Con las nuevas mejoras del servicio a domicilio, tendrás un servicio más eficiente y una atención más personalizada al consultar de manera detallada y automática los últimos pedidos de tus clientes sin recapturas. También podrás ver en un solo momento las cuentas que ya han sido enviadas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/caracteristica-nueva6.png"/>
                        </center>
                        <h5 class="title-h5">Impresión de movimientos de almacén</h5>
                        <p>Los movimientos como desperdicios y movimientos de almacén los podrás imprimir de manera rápida en operación, ya sea en miniprinter o tamaño carta. Para usuarios que no cuenten con impresora láser.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="caracteristicas-prod sr-pages secciones">
        <div class="container">
        <h2 align="center">Seguridad, facilidad y control para tu restaurante</h2>
            <div class="row">
                <div class="col-md-3">
                    <center>
                        <img alt="disposiciones fiscales" src="/images/products/sr/inelco-sr-punto-de-venta.png"/>
                    </center>
                    <h3 class="text-center">Control en Punto de Venta</h3>
                    <p>Nuevo diseño con accesos rápidos</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="calculo de nomina" src="/images/products/sr/inelco-sr-control.png"/>
                    </center>
                    <h3 class="text-center">Administración y Control</h3>
                    <p>en insumos, recetas y productos</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="expediente del trabajador" src="/images/products/sr/inelco-sr-contro-en-costeo.png"/>
                    </center>
                    <h3 class="text-center">Control en Costeo</h3>
                    <p>Control de recetas e inventarios</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="calculo de impuestos" src="/images/products/sr/inelco-sr-reduzca-mermas.png"/>
                    </center>
                    <h3 class="text-center">Reduzca mermas</h3>
                    <p>Y mejore sus tiempos de producción</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <center>
                        <img alt="pago de los trabajadores" src="/images/products/sr/inelco-sr-venta.png"/>
                    </center>
                    <h3 class="text-center">Inventarios</h3>
                    <p>La parte más importante de un restaurante</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-seguridad.png"/>
                    </center>
                    <h3 class="text-center">Seguridad</h3>
                    <p>Control de los perfiles y los usuarios</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-combos.png"/>
                    </center>
                    <h3 class="text-center">Arma tus paquetes</h3>
                    <p>Maneja productos compuestos y paquetes.</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-promociones.png"/>
                    </center>
                    <h3 class="text-center">Promociones</h3>
                    <p>Soft Restaurant® le permite configurar precios especiales.</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-datos-clientes.png"/>
                    </center>
                    <h3 class="text-center">Controla tu servicio a domicilio</h3>
                    <p>Zonas de reparto configurables por colonia con cargo adicional de servicio automático</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="Fideliza a tus clientes" src="/images/products/sr/inelco-sr-restcard.png"/>
                    </center>
                    <h3 class="text-center">Arma tus paquetes</h3>
                    <p>Módulo adicional RestCard para fidelización de clientes, clientes vip y monedero electrónico</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="pago de los trabajadores" src="/images/products/sr/inelco-sr-facturacion-electronica.png"/>
                    </center>
                    <h3 class="text-center">Facturación electrónica</h3>
                    <p>Facturación electrónica a través de AutoFactura para que tus clientes generen su comprobante desde su hogar, o en forma tradicional desde tu caja.</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="calculo de impuestos" src="/images/products/sr/inelco-sr-comandero-icon.png"/>
                    </center>
                    <h3 class="text-center">Captura en comanderos</h3>
                    <p>Servicio por tiempos de preparación de alimentos, mapa de mesas y múltiples áreas de impresión.</p>
                </div>
            </div>
        </div>
    </section>

    

    @include('national-soft.soft-restaurant.menu-sr')

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
