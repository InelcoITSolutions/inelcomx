@extends('templates.principal')

@section('name_title','Nómina Digital | Inelco IT Solutions')

@push('add-css')
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    <section class="secciones">
        <div class="container">
            <div class="row">
                <div class="wow fadeInDown" data-wow-delay="1s" >
                    <h2 class="title-h2">Conoce las <b>nuevas obligaciones</b> de la <b> Nómina Digital</b></h2>
                      
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="1.5s" >
                        <p class="lead" style="margin-bottom: 0!important; padding-bottom: 0!important;">A partir del <b>1° de enero de 2017 la Nómina Digital cambia</b>,</p>
                        <p class="lead">por ley se incorpora más información.</p>
                        <p class="lead">Hazlo con tiempo, es muy sencillo cumplir con esta obligación.</p>
                        <br>
                        <p class="text-center"><a href="#informacion" class="btn btn-default btn-lg ancla btn-noi">Saber como</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="2s" >
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NskWqgD8uvM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections" id="nominadigi">
        <div class="fondo-gray">
            <div class="container">
                <div class="wow bounceInDown" data-wow-delay="0.2s" >
                    <h3>Ahora la Nómina Digital debe cumplir nuevas obligaciones fiscales y Aspel NOI lo hace. ¡Conócelo!</h3>
                </div>
            </div>
        </div>        
    </section>

    <section class="secciones back-white" id="informacion">
        <div class="container">
            <h3 style="margin-bottom:2em;" class="text-center">Conoce más detalles y <b>cumple</b> con la <b>Nómina Digital</b></h3>
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#requisitos-tab"><span>¿Cuáles son los nuevos requisitos fiscales?</span></a></li>
                <li><a data-toggle="tab" href="#informacion-tab" ><span>¿Qué información deben incluir?</span></a></li>
                <li><a data-toggle="tab" href="#obligados-tab"><span>¿Quiénes están obligados a cumplir?</span></a></li>
                <li><a data-toggle="tab" href="#obligacion-tab"><span>¿Por qué es una obligación?</span></a></li>
                <li><a data-toggle="tab" href="#necesitas-tab"><span>¿Qué necesitas para cumplir?</span></a></li>
            </ul>
            <div class="tab-content">
                <div id="requisitos-tab" class="tab-pane fade in active">
                    <div class="container-fluid">
                        <div class="row">
                            <h3>¿Cuáles son los nuevos requisitos fiscales?</h3>
                            <div class="col-md-4">
                                <img src="/images/products/recibo_nomina.png" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <p> Los Recibos de Nómina Electrónicos deberán contener de manera obligatoria el complemento versión 1.2, que proporcionará información más detallada sobre el pago que los patrones realizan a los trabajadores.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="informacion-tab" class="tab-pane fade">
                    <div class="container-fluid">
                        <div class="row">
                            <h3>¿Qué información deben incluir?</h3>
                            <div class="col-md-4">
                                <img src="/images/products/informacion_deben_incluir.png" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <ul>
                                    <li><b>Nuevos catálogos</b> como: tipo de nómina, periodicidad de pago, tipo de contrato y de jornada</li>
                                    <li><b>CURP</b> del emisor, si es persona física</li>
                                    <li><b>Datos del trabajador:</b> si es sindicalizado, dónde trabaja y si es subcontratado</li>
                                    <li><b>Desglose del tipo de pagos:</b> por sueldos, por separación de la empresa, por indemnización</li>
                                    <li><b>Desglose de otros conceptos</b> que se le retribuyen al trabajador, como el reintegro de ISR pagado en exceso o el subsidio al empleo pagado y aplicado</li>
                                    <li><b>Identificación</b> del origen de los recursos utilizados en el pago de Nómina en entidades gubernamentales</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="obligados-tab" class="tab-pane fade">
                    <div class="container-fluid">
                        <div class="row">
                            <h3>¿Quiénes están obligados a cumplir?</h3>
                            <div class="col-md-4">
                                <img src="/images/products/personas.png" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <p><b>Todos los contribuyentes, personas físicas o morales</b> que emitan CFDI de Nómina por concepto de salarios, asimilados a salarios y en general por la prestación de un servicio personal subordinado.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="obligacion-tab" class="tab-pane fade">
                    <div class="container-fluid">
                        <div class="row">
                            <h3>¿Por qué es una obligación?</h3>
                            <div class="col-md-4">
                                <img src="/images/products/obligacion.png" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <p>Los Recibos de Nómina Electrónicos que no contengan la información requerida por la autoridad fiscal, <b>no serán deducibles de impuestos, lo que puede generar gastos de por lo menos el 30%</b> sobre el monto de los sueldos y percepciones ya pagadas a los empleados, además de recargos, actualizaciones y multas que determine la autoridad.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="necesitas-tab" class="tab-pane fade">
                    <div class="container-fluid">
                        <div class="row">
                            <h3>¿Qué necesitas para cumplir con esta obligación fiscal?</h3>
                            <div class="col-md-4">
                                <img src="/images/products/laptop_noi.png" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <p><b>Aspel NOI 8.0</b>, el Sistema de Nómina Integral más utilizado por las empresas, que <b>emite Recibos de Nómina Electrónicos</b> y su complemento de acuerdo con las disposiciones fiscales vigentes.</p>
                                <p class="text-center"><a href="{{ url('aspel-noi') }}" target="_blank" class="btn btn-warning btn-lg btn-noi">Conócelo</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('add-js')
    @endpush
@endsection