@extends('templates.principal')


@section('name_title','FACTURE | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('aspel.facture.banner-facture')

    <section class="descripcion-prod facture-pages secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Es ideal para emprendedores y profesionistas que facturan servicios
                    </h2>
                    <p>
                        <b>
                            Aspel-FACTURⓔ
                        </b>
                        es el Sistema ideal para personas Físicas, emprendedores y profesionistas que requieren generar Comprobantes Fiscales Digitales por Internet (CFDI) de forma segura y en segundos de acuerdo con las disposiciones fiscales vigentes. Captura fácilmente facturas, notas de crédito, recibos de honorarios, de arrendamiento y otros comprobantes de ingreso y egreso, así como manejo de complementos. Además, emite el Comprobante Digital que ampara retenciones e información de pagos.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="/images-new/marcas/aspel/productos/facture/logos/inelco-aspel-facture-logo.png" alt="Aspel FACTURE Logo" class="img-responsive first">
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-facture">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                    Resuelve todas tus necesidades de facturación
                </h2>
            </div>
        </div>
    </section>

    <section class="ac_content facture-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Aspel FACTURE</h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/facture/inelco-aspel-facture-soluciones-catalogo-de-clientes-2.png" id="1" width="88.5%" alt="Registra fácilmente a tus clientes|Con el catalogo de clientes registra, administra y define la información de los clientes, incluyendo los datos comerciales y fiscales de manera sencilla, además agilizas la captura de los comprobantes y minimiza errores."/>

                    <img src="/images/products/facture/inelco-aspel-facture-soluciones-catalogo-de-terceros-2.png" id="2" width="88.5%" alt="Incluye un catálogo de terceros|Genera los nuevos Comprobantes Digitales que la autoridad establece para retenciones de impuestos por concepto de dividendos, remanentes distribuibles, entre otros." />

                    <img src="/images/products/facture/inelco-aspel-facture-soluciones-catalogo-de-productos-2.png" id="3" width="88.5%" alt="Administra los productos sin demoras|Registra  tus productos incluyendo detalles como: descripción, imagen, precio, unidad de medida, entre otros. De una manera más rapida y fácil."/>

                    <img src="/images/products/facture/inelco-aspel-facture-lo-nuevo-cfdi-retenciones.png" id="4 width="88.5%" alt="Emite CFDI de retenciones|Genera los comprobantes digitales para registrar retenciones de impuestos y emite comprobantes de retenciones de dividendos o remanentes distribuibles"/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones facture-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">Catálogo de clientes</div>
                    <p>Registra fácilmente a tus clientes y define la información comercial y fiscal de manera sencilla, además agilizas la captura de los Comprobantes y minimiza errores.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod facture-pages secciones">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="cfdi" src="/images/products/facture/inelco-aspel-productos-facture-comprobantes-fiscales-digitales-por-internet.png"/>
                    </center>
                    <h3 class="text-center">Facturación Electrónica</h3>
                    <p>
                        Genera CFDI y envía el comprobante a tus clientes vía correo electrónico en PDF y XML.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comprobantes genéricos" src="/images/products/facture/inelco-aspel-productos-facture-comprobantes-genericos.png"/>
                    </center>
                    <h3 class="text-center">Genera múltiples comprobantes</h3>
                    <p>
                        Emite Comprobantes Digitales genéricos como notas de cargo, comprobantes complementarios por cambio de tasa del IVA, entre otros.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="facture complementos" src="/images/products/facture/inelco-aspel-productos-facture-complementos.png"/>
                    </center>
                    <h3 class="text-center">Emite complementos fácilmente</h3>
                    <p>
                        Con el Sistema Aspel-FACTURⓔ también puedes expedir comprobantes con complementos fiscales.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="dividendos y remanentes" src="/images/products/facture/inelco-aspel-productos-facture-dividendos-y-remanentes.png"/>
                    </center>
                    <h3 class="text-center">Comprobantes Digitales</h3>
                    <p>
                        Genera los nuevos Comprobantes Digitales para registrar retenciones de impuestos e información de pagos por concepto de dividendos y remanentes distribuibles.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="comprobantes en dolares" src="/images/products/facture/inelco-aspel-productos-facture-Comprobantes-en-dolares.png"/>
                    </center>
                    <h3 class="text-center">Comprobantes en dólares</h3>
                    <p>
                        Expande la facturación de tu negocio, ahora tienes la posibilidad de generar comprobantes en dólares.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="diversos documentos" src="/images/products/facture/inelco-aspel-productos-facture-genera-diversos-documentos.png"/>
                    </center>
                    <h3 class="text-center">Genera diversos documentos</h3>
                    <p>
                        Podrás emitir facturas, recibos de honorarios, recibos de arrendamiento y notas de crédito cumpliendo con todas las disposiciones fiscales vigentes.
                    </p>
                </div>
            </div>
        </div>
            <h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>

            <br>
            <br>
                <a href="{{url('contacto')}}" style="text-decoration: none" >
                                <button id="btn-facture-prob1" class="btn  btn-lg center-block">
                                    Lo quiero
                                </button>
                </a>
    </section>

    @include('aspel.facture.menu-facture')
    
    

    

    

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
