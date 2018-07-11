@extends('templates.principal')

@section('name_title','Soluciones SAE | IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.sae.banner-sae')

    <section class="secciones sae-pages soluciones-sae" id="inventarios-y-servicios">
        <div class="container">
            <h2 class="title-h2">Conoce las soluciones de Aspel SAE</h2>
            <h3 class="title-h3">Inventarios y servicios</h3>
            <h4 class="title-h4">Con Aspel SAE 7.0 obtén en todo momento las soluciones más precisas y eficientes para tus inventarios y servicios.</h4>
            <div class="row">                
                <div class="col-md-6">  
                    <h5 class="title-h5">Manejo y control del inventario de productos y servicios</h5>
                    <ul>
                        <li>Fotografías y claves de identificación por producto, servicio, kit y/o grupo de productos.</li>
                        <li>Manejo de lotes, pedimentos y números de serie.</li>
                        <li>Definición de listas de precios y esquema de impuestos por producto y/o servicio.</li>
                        <li>Tallas y colores para un control administrativo eficiente en el punto de venta.</li>
                    </ul>          
                </div>
                <div class="col-md-6 imagencontainer">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/inventario-servicios/inelco-aspel-sae-soluciones-control-inventarios.png" alt="inventario y servicios en aspel sae 7.0" class="img-responsive">                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-sae-existencia_costos.png" alt="existencia costos" class="img-responsive"> 
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Control de costos</h5>
                    <ul>
                        <li>Manejo de costos: Estándar, PEPS, Promedio e Identificado.</li>
                        <li>Eficiente consulta de kárdex y costeo por almacén.</li>
                        <li>Reporte de existencias y costos a una fecha determinada.</li>
                    </ul>          
                </div>                                            
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Manejo de IEPS por cuota y/o porcentaje</h5>
                    <ul>
                        <li>Registra el Impuesto Especial sobre Productos y Servicios (IEPS), para calcular y desglosar por cuota, tasa o ambos.</li>
                        <li>Visualiza la configuración de IEPS que asignaste a cada producto.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/inventario-servicios/inelco-aspel-sae-soluciones-manejo-ieps.png" alt="alta productos servicios" class="img-responsive"> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-h5">Además, obtén más beneficios por usar nuestro software administrativo:</h5>
                    <ul>
                        <li>Manejo de multi-almacenes.</li>
                        <li>Proceso de inventario físico con ajustes automáticos.</li>
                        <li>Asignación y control de hasta 4 impuestos por producto.</li>
                        <li>Control de operaciones de compra-venta de productos con diferentes unidades de entrada y de salida.</li>
                    </ul>          
                </div>                                            
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="clientes-y-cuentas-por-cobrar"> 
        <div class="container">
            <h3 class="title-h3">Clientes y cuentas por cobrar</h3>
            <h4 class="title-h4">Con el Sistema Administrativo Empresarial tienes mayor eficiencia, control y seguridad en el manejo de tus clientes.</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Manejo de diferentes características del cliente para un eficaz seguimiento</h5>
                    <ul>
                        <li>Datos generales, lista de precios y vendedor asignado.</li>
                        <li>Días y límite de crédito.</li>
                        <li>Especificaciones de facturación como: impuestos, descuento, addenda, complemento, plantilla del CFDI (IEDU, Donatarias, entre otros) y cuenta de correo.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/clientes-cpc/inelco-aspel-sae-soluciones-manejo-clientes.png" alt="clientes y cuentas por cobrar" class="img-responsive">
                </div>
            </div>
             <div class="row">
                <div class="col-md-12">
                    <h5 class="title-h5">Complementa la información para tu empresa con más soluciones de clientes y cuentas por cobrar:</h5>
                    <ul>
                        <li>Exhaustivo control de las cuentas por cobrar en moneda nacional y extranjera.</li>
                        <li>Eficiente expediente del cliente, consulta: saldos del cliente, montos vendidos, productos apartados, antigüedad de saldos, cobranza general.</li>
                        <li>Campañas de venta y seguimiento comercial de clientes (CRM), con útiles herramientas para captar y retener clientes.</li>
                        <li>Múltiples reportes: cobranza general, antigüedad de saldos, estados de cuenta, pronósticos de cobranza, pagos a facturas, por mencionar algunos.</li>
                    </ul>          
                </div>                                            
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="facturas-y-vendedores"> 
        <div class="container">
            <h3 class="title-h3">Facturas y vendedores</h3>
            <h4 class="title-h4">Con Aspel-SAE ten bajo control tu Facturación Electrónica y maneja tus vendedores de manera magistral.</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Enlaces dinámicos</h5>
                    <ul>
                        <li>Manejo de cotizaciones, pedidos, remisiones, notas de venta, facturas, facturas en parcialidades y devoluciones.</li>
                        <li>Envía automáticamente tus documentos en formato PDF con elegantes diseños.</li>
                        <li>Importa masivamente documentos de ventas desde un archivo XML, TXT o Microsoft Excel®.</li>
                        <li>Aplicación de políticas de descuento. Cálculo de comisiones a vendedores.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/facturas-vendedores/inelco-aspel-sae-soluciones-importacion.png" alt="alta de factura" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/facturas-vendedores/inelco-aspel-sae-soluciones-flexibilidad.png" alt="alta de factura" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Flexibilidad y rapidez</h5>
                    <ul>
                        <li>Personaliza tu factura, desde la ventana de captura hasta su impresión o envío de correo: almacén, descuentos e impuestos por partida, moneda, vendedor, comisión y formato de impresión.</li>
                        <li>Control de vigencia en cotizaciones para un mejor control de precios.</li>
                        <li>Consultas relacionadas: desde las facturas o documentos de ventas ingresa al expediente del cliente y/o kárdex.</li>
                    </ul>          
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Factura Electrónica 100% segura</h5>
                    <ul>
                        <li>Emite CFDI cumpliendo con todos los requisitos fiscales.</li>
                        <li>Eficiente manejo de addendas y complementos.</li>
                        <li>Envío automático de PDF y XML por correo electrónico.</li>
                    </ul>          
                </div>                                            
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-sae-facturas-vendedores.png" alt="facturas vendedores" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-sae-generar-comprobante-fiscal.png" alt="generar comprobante fiscal" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Notas de venta y facturación web</h5>
                    <ul>
                        <li>Crea notas de venta para ventas de mostrador.</li>
                        <li>Facturalas dentro del sistema de una por una, por cliente o de forma global.</li>
                        <li>Facilidad de emitir CFDI a partir de las notas de venta mediante un sitio web.</li>
                    </ul>          
                </div>
            </div>   
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="proveedores"> 
        <div class="container">
            <h3 class="title-h3">Proveedores y cuentas por pagar</h3>
            <h4 class="title-h4">Óptimo control de proveedores. ¡Ten a la mano y bajo control a tus socios de negocio!</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Valioso detalle del proveedor</h5>
                    <ul>
                        <li>Expediente del proveedor con estados de cuenta, antigüedad de saldos e información de compras.</li>
                        <li>Exhaustivo control de las cuentas por pagar en moneda nacional y extranjera.</li>
                        <li>Historial crediticio con el proveedor, estado de cuenta general, detallado, resumen de movimientos, pronóstico de pagos y antigüedad de saldos.</li>
                        <li>Control de anticipos, división de cargos y suspensión de compras.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/proveedores-cpp/inelco-aspel-sae-soluciones-proveedores.png" alt="proveedores y cuenta por pagar" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="compras"> 
        <div class="container">
            <h3 class="title-h3">Compras</h3>
            <h4 class="title-h4">Con el Sistema de Administración Aspel-SAE todos tus documentos de compras están disponibles y listos para aumentar la productividad de tu empresa.</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Dinamismo en tus compras</h5>
                    <ul>
                        <li>Manejo de requisición, orden de compra, recepción de mercancía, compras y devoluciones, cada uno de ellos con la respectiva afectación a inventarios y cuentas por pagar.</li>
                        <li>Envío automático de documentos de compra en formato PDF con un elegante diseño a tus proveedores.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/compras/inelco-aspel-sae-soluciones-dinamismo-compras.png" alt="compras" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-h5">Además, consigues un ágil acceso a la información financiera. Puedes consultar:</h5>
                    <ul>
                        <li>El ingreso de lo adquirido a diferentes almacenes (almacén por partida).</li>
                        <li>Consulta del comparativo de costos y tiempo de entrega del producto. ¡Para comprar a la mejor opción!</li>
                    </ul>          
                </div>                                            
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/sae/inelco-sae-compras-manejo-de-importaciones.png" alt="compras manejo de importaciones" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Manejo de importaciones:</h5>
                    <ul>
                        <li>Asignación de gastos indirectos por partida.</li>
                        <li>Captura de gastos indirectos posterior a la compra.</li>
                        <li>Posibilidad de “re-costeo” del producto a partir de los gastos indirectos.</li>
                    </ul>          
                </div>                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-h5">Además crea tu archivo para la carga de la DIOT:</h5>
                    <ul>
                        <li>Generación automática de la Declaración Informativa de Operaciones con Terceros (DIOT), Aspel-SAE 7.0 genera el archivo mensual requerido para la carga batch.</li>
                    </ul>          
                </div>                                            
            </div>   
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="sae-en-la-nube">  
        <div class="container">
            <h3 class="title-h3">SAE en mi propia Nube</h3>
            <h4 class="title-h4">Conoce su nueva funcionalidad para volver más productivo tu negocio</h4>
            <p class="p-css">El Sistema Administrativo Empresarial más vendido te ofrece máxima conexión vía un enlace seguro. Activa tu propia nube y crece el potencial de tu negocio.</p>
            <div class="row">
                <div class="col-md-4">
                    <center><span class="icon-globe"></span></center>                      
                    <h5 class="title-h5">Acceso</h5>
                    <p class="p-css">Consulta la información de tus clientes, vendedores, facturas y cuentas por cobrar desde cualquier lugar y computadora.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-share2"></span></center>
                    <h5 class="title-h5">Comparte</h5>
                    <p class="p-css">Administra tus inventarios y sincroniza existencias en automático. Actualiza datos de compras y proveedores entre sucursales y oficinas.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-cloud-check"></span></center>
                    <h5 class="title-h5">Respaldo</h5>
                    <p class="p-css">Siempre tienes respaldos de información que se generan en automático. Sin necesidad de comprar un servidor propio.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <center><span class="icon-key2"></span></center>                      
                    <h5 class="title-h5">Seguridad</h5>
                    <p class="p-css">Crea accesos seguros y personalizados, lo que garantiza máxima privacidad de tus datos. La información vive en tus equipos.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-tree"></span></center>
                    <h5 class="title-h5">Inicia tu conexión segura</h5>
                    <p class="p-css">Para activar tu propia nube, sólo requieres de una Licencia (Base) y por cada sucursal necesitas adquirir licencias de usuarios adicionales.</p>
                </div>
                <div class="col-md-4">
                    <center><span class="icon-info-with-circle"></span></center>
                    <h5 class="title-h5">Guía de configuración</h5>
                    <p class="p-css">Consulta la guía paso a paso para configurar con éxito conexiones remotas por VPN en Aspel-SAE 7.0.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sae-pages soluciones-sae" id="mas-soluciones"> 
        <div class="container">
            <h3 class="title-h3">Más soluciones SAE</h3>
            <h4 class="title-h4">Descubre más soluciones de Aspel-SAE 7.0 y dale un control total a tu negocio.</h4>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/mas-soluciones/inelco-aspel-sae-lo-nuevo-diseño-renovado.png" alt="características generales" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Nueva experiencia de uso</h5>
                    <ul>
                        <li>Diseño renovado con mejoras en cada menú, iconos y temas personalizables.</li>
                        <li>Práctica barra de búsqueda, que localiza más rápido la información y facilita tu trabajo.</li>
                        <li>Menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.</li>
                    </ul>
                </div>         
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Perfil de usuarios</h5>
                    <ul>
                        <li>Administra e incluye la fotografía de las personas que tienen acceso a la información.</li>
                    </ul>          
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/mas-soluciones/inelco-aspel-sae-lo-nuevo-perfil-usuarios.png" alt="características generales" class="img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/mas-soluciones/inelco-aspel-sae-mas-soluciones-caracteristicas.png" alt="características generales" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">Características generales</h5>
                    <ul>
                        <li>Base de Datos en formato Firebird® y posibilidad de uso en formato MS-SQL®.</li>
                        <li>Importación de hojas de cálculo de Microsoft Excel® de los principales catálogos y documentos.</li>
                        <li>Actualización en línea vía Internet a las últimas mejoras de la versión.</li>
                        <li>Módulo de perfiles de usuario para un acceso seguro a la información.</li> 
                        <li>Disponible en la modalidad de 1 usuario, 99 empresas y licencias de usuarios adicionales.</li>
                    </ul>          
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Consultas, estadísticas y reportes</h5>
                    <ul>
                        <li>Versátiles consultas con búsquedas y filtros.</li>
                        <li>Creación de consultas definidas por el usuario.</li>
                        <li>Envío de consultas y reportes por correo electrónico.</li>
                        <li>Estadísticas de ventas, compras, productos más vendidos, clientes más importantes y periodos de mejor venta.</li>
                    </ul>          
                </div>                
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/mas-soluciones/inelco-aspel-sae-mas-soluciones-estadisticas.png" alt="consultas, estadisticas y reportes" class="img-responsive">
                </div>
            </div>
            <div class="row interfaz">
                <h4 class="title-h4">Interfaz con los Sistemas Aspel</h4>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-coi')}}"><img src="/images-new/marcas/aspel/productos/coi/logos/inelco-aspel-coi-logo.png" width="60%"  alt="COI" class="img-responsive logo-produ"></a></div>  
                    <h5 class="title-h5"><a href="{{url('aspel-coi')}}" style="text-decoration:none;color:#009cb1;">Aspel COI</a></h5>
                    <p class="p-css">Genera las pólizas correspondientes a las ventas, compras, movimientos al inventario, abonos y cargos de cuentas por cobrar y por pagar. La contabilización de las pólizas puede ser en línea y de acuerdo a los requisitos de la Contabilidad Electrónica.</p>
                </div>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-prod')}}"><img src="/images-new/marcas/aspel/productos/prod/logos/inelco-aspel-prod-logo.png" alt="PROD" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-prod')}}" style="text-decoration:none;color:#2d6c88;">Aspel PROD</a></h5>
                    <p class="p-css">Utiliza y actualiza el catálogo de inventarios de Aspel-SAE, éste provee los sub-ensambles y materias primas para formar las hojas de costos del producto terminado.</p>
                </div>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-banco')}}"><img src="/images-new/marcas/aspel/productos/banco/logos/inelco-aspel-banco-logo.png" width="60%"  alt="BANCO" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-banco')}}" style="text-decoration:none;color:#32912f;">Aspel BANCO</a></h5>
                    <p class="p-css">Logra que todos los movimientos bancarios registrados actualicen en línea los saldos de las cuentas por cobrar y por pagar.</p>
                </div>
                <div class="col-md-3">
                    <div class="center-block"><a href="{{url('aspel-caja')}}"><img src="/images-new/marcas/aspel/productos/caja/logos/inelco-aspel-caja-logo.png" alt="CAJA" class="img-responsive logo-produ"></a></div>
                    <h5 class="title-h5"><a href="{{url('aspel-caja')}}" style="text-decoration:none;color:#fbb500;">Aspel CAJA</a></h5>
                    <p class="p-css">El catálogo de clientes y productos de los diferentes almacenes (tiendas) y el inventario de Aspel-SAE se actualiza por las ventas realizadas en los puntos de venta de Aspel-CAJA 4.0.</p>
                </div>
            </div>

            <div class="row">
                <h3 class="title-h3">ⓔspacio Aspel</h3>
                <div class="col-md-6">
                    <h5 class="title-h5">Valioso detalle del proveedor</h5>
                    <p class="p-css">Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva.</p>         
                    <p class="p-css">Te ofrece un Buzón Contable para la organización de las operaciones contables y una fácil y correcta contabilización de las mismas en Aspel-COI. Es ideal para despachos contables y empresas a las que les llevan la contabilidad o para empresas con sucursales. Ahora todos los documentos y archivos son digitales por lo que es el fin de la era de los papeles.</p>
                </div>
                <div class="col-md-6">
                    <img src="/images-new/marcas/aspel/productos/sae/otros/soluciones/mas-soluciones/inelco-aspel-sae-espacio-aspel.png" alt="espacio aspel" class="img-responsive">
                </div>
            </div>
        </div>

        <h3 style="color:#BF273E" class="text-center">
            Todas las funciones para Administrar, Controlar y Crecer tu Pyme
        </h3>
        <span style="display:block;"></span>
        <span style="display:block;"></span>
        <a href="{{url('aspel-sae#contratar-sae')}}" style="text-decoration: none" >
            <button id="btn-sae-prob1" class="btn  btn-lg center-block">
                Lo quiero
            </button>
        </a>
    </section>



    @include('aspel.sae.menu-sae')

@endsection

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush