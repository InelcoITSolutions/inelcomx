@extends('templates.principal')


@section('name_title','Lo nuevo CAJA | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('aspel.caja.banner-caja')

    <section class="secciones caja-pages nuevo-caja" id="mas">
        <div class="container">
            <h2 class="title-h2">
                Lo Nuevo
            </h2>
            <h3 class="title-h3">Con su versión 4.0 Aspel-CAJA convierte tu equipo de cómputo en un punto de venta más organizado, productivo y relevante. ¡Cómpralo ya!</h3>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">Tecnología táctil en ventas</h5>
                    <p>Ahora el sistema admite el manejo de pantallas táctiles para una captura más fácil de las ventas, y te permite visualizar tus productos por categorías. Utilízalo y agiliza tus ventas.</p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img class="img-responsive zoom1" src="/images/products/caja/inelco-caja-Tecnologia-Tactil.png">
                    
                </div>
            </div>
            <div class="row">
            <h5 class="title-h5">Nueva Interfaz</h5>
                <div class="col-md-6 imagencontainer">
                    <img class="img-responsive zoom1" src="/images/products/caja/inelco-aspel-caja-Nueva-Interfaz.png">
                    
                </div>
                <div class="col-md-6">
                    
                    <p>Cuenta con una interfaz gráfica que facilita las operaciones y prepara tu negocio para el éxito.</p>
                </div>
            </div>
        </div>
    </section>
    
    @include('aspel.caja.menu-caja')
@endsection

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
