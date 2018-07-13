@extends('templates.principal')


@section('name_title','PROD | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.prod.banner-prod')

    <section class="descripcion-prod prod-pages secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Controla eficientemente los procesos de manufactura de la empresa
                    </h2>
                    <p>
                        <b>
                            Aspel-PROD 3.0
                        </b>
                        permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos. Proporciona, además, un eficiente seguimiento a las órdenes de producción mejorando los tiempos de entrega. Interactúa con Aspel-SAE 6.0 y 5.0 de los que obtiene información de materia prima y sub-ensambles, para realizar los procesos de producción y posteriormente actualizar el inventario con los productos terminados.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/prod/logos/inelco-aspel-prod-logo.png" width="60%"  alt="Aspel PROD  Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-prod">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    Controla tus procesos de producción
                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content prod-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel PROD</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/prod/inelco-aspel_productos_prod_manejo_insumos.png" id="1" width="88.5%" alt="Ofrece una variedad de tipos de insumos|Para la determinación del costo del producto terminado, pueden ser del tipo: materia prima, maquinaria, mano de obra, entre otros."/>

                    <img src="/images/products/prod/inelco-aspel_productos_prod_procesos_produccion.png" id="2" width="88.5%" alt="Fácil manejo de los procesos|Organiza de manera eficiente las diferentes etapas de producción." />

                    <img src="/images/products/prod/inelco-aspel-prod-soluciones-implosion-y-explosion-de-materiales.png" id="3" width="88.5%" alt="Controla de manera optima la implosión y explosión de materiales|Obtén fáciles consultas de explosión e implosión de materiales para conocer en todo momento los componentes necesarios para cubrir una orden"/>

                    <img src="/images/products/prod/inelco-aspel-prod-soluciones-reportes-y-consultas-reporte-maestro.png" id="4" width="88.5%" alt="Reportes y consultas para un exacto conocimiento del proceso de producción|Consulta de órdenes y seguimiento. Plan maestro de compras. Costos de producción."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones prod-pages" id="texto-img">
        <div class="container">
              <div class="row">
                <div class="tour-caption">
                    <div class="title">Ofrece una variedad de tipos de insumos</div>
                    <p>Para la determinación del costo del producto terminado, pueden ser del tipo: materia prima, maquinaria, mano de obra, entre otros.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod prod-pages secciones">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="control de procesos de fabricacion" src="/images/products/prod/inelco-aspel-productos-prod-planeacion-control-de-procesos-de-fabricacion.png"/>
                    </center>
                    <h3 class="text-center">
                        Control de productos terminados
                    </h3>
                    <p>
                        Planea y controla los procesos de fabricación de tus productos terminados.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="calculo eficiente de productos terminados" src="/images/products/prod/inelco-aspel-productos-prod-calculo-eficiente-real-optimo-de-productos-terminados.png"/>
                    </center>
                    <h3 class="text-center">
                        Fácil manejo de costos
                    </h3>
                    <p>
                        Calcula de manera eficiente, real y óptima el costo de los productos terminados y sub-ensambles.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="ordenes de producción" src="/images/products/prod/inelco-aspel-productos-prod-organiza-y-conoce-el-estado-de-ordenes-de-produccion.png"/>
                    </center>
                    <h3 class="text-center">
                        Órdenes de producción
                    </h3>
                    <p>
                        Organiza y conoce en todo momento el estado de las órdenes de producción, con ello podrás optimizar los tiempos de entrega, así como obtener la información necesaria para una correcta negociación comercial.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <center>
                        <img alt="fabricacion de productos" src="/images/products/prod/inelco-aspel-productos-prod-fabricacion-de-productos.png"/>
                    </center>
                    <h3 class="text-center">
                        Fabricación de productos eficiente
                    </h3>
                    <p>
                        Conoce los componentes que requieres para fabricar uno o más productos de tu elección, así como los productos que es posible fabricar a partir de los disponibles en ese momento: materia prima, insumos, sub-ensambles.
                    </p>
                </div>
                <div class="col-md-6">
                    <center>
                        <img alt="interfaz prod-sae" src="/images/products/prod/inelco-aspel-productos-prod-interfaz-prod-sae.png"/>
                    </center>
                    <h3 class="text-center">
                        Interfaz con Aspel-SAE
                    </h3>
                    <p>
                        Con SAE 6.0 obtiene la materia prima y sub-ensambles para realizar los procesos de fabricación una vez que se tiene el producto terminado, el sistema registra su entrada en el inventario. En todo momento la información de movimientos al inventario está actualizada.
                    </p>
                </div>
            </div>
        </div>
             <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

                <br>
                <br>
                    <a href="{{url('contacto')}}" style="text-decoration: none" >
                                    <button id="btn-prod-prob1" class="btn  btn-lg center-block">
                                        Lo quiero
                                    </button>
                    </a>
    </section>

   
    @include('aspel.prod.menu-prod')

    

@endsection

@push('add-js')
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
@endpush
