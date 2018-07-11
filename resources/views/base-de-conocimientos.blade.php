@extends('templates.principal')
@section('name_title','Base de conocimientos | Inelco IT Solutions')
@push('add-css')
	<link href="/css/products-styles.css" rel="stylesheet">
	<link href="/css/my-tabs.css" rel="stylesheet">
	<link href="/css/simple-sidebar.css" rel="stylesheet">
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
@endpush 
@section('contenido')
	<div id="wrapper" class="base-de-conocimiento">
	    <div id="sidebar-wrapper">
	        <h4 class="title-h4">
	        	<a href="{{ url('/base-de-conocimientos')}}" id="return-bd-download"><i class="fa fa-undo" aria-hidden="true"></i> Base de conocimientos</a>
	        </h4>
	        <div class="panel-group" id="accordion">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Aspel</a>
							</h4>
	                </div>
	                <div id="collapse1" class="panel-collapse">
	                    <button class="list-group-item" data-toggle="sae"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> SAE</button>
	                    <button class="list-group-item" data-toggle="coi">COI</button>
	                    <button class="list-group-item" data-toggle="noi">NOI</button>
	                    <button class="list-group-item" data-toggle="banco">BANCO</button>
	                    <button class="list-group-item" data-toggle="caja">CAJA</button>
	                    <button class="list-group-item" data-toggle="prod">PROD</button>
	                    <button class="list-group-item" data-toggle="facture">FACTURE</button>
	                    <button class="list-group-item" data-toggle="adm">ADM</button>
	                </div>
	            </div>
	            {{--
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">National Soft</a>
							</h4>
	                </div>
	                <div id="collapse2" class="panel-collapse collapse">
	                    <button class="list-group-item">NS Hoteles</button>
	                    <button class="list-group-item">On The Minute</button>
	                    <button class="list-group-item">Soft Facturas</button>
	                    <button class="list-group-item">Soft Restaurant</button>
	                </div>
	            </div>
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Incrementa</a>
							</h4>
	                </div>
	                <div id="collapse3" class="panel-collapse collapse">
	                    <button class="list-group-item">Incrementa CRM</button>
	                </div>
	            </div> --}}
	        </div>
	    </div>
	    <div class="boton-descargas">
	        <a class="btn btn-primary btn-circle btn-xl btn-inelco" href="#menu-toggle" id="menu-toggle"><i class="fa fa-list"></i></a>
	    </div>
	    <section class="sections" id="banner-base-conoc">
	        <div class="fondo-gray">
	            <h2 class="title-h2">Base de conocimientos</h2>
	            <h3 class="title-h3">Te ofrecemos las soluciones a los problemas más comunes que afectan al funcionamiento de tus sistemas</h3>
	        </div>
	    </section>
	    <section class="marcas secciones tabs2 tab-visible">
	        <div class="container">
	            <h2 class="text-center title-h2">¿Con qué producto necesitas ayuda?</h2>
	            <div class="row">
	                <div class="col-md-3">
	                    <div class="box-marcas">
	                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="menu-toggle"><img src="/images/products/inelco-aspel-logo.png" alt="ASPEL" class="img-responsive" /></a>
	                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="menu-toggle" style="text-decoration: none;">
	                            <button class="btn btn-inelco btn-lg center-block" style="margin-top:48px;"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> Consultar Base</button>
	                        </a>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="box-marcas btn-proximamente">
	                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="menu-toggle"><img src="/images-new/marcas/nationalsoft/logos/inelco-nationalsoft-logo.png" alt="National soft " class="img-responsive" /></a>
	                        <button class="btn btn-inelco-secundario btn-lg center-block" style="margin-top:48px">Próximamente</button>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="box-marcas btn-proximamente">
	                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="menu-toggle"><img src="/images/products/icrm/inelco-incrementa-logo.png" alt="Incrementa CRM" class="img-responsive" /></a>
	                        <button class="btn btn-inelco-secundario btn-lg center-block" style="margin-top:48px">Próximamente</button>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="box-marcas btn-proximamente">
	                        <img src="/images-new/marcas/zoho/logos/inelco-zoho-logo.png" alt="ZOHO" class="img-responsive" />
	                        <button class="btn btn-inelco-secundario btn-lg center-block" style="margin-top:48px">Próximamente</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!--
		===========================
			SECCIÓN ASPEL SAE
		===========================
		-->
	    <div id="sae" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#sae7">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-SAE 7.0
								</span>
							</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#sae6">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-SAE 6.0
								</span>
							</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#sae5">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-SAE 5.0
								</span>
							</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN ASPEL SAE 7.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="sae7" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <center><img src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png" width="60%"  alt="Aspel SAE Logo" class="img-responsive first"></center>
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4"><i id="actualizacion-pagina" class="fa fa-bell" aria-hidden="true"></i> 001 - Manual de Comprobantes de Pago v3.3 de Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/001-Manual-de-comprobante-de-pago-SAE-7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - Facturación global de notas de venta con Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/002-Facturación-global-de-notas-de-venta-con-Aspel-SAE-7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">003 - Contabilidad Electronica en  Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/003-Contabilidad_Electronica_en_ Aspel-SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">004 - Facturacion WEB en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/004-Facturacion_WEB_en_Aspel-SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">005 - Instalación y Configuración del IIS para la facturación WEB en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/005-Instalación-y-Configuración-del-IIS-para-la-facturación-WEB-en-Aspel-SAE-7.00.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">006 - Configuracion Aspel SAE 7.0 para trabajar remotamente</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/006-Configuracion_Aspel-SAE_7.0_para_trabajar_remotamente.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">007 - Nuevas funciones y características de Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/007-Nuevas-funciones-y-características-de-Aspel-SAE-7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">008 - Inicio de Operaciones en Aspel SAE 7.0 (Nueva base de datos)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/008-Inicio-de-Operaciones-en-Aspel-SAE-7.0-(Nueva base de datos).pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">009 - Inicio de Operaciones en Aspel SAE 7.0 para usuarios de una versión anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/009-Inicio-de-Operaciones-en-Aspel-SAE-7.0-para-usuarios-de-una-versión-anterior.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">010 - Elaboracion de una Nota de credito en SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/010-Elaboracion-de-una-Nota-de-credito-en-SAE-7-0-V1.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">011 - Generación de CFDI con Aspel SAE 7.0 todo Incluido</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/011-Generación-de-CFDI-con-Aspel-SAE-7.0-todo-Incluido.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">012 - Generación de CFDI con Aspel SAE 7.0 y Aspel Sellado CFDI</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/012-Generación-de-CFDI-con-Aspel-SAE-7.0-y-Aspel-Sellado-CFDI.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">014 - Costeo de movimientos pendientes en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/014-Costeo_de_movimientos_pendientes_en_Aspel_SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">015 - mostrar imagenes de productos en reportes QR2 en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/015-mostrar_imagenes_de_productos_en_reportes_QR2_en_Aspel_SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">016 - SAE Movil como funciona en SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/016-SAE_Movil_como_funciona_en_SAE-7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">017 - configuración de Aspel SAE Móvil con SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/017-configuración_de_Aspel_SAE_Móvil_con_SAE 7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">019 - Agregar descripcion del producto en XML y PDF</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/019-Agregar-descripcion-del-producto-en-XML-y-PDF.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">020 - Proceso de Cierre en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/020-Proceso_de_Cierre_en_Aspel-SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">021 - Procedimiento para importar información de Excel a Aspel SAE</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/021-Procedimiento-para-importar-información-de-Excel-a-Aspel-SAE.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">022 - Declaracion informativa simplificada en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/022-Declaracion_informativa_simplificada_en_Aspel_SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">023 - abrir bases de datos Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/023-abrir_bases_de_datos_Aspel_SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">024 - Principales rutinas de mantenimiento Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/024-Principales_rutinas_de_mantenimiento_Aspel_SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">025 - SAE en mi propia nube Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/025-SAE_en_mi_propia_nube_Aspel-SAE_7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">028 - Contratación Aspel NUBE</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/028-Contratación_Aspel_NUBE_v2.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">029 - Activacion sistemas Aspel SAE nube</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/029-Activacion_sistemas_Aspel_SAE-nube.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">030 - Preguntas frecuentes ASPEL SAE nube</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/030-Preguntas-frecuentes-ASPEL_SAE-nube.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">036 - Traducción de Aspel SAE 5.0 a Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/036-Traducción_de_Aspel-SAE_5.0_a_Aspel-SAE_7.0_v2.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">037 - ¿Qué es un anticipo?</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/037-Que-es-un-anticipo.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">038 - Aplicación anticipo mediante CFDI v3.3 egreso aplicado factura operación</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/038-Aplicación-anticipo-mediante-CFDI-v3.3-egreso-aplicado-factura-operación.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">039 - Aplicación anticipo mediante CFDI v3.3 egreso aplicado factura anticipo</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/039-Aplicación-anticipo-mediante-CFDI-v3.3-egreso-aplicado-factura-anticipo.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">040 - Facturación de muestras en Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/040-Facturación-de-muestras-en-Aspel-SAE-7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">041 - Facturación muestras Aspel SAE 7.0 sin descuento con precio 1 centavo</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/041-Facturación-muestras-Aspel-SAE 7.0 sin-descuento-con-precio-1-centavo.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">042 - Facturación muestras en Aspel SAE 7.0 aplicando descuento del 99.999</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/042-Facturación-muestras-en-Aspel-SAE-7.0-aplicando-descuento-del-99.999.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">043 - Facturación contratos obra Aspel SAE 7.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/043-Facturación-contratos-obra-Aspel-SAE-7.0.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">044 - Facturación contratos obra Aspel SAE 7.0 Anticipo</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/044-Facturación-contratos-obra-Aspel-SAE-7.0-Anticipo.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">045 - Facturación contratos obra Aspel SAE 7.0 Complemento pagos</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/045-Facturación-contratos-obra-Aspel-SAE-7.0-Complemento-pagos.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">046 - Facturación contratos obra Aspel SAE 7.0 Descuentos y CFDI complementario</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/sae/sae7/docs/046-Facturación-contratos-obra-Aspel-SAE-7.0-Descuentos-y-CFDI-complementario.pdf" target="_blank" title="Base de conocimiento SAE 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ASPEL SAE 7.0-->
	                <!-- ===== SECCIÓN ASPEL SAE 6.0 ===== -->
	                <div id="sae6" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Actualizacion necesaria del Sistema Operativo para el timbrado de CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Actualizacion necesaria del Sistema Operativo para el timbrado de CFDI.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Como emitir un recibo de honorarios en Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Como emitir un recibo de honorarios en Aspel-SAE 6.0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Como mostrar las imagenes de los productos en reportes QR2</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Como mostrar las imagenes de los productos en reportes QR2.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Configuracion de Aspel-SAE 6.0 para trabajar remotamente</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Configuracion de Aspel-SAE 6.0 para trabajar remotamente.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Contabilidad Electrónica con Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Contabilidad Electrónica con Aspel-SAE 6.0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Costeo de movimientos pendientes</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Costeo de movimientos pendientes.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Declaracion informativa simplificada con los Sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Declaracion informativa simplificada con los Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">El certificado no es de tipo CSD en los Sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/El certificado no es de tipo CSD en los Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Facturación WEB en Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Facturación WEB en Aspel-SAE 6.00.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Firma de Actualización de contrato-Aspel Sellado CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Firma de Actualización de contrato-Aspel Sellado CFDI.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Generación de CFDI con Aspel-SAE 6.0 todo incluido</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Generación de CFDI con Aspel-SAE 6.0 todo Incluido.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Generación de CFDI con Aspel-SAE 6.0 y Aspel-Sellado CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Generación de CFDI con Aspel-SAE 6.0 y Aspel-Sellado CFDI.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de Operaciones en Aspel-SAE 6.0 (Nueva base de datos)</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Inicio de Operaciones en Aspel-SAE 6.0 (Nueva base de datos).pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de Operaciones en Aspel-SAE 6.0 para usuarios de una version anterior</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Inicio de Operaciones en Aspel-SAE 6.0 para usuarios de una version anterior.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Instalacion y configuracion de Aspel SAE Movil</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Instalacion y configuracion de Aspel SAE Movil.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Instalación y Configuración del IIS para la facturación WEB en Aspel-SAE 6.00</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Instalación y Configuración del IIS para la facturación WEB en Aspel-SAE 6.00.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Manejo de anticipos en Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Manejo de anticipos en Aspel-SAE 6 0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Manejo de parcialidades en Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Manejo de parcialidades en Aspel-SAE 6.0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Metodo-pago-Aspel-SAE-6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Metodo-pago-Aspel-SAE-6.0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Nuevas funciones y características de Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Nuevas funciones y características de Aspel-SAE 6 0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Procedimiento para importar información de Excel a Aspel-SAE</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Procedimiento para importar información de Excel a Aspel-SAE.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Proceso de Cierre para Aspel-SAE 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Proceso de Cierre para Aspel-SAE 6.0.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">¿Qué es SAE Móvil y cómo funciona?</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/Qué es SAE Móvil y cómo funciona.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">SAE en mi propia nube paso a paso</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae6/docs/SAE en mi propia nube paso a paso.pdf" target="_blank" title="Base de conocimiento SAE 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ASPEL SAE 6.0-->
	                <!-- ===== SECCIÓN ASPEL SAE 5.0 ===== -->
	                <div id="sae5" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Como abrir las bases de datos Aspel SAE 5.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae5/docs/Como_abrir_las_bases_de_datos_Aspel_SAE_5.0.pdf" target="_blank" title="Base de conocimiento SAE 5.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Metodo pago Aspel SAE 5.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae5/docs/Metodo-pago-Aspel-SAE-5.0.pdf" target="_blank" title="Base de conocimiento SAE 5.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Principales rutinas de mantenimiento Aspel SAE 5.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/sae/sae5/docs/Principales_rutinas_de_mantenimiento_Aspel_SAE_5.0.pdf" target="_blank" title="Base de conocimiento SAE 5.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ASPEL SAE 5.0-->
	            </div>
	            <!-- TERMINA SECCIÓN ASPEL SAE -->
	        </div>
	    </div>
	    <!--
		===========================
			SECCIÓN ASPEL COI
		===========================
		-->
	    <div id="coi" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#coi8">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-COI 8.0
								</span>
							</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#coi7">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-COI 7.0
								</span>
							</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#coi6">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-COI 6.0
								</span>
							</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN ASPEL COI 8.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="coi8" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <center><img src="/images-new/marcas/aspel/productos/coi/logos/inelco-aspel-coi-logo.png" width="60%"  alt="Aspel COI Logo" class="img-responsive first"></center>
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">001 - Manejando polizas dinamicas con Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/001-Manejando-polizas-dinamicas-con-Aspel-COI-80.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - Contabilidad Electrónica Paso a Paso con Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/002-Contabilidad-Electrónica-Paso-a-Paso-con-Aspel-COI-8.0.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">004 - ¿Qué, cómo y cuándo? de la Contabilidad electrónica (2017)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/004-Como-cuando-de-la-contabilidad-electronica.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">005 - Nuevas funciones caracteristicas de Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/005-Nuevas-funciones-caracteristicas-de-Aspel-COI 8.0.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">006 - Inicio de operaciones en Aspel COI 8.0 para usuarios de una versión anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/006-Inicio-de-operaciones-en-Aspel-COI-8.0-para-usuarios-de-una-versión-anterior(1).pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">007 - Inicio de operaciones en Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/007-Inicio-de-operaciones-en-Aspel-COI-8-0.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">009 - Declaración Informativa en Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/009-Declaracion-Informativa-en-Aspel-COI-8-0.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">010 - Importación de catálogos desde un archivo de Excel</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/010-Importacion-de-catalogos-desde-un-archivo-de-excel.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">013 - Pólizas dinámicas con etiquetas personalizadas Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/013-Polizas-dinamicas-con-etiquetas-personalizadas-Aspel-COI-8.0.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">014 - Manejo de CFDI en el depósito de documentos</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/014-Manejo-de-CFDI-en-el-deposito-de-documentos.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">016 - Preguntas Frecuentes de COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/016-Preguntas-Frecuentes-COI8-0-V0.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">017 - Contabiliza tus viaticos con Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/017-Contabiliza-tus-viaticos-con-Aspel-COI-80.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">018 - Conceptos básicos de contabilidad</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/018-Conceptos-basicos-de-contabilidad.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">019 - Balanza de comprobación con Aspel COI 8.0 (Caso 1)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/019-Balanza-de-comprobacion-con-Aspel-COI-80-C1.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">020 - Balanza de comprobación con Aspel COI 8.0 (Caso 2)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/020-Balanza-de-comprobacion-con-Aspel-COI-80-C2.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">021 - Balanza de comprobación con Aspel COI 8.0 (Caso 3)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/021-Balanza-de-comprobacion-con-Aspel-COI-80-C3.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">022 - Estados financieros con Aspel COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/022-Estados-financieros-con-Aspel-COI-80-V1.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">023 - Configuración y Proceso de Administrador Supervisor en la WEB</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/023-Configuracion-y-Proceso-de-Administrador-Supervisor-en-la-WEB.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">024 - Configuración y Proceso de Usuario en la WEB</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/coi/coi8/docs/024-Configuracion-y-Proceso-de-Usuario-en-la-WEB.pdf" target="_blank" title="Base de conocimiento COI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ASPEL COI 8.0-->
	                <!-- ===== SECCIÓN ASPEL COI 7.0 ===== -->
	                <div id="coi7" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">¿Qué, cómo y cuándo? de la Contabilidad electrónica (2016)</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Qué como y cuándo de la contabilidad electrónica.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Cierre del Ejercicios en Aspel COI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Cierre del Ejercicios en Aspel-COI 7.0.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Contabilidad Electronica Paso a Paso con Aspel COI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Contabilidad Electronica Paso a Paso con Aspel-COI 7.0.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Declaración Informativa DIOT en Aspel COI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Declaración Informativa DIOT en Aspel-COI 7.0.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Importación de catalogos desde un archivo de Excel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Importacion de catalogos desde un archivo de excel.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de operaciones en Aspel COI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Inicio de operaciones en Aspel-COI 7 0.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de operaciones en Aspel COI 7.0 para usuarios de una version anterior</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Inicio de operaciones en Aspel-COI 7.0 para usuarios de una version anterior.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Manejando pólizas din micas con Aspel COI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Manejando pólizas dinámicas con Aspel-COI 7.0.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Manejo de CFDI en el depósito de documentos</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Manejo de CFDI en el depósito de documentos.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Nuevas funciones y caracteristicas de Aspel COI 7.0 en version original</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Nuevas funciones y caracteristicas de Aspel-COI 7.0 en version original.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Nuevas funciones y caracteristicas en Aspel COI 7.0 con motivo de la Contabilidad Electrónica</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Nuevas funciones y caracteristicas en Aspel-COI 7.0 con motivo de la Contabilidad Electronica.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Pólizas dinámicas con etiquetas personalizadas en Aspel COI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi7/docs/Pólizas  dinámicas con etiquetas personalizadas en Aspel-COI 7.0.pdf" target="_blank" title="Base de conocimiento COI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ASPEL COI 7.0-->
	                <!-- ===== SECCIÓN ASPEL COI 6.0 ===== -->
	                <div id="coi6" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">¿Cómo abrir las bases de datos Aspel-COI 6.0?</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi6/docs/Como_abrir_las_bases_de_datosAspel-COI6.0.pdf" target="_blank" title="Base de conocimiento COI 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Principales rutinas de mantenimiento en Aspel-COI 6.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/coi/coi6/docs/Principales rutinas de mantenimiento.pdf" target="_blank" title="Base de conocimiento COI 6.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ASPEL COI 6.0-->
	            </div>
	        </div>
	    </div>
	    <!-- TERMINA SECCIÓN ASPEL COI -->
	    <!--
		===========================
			SECCIÓN ASPEL NOI
		===========================
		-->
	    <div id="noi" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#noi8">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-NOI 8.0
								</span>
							</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#noi7">
								<span>
									<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-NOI 7.0
								</span>
							</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN NOI 8.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="noi8" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <img src="/images-new/marcas/aspel/productos/noi/logos/inelco-aspel-noi-logo.png" width="60%"  alt="Aspel COI Logo" class="img-responsive first center-block">
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">001 - Cambio salario minimo NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/001-Cambio-salario-minimo-noi-80.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - Configura calendario semanal Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/002-Configura-calendario-semanal-Aspel-NOI-80-vo.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">007 - Declaración informativa de sueldos y salarios en Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/007-Declaración-Informativa-de-Sueldos-y-Salarios-en-Aspel-NOI 8.0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">009 - Manejo previsión social NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/009-Manejo-Previsión-Social-NOI-8.0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">010 - Asegurando un correcto reparto de utilidades con Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/010-Asegurando_un_correcto_Reparto de_Utilidades_con_Aspel-NOI 8.0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">011 - Reparto utilidades NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/011-Reparto-utilidades-NOI-80.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">012 - Emite recibos electrónicos con Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/012-Emite-recibos electrónicos-con Aspel-NOI -8- 0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">015 - Cálculo mensual del ISR en Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/015-Cálculo-mensual-del-ISR-en-Aspel-NOI-8-0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">017 - Cálculo del aguinaldo en Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/017-Cálculo-del-Aguinaldo-en-Aspel-NOI-8.0-R1.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">018 - Cierre del ejercicio Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/018-Cierre-del-ejercicio-Aspel-NOI-8.0-R1.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">019 - Alta masiva trabajadores rfc NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/019-Alta-masiva-trabajadores-RFC-NOI-8.0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">022 - Interfaz Aspel NOI 8.0 y BANCO 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/022-Interfaz-Aspel-NOI-8.0-BANCO-4-0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">023 - Interfaz Aspel NOI 8.0 y COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/023-Interfaz-Aspel-NOI-8.0-COI.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">025 - Calculo anual de ISR en Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/025-Calculo_anual_de_ISR_en_Aspel-NOI_8.0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">026 - Configuración de Aspel NOI 8.0 en año bisiesto</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/026-Configuración-de-Aspel-NOI-8-0-en-año-bisiesto.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">027 - Cálculo mensual ajustado anual</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/027-Cálculo-mensual-ajustado-anual.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">028 - Claves ISR retenido reintegro ejercicio anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/028-Claves-ISR-retenido-reintegro-ejercicio-anterior_v1x.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">029 - Puesta en marcha NOI 8.0 para nuevos usuarios</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/029-Puesta-en-marcha-NOI-80-nuevos-usuarios.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">030 - Puesta en marcha NOI 8.0 para usuarios de una versión anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/030-Puesta-en-marcha-NOI-80-usuarios-version-anterior.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">031 - Nuevas funciónes características NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/031-Nuevas-funciones-características-NOI-80.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">034 - Calculo anual de ISR en Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/034-Calculo-anual-de-ISR-en-Aspel-NOI-8-0.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">043 - Preguntas frecuentes del complemento de nómina en NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/043-Preguntas-frecuentes-NOI-80-v3.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">045 - Manejo de viaticos en Aspel NOI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/045-Manejo_de_viaticos_en_Aspel-NOI_8.0_v6.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">046 - Manejo de prestamos en Aspel NOI 8.0 - Vía percepción</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/046-Manejo-de-prestamos-en-Aspel-NOI-80-via-percepcion.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">047 - NOI 7.0 timbrado actualizate complemento v1.2</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/047-NOI70-timbrado-actualizate-complemento-v1_2.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">048 - Subsidio al empleo como desglosado</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/048-Subsidio-al-empleo-como-desglosado.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">049 - Recibos de nomina con CFDI v3.3</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/049-recibos_de_nomina_con_cfdi_v3.3.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">050 - Consideraciónes CFDI nomina 3.3</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/050-Consideraciones-CFDI-Nomina-3.3.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">051 - Manejo de prestamos en Aspel NOI 8.0 - via deducción</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/051-Manejo-de-prestamos-en-Aspel-NOI-80-via-deduccion.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">052 - Invitación al cumplimiento de obligaciónes</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/noi/noi8/docs/052-Invitación_al_cumplimiento_de_obligaciones_v1.pdf" target="_blank" title="Base de conocimiento NOI 8.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN NOI 8.0-->
	                <!-- ===== SECCIÓN NOI 7.0 ===== -->
	                <div id="noi7" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Actualización necesaria del sistema operativo para el timbrado de CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Actualizacion necesaria del Sistema Operativo para el timbrado de CFDI.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Alta masiva de trabajadores al RFC mediante Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Alta masiva de trabajadores al RFC mediante Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Asegurando un correcto reparto de utilidades con Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Asegurando un correcto Reparto de Utilidades con Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Calculo del aguinaldo en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Calculo del Aguinaldo en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Calculo mensual del ISR en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Calculo mensual del ISR en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Cierre del ejercicio Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Cierre del ejercicio Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Configuración de Aspel NOI 7.0 en año bisiesto</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Configuración de Aspel-NOI 7.0 en anio bisiesto.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Cálculo anual de ISR en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Cálculo anual de ISR en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Declaración informativa de sueldos y salarios en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Declaracion Informativa de Sueldos y Salarios en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">El certificado no es de tipo CSD en los sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/El certificado no es de tipo CSD en los Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Emite recibos electrónicos con Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Emite recibos electronicos con Aspel-NOI  7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Firma de actualización de contrato Aspel sellado CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Firma de Actualización de contrato-Aspel Sellado CFDI.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Identificación del origen de los recursos destinados al pago de nomina</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Identificacion del origen de los recursos destinados al pago de nomina.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Interfaz Aspel NOI con Aspel BANCO</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Interfaz Aspel-NOI con Aspel-BANCO.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Interfaz Aspel NOI con Aspel COI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Interfaz Aspel-NOI con Aspel-COI.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Manejo de previsión social en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Manejo de Prevision Social en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Manejo del subsidio para el empleo en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Manejo del subsidio para el empleo en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Método pago Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Metodo-pago-Aspel-NOI-7 0-v1.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Movimientos a la nómina en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Movimientos a la Nomina en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Pago por hora en Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Pago por Hora en Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Pasos para cancelación masiva en Aspel NOI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Pasos para cancelación masiva en Aspel NOI.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Puesta en marcha de Aspel NOI 7.0 para usuarios de una versión anterior</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Puesta en marcha de Aspel-NOI 7.0 para usuarios de una version anterior.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Puesta en marcha de Aspel NOI 7.0 para nuevos usuarios</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Puesta en marcha de Aspel-NOI 70 para nuevos usuarios.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Reparto de utilidades (PTU) con Aspel NOI 7.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/noi/noi7/docs/Reparto de Utilidades (PTU) con Aspel-NOI 7.0.pdf" target="_blank" title="Base de conocimiento NOI 7.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN NOI 7.0-->
	            </div>
	        </div>
	    </div>
	    <!-- TERMINA SECCIÓN ASPEL NOI -->
	    <!--
		===========================
			SECCIÓN ASPEL BANCO
		===========================
		-->
	    <div id="banco" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#banco4">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-BANCO 4.0
							</span>
						</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN NOI 8.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="banco4" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <img src="/images-new/marcas/aspel/productos/banco/logos/inelco-aspel-banco-logo.png" width="60%"  alt="Aspel BANCO Logo" class="img-responsive first center-block">
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">001 - Contabilidad Electronica con Aspel-Banco 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/001-Contabilidad electronica con Aspel-Banco 4.0.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - Contabilidad Electrónica con Aspel-BANCO 4.0, Aspel-SAE 7.0 y Aspel-COI 8.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/002-Contabilidad-Electrónica-con-Aspel-BANCO-Aspel-SAE-7.0-Aspel-COI-8.0.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">003 - Nuevas funciones y características de Aspel-BANCO 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/003-Nuevas funciones y caracteristicas de Aspel-BANCO 40.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">004 - Pólizas inteligentes con Aspel-BANCO 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/004-Pólizas-inteligentes-con Aspel-BANCO-4.0.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">005 - Configuración de Aspel-BANCO 4.0 para trabajar remotamente</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/005-Configuracion de Aspel-BANCO 4.0 para trabajar remotamente.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">006 - Inicio de operaciones en Aspel-BANCO 4.0 (Nueva Base de Datos)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/006-Puesta en marcha de Aspel-BANCO 40 Nueva base de datos.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">007 - Inicio de operaciones en Aspel-BANCO 4.0 para usuarios de una versión anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/007-Puesta en marcha de Aspel-BANCO 40 para usuarios de una version anterior.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">008 - BANCO en mi propia nube paso a paso</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/008-BANCO en mi propia nube paso a paso.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">009 - Recepción de pagos en la interfaz Aspel-SAE 7.0 y Aspel-Banco 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/009-Recepción-de-pagos-en-la-interfaz-Aspel-SAE-7.0-y-Aspel-Banco-4.0.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">010 - Realiza la recepción de pago en Aspel-BANCO y posteriormente la factura en Aspel-SAE</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/010-Realiza-la-recepcion-de-pago-en-Aspel-BANCO-y-posteriormente-la-factura-en-Aspel-SAE.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">011 - Realiza la factura en Aspel-SAE y posteriormente la recepción de pago en Aspel-BANCO</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/banco/banco4/docs/011-Realiza-la-factura-en-Aspel-SAE-y-posteriormente-la-recepción-de-pago-en-Aspel-BANCO.pdf" target="_blank" title="Base de conocimiento BANCO 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN BANCO 4.0-->
	            </div>
	        </div>
	    </div>
	    <!-- TERMINA SECCIÓN ASPEL BANCO -->
	    <!--
		===========================
			SECCIÓN ASPEL CAJA
		===========================
		-->
	    <div id="caja" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#caja4">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-CAJA 4.0
							</span>
						</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#caja3-5">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-CAJA 3.5
							</span>
						</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN CAJA 4.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="caja4" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <img src="/images-new/marcas/aspel/productos/caja/logos/inelco-aspel-caja-logo.png" alt="Aspel COI Logo" class="img-responsive first center-block">
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">001 - Facturación global de notas de venta con Aspel CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/001-Facturación-global-de-notas-de-venta-con-Aspel-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - CFDI con complemento para recepción de pagos en Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/002-CFDI-con-comprobante-recepción-pagos-Aspel-CAJA-4.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">003 - Facturación Web en Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/003-Facturacion-WEB-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">004 - Instalación y Configuración de IIS para la facturación WEB en Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/004-Instalacion-configuracion-IIS-facturacion-WEB-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">005 - Venta de tiempo aire y pagos con tarjeta en Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/005-Venta-de-tiempo-aire-y-pagos-con-tarjeta-en-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">006 - Instalación y configuración de punto clave en Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/006-Instalacion-configuracion-Punto-Clave-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">008 - Generación de CFDI con Aspel-CAJA 4.0 en Suscripción todo Incluido</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/008-Generacion-de-CFDI-con-CAJA-40-en-suscripcion-todo-Incluido.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">009 - Generación de CFDI con Aspel-CAJA 4.0 y Aspel-Sellado CFDI</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/009-Generacion-de-CFDI-con-CAJA-40-y-Aspel-Sellado-CFDI.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">010 - Generación de CFDI con Aspel-CAJA 4.0 con servicio de timbrado de terceros</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/010-Generacion-de-CFDI-con-CAJA-40-con-servicio-de-timbrado-de-terceros.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">011 - Nuevas funciones y características Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/011-Nuevas-funciones-caracteristicas-Aspel-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">012 - Inicio de operaciones con Aspel-CAJA 4.0 (un solo equipo o punto de venta)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/012-Inicio-de-operaciones-CAJA-40-en-un-solo-equipo.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">013 - Inicio de operaciones con Aspel-CAJA 4.0 (trabajo en red con más de un punto de venta)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/013-Inicio-de-operaciones-CAJA-40-en-red-con-mas-de-un-punto-de-venta.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">014 - Inicio de operaciones en Aspel-CAJA 4.0 trabajando con Puntos de venta remotos (no en red)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/014-Inicio-de-opercaciones-CAJA40-con-Puntos-de-venta-remotos-no-en-red.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">015 - Importación de Clientes de Excel a Aspel-CAJA 4.0.</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/015-Importacion-Clientes-de-Excel-a-Aspel-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">016 - Importación de Inventarios de Excel a Aspel-CAJA 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/016-Importacion-Inventarios-de-Excel-a-Aspel-CAJA-40.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">017 - Configuración y manejo de la interfaz Aspel-CAJA con Aspel-SAE</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/017-Configuración y manejo de la interfaz de Aspel-CAJA 4.0 con Aspel-SAE 7.0.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">018 - Inicio de operaciones con Aspel-CAJA 4.0 (usuarios de versión anterior)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/caja/caja4/docs/018-Inicio-de-operaciones-CAJA-40-usuarios-version-anterior.pdf" target="_blank" title="Base de conocimiento CAJA 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN CAJA 4.0-->
	                <!-- ===== SECCIÓN CAJA 3.5 ===== -->
	                <div id="caja3-5" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Actualización del sistema operativo para el timbrado de CFDI en sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Actualización del Sistema Operativo para el timbrado de CFDI en Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Cambios en la captura método pago Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Cambios-en-la-captura-Metodo-pago-Aspel-CAJA-3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Configuración y manejo de la interfaz Aspel CAJA con Aspel COI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Configuración y manejo de la interfaz Aspel-CAJA con Aspel-COI.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Configuración y manejo de la interfaz Aspel CAJA con Aspel SAE</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Configuración y manejo de la interfaz Aspel-CAJA con Aspel-SAE.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">El certificado no es de tipo CSD en los sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/El certificado no es de tipo CSD en los Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Facturación web en Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Facturación WEB en Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Firma de actualización de contrato Aspel sellado CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Firma de Actualización de contrato-Aspel Sellado CFDI.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Generación de CFDI con Aspel CAJA 3.5 en suscripción todo incluido</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Genera_CFDI_desde_Aspel_CAJA3.5 con servicios de timbrado de terceros.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Generación de CFDI con Aspel CAJA 3.5 y Aspel sellado CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Generacion de CFDI con Aspel-CAJA 3.5 en suscripción todo Incluido.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Genera CFDI desde Aspel CAJA 3.5 con servicios de timbrado de terceros</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Generación de CFDI con Aspel-CAJA 3.5 y Aspel-Sellado CFDI.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- -.-.-.-.-.-.-.- SEPARADOR TEMPORAL 05 ABRIL 18-.-.-.-.-.-.-.-.-. -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Importación clientes de Excel a Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Importacion Clientes de Excel a Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Importación inventarios de Excel a Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Importacion Inventarios de Excel a Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de operaciones en Aspel CAJA 3.5 en un solo equipo o punto de venta</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Inicio de operaciones en Aspel-CAJA 3.5 en un solo equipo o punto de venta.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de operaciones en Aspel CAJA 3.5 en una red de trabajo con más de un punto de venta</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Inicio de operaciones en Aspel-CAJA 3.5 en una red de trabajo con mas de un punto de venta.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de operaciones en Aspel CAJA 3.5 trabajando con puntos de venta remotos no en red</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Inicio de operaciones en Aspel-CAJA 3.5 trabajando con Puntos de venta remotos no en red.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Instalación y configuración de punto clave con Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Instalacion y configuracion de Punto Clave con Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Instalación y configuración del IIS para la facturación web en Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Instalacion y Configuracion del IIS para la facturación WEB en Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Nuevas funciones y características Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Nuevas Funciones y Caracteristicas Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Venta de tiempo aire y pagos con tarjeta en Aspel CAJA 3.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/caja/caja3-5/docs/Venta de Tiempo Aire y Pagos con tarjeta en Aspel-CAJA 3.5.pdf" target="_blank" title="Base de conocimiento CAJA 3.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN CAJA 3.5-->
	            </div>
	        </div>
	    </div>
	    <!-- TERMINA SECCIÓN ASPEL CAJA -->
	    <!--
		===========================
			SECCIÓN ASPEL PROD
		===========================
		-->
	    <div id="prod" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#prod3">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-PROD 3.0
							</span>
						</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN PROD 3.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="noi8" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <img src="/images-new/marcas/aspel/productos/prod/logos/inelco-aspel-prod-logo.png" alt="Aspel COI Logo" class="img-responsive first center-block">
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">001 - Puesta en marcha Aspel-PROD_3.0 para usuarios de versión anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/prod/prod3/docs/001-Puesta_en_marcha_Aspel-PROD_3.0_para_usuarios_de_versión_anterior.pdf" target="_blank" title="Base de conocimiento PROD 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN PROD 3.0-->
	            </div>
	        </div>
	    </div>
	    <!-- TERMINA SECCIÓN ASPEL PROD -->
	    <!--
			===========================
				SECCIÓN ASPEL FACTURe
			===========================
			-->
	    <div id="facture" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#facture4">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-FACTURe 4.0
							</span>
						</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#facture3">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-FACTURe 3.0
							</span>
						</a>
	                </li>
	                <li>
	                    <a data-toggle="tab" href="#facture2-5">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-FACTURe 2.5
							</span>
						</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN FACTURe 4.0 ===== -->
	            <div class="tab-content secciones">
	                <div id="facture4" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <img src="/images-new/marcas/aspel/productos/facture/logos/inelco-aspel-facture-logo.png" alt="Aspel FACTURe Logo" class="img-responsive first center-block">
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - Complemento de comercio exterior con Aspel-FACTURe 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/002-Complemento-de-Comercio-Exterior-Aspel-Facture-4.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">003 - Configura el complemento de instituciones educativas privadas (IEDU)</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/003-Configura-IEDU-Facture40.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">004 - Maneja descuentos en Aspel-FACTURe 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/004-Descuentos-FACTURE40.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">010 - Nuevas funciones y características de Aspel-FACTURe 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/010-Nuevas-funciones-y-caracteristicas-de-FACTURe-40.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">011 - Inicio de operaciones en Aspel-FACTURe 4.0 Usuarios nuevos</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/011-Puesta-en-marcha-de-FACTURe-40-Usuarios-nuevos.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">012 - Inicio de operaciones con Aspel-FACTURe 4.0 para usuarios de versión anterior</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/012-Inicio-de-operaciones-con-FACTURe-40-version-anterior.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">018 - Preguntas frecuentes Aspel-FACTURe 4.0</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/facture/facture4/docs/018-Preguntas-frecuentes-facture-40.pdf" target="_blank" title="Base de conocimiento FACTURe 4.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN FACTURe 4.0-->
	                <!-- ===== SECCIÓN FACTURe 3.0 ===== -->
	                <div id="facture3" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Actualización necesaria del Sistema Operativo para el timbrado de CFDI en Sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Actualización necesaria del Sistema Operativo para el timbrado de CFDI en Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Agregar los Sistemas Aspel a las excepciones del antivirus</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Agregar los Sistemas Aspel a las excepciones del antivirus.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">El certificado no es de tipo CSD en los Sistemas Aspel</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/El certificado no es de tipo CSD en los Sistemas Aspel.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Firma de Actualización de contrato-Aspel Sellado CFDI</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Firma de Actualización de contrato-Aspel Sellado CFDI.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Inicio de operaciones con Aspel-FACTURe 3.0 (Usuarios de versión anterior)</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Inicio de operaciones con Aspel-FACTURe 3.0_Usuarios de versión anterior.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Métodos de pago en Aspel-FACTURe-3.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Metodo-pago-Aspel-FACTURe-3.0.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Nuevas funciones y caracteristicas de Aspel-FACTURE 3.0</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Nuevas funciones y caracteristicas de Aspel-FACTURE 3.0.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Puesta en marcha de FACTURe 3.0 (Usuarios nuevos)</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture3/docs/Puesta en marcha de FACTURe 3.0 Usuarios nuevos.pdf" target="_blank" title="Base de conocimiento FACTURe 3.0" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN FACTURe 3.0-->
	                <!-- ===== SECCIÓN FACTURe 2.5 ===== -->
	                <div id="facture2-5" class="tab-pane fade">
	                    <div class="container-fluid ">
	                        <!-- INICIO - Separador - Sección de descarga PDF -->
	                        <div class="row row-download">
	                            <div class="col-md-9">
	                                <h4 class="title-h4">Cambios en la captura del método de pago con Aspel-FACTURe 2.5</h4>
	                            </div>
	                            <div class="col-md-3">
	                                <p><a href="/descargas/aspel/facture/facture2-5/docs/Cambios en la captura del método de pago con Aspel-FACTURe 2.5.pdf" target="_blank" title="Base de conocimiento FACTURe 2.5" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                            </div>
	                        </div>
	                        <!-- TERMINA - Separador - Sección de descarga PDF -->
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN FACTURe 2.5-->
	            </div>
	        </div>
	    </div>
	    <!-- TERMINA SECCIÓN ASPEL FACTURe -->
	<!--
	===========================
		SECCIÓN ASPEL ADM
	===========================
	-->
	    <div id="adm" class="tabs2">
	        <div class="container">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                    <a data-toggle="tab" href="#adm">
							<span>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> Aspel-ADM
							</span>
						</a>
	                </li>
	            </ul>
	            <!-- ===== SECCIÓN ADM ===== -->
	            <div class="tab-content secciones">
	                <div id="adm" class="tab-pane fade in active">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-md-3">
	                                <img src="/images-new/marcas/aspel/productos/adm/logos/inelco-aspel-adm-logo.png" alt="Aspel ADM Logo" class="img-responsive first center-block">
	                            </div>
	                            <div class="col-md-9">
	                                <div class="container-fluid ">
	                                    <!-- INICIO - Separador - Sección de descarga PDF -->
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">001 - Factuación global de notas de venta con Aspel-ADM</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/001-Facturacion-global-de-notas-de-venta-con-Aspel-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">002 - Elaboración de una Nota de crédito en Aspel ADM</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/002-Elaboracion-de-una-nota-de-credito-en-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">003 - Emite CFDI con Aspel ADM</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/003-Emite-CFDI-con-Aspel-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">004 - Complementos CFDI con Aspel ADM</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/004-Complementos-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">005 - ¿Qué es Aspel ADM?</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/005-Definicion-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">007 - Contratación de Aspel ADM</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/007-Contratacion-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <div class="row row-download">
	                                        <div class="col-md-9">
	                                            <h4 class="title-h4">013 - Importación de CFDIs en Aspel ADM</h4>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <p><a href="/descargas/aspel/adm/adm/docs/013-Importacion-CFDIs-Aspel-ADM.pdf" target="_blank" title="Base de conocimiento ADM" class="fa fa-file-pdf-o fa-2x" style="text-decoration: none;"></a></p>
	                                        </div>
	                                    </div>
	                                    <!-- FIN - Separador - Sección de descarga PDF -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--TERMINA SECCIÓN ADM-->
	            </div>
	        </div>
	    </div>
	</div>
@endsection
@push('add-js')
	<script src="/js/hover-services.js"></script>
	<script src="/js/menu-donwload.js"></script>
	<script>
		$("body").attr('pagina', 'Soporte');
	</script>
@endpush