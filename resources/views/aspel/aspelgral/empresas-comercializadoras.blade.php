@extends('templates.principal')
@section('name_title','Comercio| Inelco IT Solutions')
@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/products-styles.css" rel="stylesheet"/>

@endpush


@section('contenido')
<section id="base" class="base " >

    <div class="container  ">
    <div class="col-md-12">
        <h1>
            Sistemas Aspel para empreas comercializadoras
        </h1>
        <p>
            Ofrecemos el software líder para
            <b>
                emprendedores, profesionistas y PyMES
            </b>
        </p>
    </div>
    </div>

</section>
<section class="sistemas " id="empresas-comercializadoras">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-h2" style="color: #1E3662" data-wow-duration="1000ms" data-wow-delay="0.3s">Sistemas Aspel</h2>
                <br>
                
                
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/inelco-aspel-SAE-areaComercial.png">
                    <h3>
                        Sistema Administrativo Empresarial
                    </h3>
                    <ul>
                        <li>
                           <p> <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Administra todas las operaciones del ciclo de compra-venta de la empresa. </p>
                        </li>
                        <li>
                            <p> <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Emite Facturación Electrónica CFDI para tu negocio.</p>
                        </li>
                        <li>
                           <p> <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Incluye herramientas CRM para optimizar los esfuerzos de las áreas administrativas y comerciales. </p>
                        </li>
                    </ul>
                    <br>

                    <div align="right" class="boton">
                        <a href="{{url('aspel-sae')}}">
                            <button class="btn btn-default" type="button">
                                Mas información
                            </button>
                        </a>
                    </div>
                </img>
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/inelco-aspel-caja-area-comercial.png"/>
                <h3>
                    Sistema de Punto de Venta y Administración de Comercios
                </h3>
                <ul>
                    <li>
                        <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Controla y administra las operaciones de ventas, facturación e inventarios de uno o varios comercios.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Convierte tu PC en un punto de venta capaz de operar con pantallas de torreta y lectores de código de barras. </p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emite Comprobantes Fiscales Digitales por Internet (CFDI) de acuerdo con las disposiciones fiscales vigentes. </p>
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-caja')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/inelco-aspel-facture-area-comercial.png"/>
                <h3>
                    Sistema de Facturación Electrónica
                </h3>
                <ul>
                    <li>
                      <p>  <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Genera Comprobantes Fiscales Digitales por Internet CFDI.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emite facturas, notas de crédito, recibos de honorarios y de arrendamiento.</p>
                    </li>
                    <li>
                       <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Factura de acuerdo con las disposiciones fiscales vigentes.</p>
                    </li>
                </ul>
                <br>
                <br>
                <br>
                <br>

                <div align="right" class="boton">
                    <a href="{{url('aspel-facture')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/inelco-aspel-adm-administracion.png"/>
                <h3>
                    Sistema de Administración Móvil
                </h3>
                <ul>
                    <li>
                       <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Elabora cotizaciones, facturas y compras de forma sencilla y productiva.</p>
                    </li>
                    <li>
                       <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ten disponible en todo momento el estado de tus cuentas por cobrar.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Mantén un oportuno seguimiento de las ventas, gastos e ingresos.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Maneja eficientemente tu catálogo de clientes, productos y servicios.</p>
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-adm')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>

            {{--Sistemas de National Soft--}}

            <div class="col-md-12">
                <h2 class="title-h2" style="color: #1E3662" data-wow-duration="1000ms" data-wow-delay="0.3s">Sistemas National Soft</h2>
                <br>
                
                
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/Inelco-softrestaurant-banner-modo-operacion.jpg">
                    <h3>
                        Sistema para restaurantes
                    </h3>
                    <ul>
                        <li>
                           <p> <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Organizar la información de las diversas áreas del restaurante. </p>
                        </li>
                        <li>
                            <p> <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Se adapta a todo tipo de restaurantes, bares, cafeterías, pizzerías, fast food, taquerías.</p>
                        </li>
                        <li>
                           <p> <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Incluye nuevo esquema de facturación sea lo más sencilla posible, la actualización de la nueva versión del SAT de CFDI 3.3. </p>
                        </li>
                    </ul>
                    <br>

                    <div align="right" class="boton">
                        <a href="{{url('national-soft/soft-restaurant')}}">
                            <button class="btn btn-default" type="button">
                                Mas información
                            </button>
                        </a>
                    </div>
                </img>
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/Inelco-banner-on-the-minute.jpg"/>
                <h3>
                    Sistema de software de gestión de asistencia.
                </h3>
                <ul>
                    <li>
                        <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Controla exacto de entradas y salidas mediante reconocimiento facial y huella digital.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Evite falsificaciones gracias a la tecnología biométrica para que el personal. </p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Reduce el tiempo administrativo y de recursos humanos. </p>
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('national-soft/on-the-minute')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/inelco-aspel-facture-area-comercial.png"/>
                <h3>
                   National Soft Hoteles
                </h3>
                <ul>
                    <li>
                      <p>  <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Genera Comprobantes Fiscales Digitales por Internet CFDI.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emite facturas, notas de crédito, recibos de honorarios y de arrendamiento.</p>
                    </li>
                    <li>
                       <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Factura de acuerdo con las disposiciones fiscales vigentes.</p>
                    </li>
                </ul>
                <br>
                <br>
                <br>
                <br>

                <div align="right" class="boton">
                    <a href="{{url('aspel-facture')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/images/products/aspelgral/inelco-aspel-adm-administracion.png"/>
                <h3>
                    Sistema de Administración Móvil
                </h3>
                <ul>
                    <li>
                       <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Elabora cotizaciones, facturas y compras de forma sencilla y productiva.</p>
                    </li>
                    <li>
                       <p> <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ten disponible en todo momento el estado de tus cuentas por cobrar.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Mantén un oportuno seguimiento de las ventas, gastos e ingresos.</p>
                    </li>
                    <li>
                        <p><i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Maneja eficientemente tu catálogo de clientes, productos y servicios.</p>
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-adm')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
