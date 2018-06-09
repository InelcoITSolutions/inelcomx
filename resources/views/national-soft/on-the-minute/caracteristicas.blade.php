@extends('templates.principal')


@section('name_title','On The Minute Módulos Adicionales | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="../css/css-facture/font-awesome.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel=-"stylesheet"/>-->
@endpush

@section('contenido')
    @include('national-soft.on-the-minute.banner-otm')

    <section class="secciones otm-pages soluciones-otm">
        <div class="container">
            <h2 class="title-h2">Características para el <b>sistema On The Minute® 4.5</b></h2>
            
            
       
    </section>

    <section class="secciones otm-pages">
        <div class="container">
           
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                   <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Mejora gráfica para la rotación de turnos, se puede hacer de manera semanal seleccionando el turno por día, esto permite una administración más eficiente en empresas donde existen rotaciones constantes de sus turnos.</p>
                </div>

                </div>

                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10">
                    <p>Nuevas gráficas y estadísticas que se consultan directamente en la pantalla principal para conocer la asistencia, faltas, retardos y otros de su empresa.</p>
                </div>

                </div>
                
            </div>

             <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Se permite acumular vacaciones de años anteriores.</p>
                </div>

                </div>

                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10">
                    <p>Es configurable el criterio de búsqueda por default del empleado (clave, nombre, apellido paterno y apellido materno).</p>
                </div>

                </div>
                
            </div>

             <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Las configuraciones generales de TURNO NORMAL se pueden configurar por turno logrando una mayor flexibilidad de configuración.</p>
                </div>

                </div>

                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10">
                    <p>Compatibilidad con la versión de NOI 6.0 (2013), versión CONTPAQ® i Nóminas 2013 ó superior y con la versión Microsip ® 2013.</p>
                </div>

                </div>
                
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Mejoras en los documentos a entregar, se pueden crear categorías y la forma de entrega tiene una mejor interfaz gráfica ya que se pueden pre-visualizar los archivos PDF y asig- narles una imagen para identificarlos.</p>
                </div>

                </div>

                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10">
                    <p>Configuraciones de dispositivos autónomos, se agregó la opción para cambiar la opción gráfica que permite seleccionar una terminal en el ENLACE TCPIP.</p>
                </div>

                </div>
                
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Activar empleado de confianza, se guardará la hora de la salida del turno asignado aún que el colaborador salga después de su hora de salida.</p>
                </div>

                </div>

                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10">
                    <p>Existe un asistente que guía al usuario para capturar al sistema los catálogos comunes.</p>
                </div>

                </div>


                
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Las configuraciones generales de TURNO ABIERTO se pueden configurar por turno logrando una mayor flexibilidad de configuración.</p>
                </div>

                </div>

                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10">
                    <p>En el monitor TCPIP se puede configurar el envío de correos electrónicos automáticamente cuando un colaborador tiene un retardo, lo que permite mejorar la puntualidadal mantener informado a los colaboradores.</p>
                </div>

                </div>
                
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                <div class="col-md-1">
                    <p><span class="glyphicon glyphicon-ok"></span></p>
                </div>

                <div class="col-md-10 col-sm-8">
                    <p>Exportación a hojas de cálculo de OPEN OFFICE CALC.</p>
                </div>

                </div>

                
                
            </div>

            <div class="col-md-12 ">
                    <img src="/images/products/otm/inelco-diagrama-implementacion.png" class="img-responsive center-block">
            </div>
        </div>
    </section>

    <section class="secciones otm-pages soluciones-otm" id="mas">
        <div class="container">
        <div class="row">
            <h2 class="title-h2">Requerimientos del Sistema</h2>
            <h3 class="title-h3">Requerimientos mínimos para el funcionamiento correcto de On The Minute®</h3>

            
        <div class="col-md-12">
                        <h3 class="title-h3">Servidor</h3>
        </div>

         <div class="col-md-6 ">
            <table class="table">
                <thead>
                  <tr>
                    <th><b></b></th>
                    <th><b>Mínimo</b></th>
                 
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    

                    <td><i class="fa fa-floppy-o  fa-2x" aria-hidden="true"></i></td>
                    <td>Disco Duro 10 GB</td>
                    
                  </tr>
                  <tr>
                    
                    <td><i class="fa  fa-tachometer  fa-2x" aria-hidden="true"></i></td>
                    <td>Procesador (Intel/AMD 32 bits con 1 núcleo a 1.6 GHz)</td>

                    
                  </tr>
                  <tr>
                    <td><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></td>
                    <td>Memoria 2 GB</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></td>
                    <td>Monitor 1024 x 768</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-internet-explorer fa-2x" aria-hidden="true"></i></td>
                    <td>Explorador (Navegador Internet Explorer versión 9.0 (minimo para el registro de su licencia))</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-windows fa-2x" aria-hidden="true"></i></td>
                    <td>Sistema Operativo (Windows 8 PRO / Windows 10 Home / Windows 10 PRO)</td>
                  </tr>
                 
                 
                </tbody>
              </table>

          </div>

           <div class="col-md-6 ">

           <table class="table">
                <thead>
                  <tr>
                    <th><b></b></th>
                    <th><b>Recomendado</b></th>
                 
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    

                    <td><i class="fa fa-floppy-o  fa-2x" aria-hidden="true"></i></td>
                    <td>Disco Duro 40 GB</td>
                    
                  </tr>
                  <tr>
                    
                    <td><i class="fa  fa-tachometer  fa-2x" aria-hidden="true"></i></td>
                    <td>Procesador (Intel/AMD 32 bits con 4 núcleo a 2.6 GHz)</td>

                    
                  </tr>
                  <tr>
                    <td><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></td>
                    <td>Memoria 4 GB</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></td>
                    <td>Monitor 1024 x 768</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-internet-explorer fa-2x" aria-hidden="true"></i></td>
                    <td>Explorador (Navegador Internet Explorer versión 9.0 (minimo para el registro de su licencia))</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-windows fa-2x" aria-hidden="true"></i></td>
                    <td>Sistema Operativo (Windows 8 PRO / Windows 10 Home / Windows 10 PRO / Windows Server 2008 R2)</td>
                  </tr>
                 
                 
                </tbody>
              </table>
              </div>
            
           


              <div class="col-md-12">
                        <h3 class="title-h3">Estaciones</h3>
        </div>

         <div class="col-md-6 ">
            <table class="table">
                <thead>
                  <tr>
                    <th><b></b></th>
                    <th><b>Mínimo</b></th>
                 
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    

                    <td><i class="fa fa-floppy-o  fa-2x" aria-hidden="true"></i></td>
                    <td>Disco Duro 5 GB</td>
                    
                  </tr>
                  <tr>
                    
                    <td><i class="fa  fa-tachometer  fa-2x" aria-hidden="true"></i></td>
                    <td>Procesador (Intel/AMD 32 bits con 1 núcleo a 1.6 GHz)</td>

                    
                  </tr>
                  <tr>
                    <td><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></td>
                    <td>Memoria 1 GB</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></td>
                    <td>Monitor 1024 x 768</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-internet-explorer fa-2x" aria-hidden="true"></i></td>
                    <td>Explorador (Navegador Internet Explorer versión 9.0 (minimo para el registro de su licencia))</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-windows fa-2x" aria-hidden="true"></i></td>
                    <td>Sistema Operativo (Windows 8 PRO / Windows 10 Home / Windows 10 PRO)</td>
                  </tr>
                 
                 
                </tbody>
              </table>

          </div>

           <div class="col-md-6 ">

           <table class="table">
                <thead>
                  <tr>
                    <th><b></b></th>
                    <th><b>Recomendado</b></th>
                 
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    

                    <td><i class="fa fa-floppy-o  fa-2x" aria-hidden="true"></i></td>
                    <td>Disco Duro 10 GB</td>
                    
                  </tr>
                  <tr>
                    
                    <td><i class="fa  fa-tachometer  fa-2x" aria-hidden="true"></i></td>
                    <td>Procesador (Intel/AMD 32 bits con 4 núcleo a 2.6 GHz)</td>

                    
                  </tr>
                  <tr>
                    <td><i class="fa fa-rocket fa-2x" aria-hidden="true"></i></td>
                    <td>Memoria 2 GB</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></td>
                    <td>Monitor 1024 x 768</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-internet-explorer fa-2x" aria-hidden="true"></i></td>
                    <td>Explorador (Navegador Internet Explorer versión 9.0 (minimo para el registro de su licencia))</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-windows fa-2x" aria-hidden="true"></i></td>
                    <td>Sistema Operativo (Windows 8 PRO / Windows 10 Home / Windows 10 PRO / Windows Server 2008 R2)</td>
                  </tr>
                 
                 
                </tbody>
              </table>
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
