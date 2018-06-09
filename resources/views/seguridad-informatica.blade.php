@extends('templates.principal')

@section('name_title','Seguridad Informática| Inelco IT Solutions')

@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush
@section('contenido')
<section id="banner-services" class="sections">
    <div class="fondo-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="title-h2">Seguridad Informática</h2>
                    <h3 class="title-h3">Servicios para proteger la información y los sistemas de la organización.</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services secciones" id="implementacion">
    <div class="container">
        <div class="row">
            <h2 class="title-h2">Servicios de Seguridad Informática </h2>
            <h3 class="title-h3">Nuestros servicios de seguridad informática brindan una opción al alcance de las necesidades de cada empresa, para asegurar la integridad y la privacidad de los datos pertenecientes a la misma. </h3>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/seguridad-informatica.png" class="img-responsive pull-right   ">
            </div>
            <div class="col-md-8">
                <p>Brindamos todo lo necesario para evitar, prevenir, detectar, corregir, o recuperarse de las amenazas existentes en sus sistemas y la información de su empresa.</p>
                <ul>
                    <li>Análisis y Evaluación de Riesgos de Seguridad de la Información.</li>
                    <li>Implementación productos y herramientas de seguridad informática.</li>
                    <li>Definición e implantación de políticas, estándares, guías y procedimientos de seguridad informática.</li>
                    <li>Asesorías en seguridad en tecnología de la información.</li>
                    <li>Ingeniería Social.</li>
                </ul>
            </div>
        </div>
        <div class="row caract-services">
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/seguridad-informatica-3.png" class="img-responsive">
                <p class="text-p">Nos encargamos de la seguridad informática de su empresa.</p>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/asesoria.png" class="img-responsive">
                <p class="text-p">Brindamos la asesoría para que siempre puedas mantener segura toda tu información.</p>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/calidad.png" class="img-responsive">
                <p class="text-p">Contamos con diferentes políticas, estándares, guías y procedimientos de seguridad informática.</p>
            </div>
        </div>
    </div>
</section>
<section class="services secciones" id="implementacion">
    <div class="container">
        <div class="row">
            <h3 class="title-h3">Procedimiento operativo</h3>
            <h3 class="title-h3">Realizamos todo el procedimiento operativo para que puedas mantener segura tu organización.</h3>
            <div class="col-md-8">
                <p>Tenemos un servicio de calidad en el que realizamos todo el procedimiento necesario cumpliendo con nuestras normas de calidad. Este procedimiento consta de: </p>
                <ul>
                    <li> 1. Análisis de las necesidades del cliente. </li>
                    <li> 2. Determinación de nivel de seguridad requerido.</li>
                    <li> 3. Estudio de vulnerabilidades dentro de la empresa.</li>
                    <li> 4. Definición de políticas de seguridad. </li>
                    <li> 5. Implementación del sistema de seguridad.</li>
                    <li> 6. Administración y monitorización.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/procedimiento.png" class="img-responsive hard-prod" alt="touchscreen">
            </div>
        </div>
        <div class="row caract-services">
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/analisis.png" class="img-responsive">
                <p class="text-p">Realizamos el analisis y diagnostico de la seguridad de tu empresa por medio de nuestras pruebas.</p>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/evaluacion.png" class="img-responsive">
                <p class="text-p">Evaluamos la información y determinamos una solución.</p>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/implementacion.png" class="img-responsive">
                <!--<h4 class="title-h4">Software Administrativo</h4>-->
                <p class="text-p">Implementamos la solución y damos el seguimiento necesario.</p>
            </div>
        </div>
    </div>
</section>
<section class="torretas secciones">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/diagnostico.png" class="img-responsive hard-prod" alt="torreta">
            </div>
            <div class="col-md-8">
                <h3 class="title-h3">Servicio de diagnóstico.</h3>
                <p style="text-align: justify">Nuestro servicio se orienta a ofrecer un diagnostico de la seguridad informática de su empresa, ofrecemos servicios que emplean procesos innovadores al combinar la información obtenida en nuestras oficinas con los resultados obtenidos en las auditorias de seguridad.</p>
                <button class="btn btn-primary btn-lg ver-mas io center-block " data-toggle="tablaseguridad">Ver más</button>
            </div>
        </div>
        <div class="row tabla" id="tablaseguridad">
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/pentest.png" class="img-responsive" alt="all in one" style="width:auto;height:210px">
                <div class="back-tabla">
                    <h4 class="title-h4">Penetration Testing</h4>
                    <p style="text-align: justify">Consiste en diversos análisis y pruebas relacionadas con la identificación de puertos abiertos, servicios disponibles y detección de vulnerabilidades en los sistemas de información. De esta manera la empresa puede conocer cuáles son los riesgos existentes en sistemas y plataformas, de forma tal que se pueda definir un plan de acción para su remediación.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/vulnerability-assessment-2.png" class="img-responsive" alt="all in one" style="width:auto;height:210px">
                <div class="back-tabla">
                    <h4 class="title-h4">Vulnerability Assessment</h4>
                    <p style="text-align: justify">Este servicio no solo identifica los riesgos existentes asociados a la infraestructura WiFi, sino que va mas allá por medio de la explotación de las vulnerabilidades detectadas en Access points y redes inalámbricas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/wifi-penetration-test.png" class="img-responsive" alt="all in one" style="width:auto;height:210px">
                <div class="back-tabla">
                    <h4 class="title-h4">Wifi Penetration Test</h4>
                    <p style="text-align: justify">Es un servicio de análisis diferencial de la infraestructura de la organización que, a través de evaluaciones mensuales, permiten al cliente comprender el nivel de riesgo y su evolución a lo largo del tiempo. Tiene una visión ejecutiva con el objetivo de brindar indicadores eficientes para la toma de decisiones.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/continuous-security.png" class="img-responsive" alt="all in one" style="width:auto;height:210px">
                <div class="back-tabla">
                    <h4 class="title-h4">Continuous Security Assessment</h4>
                    <p style="text-align: justify">Evalúa los recursos y activos de la organización desde un punto de vista de seguridad de la información. Puede llevarse a cabo tanto desde un punto de vista interno como externo. En el primer caso se busca identificar y explotar las vulnerabilidades que sean visibles desde un escenario con acceso a los sistemas de la empresa, mientras que en el segundo se realiza la evaluación desde el punto de vista de un atacante externo.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/social-engineering.png" class="img-responsive" alt="all in one" style="width:auto;height:210px">
                <div class="back-tabla">
                    <h4 class="title-h4">Social Engineering Testing</h4>
                    <p style="text-align: justify">Esta técnica identifica las vulnerabilidades existentes a nivel de concientización y conocimiento sobre diferentes vectores de ataques orientado a las personas dentro de la organización. Específicamente, además de la identificación, se busca la explotación de las vulnerabilidades referidas al engaño de personas y de esa manera se observa el impacto real sobre la organización.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/images-new/Inelco/servicios/seguridad-informatica/webapp-penetration.png" class="img-responsive" alt="all in one" style="width:auto;height:210px">
                <div class="back-tabla">
                    <h4 class="title-h4">Web Penetration Testing</h4>
                    <p style="text-align: justify">Evalúa la seguridad de los recursos y activos de la organización desde el punto de vista de la seguridad a nivel aplicación Web. Por medio del mismo, no solo se identifican las vulnerabilidades asociadas a la infraestructura, sino que además ejecuta un análisis de mayor profundidad. Por medio de la explotación de vulnerabilidades se logra ilustrar el impacto real que afecta a la organización.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services secciones" id="implementacion">
    <div class="container">
        <div class="row">
            <h3 class="title-h3">Contáctanos para mantener tu empresa segura.</h2>
            <div class="row gray-img">
                <div class="col-md-8 col-md-offset-5">
                    <a href="{{ url('/contacto')}}" title="Ir a tienda"><button class="btn btn-primary btn-lg">Contactar</button></a>
                </div> 
            </div>
        </div>
    </div>
</section>
@endsection

@push('add-js')
    <script src="/js/wrap-table.js"></script>
    <script>
        $("body").attr('pagina','Servicios');
    </script>
@endpush