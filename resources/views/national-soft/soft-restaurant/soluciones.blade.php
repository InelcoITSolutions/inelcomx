@extends('templates.principal')

@section('name_title','Soluciones Soft Restaurant | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.soft-restaurant.banner-sr')

    <section class="secciones sr-pages soluciones-sr" id="Restaurant">
        <div class="container">
            <h2 class="title-h2">Conoce las soluciones de Soft Restaurant,</h2>
            <h3 class="title-h3">Restaurante</h3>
            <h4 class="title-h4">Si tienes un restaurante que ofrece sistema comedor, Soft Restaurant® te ayuda a controlar de manera eficiente la operación de tu establecimiento con funciones específicas como:</h4>

            <div class="row">
                <div class="col-md-3">
                    <img alt="administración del capital humano" class="img-responsive" src="/images/products/sr/inelco-sr-restaurant.jpg">
                    </img>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-controla-restaurant.png"/>
                            </center>
                            <h5 class="title-h5">Controla tu restaurante</h5>
                            <p class="text-center">División de cuentas (por partes iguales o por producto)</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-srmovil.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Soft Restaurant® Móvil</h5>
                            <p class="text-center">Levanta comandas, consultar o imprimir la cuenta desde la mesa.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-reporte-inventarios.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Reportes e inventarios</h5>
                            <p class="text-center">Consulta los reportes de ventas por área, servicio, horario</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-seguridad.png"/>
                            </center>
                            <h5 class="title-h5">Seguridad</h5>
                            <p class="text-center">Control de descuentos, cancelaciones y cortesías con huella digital.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-comandero-icon.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Captura en comanderos</h5>
                            <p class="text-center">Mapa de mesas y múltiples áreas de impresión.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-facturacion-electronica.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Facturación electrónica</h5>
                            <p class="text-center">Facturación electrónica a través de AutoFactura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr" id="Pizzeria">
        <div class="container">
            <h3 class="title-h3">Pizzería</h3>
            <h4 class="title-h4">Soft Restaurant® puede ayudarte a controlar mejor tu pizzería y atender un servicio de primera en comedor, domicilio o rápido con funciones como:</h4>

            <div class="row">
                <div class="col-md-3">
                    <img alt="administración del capital humano" class="img-responsive" src="/images/products/sr/inelco-sr-pizzeria.jpg">
                    </img>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-pizza.png"/>
                            </center>
                            <h5 class="title-h5">Ideal para pizzas</h5>
                            <p class="text-center">Configuración de productos por ingredientes y mitades para pizzas, controla tus insumos elaborados como salsas, masa, aderezos</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-combos.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Arma tus paquetes</h5>
                            <p class="text-center">Maneja productos compuestos y paquetes</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-tipo-servicio.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Diversifica tu atención sin perder el control</h5>
                            <p class="text-center">Tipos de servicio (comedor, rápido, domicilio y drive trhu)</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-restcard.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Fideliza a tus clientes</h5>
                            <p class="text-center">Módulo adicional RestCard para fidelización de clientes y monedero electrónico.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-datos-clientes.png"/>
                            </center>
                            <h5 class="title-h5">Controla tu servicio a domicilio</h5>
                            <p class="text-center">Ingresa y almacena los datos de clientes con múltiples direcciones para servicio domicilio</p>
                        </div>
                        
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-tipo-servicio-primera.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Ofrece un servicio de primera</h5>
                            <p class="text-center">Revisa los últimos pedidos de tu cliente de servicio domicilio para hacer labor de venta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr" id="Disco-Bar">
        <div class="container">
            <h3 class="title-h3">Disco / Bar</h3>
            <h4 class="title-h4">Acelera tu servicio y controla adecuadamente cada movimiento y salida de tu barra, para evitar fugas en tu bar con funciones como:</h4>

            <div class="row">
                <div class="col-md-3">
                    <img alt="administración del capital humano" class="img-responsive" src="/images/products/sr/inelco-sr-disco-bar.jpg">
                    </img>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-controla-restaurant.png"/>
                            </center>
                            <h5 class="title-h5">Control de ventas e inventarios</h5>
                            <p class="text-center">Control de recetas en productos para llevar inventario, configura tus productos en múltiples formas de venta por pieza, docena, cartón, etc.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-descuentos.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Facilita la operación</h5>
                            <p class="text-center">Manejo de productos compuestos para facilitar tu operación, promociones por volúmen o descuentos programables.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-restcard.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Fideliza a tus clientes</h5>
                            <p class="text-center">Módulo adicional RestCard para fidelización de clientes, clientes vip y monedero electrónico.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-usuarios.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Control de usuarios</h5>
                            <p class="text-center">Configura los perfiles de seguridad de tus usuarios de acuerdo a tu conveniencia, control de descuentos, cancelaciones y cortesías con huella digital.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-reporte-costos.png"/>
                            </center>
                            <h5 class="title-h5">Reportes</h5>
                            <p class="text-center">Reportes de costos en base al promedio o último, corte de caja automático vía email al realizar el corte o en un horario especificado.</p>
                        </div>
                        
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-seguridad.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Seguridad de tu negocio</h5>
                            <p class="text-center">Configuración de alerta anti-fraude y alerta de salvaguarda para retiro de efectivo en caja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr" id="Cafeteria">
        <div class="container" id="mas">
            <h3 class="title-h3">Cafetería</h3>
            <h4 class="title-h4">Ofrece un servicio eficiente a tus clientes ahorrando tiempo y acelerando los procesos de atención en tu punto de venta con una administración eficaz de tu cafetería con funciones como:</h4>

            <div class="row">
                <div class="col-md-3">
                    <img alt="administración del capital humano" class="img-responsive" src="/images/products/sr/inelco-sr-cafeteria.jpg">
                    </img>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-combos-cafe.png"/>
                            </center>
                            <h5 class="title-h5">Arma combos a tu medida</h5>
                            <p class="text-center">Configura paquetes y productos compuestos a tu conveniencia.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-servicio-rapido.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Diversifica tu atención sin perder el control</h5>
                            <p class="text-center">Trabaja con servicio rápido y comedor al mismo tiempo.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-explosion-productos.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Explosión de productos</h5>
                            <p class="text-center">Calcula los insumos requeridos para una producción extraordinaria con la función de explosión de productos.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-promociones.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Costeo de recetas y productos</h5>
                            <p class="text-center">Controla los costos de tus productos de venta y lleva control de lo que realmente debería estar saliendo de tus almacenes.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-proveedores.png"/>
                            </center>
                            <h5 class="title-h5">Control de compras y proveedores</h5>
                            <p class="text-center">Ingresa tus compras para información de costos, registra a tus proveedores y genera y envía órdenes de compra.</p>
                        </div>
                        
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-formas-pago.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Múltiples formas de pago</h5>
                            <p class="text-center">Configura tus formas de pago como efectivo, tarjetas, vales, monedero, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr" id="Servicio-a-domicilio">
        <div class="container">
            <h3 class="title-h3">Servicio a domicilio</h3>
            <h4 class="title-h4">Ofrece un servicio de primera a tus clientes facilitando los pedidos a domicilio con funciones como:</h4>

            <div class="row">
                <div class="col-md-3">
                    <img alt="administración del capital humano" class="img-responsive" src="/images/products/sr/inelco-sr-servicio-a-domicilio.jpg">
                    </img>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-repartidores.png"/>
                            </center>
                            <h5 class="title-h5">Control de tus repartidores</h5>
                            <p class="text-center">Da de alta a sus repartidores y define zonas de cobertura con costo adicional automático.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-monitor-pedidos1.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Monitor de pedidos y despacho de repartidores</h5>
                            <p class="text-center">Revisa los pedidos al momento para agilizar tu servicio y despacha los pedidos.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-promociones.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Promociones</h5>
                            <p class="text-center">Soft Restaurant® le permite configurar precios especiales.</p>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-almacena-informacion.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Almacena la información de tus clientes</h5>
                            <p class="text-center">Administra múltiples domicilios de clientes para envíos, registra a tus clientes para atención rápida y consulta histórico de últimos pedidos del cliente y recaptúralos con un solo clic.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-reporte-costos.png"/>
                            </center>
                            <h5 class="title-h5">Reportes de ventas</h5>
                            <p class="text-center">Ingresa tus compras para información de costos, registra a tus proveedores y genera y envía órdenes de compra.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-datos-clientes.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Administración de Datos de Clientes</h5>
                            <p class="text-center">Guarde nombres, direcciones, teléfonos e historial de pedidos.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr" id="Fast-food">
        <div class="container">
            <h3 class="title-h3">Fast Food</h3>
            <h4 class="title-h4">Diseñado para la atención rápida en zonas comerciales, food courts, kioskos etcétera, Soft Restaurant® te ofrece:</h4>

            <div class="row">
                <div class="col-md-3">
                    <img alt="administración del capital humano" class="img-responsive" src="/images/products/sr/inelco-sr-fast-food.jpg">
                    </img>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-monitor-cocina.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Facilita tu producción, controla tiempos y evita errores</h5>
                            <p class="text-center">Compatible con módulo de monitor de producción, para consultar órdenes en cocina en un monitor.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-comandero-icon.png"/>
                            </center>
                            <h5 class="title-h5">Diseñado para pantallas touch</h5>
                            <p class="text-center">Pantalla de captura diseñada para atención rápida.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-bascula.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Calcula el precio exacto</h5>
                            <p class="text-center">Venta por peso a través de báscula electrónica.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-combos.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Arma combos a tu medida</h5>
                            <p class="text-center">Configura paquetes y productos compuestos a tu conveniencia.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-facturacion-electronica.png"/>
                            </center>
                            <h5 class="title-h5">Facturación electrónica</h5>
                            <p class="text-center">Facturación electrónica disponible a través de AutoFactura para agilizar el servicio.</p>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img alt="comunicacion directa con el imms" src="/images/products/sr/inelco-sr-servicio-rapido.png"/>
                            </center>
                            <h5 class="title-h5 text-center">Diversifica tu atención sin perder el control</h5>
                            <p class="text-center">Trabaja con servicio rápido comer aquí, para llevar o drive thru.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('national-soft.soft-restaurant.menu-sr')

@endsection

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
