@extends('templates.principal')


@section('name_title','COI | Inelco IT Solutions')

@push('add-css')
	<link href="/css/products-styles.css" rel="stylesheet">
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('contenido')

	@include('aspel.coi.banner-coi')
	
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
{{-- 	                <div class="modal-footer">
	                    <div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-3">
	                        <a class="btn btn-inelco" href="https://inelco.mx/promociones" target="_blank">Ver promoción</a>
	                    </div>
	                </div> --}}
	            </div>
	        </div>
	    </div>

	<section class="descripcion-prod coi-pages secciones " >
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>
						Manten bajo control la información contable y fiscal de la empresa.
					</h2>
					<p>
						<span style="font-weight: 400">
							Aspel COI
						</span>
						Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable. Cumple con las diferentes especificaciones y funciones para el manejo de la Contabilidad Electrónica 1.3, de acuerdo con las disposiciones fiscales vigentes. Además, proporciona diversos reportes, documentos y gráficas que permiten evaluar el estado financiero de la organización.
					</p>
					<p>
						Genera oportunamente las diferentes declaraciones fiscales como las correspondientes a IVA, ISR y DIOT. Mantiene interfaz con los Sistemas Aspel y hojas de cálculo.
					</p>
				</div>
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img src="/images-new/marcas/aspel/productos/coi/logos/inelco-aspel-coi-logo.png" alt="Aspel COI Logo" class="img-responsive first">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="word-frase sections " id="frase-coi">
		<div class="fondo-gray">
			<div class="container">
				<h2>
					El brazo derecho del Contador
				</h2>
			</div>
		</div>
	</section>

	<section class="ac_content coi-pages laptop-coi" id="mas">
		<div class="ac_content-wrapper notpadding ">
			<div class="ac_cols-wrapper cf" id="tour">
				<div class="ac_col twelve nopadding secciones">
					<h2 class="title-h2">Te presentamos a Aspel COI</h2>
					<h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
				</div>
			</div>
			<div class="ac_home-tour">
				<!--<div class="tour-caption">
						<div class="title">Imagen 1</div>
						<p>A complete overview of your marketing, automation, & sales.</p>
					</div>-->
				<div id="tour-slides">
					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-soluciones-catalogo-cuentas.png" id="1" alt="Catálogo de cuentas rápido y fácil de usar|Ofrece 9 catálogos de cuentas predefinidos con el cual se puede actualizar la información contable y fiscal."/>

					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-soluciones-departamentos-centro-costos.png" id="2" alt="Logra tener una certeza financiera|Con COI logra Registra hasta 999 departamentos para controlar gastos, ingresos y presupuestos." />

					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-soluciones-captura-polizas.png" id="3" alt="Realiza pólizas de una manera más rapida| Solo copia y pega información a partir de otras pólizas. Sin capturar puedes crear automáticamente las pólizas a partir de un CFDI. logrando optimizar el tiempo."/>

					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-soluciones-iva-y-diot.png" id="4" alt="Fácil control del IVA y DIOT|Genera una bitácora de ingresos efectivamente cobrados y egresos efectivamente pagados. Cálculo y desglose del IVA relacionado a los movimientos y su retención."/>

					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-soluciones-multimoneda.png" id="5" alt="Optimiza el manejo de la multimoneda|Con el control de saldos de las cuentas contables y activos en moneda extranjera. Estados financieros en dólares."/>

					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-mas-soluciones-reportes.png" id="6" alt="Genera tus balanzas de comprobación sin tanto esfuerzo|Realiza consultas, reportes y hojas de cálculo incluso puedes generar balanzas de comprobación acumulada de más de un periodo o por departamentos."/>

					<img src="/images-new/marcas/aspel/productos/coi/otros/inelco-aspel-coi-soluciones-interfaz-excel.png" id="7" alt="Eficiente interfaz con Microsoft Excel®|Toda la información contable disponible en Microsoft Excel® tales como: estado de resultados, balance general."/>
				</div>
			</div>
		</div>
	</section>

	<hr id="lap-separator"/>
	<section class="secciones coi-pages" id="texto-img">
		<div class="container">
			<div class="row">
				<div class="tour-caption">
					<div class="title">Catálogo rápido y fácil de usar</div>
					<p>Ofrece 9 catálogos de cuentas predefinidos con el cual se puede actualizar la información contable y fiscal.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="caracteristicas-prod secciones coi-pages">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img alt="inelco-aspel-coi-mantiene-la-contabilidad-al-dia" src="/images/products/coi/inelco-aspel-coi-mantiene-la-contabilidad-al-dia.png"/>
					</div>
					<h3 class="text-center">
						Contabilidad actualizada
					</h3>
					<p>
						Mantiene la contabilidad al día mediante la automatización en el registro contable.
					</p>
				</div>
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img alt="contabilidad electrónica" src="/images/products/coi/inelco-aspel-coi-conoce-la-situacion-financiera.png"/>
					</div>
					<h3 class="text-center">
						Estatus financiero en tiempo real
					</h3>
					<p>
						Conoce en cualquier momento la situación financiera de tu empresa por medio de las diferentes consultas y reportes que el Sistema ofrece automáticamente.
					</p>
				</div>
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img alt="inelco-aspel-coi-contabilidad-electronica" src="/images/products/coi/inelco-aspel-coi-contabilidad-electronica.png"/>
					</div>
					<h3 class="text-center">
						Contabilidad Electrónica
					</h3>
					<p>
						Cumple con las nuevas disposiciones fiscales para el manejo de la Contabilidad Electrónica de la manera más simple.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img alt="inelco-aspel-coi-gastos-impuestos-presupuestos" src="/images/products/coi/inelco-aspel-coi-gastos-impuestos-presupuestos.png"/>
					</div>
					<h3 class="text-center">
						Riguroso control de los recursos
					</h3>
					<p>
						Controla los gastos, ingresos y presupuestos de cada entidad, en diferentes monedas, permitiendo también un riguroso y eficaz control de los recursos.
					</p>
				</div>
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img alt="inelco-aspel-coi-declaraciones-fiscales" src="/images/products/coi/inelco-aspel-coi-declaraciones-fiscales.png"/>
					</div>
					<h3 class="text-center">
						Declaraciones fiscales e informativas
					</h3>
					<p>
						Crea las Declaraciones de tu empresa de manera más fácil y en cualquier momento
					</p>
				</div>
				<div class="col-md-4">
					<div class="center-img text-center center-block">
						<img alt="inelco-aspel-coi-integracion" src="/images/products/coi/inelco-aspel-coi-integracion.png"/>
					</div>
					<h3 class="text-center">
						Integración de los procesos de la empresa
					</h3>
					<p>
						Intercambia información con los Sistemas: Aspel-SAE, Aspel-NOI, Aspel-CAJA y Aspel-BANCO.
					</p>
				</div>
			</div>

		</div>
	{{--<h3 class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>
		<span style="display:block"><span>
		<span style="display:block"><span>
		<a href="{{url('contacto')}}" style="text-decoration: none" >
			<button id="btn-coi-prob1" class="btn  btn-lg center-block">
				Lo quiero
			</button>
		</a> --}}
</section>


{{-- Sección de comprar Aspel coi --}}
<div id="contratar-coi"></div>
    <section class="word-frase sections " id="frase-coi">
        <div class="fondo-gray" style="padding-bottom: 5%;padding-top: 5%;">
            <div class="container">
                <h2>
                    <span style="font-weight: bold">¿Aún no tienes Aspel COI 8.0?</span>
                    <span style="display:block;"></span>
                    ¡Consiguelo ya!
                </h2>
            </div>
        </div>
    </section>
    <span style="display:block;margin-top: 52px"></span>
    <section>
        <div class="container">
            <h3 class="title-h3" style="color:#03aebd;">El nuevo Aspel COI 8.0 está disponible en 
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
                <h4> <span style="font-weight: 400"> ¿No deseas comprar el nuevo Aspel COI 8.0?</span></h4>
                <p> ¡Úsalo por el tiempo que lo necesites! </p>
                <h3><span style="font-weight: 400">Suscripción Mensual</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-coi">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof preci">317 </span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel COI 8.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <br>
                    <span style="display:block;"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a href="#ventana1"> 
                    <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/84CuOB" target="_blank"><button type="button" class="btn btn-lg " id="btn-coi">Adquirir ahora</button></a>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-star-o fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿Deseas obtenerlo de manera permanente? </span></h4>
                <p> ¡Adquiére hoy la licencia nueva! </p>
                <h3><span style="font-weight: 400">Licencia permante</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-coi">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">5,507</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia de Aspel COI 8.0 </h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <span style="display:block;"></span>
                    <span style="display:block;margin-top: 12%"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/YWCuvT" target="_blank">
                    <button type="button" class="btn btn-lg" id="btn-coi">Adquirir ahora</button>
                </a>
            </div>
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-refresh fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400"> ¿Cuentas con alguna versión anterior? </span></h4>
                <p> ¡Actualizate ahora! </p>
                <h3><span style="font-weight: 400">Actualización</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-coi">
                    <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">3,305</span>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel COI 8.0 </h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;1 usuario</h5>
                    <span style="display:block;"></span>
                    <span style="display:block;margin-top: 12%"></span>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/nCCu7c" target="_blank">
                    <button class="btn btn-lg " data-toggle="modal" id="btn-coi">Adquirir ahora</button>
                </a>
            </div>
        </div>
    </section>
    <span style="display:block;margin-bottom: 92px"></span>
	
	@include('aspel.coi.menu-coi')	

	

@endsection

@push('add-js')
	<script src="/js/jquery.slides.js"></script>
	<script src="/js/home.js"></script>
	<script src="/js/global.js"></script>
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
