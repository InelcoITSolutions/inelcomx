@extends('templates.principal')
@section('name_title','Inelco IT Solutions')
@push('add-css')
	<link rel="canonical" href="https://inelco.mx/">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" href="/css/normalize.css"> --}}
	<link rel="stylesheet" href="/css/banner-styles.css">
	<link rel="stylesheet" href="/css/icon-hover.css">
	<link rel="stylesheet" href="/css/my-tabs.css">
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">

@endpush

@section('contenido')
	
	{{-- AQUÍ DEBE IR EL POP UP --}}

	<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="9000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
			<li data-target="#bootstrap-touch-slider" data-slide-to="4"></li>
		</ol>
		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">
			<!-- Third Slide -->
			<div class="item active">
				<!-- Slide Background -->
				<img src="../images/banner/Inelco-bannerp3.png" />
				<div class="bs-slider-overlay"></div>
				<div class="container">
					<div class="row">
						<!-- Slide Text Layer -->
						<div class="slide-text slide_style_left">
							<h1 class="title-h1" data-animation="animated zoomInRight">Soluciones de tecnología y<span style = "display: block;"></span> consultoría para tu empresa</h1>
							<span style="display: block;"></span>
							<a href="#mas" class="btn btn-default" data-animation="animated fadeInLeft">Ver Soluciones</a>
							<a href="{{ url('/nosotros') }}" class="btn btn-primary" data-animation="animated fadeInRight">Conócenos</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Slide -->
			<!-- Second Slide -->
			<div class="item">
				<!-- Slide Background -->
				<img src="../images/banner/aspelsoluciones-coi-banner.png" />
				<div class="bs-slider-overlay"></div>
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_right">
					<h2 class="title-h1" data-animation="animated zoomInRight">Descubre el nuevo <span style = "display: block;"></span>Aspel COI 8.0</h2>
					<p data-animation="animated fadeInLeft">El Sistema de Administración Contable más usado del país.</p>
					<a href="https://www.aspelsoluciones.com/actualizacion-coi" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Actualización</a>
					<a href="{{url('aspel-coi/lo-nuevo')}}" class="btn btn-primary" data-animation="animated fadeInRight">Lo nuevo</a>
				</div>
			</div>
			<!-- End of Slide -->
			<!-- Third Slide -->
			<div class="item">
				<!-- Slide Background -->
				<img src="../images/banner/inelco-fondo-banner.png" alt="Bootstrap Touch Slider" class="slide-image" />
				<div class="bs-slider-overlay"></div>
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_right">
					<h2 class="title-h1" data-animation="animated zoomInLeft">Descubre el nuevo <span style = "display: block;"></span> Aspel SAE 7.0</h2>
					<p data-animation="animated fadeInRight">El sistema Administrativo Empresarial más utilizado en México.</p>
					<a href="https://www.aspelsoluciones.com/actualizacion-sae" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Actualización</a>
					<a href="{{url('aspel-sae/lo-nuevo')}}" class="btn btn-primary" data-animation="animated fadeInRight">Lo nuevo</a>
				</div>
			</div>
			<!-- End of Slide -->
			<!-- Fourth Slide -->
			<div class="item">
				<!-- Slide Background -->
				<img src="../images/banner/Inelco-softrestaurant-banner-modo-operacion.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
				<div class="bs-slider-overlay"></div>
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_left">
					<h2 class="title-h1" data-animation="animated zoomInLeft">Nueva versión <span style = "display: block;"></span> Soft Restaurant 9.5</h2>
					<p data-animation="animated fadeInRight">Nuevas funciones de seguridad y con CFDI 3.3. </p>
					<a href="{{url('national-soft/soft-restaurant/lo-nuevo')}}" class="btn btn-primary" data-animation="animated fadeInRight">Lo nuevo</a>
				</div>
			</div>
			<!-- End of Slide -->
			<!-- quinto Slide -->
			<div class="item">
				<!-- Slide Background -->
				<img src="/images/banner/inelco-banner-facture.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
				<div class="bs-slider-overlay"></div>
				<!-- Slide Text Layer -->
				<div class="slide-text slide_style_right">
					<h2 class="title-h1" data-animation="animated zoomInLeft">Nuevo y práctico <span style = "display: block;"></span> Facture 4.0</h2>
					<p data-animation="animated fadeInRight">Genera fácilmente tus comprobantes fiscales digitales.</p>
					<a href="https://www.aspelsoluciones.com/actualizacion-facture" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Actualización</a>
					<a href="{{url('aspel-facture/lo-nuevo')}}" class="btn btn-primary" data-animation="animated fadeInRight">Lo nuevo</a>
				</div>
			</div>
			<!-- End of Slide -->
		</div>
		<!-- End of Wrapper For Slides -->
		<!-- Left Control -->
		<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
		  <i class="fa fa-chevron-left" aria-hidden="true"></i>
			<span class="sr-only">Previous</span>
		</a>
		<!-- Right Control -->
		<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
			<i class="fa fa-chevron-right" aria-hidden="true"></i>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- End  bootstrap-touch-slider Slider -->
	{{-- empieza el cuerpo de la pagina --}}
	{{-- Apártado de los servicios de que ofrecen inelco --}}
	<section id="services" class="section">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Tenemos más de una <span style="font-weight: 600;">solución</span> para tu <span style="font-weight: 600;">empresa</span></h2>
				<hr data-wow-delay="0.3s">
				<p class=" fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Te ofrecemos una variedad de soluciones que optimizarán el desempeño de tu empresa mediante el uso de la tecnología y nuestros servicios de calidad premium.</p>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<a href="#Software" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
							<div class="icon">
								<i class="fa fa-laptop fa-2x" aria-hidden="true"></i>
							</div>
							<h3 class="title-h3">Software Administrativo</h3>
							<p>Te ofrecemos sólo las mejores opciones para administrar tu empresa. Descubre hoy mismo las soluciones que tenemos para ti.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#servicios" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
							<div class="icon">
								<i class="fa fa-certificate" aria-hidden="true"></i>
							</div>
							<h3 class="title-h3">Servicios Premium</h3>
							<p>Con más de 20 años de experiencia, nos encargamos de brindarte los servicios que tu empresa necesita para crecer.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#hardware" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
							<div class="icon">
								<i class="fa fa-desktop" aria-hidden="true"></i>
							</div>
							<h3 class="title-h3">Hardware</h3>
							<p>Encuentra aquí mismo todo lo que puedas necesitar para echar a andar tú negocio o para ponerlo a la vanguardia.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	{{--
	<!-- Services Section Start -->
	<section id="services" class="section">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Soluciones <span>por actividad</span></h2>
				<hr data-wow-delay="0.3s">
				<p class=" fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Elige el giro de tu empresa y conoce los sistemas y las soluciones que tenemos para ella.</p>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<a href="{{ url('/empresas-comercializadora') }}" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
							<div class="icon">
								<i class="fa fa-area-chart" aria-hidden="true"></i>
							</div>
							<h3 class="title-h3">Empresas comercializadoras</h3>
							<p>Contamos con los mejores sistemas Administrativos para este giro de empresas, conocelos. </p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="{{url('/instituciones-educativas')}}" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
							<div class="icon">
								<i aria-hidden="true" class="fa fa-graduation-cap"></i>
							</div>
							<h3 class="title-h3">Instituciones Educativas</h3>
							<p>Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.</p>
						</div>
				</div>
				</a>
				<div class="col-md-4 col-sm-6">
					<a href="{{url('/despachos-contables')}}" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
							<div class="icon">
								<i aria-hidden="true" class="fa fa-pie-chart"></i>
							</div>
							<h3 class="title-h3">Despachos Contables</h3>
							<p> Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.</p>
						</div>
				</div>
				</a>
				<div class="col-md-4 col-sm-6">
					<a href="{{ url('/facturacion') }}" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
							<div class="icon">
								<i aria-hidden="true" class="fa fa-mouse-pointer"></i>
							</div>
							<h3 class="title-h3">Facturación Electrónica</h3>
							<p> Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.</p>
						</div>
				</div>
				</a>
				<div class="col-md-4 col-sm-6">
					<a href="{{ url('/empresas-manofactura') }}" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="1s">
							<div class="icon">
								<i aria-hidden="true" class="fa fa-cog"></i>
							</div>
							<h3 class="title-h3">Empresa de Manofactura</h3>
							<p>Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.</p>
						</div>
				</div>
				</a>
				<div class="col-md-4 col-sm-6">
					<a href="{{url('/punto-de-venta')}}" style="text-decoration: none">
						<div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
							<div class="icon">
								<i aria-hidden="true" class="fa fa-credit-card"></i>
							</div>
							<h3 class="title-h3">Punto de Venta</h3>
							<p>Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.</p>
						</div>
				</div>
				</a>
			</div>
		</div>
	</section>
	<!-- Services Section End -->--}} {{--
	<section id="soluciones" class="secciones">
		<div class="container">
			<h2 class="title-h2">Tenemos más de una <b>solución</b> para tu <b>empresa</b></h2>
			<div class="about-grids">
				<div class="about-grid1 grid">
					<div class="col-md-8 col-sm-8 col-xs-8 about-text">
						<a href="#productos-tab"><h3 class="title-h3">Software Administrativo</h3></a>
						<p>Te ofrecemos sólo las mejores opciones para administrar tu empresa. Descubre hoy mismo las soluciones que tenemos para ti. </p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 aimg aboutimage">
						<a href="#mas"><img src="/images/radius1.png" alt=" " /></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="about-grid2 grid">
					<div class="col-md-4 col-sm-4 col-xs-4 aimg aboutimage">
						<a href="#mas2"> <img src="/images/radius2.png" alt=" " /></a>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8 about-text about-text2">
						<a data-toggle="tab" href="#servicios-tab"><h3 class="title-h3">Servicios Premium</h3></a>
						<p>Con más de 20 años de experiencia, nosotros nos encargamos de brindarte los servicios que tu empresa necesita para crecer.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="about-grid3 grid">
					<div class="col-md-8 col-sm-8 col-xs-8 about-text">
						<a data-toggle="tab" href="#hardware-tab"><h3 class="title-h3">Hardware</h3></a>
						<p>Encuentra aquí mismo todo lo que puedas necesitar para echar a andar tú negocio o para ponerlo a la vanguardia.</p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 aboutimage">
						<a data-toggle="tab" href="#hardware-tab"><img src="/images/radius3.png" alt=" " /></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>--}}
	<section class="word-frase sections" id="mas">
		<div class="fondo-gray">
			<div class="container">
				<div class="wow bounceInDown" data-wow-delay="0.2s">
					<h2 class="title-h2">Soluciones que optimizan procesos e impulsan el crecimiento de tu empresa.</h2>
				</div>
			</div>
		</div>
	</section>
	<div id="Software">
		<section id="inicio-categorias" class="secciones">
			<div class="container">
				<div class="row gray-img">
					<div class="col-md-12">
						<h2>Tenemos sólo los mejores sistemas de las siguientes marcas para administrar tu empresa.</h2>
						<p style="text-align: center;">Automatizamos las pequeñas y medianas empresas, profesionistas y emprendedores, con los mejores sistemas y servicios en Internet.</p>
						<span style="display: block;"></span>
						<span style="display: block;"></span>
					</div>
					<div class="row gray-img">
						<a style="text-decoration: none" href="{{ url('aspel') }}">
							<div class="col-md-4" id="inelco-aspel">
								<div class="col-md-12">
									<img src="/images/products/inelco-aspel-logo.png" alt="Logo Aspel" class="img-responsive first">
								</div>
								<div class="col-md-12">
									<p style="text-align:justify;">Es una empresa 100% mexicana líder en el mercado de software y soluciones administrativas.
										<span style="display: block;"></span> Automatiza los procesos de las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva.</p>
								</div>
							</div>
						</a>
						<a style="text-decoration: none" href="{{ url('national-soft') }}">
							<div class="col-md-4" id="inelco-aspel">
								<div class="col-md-12">
									<img src="/images/Inelco-logo-ns.png" alt="Logo National Soft" class="img-responsive first">
								</div>
								<div class="col-md-12">
									<p style="text-align:justify;">Ofrecemos a nuestros clientes y socios, distintos tipos de productos y servicios para la adopción de los negocios MiPyMes.
										<span style="display: block;"></span> Tenemos sistemas especializado para restaurantes, control de asistencia por huella digital, para hoteles, facturacion electrónica en línea. </p>
								</div>
							</div>
						</a>
						<a style="text-decoration: none" href="{{ url('incrementacrm') }}">
							<div class="col-md-4" id="inelco-aspel">
								<div class="col-md-12">
									<img src="/images/products/icrm/inelco-incrementa-logo.png" alt="Logo Incrementa" class="img-responsive first">
								</div>
								<div class="col-md-12">
									<p style="text-align:justify;">El sistema que te facilita todo: haz cotizaciones, dale seguimiento a tus clientes, organiza tus campañas, envía mailings y lleva un control preciso de todas tus acciones para que tus prospectos se conviertan en clientes. Incrementa es mucho más que un CRM.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="row gray-img">
						<a style="text-decoration: none" href="https://www.zoho.com/" target="_blank">
							<div class="col-md-4" id="inelco-aspel">
								<div class="col-md-12">
									<img src="/images/products/Zoho/inelco-logo-zoho.png" alt="Logo Logo Zoho" class="img-responsive first">
								</div>
								<div class="col-md-12">
									<p style="text-align:justify;">Zoho tiene todo lo necesario para aumentar las ventas, aumentar la productividad y gestionar todas las actividades del día a día. Entre sus aplicaciones destacadas estan CRM, Mail, Libros, Creador de aplicaciones, Mesa de ayuda para el contexto.</p>
								</div>
							</div>
						</a>
						<a style="text-decoration: none" href="http://tractosoft.com/" target="_blank">
							<div class="col-md-4" id="inelco-aspel">
								<div class="col-md-12">
									<img src="/images/products/tracksoft/inelco-logo-tracksoft.png" alt="Logo Tracksoft" class="img-responsive first">
								</div>
								<div class="col-md-12">
									<p style="text-align:justify;">Te ofrecemos la solución perfecta para la administración de tu empresa de Transporte o Paquetería y tener el control de todos tus movimientos, cuando quieras y en donde quieras. Al adquirirlo obtienes todos los módulos que componen nuestro software.</p>
								</div>
							</div>
						</a>
						<a style="text-decoration: none" href="http://boxmecanic.com/" target="_blank">
							<div class="col-md-4" id="inelco-aspel">
								<div class="col-md-12">
									<img src="/images/products/boxmecanic/inelco-logo-boxmecanic.png" alt="Logo BoxMecanic" class="img-responsive first">
								</div>
								<div class="col-md-12">
									<p style="text-align:justify;">Software para talleres mecánicos y de reparación automotriz en general. Administra y controla tú taller mecánico con cotizaciones, órdenes de servicio de cada vehículo o flotilla de vehículos, historial de clientes y más.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	{{-- apartado de los servicios de inelco --}}
	<!-- Features Section Start -->
	<div id="servicios">
		<section id="features" class="section sections" data-stellar-background-ratio="0.2">
			<div class="container">
				<div class="section-header">
					<h2 class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
				 La correcta funcionalidad de tu empresa con nuestros servicios de calidad premium.</h2>
					<p class=" wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Brindando soluciones, asesorias y soporte con adquisición de nuestros servicios y sistemas.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="content-left text-right wow fadeInLeft animated" data-wow-offset="10">
							<a style="text-decoration:none" href="{{ url('/servicios#implementacion')}}">
								<div class="box-item left">
									<span class="icon">
								<i class="icon-install"></i>
							</span>
									<div class="text">
										<h4>Implementación</h4>
										<p>Realizamos la instalación de los sistema que solicites o adquieras con nosotros. </p>
									</div>
								</div>
							</a>
							<a style="text-decoration:none" href="{{ url('/servicios#asesoria')}}">
								<div class="box-item left">
									<span class="icon">
								<i class="icon-chat"></i>
							</span>
									<div class="text">
										<h4>Asesoria </h4>
										<p>Te asesoramos en múltiples plataformas para que aproveches al máximo tu Sistema.</p>
									</div>
								</div>
							</a>
							<a style="text-decoration:none" href="{{ url('/servicios#consultoria')}}">
								<div class="box-item left">
									<span class="icon">
								<i class="icon-open-book"></i>
							</span>
									<div class="text">
										<h4>Consultoria </h4>
										<p>Te enseñamos a como mejorar la productividad de tu empresa. </p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="show-box wow fadeInDown animated" data-wow-offset="10">
							<img src="images/iis_logo_azul.png" alt="Logotipo Inelco" style="margin-top: 10%; margin-bottom: 10%">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
							<a style="text-decoration:none" href="{{ url('/servicios#capacitacion')}}">
								<div class="box-item right">
									<span class="icon">
								<i class="icon-blackboard"></i>
							</span>
									<div class="text">
										<h4>Capacitación </h4>
										<p>Si ya cuentas con un sistemas. Ven, nosotros te enseñamos a usarlo. </p>
									</div>
								</div>
							</a>
							<a style="text-decoration:none" href="{{ url('/servicios#soporte')}}">
								<div class="box-item right">
									<span class="icon">
								<i class="icon-lifebuoy"></i>
							</span>
									<div class="text">
										<h4>Soporte </h4>
										<p>¿Tienes dudas?. Contamos con personal de soporte especializado.</p>
									</div>
								</div>
							</a>
							<a style="text-decoration:none" href="{{ url('/contacto') }}">
								<div class="box-item right">
									<span class="icon">
							  <i class="icon-add-to-list"></i>
							</span>
									<div class="text">
										<h4>¡Y muchos más!</h4>
										<p>Contáctanos para obtener más información.</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="sections inicio-promocion">
		<div class="fondo-gray">
			<div class="container">
				<div class="wow bounceInDown" data-wow-delay="0.2s">
					<h2 class="title-h2">
						Aprovecha las promociones que tenemos para ti.
					</h2>
					<a href="{{ url('/promociones') }}" class="btn btn-promocion btn-lg center-block" role="button">
                        Conocer promociones
                    </a>
				</div>
			</div>
		</div>
	</section>

	<!-- Features Section End -->
	<div id="hardware">
		<section class="secciones">
			<div id="hardware-tab" class="tab-pane">
				<div class="container ">
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 24px;">
							<h2>Tenemos el hadware necesario para implementar los sistemas que necesarios.</h2>
							<p style="text-align: center;">Nuestro equipo de trabajo especializado te apoyará.</p>
						</div>
						<div class="col-md-6 gray-img">
							<a href="#"><img src="/images-new/inelco/iconos/punto-venta.png" alt="Icono punto de venta" class="img-responsive center-block"></a>
							<h3 class="text-center"><a href="#">Equipo de punto de venta</a></h3>
							<p>Con nuestro servicio de implementación tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu restaurante</p>
						</div>
						<div class="col-md-6 gray-img">
							<a href="#"><img src="/images-new/inelco/iconos/energia.png" alt="Icono energía" class="img-responsive center-block"></a>
							<h3 class="text-center"><a href="#">Energía y regulación</a></h3>
							<p>Obtén acceso al mejor servicio de soporte con tu póliza y despreocúpate de cualquier problema técnico</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 gray-img">
							<a href="#"><img src="/images-new/inelco/iconos/redes.png" alt="Icono de redes" class="img-responsive center-block"></a>
							<h3 class="text-center"><a href="#">Redes y comunicaciones</a></h3>
							<p>Te capacitamos en distintas áreas para que puedas mejorar los procesos de tu empresa y utilizar las herramientas que te ofrecemos correctamente</p>
						</div>
						<div class="col-md-6 gray-img">
							<a href="#"><img src="/images-new/inelco/iconos/equipo-computo.png" alt="Icono equipo de computo" class="img-responsive center-block"></a>
							<h3 class="text-center"><a href="#">Equipo de cómputo</a></h3>
							<p>Con nuestro servicio de asesoría no caminarás sólo. Estaremos contigo aclarando tus dudas y ayudándote a resolver problemas</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section id="contactar">
	    <div class="container">
	        <div class="row gray-img">
	            <div class="col-md-12">
	                <div class="section-header">
	                    <h2 class="section-title">
	                    	¿Tienes algún problema o necesitas hablar con nosotros?
							<span>¡Contáctanos!</span>
						</h2>
	                    <p style="text-align: center;">Nuestro equipo te apoyará en lo que necesites.</p>
	                </div>
	            </div>
	            <div class="col-md-4 col-md-offset-4">
	                {{-- <a href="{{ url('centro-de-descarga') }}" title="Ir al centro de descargas">
						<button class="btn btn-primary btn-lg btn-inelco center-block" style="width:50%;margin-bottom:5%;">Descargas</button>
					</a> --}}
	                <a href="{{ url('/contacto') }}" class="btn btn-inelco-secundario btn-lg center-block" role="button">
	                	Contactar
                    </a>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- <section class="secciones">
			<video autoplay="autoplay" loop="loop" preload="auto" volume="50"/>
				<source src="/video/abstract.mp4" type="video/mp4" />
			</video/>
		</section> -->

	{{--
	<section id="inicio-categorias">
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#productos-tab" class="icon-briefcase2"><span>Software</span></a></li>
				<li><a data-toggle="tab" href="#servicios-tab" class="icon-trophy"><span>Servicios</span></a></li>
				<li><a data-toggle="tab" href="#hardware-tab" class="icon-laptop2"><span>Hardware</span></a></li>
				<li><a data-toggle="tab" href="#soluciones-giro-tab" class="icon-office"><span>Soluciones por giro</span></a></li>
			</ul>
			<div class="tab-content">
				<div id="productos-tab" class="tab-pane fade in active">
					<div class="container">
						<div class="row gray-img">
							<div class="col-md-12">
								<img src="/images/products/inelco-aspel-logo.png" alt="Aspel" class="img-responsive first">
								<div class="container-fluid rows-aspel">
									<div class="row">
										<div class="col-md-1 col-xs-3 col-md-offset-1">
											<a href="{{url('aspel-sae')}}"><img src="/images/products/sae/inelco-sae-logo.png" alt="Aspel SAE" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-coi')}}"><img src="/images/products/inelco-coi-logo.png" alt="Aspel COI" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-banco')}}"><img src="/images/products/inelco-banco-logo.png" alt="Aspel BANCO" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-noi')}}"><img src="/images/products/inelco-noi-logo.png" alt="Aspel NOI" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-prod')}}"><img src="/images/products/inelco-prod-logo.png" alt="Aspel PROD" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-caja')}}"><img src="/images/products/inelco-caja-logo.png" alt="Aspel CAJA" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-facture')}}"><img src="/images/products/inelco-facture-logo.png" alt="Aspel FACTURE" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3 ">
											<a href="{{url('aspel-adm')}}"><img src="/images/products/adm/aspel-producto-adm.png" alt="Aspel ADM" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-saenube')}}"><img src="/images/products/saenube/Inelco-sae-por-internet.png" alt="Aspel ADM" class="img-responsive"></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-espacio')}}"><img src="/images/products/espacio/inelco-aspel-espacio-logo.png" alt="Aspel SAE" class="img-responsive" ></a>
										</div>
										<div class="col-md-1 col-xs-3">
											<a href="{{url('aspel-admtienda')}}"><img src="/images/products/ADMTienda/Inelco-aspel-adm-tienda-logo-copia.png" alt="Aspel SAE" class="img-responsive" ></a>
										</div>
									</div>
									<div class="row">
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row gray-img">
							<div class="col-md-12">
								<img src="/images/Inelco-logo-ns.png" alt="National Soft" class="img-responsive first">
								<div class="container-fluid rows-aspel">
									<div class="row">
										<div class="col-md-2 col-xs-6 col-md-offset-2">
											<a href="{{url('national-soft/soft-restaurant')}}"><img src="/images/products/sr/softrestaurant.png" alt="NS Soft Restaurant" class="img-responsive"></a>
										</div>
										<div class="col-md-2 col-xs-6">
											<a href="{{url('national-soft/on-the-minute')}}"><img src="/images/products/otm/ontheminute.png" alt="NS On The Minute" class="img-responsive"></a>
										</div>
										<div class="col-md-2 col-xs-6">
											<a href="{{url('national-soft/soft-facturas')}}"><img src="/images/products/sf/softfacturas.png" alt="NS softfacturas" class="img-responsive"></a>
										</div>
										<div class="col-md-2 col-xs-6">
											<a href="{{url('national-soft/ns-hoteles')}}"><img src="/images/products/nsh/nshoteles.png" alt="ns hoteles" class="img-responsive"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row gray-img">
							<div class="col-md-12">
								<a href="{{url('incrementacrm')}}"><img src="/images/products/icrm/inelco-incrementa-logo.png" alt="Incrementa" class="img-responsive first"></a>
							</div>
						</div>
						<hr>
						<div class="row gray-img">
							<div class="col-md-12">
								<a href="{{url('http://tractosoft.com/')}}" target="_blank"><img src="/images/products/tracksoft/inelco-logo-tractosoft.png" alt="Incrementa" class="img-responsive first"></a>
							</div>
						</div>
						<hr>
						<div class="row gray-img">
							<div class="col-md-12">
								<a href="{{url('http://boxmecanic.com/')}}" target="_blank"><img src="/images/products/boxmecanic/inelco-logo-boxmecanic.png" alt="Incrementa" class="img-responsive first"></a>
							</div>
						</div>
						<hr>
						<div class="row gray-img">
							<p class="text-center"><a style="text-decoration: none;" href="{{ url('centro-de-descarga') }}" title="Ir al centro de descargas">Descargas</a> | <a style="text-decoration: none;" href="{{ url('/contacto')}}" title="Ir a tienda">Contáctanos</a></p>
						</div>
					</div>
				</div>
				<div id="servicios-tab" class="tab-pane fade">
					<div class="container" id="mas1">
						<div class="row">
							<div class="col-md-4">
								<center><a href="{{ url('/servicios#implementacion')}}"><span class="icon-install"></span></a></center>
								<h3 class="text-center"><a href="{{ url('/servicios#implementacion')}}">Implementación</a></h3>
								<p>Con nuestro servicio de implementación tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu organización</p>
							</div>
							<div class="col-md-4">
								<center><a href="{{ url('/servicios#asesoria')}}"><span class="icon-chat"></span></a></center>
								<h3 class="text-center"><a href="{{ url('/servicios#asesoria')}}">Asesoría</a></h3>
								<p>Con nuestro servicio de asesoría no caminarás sólo. Estaremos contigo aclarando tus dudas y ayudándote a resolver los problemas que puedan surgir en tu organización</p>
							</div>
							<div class="col-md-4">
								<center><a href="{{ url('/servicios#consultoria')}}"><span class="icon-open-book"></span></a></center>
								<h3 class="text-center"><a href="{{ url('/servicios#consultoria')}}">Consultoría</a></h3>
								<p>Te apoyamos ofreciendo consultoría empresarial profesional. Nosotros nos ocupamos de los problemas de tu empresa y te ofrecemos soluciones</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<center><a href="{{ url('/servicios#capacitacion')}}"><span class="icon-blackboard"></span></a></center>
								<h3 class="text-center"><a href="{{ url('/servicios#capacitacion')}}">Capacitación</a></h3>
								<p>Te capacitamos para que aprendas a dominar los distintos programas de administración, además de otros temas empresariales. ¡Consulta nuestro calendario!</p>
							</div>
							<div class="col-md-4">
								<center><a href="{{ url('/servicios#soporte')}}"><span class=" icon-lifebuoy"></span></a></center>
								<h3 class="text-center"><a href="{{ url('/servicios#soporte')}}">Soporte</a></h3>
								<p>Obtén acceso al mejor servicio de soporte con tu póliza y despreocúpate de cualquier problema técnico</p>
								<p class="text-center"><a href="{{ url('/contacto') }}" class="btn btn-default">Adquiere tu póliza de servicio</a></p>
							</div>
							<div class="col-md-4">
								<center><a href="{{ url('/contacto') }}"><span class="icon-add-to-list"></span></center>
									<h3 class="text-center">¡Y muchos más!</h3></a>
									<p>Contáctanos para obtener más información sobre nuestros productos y servicios sin ningún compromiso</p>
							</div>
						</div>
					</div>
				</div>
				<div id="hardware-tab" class="tab-pane ">
					<div class="container ">
						<div class="row">
							<div class="col-md-6 gray-img">
								<center><a href="#"><img src="/images/inelco-equipo-punto-venta.png" class="img-responsive"></a></center>
								<h3 class="text-center"><a href="#">Equipo de punto de venta</a></h3>
								<p>Con nuestro servicio de implementación tu sistema estará listo para trabajar, quedando completamente compatible con los procesos de tu restaurante</p>
							</div>
							<div class="col-md-6 gray-img">
								<center><a href="#"><img src="/images/inelco-equipo-computo.png" class="img-responsive"></a></center>
								<h3 class="text-center"><a href="#">Equipo de cómputo</a></h3>
								<p>Con nuestro servicio de asesoría no caminarás sólo. Estaremos contigo aclarando tus dudas y ayudándote a resolver problemas</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 gray-img">
								<center><a href="#"><img src="/images/inelco-redes.png" class="img-responsive"></a></center>
								<h3 class="text-center"><a href="#">Redes y comunicaciones</a></h3>
								<p>Te capacitamos en distintas áreas para que puedas mejorar los procesos de tu empresa y utilizar las herramientas que te ofrecemos correctamente</p>
							</div>
							<div class="col-md-6 gray-img">
								<center><a href="#"><img src="/images/inelco-regulador-energia-ups2.png" class="img-responsive"></a></center>
								<h3 class="text-center"><a href="#">Energía y regulación</a></h3>
								<p>Obtén acceso al mejor servicio de soporte con tu póliza y despreocúpate de cualquier problema técnico</p>
							</div>
						</div>
					</div>
				</div>
				{{--
				<div id="soluciones-giro-tab" class="tab-pane fade">
					<div class="container ">
						<div class="row">
							<div class="col-md-12">
								<p>Requerimientos mínimos de hardware y software</p>
								<ul>
									<li>Procesador de 32 bits (x86) a 1 GHz. o más.*</li>
									<li>1 GB de RAM*</li>
									<li>320 MB de espacio libre en disco duro.</li>
									<li>Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.</li>
								</ul>
								<p>*Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.</p>
								<p>*Considerar que los requerimientos del Sistema Operativo pueden ser mayores.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
@push('add-js')
	<script src="/js/jquery.js"></script>
	<script src="/js/banner.js"></script>
	<script src="/js/animate-slider.js"></script>
	<script src="/js/modernizr.js"></script>
	<script src="/js/hover-services.js"></script>
	<script>
	(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-88068915-1', 'auto');
		ga('send', 'pageview');
	</script>
	<script>
		$(".anim-slider").animateSlider({
			autoplay: false,
			interval: 9000,
			animations: {
				0: //Slide No1
				{
					li: {
						show: "fadeInLeft",
						hide: "fadeOutLeftBig",
						delayShow: "delay0.5s"
					},
					"#p1": {
						show: "slideInDown",
						hide: "rotateOutUpLeft",
						delayShow: "delay1s"
					},
					"a": {
						show: "bounceInDown",
						hide: "rotateOutUpLeft",
						delayShow: "delay2s"
					}
				},
				1: //Slide No2
				{
					li: {
						show: "slideInLeft",
						hide: "fadeOutLeftBig",
						delayShow: "delay0-5s"
					},
					"#img1": {
						show: "fadeInRight",
						delayShow: "delay1-5s"
					},
					"#img2": {
						show: "fadeInLeft",
						delayShow: "delay2-5s"

					},
					"#img3": {
						show: "fadeInLeft",
						hide: "fadeOutLeftBig",
						delayShow: "delay3-5s"
					}
				},
			}
		});
	</script>
	<script>
		$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
			var target = this.href.split('#');
			$('.nav-tabs').filter('a[href="#' + target[1] + '"]').tab('show');
		})
	</script>
	<script>
		$("body").attr('pagina', 'Inicio');
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
@endsection