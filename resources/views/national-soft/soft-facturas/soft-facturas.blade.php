@extends('templates.principal')

@section('name_title','Soft Facturas | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('national-soft.soft-facturas.banner-sf')

    <section class="descripcion-prod sf-pages secciones ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Soft Facturas<sup>®</sup> te permite realizar o programar tus comprobantes fiscales vía internet de una manera eficiente, práctica y segura.</h2>
                    <p><b>Soft Facturas<sup>®</sup></b> es una herramienta completa que le permitirá emitir facturas desde cualquier lugar, solo necesitas conexión a Internet.</p>
                    <p>Hemos logrado simplificar radicalmente la utilización del sistema, incorporando nuevas funciones de alto valor que elevarán el proceso de emisión de facturas electrónicas.</p>
                    <p>Ahora es posible realizar tus comprobantes fiscales desde tu <a href="{{url('national-soft/soft-facturas/movil')}}" style="text-decoration: none; color:#CF4647;">celular o tablet.</a></p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="inelco-softrestaurant" class="img-responsive" src="/images/products/sf/inelco-sf-tablet-sf.png"/>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <section class="word-frase sections " id="frase-sf">
        <div class="fondo-gray">
            <div class="container">
                <h2>Emite comprobantes desde cualquier lugar</h2>
            </div>
        </div>
    </section>

    <section class="ac_content sf-pages" id="mas">
        <div class="ac_content-wrapper notpadding ">
            <div class="ac_cols-wrapper cf" id="tour">
                <div class="ac_col twelve nopadding secciones">
                    <h2 class="title-h2">Te presentamos a Soft Facturas<sup>®</sup></h2>
                    <h3 class="title-h3">Observa las operaciones que puedes llevar a cabo</h3>
                </div>
            </div>
            <div class="ac_home-tour">
                <!--<div class="tour-caption">
                        <div class="title">Imagen 1</div>
                        <p>A complete overview of your marketing, automation, & sales.</p>
                    </div>-->
                <div id="tour-slides">
                    <img src="/images/products/sf/inelco-sf-ventana principal.png" id="1" width="88.5%" alt="Facilidad de uso en el sistema|Brinda una buena administración de la información que emplee en el proceso de facturación."/>

                    <img src="/images/products/sf/inelco-sf-factura.png" id="2" width="88.5%" alt="Seguridad al 100%|Ofrece seguridad en la facturación, evitando pérdidas de información ya que se realiza el almacenamiento de la información en nuestro servidor además de proporcionarle  al usuario la posibilidad de  gestionar cuentas de  usuarios para  sus  colaboradores  para  que  estos  puedan  ingresar  y  gestionar  la  información  utilizada  para  la  generación  de comprobantes. " />

                    <img src="/images/products/sf/inelco-sf-programar-comprobante.png" id="3" width="88.5%" alt="Minimiza el llenado de comprobantes|Mejora la administración de los clientes para facilitar su uso y reducir tiempos."/>

                    <img src="/images/products/sf/inelco-sf-rerpote-comprobante.png" id="4" width="88.5%" alt="Facturas rapidas y faciles|Proporcionar la facilidad de emitir comprobantes de tipo factura, recibo de honorarios y recibo de arrendamiento."/>
                </div>
            </div>
        </div>
    </section>

    <hr id="lap-separator"/>
    <section class="secciones sf-pages" id="texto-img">
        <div class="container">
            <div class="row">
                <div class="tour-caption">
                    <div class="title">
                       Facilidad de uso en el sistema
                    </div>
                    <p>
                    Brinda una buena administración de la información que emplee en el proceso de facturación.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristicas-prod sf-pages secciones">
        <div class="container">
        <h2 align="center">La plataforma te ofrece</h2>
        <br>
            <div class="row row-icons">

                <div class="col-md-3">
                    <center>
                        <img alt="disposiciones fiscales" src="/images/products/sf/inelco-sf-seguridad.png"  />
                    </center>
                    <h3 class="text-center">Seguridad</h3>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="calculo de nomina" src="/images/products/sf/inelco-sf-multiempresas.png"/>
                    </center>
                    <h3 class="text-center">Gestión Multiempresas</h3>
                </div>
                <div class="col-md-3">
                    <center>
                    <a style="text-decoration: none;" href="{{url('national-soft/soft-facturas/movil')}}">
                        <img alt="expediente del trabajador" src="/images/products/sf/inelco-sf-smartphone.png"/>
                    
                    </center>
                    <h3 class="text-center">Aplicación Móvil</h3></a>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="calculo de impuestos" src="/images/products/sf/inelco-sf-users.png"/>
                    </center>
                    <h3 class="text-center">Gestión de usuarios</h3>
                </div>
            </div>
            <div class="row row-icons">
                <div class="col-md-3">
                    <center>
                        <img alt="pago de los trabajadores" src="/images/products/sf/inelco-sf-personalizar-doc.png"/>
                    </center>
                    <h3 class="text-center">Personalización de comprobantes</h3>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sf/inelco-sf-programar-comp.ico"/>
                    </center>
                    <h3 class="text-center">Programar comprobantes</h3>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sf/inelco-sf-catalogo.png"/>
                    </center>
                    <h3 class="text-center">Catálogo de productos</h3>
                </div>
                <div class="col-md-3">
                    <center>
                        <img alt="comunicacion directa con el imms" src="/images/products/sf/inelco-sf-resguardo.png"/>
                    </center>
                    <h3 class="text-center">Resguardo de información</h3>
                </div>
            </div>
        </div>
    </section>
<br>
      <section class="movil ac_content sf-pages">
        <div class="container">
            <div class="row">
                <div class="wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s" >
                <div class="col-md-12">
                  <h2 class="text-center">¿Que necesitas para utilizar Soft Facturas<sup>®</sup>?</h2>
                </div>
                <br>
                <br>
                    <div class="col-md-5">
                        <img src="/images/products/sf/inelco-porque-facturar-sat.jpg" class="img-responsive">
                    </div>
                </div>
                    
                <div class="col-md-7">
                    <div class="wow flipInX"  data-wow-duration="2s" data-wow-delay="0.5s" >
                                                
                    </div>
                    <div class="wow slideInRight"  data-wow-duration="2s" data-wow-delay="0.5s" >
                        <h3>Verás que es muy sencillo comenzar a utilizarlo</h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse1"><p>Certificado de Sello Digital (CSD)</p></a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body"><p>Es un documento electrónico mediante el cual el SAT garantiza la vinculación entre la identidad de un sujeto o entidad y su clave pública.</p></div>
                                
                            </a>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" style="text-decoration: none;" href="#collapse2"><p>¿Para qué sirve el Certificado de Sello Digital?</p></a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body"><p>Los CSD son expedidos por el SAT, y para un propósito específico: firmar digitalmente las facturas electrónicas. Por medio de ellos, el contribuyente podrá sellar electrónicamente la cadena original de las facturas electrónicas que emita; así se garantiza el origen de la misma, la unicidad y las demás características que se heredan de los certificados de FIEL (integridad, no repudio y autenticidad).</p></div>
                              </div>
                            </div>
                             <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" style="text-decoration: none;" href="#collapse3"><p>Otros requerimientos</p></a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                <p>Conexión a Internet.</p>
                                <p>Navegadores (Google Chrome, Mozilla Firefox, Safari).</p>
                                </div>
                              </div>
                            </div>

                        
                    </div> 
                    
                        <br>
                        <br>


                </div>

            </div>

                   
            <div class="container">
            <div class="row">
                <div class="wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.5s" >
               
                <br>
                <br>
                   
                    
                <div class="col-md-7">
                    <div class="wow flipInX"  data-wow-duration="2s" data-wow-delay="0.5s" >
                                                
                    </div>
                    <div class="wow slideInRight"  data-wow-duration="2s" data-wow-delay="0.5s" >
                        <h3 class="text-center">Crear tu cuenta de Soft Facturas<sup>®</sup></h3>
                       
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse1"><p>Certificado de Sello Digital (CSD)</p></a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body"><p>Para ingresar al servicio y empezar a expedir comprobantes fiscales digitales <a style="color: #E96158; text-decoration: none;" href="{{ url('/contacto')}}">comunícate con nosotros </a>.</p>
                                <p>Contrate ya alguno de nuestros paquetes de folios para poder emitir los Comprobantes Fiscales Digitales y comience a facturar electrónicamente usando nuestro servicio Soft Facturas.</p></div>
                                
                            </a>
                              </div>
                            </div>
                         

                        
                    </div> 
                   




                </div>


            </div>
            <div class="col-md-5">
                      <a href="{{ url('/contacto')}}" >  <img src="/images/products/sf/incelco-sf-crea-cuenta.png" class="img-responsive"></a>
                    </div>
                </div>

        </div>
        </div>

    </section>

     <section class="secciones sf-pages timbres">
    <div >
       <div class="container">
            
        <div class="row">
        <h2 class="text-center">Recuerda que para utilizar <strong>Soft Facturas</strong> sólo es necesario adquirir un paquete de timbres. Te ofrecemos las siguientes opciones:</h2>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Timbres</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20</td>
                                <td>$100</td>                            
                            </tr>
                            <tr>
                                <td>100</td>
                                <td>$199</td>                            
                            </tr>
                            <tr>
                                <td>200</td>
                                <td>$379</td>                            
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>$549</td>                            
                            </tr>
                            <tr>
                                <td>500</td>
                                <td>$899</td>                            
                            </tr>
                            <tr>
                                <td>1000</td>
                                <td>$1589</td>                            
                            </tr>
                            <tr>
                                <td>5000</td>
                                <td>$4599</td>                            
                            </tr>
                            <tr>
                                <td>10000</td>
                                <td>$8999</td>                            
                            </tr>
                            <tr>
                                <td>50000</td>
                                <td>$33899</td>                            
                            </tr>
                        </tbody>
                    </table>
                </div>                    
            </div>

        </div>  
        <br>
            <center>
                <p>
                   * Precios en moneda nacional + IVA.    
                </p>
            </center>      
        <br>
        <br>
            <center>
                <a href="{{ url('/contacto')}}">
                    <button class="btn btn-default btn-lg comprar">Comprar timbres</button>    
                </a>
            </center>         
       </div> 
       </div>
    </section>


     <section class=" secciones sf-pages" id="descargar">
        <div class="container">
            <div class="row">
            <h2 align="center">Descarga la aplicación GRATIS desde Play Store</h2>
               

                <div class="tour-caption " ">

                    <a href="https://play.google.com/store/apps/details?id=com.nationalsoft.softfacturas" target="_blank"><img alt="inelco-aspel-coi-transp" class="img-responsive" onmouseover="this.width=250;this.height=150;" onmouseout="this.width=200;this.height=100;" width="200" height="100" alt="" src="/images/products/google-play.png"></a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>


    @include('national-soft.soft-facturas.menu-sf')

@endsection

@push('add-js')
    <script src="/js/jquery.slides.js"></script>
    <script src="/js/home.js"></script>
    <script src="/js/global.js"></script>
    @stack('files-menu')
    <script>
        $("body").attr('pagina','Productos');
    </script>   
@endpush
