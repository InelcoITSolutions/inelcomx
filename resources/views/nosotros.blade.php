@extends('templates.principal')


@section('name_title','Nosotros | Inelco IT Solutions')

@push('add-css')

<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    <section class="banner-nosotros sections">
        <div class="fondo-gray">
            <div class="container">
                <div class="row">
                    <h2 class="title-h2">Nosotros</h2>
                    <h3 class="title-h3">Estamos comprometidos para apoyarte en el crecimiento de tu empresa</h3>
                </div>
                
            </div>
        </div>            
    </section>

    <section class="secciones nosotros">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-h4" >¿Quienes somos?</h4>
                    <hr>
                    <p><b>Inelco IT Solutions</b> provee soluciones integrales a necesidad de información, automatizando los procesos de las micro, pequeñas y medianas empresas, con productos de calidad orientadas a apoyar a las empresas en sus procesos y aplicaciones de negocio, en base a requerimientos específicos cada uno de nuestros clientes, ofreciendo una solución completa que satisfaga sus expectativas, proporcionando productos, servicios, asesoría, implementación, capacitación, mantenimiento, soporte y actualización.</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-6">
                    <h4 class="title-h4">Misión</h4>
                    <hr>
                    <p>Brindar soluciones de tecnología y consultoría a micro, pequeñas y medianas empresas, proveyendo productos y servicios de una manera integrada, correcta y completa, ofreciendo las mejores oportunidades de crecimiento a nuestros clientes.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="title-h4">Visión</h4>
                    <hr>
                    <p>Ser la empresa líder en solucionar las necesidades de tecnología de nuestros clientes, proveyendo las herramientas necesarias para su correcta administración por nuestra inigualable calidad de servicio y ser reconocida por su eficiencia y liderazgo en toda la república mexicana.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones nosotros-link">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-h2">Hacemos personales tus proyectos</h2>
                    <h3 class="title-h3">La calidad de nuestros servicios habla por nosotros. Profesionalismo y rapidez nos caracterizan.</h3>
                </div>
                <div class="col-md-12">
                    <ul class="ul-inline">
                        <li><a href="{{ url('/servicios')}}" class="btn btn-default btn-lg">Conoce más</a></li>
                        <li><a href="{{ url('/contacto')}}" class="btn btn-default btn-lg">Contáctanos</a></li>
                    </ul>
                </div>                
            </div>
        </div>
    </section>

    <section class="secciones nosotros-span">
        <div class="container">
            <div class="row row1-span-before">
                <div class="col-md-4">
                    <h4 class="span-before"> Compromiso</h4>
                    <p>Hacemos personal tus proyectos y le damos importancia, para el crecimiento de tu empresa.</p>
                </div> 
                <div class="col-md-4">
                    <h4 class="span-before"> Innovación</h4>
                    <p>Te ofrecemos soluciones con lo último en tecnología.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="span-before"> Clientes satisfechos</h4>
                    <p>Ganamos la lealtad de nuestros clientes con la calidad de nuestros servicios.</p>
                </div>                 
            </div>
            <div class="row row2-span-before">
                <div class="col-md-4">
                    <h4 class="span-before"> Integridad</h4>
                    <p>Trabajamos con honestidad y honor, sabemos que es fundamental para para toda empresa, incluyéndonos.</p>
                </div> 
                <div class="col-md-4">
                    <h4 class="span-before"> Rapidez</h4>
                    <p>No hagas filas o pierdas tiempo esperando respuestas, las soluciones las tenemos a la mano.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="span-before"> Comunicación</h4>
                    <p>Trabajamos al apar contigo para ofrecerte una solución adecuada.</p>
                </div>                 
            </div>
        </div>
    </section>



@endsection

@push('add-js')  
    <script>
        $("body").attr('pagina','Contacto');
    </script>
@endpush