@extends('templates.principal')


@section('name_title','Caracteristicas de Incrementa CRM | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel="stylesheet"/>-->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('incrementa.banner-icrm')

    <section class="secciones icrm-pages soluciones-icrm" id="caract-icrm">
        <div class="container">
            <h2 class="title-h2">Caracteristicas de Incrementa CRM</h2>
            <h4 class="title-h4">Conoce nuestras increíbles funciones que te permiten aumentar tu ganancias de manera exponencial mejorando tu proceso de venta, seguimiento al cliente y productividad.</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract1.png"/>
                        </center>
                        <h5 class="title-h5">Hacer cotizaciones en minutos</h5>
                        <p>El módulo de cotizaciones te permite crear atractivas cotizaciones en unos cuantos clics y enviarlas de inmediato a tus clientes, además puedes llevar un registros y hacer reportes de tus cotizaciones.</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract2.png"/>
                        </center>
                        <h5 class="title-h5">Capitalizar tus contactos por Web</h5>
                        <p>Con Web To Lead todos los contactos que generas a través de tu página web entran a Incrementa, esto te ahorra tiempo y trabajo. Además, puedes asignarlos como tú decidas a tu equipo de trabajo.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-2  .col-lg-6">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract3.png"/>
                        </center>
                        <h5 class="title-h5">Sistematizar tu proceso de venta</h5>
                        <p>Gracias a nuestro exclusivo sistema de venta en 3 pasos, todos los esfuerzos de venta generan una acción clara y medible hasta llegar a una venta exitosa o a una oportunidad perdida.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract4.png"/>
                        </center>
                        <h5 class="title-h5">Crear campañas y estrategia de venta</h5>
                        <p>Define qué quieres lograr, en cuánto tiempo e Incrementa dividirá tu estrategia en acciones claras y sistematizadas para ti o tu equipo de trabajo, con tiempos precisos y resultados medibles.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract5.png"/>
                        </center>
                        <h5 class="title-h5">Centraliza tu información y mantenerla segura</h5>
                        <p>Tu cartera de clientes, calendario, cotizaciones y reportes están seguras y en un solo lugar a un clic de distancia cuando la necesites.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract6.png"/>
                        </center>
                        <h5 class="title-h5">Llevar un control preciso</h5>
                        <p>El dashboard de Incrementa te permite saber qué está sucediendo constantemente, qué actividades están programadas para este día y para el siguiente.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract7.png"/>
                        </center>
                        <h5 class="title-h5">Enviar correos electrónicos masivos</h5>
                        <p>El módulo de mailing de Incrementa incluye atractivas plantillas para que tú personalices tus campañas de correo con imágenes, logotipos y más de manera simple, rápida y sin costo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract8.png"/>
                        </center>
                        <h5 class="title-h5">Mantener segura tu cartera de clientes</h5>
                        <p>Seguridad para tu cartera de clientes, disponible desde donde estés y con campos personalizados. Segmenta de acuerdo a las características de tus clientes y ten acceso a su historial.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/icrm/inelco-icrm-caract9.png"/>
                        </center>
                        <h5 class="title-h5">Estar al día con todo</h5>
                        <p>Elige qué es importante para ti y recibe notificaciones sobre lo que te interesa. Mantente al día revisando un muro donde todas las acciones de tus vendedores quedan registradas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones icrm-pages soluciones-icrm" id="mas">
    <div class="container">
        <h2 class="title-h2">¿Aún no te decides? Compara los servicios contra las demás opciones del mercado y convéncete.</h2>

         <div class="table-responsive" >
            <table class="table table-bordered " align="center" style="text-align: center;" >
                  <thead>
                    <tr>
                      <th style="text-align: center;" class="bg-primary"></th>
                      <th style="text-align: center;" class="bg-primary">Inversión</th>
                      <th style="text-align: center;" class="bg-primary">Infraestructura</th>
                      <th style="text-align: center;" class="bg-primary">Internet</th>
                      <th style="text-align: center;" class="bg-primary">Equipo técnico</th>
                      <th style="text-align: center;" class="bg-primary">Mantenimiento</th>
                      <th style="text-align: center;" class="bg-primary">Escalabilidad</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <td><strong>Incrementa</strong></td>
                      <td>Renta mensual</td>
                      <td>PC y mobiles</td>
                      <td>Conexión a internet</td>
                      <td>No requerido</td>
                      <td>Incluido</td>
                      <td>Exponencial</td>
                    </tr>
                     <tr>
                      
                      <td><strong>CRM Tradicional</strong></td>
                      <td>Licencias y mantenimiento</td>
                      <td>Servidores, cableado, electricidad, etc.</td>
                      <td>Enlace simétrico, IP fija, cableado, etc.</td>
                      <td>Técnicos de soporte y sistemas.</td>
                      <td>Pago de licencias y mantenimeinto</td>
                      <td>Costo de infraestructura por usuario adicional</td>
                    </tr>
                    
                  </tbody>
                </table>

                <a href="https://incrementacrm.com/invite-code/inelco" align="center"><button  type="button" class="btn btn-primary">Contrata ya</button></a>
                
            </div>
           </div>
        </div>

    </section>

    @include('incrementa.menu-icrm')
@stop

@push('add-js')
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
