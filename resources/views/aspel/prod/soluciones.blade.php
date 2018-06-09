@extends('templates.principal')

@section('name_title','Soluciones PROD | Inelco IT Solutions')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.prod.banner-prod')

    <section class="secciones prod-pages soluciones-prod" id="manejo-de-insumos">
        <div class="container">
            <h2 class="title-h2">
                Conoce las soluciones de Aspel PROD
            </h2>
            <h3 class="title-h3">
                Manejo de insumos
            </h3>
            <h4 class="title-h4">
                Con Aspel-PROD puedes planear y controlar los procesos de fabricación de la empresa, asegurando la óptima administración de insumos, inventarios y costos.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Variedad de tipos de insumos:
                    </h5>
                    <p>
                        Para la determinación del costo del producto terminado, pueden ser del tipo: materia prima, maquinaria, mano de obra, entre otros.
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/images/products/prod/inelco-aspel_productos_prod_manejo_insumos.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones prod-pages soluciones-prod" id="eficiente-control-de-la-materia-prima">
        <div class="container">
            <h3 class="title-h3">
                Eficiente control de la materia prima
            </h3>
            <h4 class="title-h4">
                Con el Sistema de Control de Producción el manejo de la materia prima de tu empresa es fácil, rápido y seguro de administrar.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Práctica administración de la materia prima:
                    </h5>
                    <ul>
                        <li>
                            Interactúa con el catálogo de inventarios de Aspel-SAE 6.0, para extraer la información de la materia prima como costos y existencias, incluso en diferentes almacenes.
                        </li>
                        <li>
                            Cuenta con un catálogo de sustitutos para reemplazar la materia prima.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="control de materia prima" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/images/products/prod/inelco-aspel-prod-soluciones-control-materia-prima-catalogo-materiales-sae.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones prod-pages soluciones-prod" id="productos-terminados">
        <div class="container">
            <h3 class="title-h3">
                Productos terminados
            </h3>
            <h4 class="title-h4">
                Lleva el mejor control de tus productos terminados con Aspel-PROD
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Productos terminados
                    </h5>
                    <ul>
                        <li>
                            Asigna números de serie, clave de lotes y fechas de caducidad a los productos terminados, para su registro y seguimiento en el inventario de Aspel-SAE 6.0.
                        </li>
                        <li>
                            Define la hoja de costos por producto terminado o sub-ensamble.
                        </li>
                        <li>
                            Determina el costo de las materias primas por costeo estimado (costo promedio o último costo).
                        </li>
                        <li>
                            Define la planeación periódica de la producción en cualquier plazo requerido, con lo que puedes formar pronósticos de fabricación de los productos terminados.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="productos terminados" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-alta-de-factura-HD.png" src="/images/products/prod/inelco-aspel-prod-soluciones-productos-terminados-hoja-costo.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    Además obtén más opciones de costeo:
                </h5>
                <ul>
                    <li>
                        Determina el costo del producto terminado con base en cuatro opciones de costeo: una por método estándar y tres configurables por el usuario, incluyendo materias primas e insumos.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="secciones prod-pages soluciones-prod" id="ordenes-de-produccion-y-seguimiento">
        <div class="container">
            <h3 class="title-h3">
                Órdenes de producción y seguimiento
            </h3>
            <h4 class="title-h4">
                Con Aspel-PROD el seguimiento a las órdenes de producción es confiable y se puede consultar en cualquier momento el estado de la orden.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Seguimiento óptimo
                    </h5>
                    <ul>
                        <li>
                            Entrada a fabricación.
                        </li>
                        <li>
                            Devoluciones de material.
                        </li>
                        <li>
                            Entregas parciales.
                        </li>
                        <li>
                            Cierre de órdenes.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="ordenes de producción" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-proveedores-y-cuenta-por-pagar-HD.png" src="/images/products/prod/inelco-aspel-prod-soluciones-ordenes-de-produccion-captura-orden.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <h5 class="title-h5">
                    También puedes agregar órdenes de producción mediante:
                </h5>
                <ul>
                    <li>
                        Captura manual.
                    </li>
                    <li>
                        Generación automática en la que el Sistema determina la cantidad óptima a producir a partir del stock mínimo y máximo de los productos, los pendientes por recibir y los pendientes por surtir.
                    </li>
                    <li>
                        Por medio del registro automático, con lo que en un solo paso el Sistema realiza las diferentes etapas del seguimiento.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="secciones prod-pages soluciones-prod" id="procesos-de-produccion">
        <div class="container">
            <h3 class="title-h3">
                Procesos de producción
            </h3>
            <h4 class="title-h4">
                Realiza la programación de órdenes de producción e identifica la "etapa" en la cual se encuentran los materiales.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Fácil manejo de los procesos:
                    </h5>
                    <ul>
                        <li>
                            Organiza de manera eficiente las diferentes etapas de producción.
                        </li>
                        <li>
                            Por cada proceso se puede definir: clave, nombre y localización.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="procesos de producción" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/images/products/prod/inelco-aspel_productos_prod_procesos_produccion.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones prod-pages soluciones-prod" id="implosion-y-explosion-de-materiales">
        <div class="container">
            <h3 class="title-h3">
                Implosión y explosión de materiales
            </h3>
            <h4 class="title-h4">
                Gestiona correctamente todos tus procesos de implosión y explosión de materiales a través de Aspel-PROD.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Implosión y explosión de materiales
                    </h5>
                    <ul>
                        <li>
                            Obtén fáciles consultas de explosión e implosión de materiales para conocer en todo momento los componentes necesarios para cubrir una orden, fabricar un producto u obtener la cantidad máxima por fabricación de un producto terminado.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="implosión y explosión de materiales" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/images/products/prod/inelco-aspel-prod-soluciones-implosion-y-explosion-de-materiales.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones prod-pages soluciones-prod" id="mas-soluciones-prod">
        <div class="container">
            <h3 class="title-h3">
                Más soluciones PROD
            </h3>
            <h4 class="title-h4">
                Descubre más soluciones de Aspel-PROD y comprueba por qué es el Sistema de control de producción líder.
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Reportes y consultas para un exacto conocimiento del proceso de producción:
                    </h5>
                    <ul>
                        <li>
                            Consulta de órdenes y seguimiento.
                        </li>
                        <li>
                            Plan maestro de compras.
                        </li>
                        <li>
                            Costos de producción.
                        </li>
                        <li>
                            Comparativo de consumos vs. hojas de costos.
                        </li>
                        <li>
                            Productos por entregar.
                        </li>
                        <li>
                            Materiales en proceso de fabricación.
                        </li>
                        <li>
                            La información puede ser copiada a Microsoft Excel® y a los formatos TXT, HTML, XLS y XML.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="Acceso remoto" class="img-responsive" src="/images/products/prod/inelco-aspel-prod-soluciones-reportes-y-consultas-reporte-maestro.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive ">
                        <img alt="espacio aspel" class="img-responsive zoom2" data-zoom-image="/img/productos/inelco-consultas-estadisticas-reportes-HD.png" src="/images/products/inelco-espacio-aspel.png">
                        </img>
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                        ⓔspacio Aspel
                    </h5>
                    <p>
                        Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva. En la interfaz con ⓔspacio Aspel podrás consultar la información por carpetas y también visualizar la información publicada por un Sistema Aspel en particular (SAE, COI, BANCO, NOI y PROD).
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <center>
                        <img alt="aspel-SAE" class="img-responsive logo-produ" src="/images/products/inelco-sae-ciclo.png"/>
                    </center>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Interfaz con Aspel-SAE
                    </h5>
                    <ul>
                        <li>
                            De Aspel-SAE 6.0 obtiene la materia prima y sub-ensambles para realizar los procesos de fabricación, de esta forma se mantiene actualizada la información de: movimientos al inventario, existencias, pendientes por recibir y por surtir, así como los costos, lotes, pedimentos y números de serie.
                        </li>
                        <li>
                            La interfaz permite manejar el inventario a través de las funciones de Aspel-SAE 6.0: etiquetas de código de barras, manejo de tallas y colores, valor del inventario y consulta de kárdex.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Características generales del producto
                    </h5>
                    <ul>
                        <li>
                            Base de Datos en formato Firebird® y posibilidad de uso en formato SQL Server®.
                        </li>
                        <li>
                            Traductor automático de datos de la versión Aspel-PROD 2.0.
                        </li>
                        <li>
                            Actualización en línea a las últimas mejoras de la versión.
                        </li>
                        <li>
                            Módulo mejorado de perfiles del usuario para la asignación de permisos a los usuarios.
                        </li>
                        <li>
                            Disponible en versiones de 1 usuario con 99 empresas y licencias adicionales.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="caracteristicas de aspel prod" class="img-responsive" src="/images/products/prod/inelco-aspel-prod-soluciones-caracteristicas-del-producto.png">
                    </img>
                </div>
            </div>
        </div>
    </section>

    @include('aspel.prod.menu-prod')

@endsection

@push('add-js')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
    @stack('files-menu')
@endpush
