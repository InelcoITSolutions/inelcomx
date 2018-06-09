@extends('templates.principal')


@section('name_title','Consultoría | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

	@include('servicios.consultoria.banner-consultoria')

	<section class="descripcion-prod desc-consultoria secciones ">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8">
	                <h2>Comienza la operación de tus sistemas </h2>
	                <p>
	                	Implementamos tu nuevo sistema para que todos los procesos de tu empresa estén en orden. Con nuestro servicio de implementación tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu empresa.
	                </p>
	            </div>
	            <div class="col-md-4">
	                <img alt="#" class="img-responsive center-block" src="/images/products/sae/inelco-sae-logo.png" />
	            </div>
	        </div>
	    </div>
	</section>

	<section class="word-frase sections " id="frase-consultoria">
		<div class="fondo-gray">
			<div class="container">
				<h2>El éxito necesita administrarse</h2>
			</div>
		</div>
	</section>

{{-- 	<section class="ac_content " id="mas">
		<div class="ac_content-wrapper notpadding ">
			<div class="ac_cols-wrapper cf" id="tour">
				<div class="ac_col twelve nopadding secciones">
					<h2 class="title-h2">Te presentamos a Aspel SAE</h2>
					<h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
				</div>
			</div>
			<div class="ac_home-tour">
				<!--<div class="tour-caption">
						<div class="title">Imagen 1</div>
						<p>A complete overview of your marketing, automation, & sales.</p>
					</div>-->
				<div id="tour-slides">
					<img src="/images/products/sae/inelco-sae-inventario-y-servicios-HD.png" id="1" width="88.5%" alt="Mejor control del inventario|Manejo y control del inventario con fotografías y claves de identificación por producto, servicio, kit y/o grupo de productos." />
					<img src="/images/products/sae/inelco-sae-existencia_costos-HD.png" id="2" width="88.5%" alt="Obten un control de costos|Manejo de costos: Estándar, PEPS, Promedio e Identificado. que permite tener un control de productividad." />
					<img src="/images/products/sae/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" id="3" width="88.5%" alt="Eficaz seguimiento del cliente|Realiza un manejo de diferentes características con los datos generales, lista de precios y vendedor asignado. Días y límite de crédito." />
					<img src="/images/products/sae/inelco-sae-facturas-vendedores-HD.png" id="4" width="88.5%" alt="Factura Electrónica 100% segura|Emite CFDI cumpliendo con todos los requisitos fiscales. Envío automático de PDF y XML por correo electrónico." />
					<img src="/images/products/sae/inelco-sae-compras-HD.png" id="5" width="88.5%" alt="Dinamismo en tus compras|Manejo de requisición, orden de compra, recepción de mercancía, compras y devoluciones, cada uno de ellos con la respectiva afectación a inventarios y cuentas por pagar." />
				</div>
			</div>
		</div>
	</section>  --}}

<div id="mas" style="padding-top: 12px">
	<hr id="lap-separator">
	<section class="secciones" id="texto-img" style="margin-top:92px;">
		<div class="container">
			<div class="row">
				<div class="tour-caption">
					<div class="title">Mejor control del inventario</div>
					<p>
						Manejo y control del inventario con fotografías y claves de identificación por producto, servicio, kit y/o grupo de productos.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="caracteristicas-prod secciones" style="margin-top:-64px;">
		<div class="container">
			<h2 align="center">La plataforma te ofrece</h2>
			<div class="row">
				<div class="col-md-4">
					<center>
						<img alt="control de tu empresa" src="/images/products/sae/inelco-aspel-sae-control-de-tu-empresa.png" />
					</center>
					<h3 class="text-center">Control total de tu empresa</h3>
					<p>
						El ciclo de compra-venta está cubierto totalmente, desde el registro del producto hasta la Factura Electrónica, lista para ser entregada al cliente.</p>
				</div>
				<div class="col-md-4">
					<center>
						<img alt="contabilidad electrónica" src="/images/products/sae/inelco-aspel-coi-cont-electronica.png" />
					</center>
					<h3 class="text-center">Contabilidad electrónica más fácil</h3>
					<p>
						Cumple fácilmente los requisitos de la Contabilidad Electrónica, al realizar la interfaz con Aspel-COI, en las pólizas de ventas y compras, automáticamente se relacionan los folios fiscales de los CFDI. ¡Trabaja menos con las interfaces Aspel!</p>
				</div>
				<div class="col-md-4">
					<center>
						<img alt="conoce cliente" src="/images/products/sae/inelco-aspel-sae-conoce-cliente.png" />
					</center>
					<h3 class="text-center">Conoce mejor a tu cliente</h3>
					<p>
						En una sola sección tendrás los saldos, pedidos pendientes, productos apartados, estados de cuenta, antigüedad de saldos, productos más vendidos, ventas mensuales y citas programadas, para un seguimiento sencillo.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<center>
						<img alt="administracion del punto de venta" src="/images/products/sae/inelco-aspel-sae-administracion-del-punto-de-venta.png" />
					</center>
					<h3 class="text-center">Administración como punto de venta</h3>
					<p>
						Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web.</p>
				</div>
				<div class="col-md-4">
					<center>
						<img alt="app sae-movil" src="/images/products/sae/inelco-aspel-sae-app-sae-movil.png" />
					</center>
					<h3 class="text-center">Aplicación SAE Móvil</h3>
					<p>
						Levanta pedidos, da de alta clientes, consulta los inventarios y sus existencias, en el momento y en el lugar en el que te encuentres, a través de un cliente web y/o dispositivos móviles. ¡Y actualiza automáticamente Aspel-SAE 6.0 en línea!</p>
				</div>
				<div class="col-md-4">
					<center>
						<img alt="sae interfaces" src="/images/products/sae/inelco-aspel-productos-sae-interfaces.png" />
					</center>
					<h3 class="text-center">Interfaces Sistemas Aspel</h3>
					<p>
						Aspel-SAE 6.0 tiene interfaz con los Sistemas: Aspel-COI, Aspel-BANCO, Aspel-PROD y Aspel-CAJA. Aprovecha todas las interfaces y haz mejores negocios.</p>
				</div>
			</div>
		</div>
		<h3 style="color:#BF273E" class="text-center">Todas las funciones para Administrar, Controlar y Crecer tu Pyme</h3>
		<a href="{{url('contacto')}}" style="text-decoration: none">
			<button id="btn-consultoria-prob1" class="btn btn-inelco btn-lg center-block">Lo quiero</button>
		</a>
	</section>
</div>
  
@endsection

@push('add-js')   
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Servicios');
    </script>   
@endpush