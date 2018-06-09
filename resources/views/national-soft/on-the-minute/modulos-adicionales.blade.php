@extends('templates.principal')


@section('name_title','On The Minute Módulos Adicionales | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel="stylesheet"/>-->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('national-soft.on-the-minute.banner-otm')

    <section class="secciones otm-pages soluciones-otm">
        <div class="container">
            <h2 class="title-h2">Módulos adicionales</h2>
            <h3 class="title-h3">Módulo <b>Docentes</b></h3>
            <h4 class="title-h4">El sistema que lleva el registro de la planta docente de una escuela. También permite la organización de las horas de clase por profesor.</h4>
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/products/otm/inelco-otm-docentes-2.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <p>On The Minute<sup>®</sup> Docentes, te permte controlar los acceso de tu planta de docentes al presentarse a su clase correspondiente, incluso configurando el sistema por edificios donde sea impartida la clase, además podrás generar el horario de tus profesores, imprimirlo, automaticamente se levantas actas por faltas injustificadas, teniendo siempre el conocimiento exacto de lo que pasa en su escuela</p>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones otm-pages">
        <div class="container">
            <h2 class="title-h2">Especificaciones del Módulo Docentes</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="li-otm">
                        <li>Catálogo de Periodos de los cursos</li>
                        <li>Catálogo de edificios de impartición de cursos</li>
                        <li>Catálogo de materias</li>
                        <li>Catálogo de escuelas</li>
                        <li>catalogo de creación de cursos con fechas de inicio y finalización</li>
                        <li>Asignación horarios (carga academica)</li>
                        <li>Asignación de suplencias</li>
                        <li>Registro de entrada y/o salida de forma manual</li>
                        <li>Aplicación de fechas del turno extraordinario</li>
                        <li>Justificación de incidencias</li>
                        <li>Generación de oficios por las faltas registradas</li>
                        <li>Configuracion del Oficio presentado</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="li-otm">
                        <li>Enlace a NomiPaq<sup>®</sup></li>
                        <li>Importar horarios desde Excel<sup>®</sup></li>
                        <li>Reporte de asistencias a sus módulos normales, a módulos de suplencias, al turno extraordinario, etc.</li>
                        <li>Reporte de los oficios generados</li>
                        <li>Reporte suplencias asignadas</li>
                        <li>Reporte de los horarios de los docentes</li>
                        <li>Reporte de retardos</li>
                        <li>Reporte de incidencias</li>
                        <li>Reporte de reposiciones</li>
                        <li>Reporte de inasistencias</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    @include('national-soft.on-the-minute.menu-otm')
@stop

@push('add-js')
    @stack('files-menu')
    <script src="/js/comp-table.js"></script>
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
