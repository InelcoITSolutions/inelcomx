@extends('templates.principal')


@section('name_title','Lo nuevo Soft Restaurant | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <!--<link href="/css/reset-com-table.css" rel="stylesheet"/>-->
      <link href="/css/animations.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.js">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')
    @include('national-soft.soft-restaurant.banner-sr-nuevo')

    <section class="secciones sr-pages soluciones-sr" id="lo-nuevo-sr">
        <div class="container">
            <h2 class="title-h2"> <b>Nueva</b> versión en Soft Restaurant<sup>®</sup> 9.5</h2>
            <h3 class="title-h3">Seguridad, facilidad y control para tu restaurante</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/lo-nuevo/Inelco-softrestaurant-cfdi3.png"/>
                        </center>
                        <h5 class="title-h5">CFDI 3.3 </h5>
                        <p>Para que la transición a este nuevo esquema de facturación sea lo más sencilla posible, la actualización de la nueva versión del SAT de CFDI 3.3 se realizará de manera automática, una vez que esta entre en vigor.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/lo-nuevo/Inelco-softrestaurant-star.png"/>
                        </center>
                        <h3 class="title-h5">Mejora en la función de explosión de productos </h3>
                        <p>Para pedidos a gran escala esta función ahora cuenta con un histórico en el que usted podrá agregar, editar o eliminar productos de acuerdo al número de comensales. Genere órdenes de compra a partir de sus explosiones y calcule el costo de la materia prima. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/lo-nuevo/Inelco-softrestaurant-control.png"/>
                        </center>
                        <h5 class="title-h5">Controla tu inventario de manera más fácil</h5>
                        <p>Función opcional para que un descuento general se aplique a una promoción. Al activar la función, usted determina que debe aplicarse un descuento general, sobre el producto que ya esta en promoción, como el 2x1 en cervezas. De lo contrario, el descuento sólo se aplicará a productos libres de promociones. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/lo-nuevo/Inelco-softrestaurant-mesa.png"/>
                        </center>
                        <h5 class="title-h5">Indicadores de mapa de mesas </h5>
                        <p>Agiliza la rotación de clientes. El mapa de mesas le indica el consumo promedio de cada mesa para determinar el empuje de venta. Ayuda a supervisar el desempeño del personal mostrando el tiempo desde que se abrió la cuenta y el tiempo de la última orden capturada. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/lo-nuevo/Inelco-softrestaurant-shield.png"/>
                        </center>
                        <h5 class="title-h5">Nuevas funciones de seguridad </h5>
                        <p>Recibe alertas anti-fraude en tiempo real por correo electrónico. Determine el número de sucesos que puedan representar una actividad irregular durante la operación de su negocio. La alerta se activa al rebasar el límite programado de una incidencia en el sistema y lo notifica en el momento que sucede. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-solutions">
                        <center>
                            <img alt="disposiciones fiscales" src="/images/products/sr/lo-nuevo/Inelco-softrestaurant-lock.png"/>
                        </center>
                        <h5 class="title-h5">Delimita los pagos en moneda extranjera </h5>
                        <p>Función que le permite delimitar la cantidad máxima de pagos en efectivo recibidos en moneda extranjera de acuerdo a los parámetros que usted establezca. Opcional. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secciones sr-pages soluciones-sr">
        <div class="container">

            <h3 class="title-h3">Conoce la versión ideal para tu negocio</h3>
            <h4 class="title-h4">La versión <b>Standard</b> es ideal para pequeños establecimientos, la versión <b>Professional</b> ofrece mayor seguridad y rendimiento en el resguardo de su información.</h4>
            <p>Cuenta con diversos reportes, facturación, control de recetas, inventarios, almacenes, mesas, reservaciones, servicio rápido, drive thru, a domicilio, módulos de fidelización de clientes, monitor de producción, módulos adicionales, mapeo de mesas, control antifraudes y muchas características más.</p>

            <div class="tablacomp">
                <div class="row">   
                    <div class="col-md-6 tablacomp-frase">
                        <p>A continuación te mostramos las caracteristicas de cada versión, elige la versión con la que mas te idenfiques</p>
                    </div>
                    <div class="col-md-6 tablacomp-product">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <center><img src="/images/products/sr/inelco-softrestaurant-standard.png" alt="Professional" class="img-responsive"></center>
                                <!--<h5 class="title-h5">Standard</h5>-->
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <center><img src="/images/products/sr/inelco-softrestaurant-professional.png" alt="Professional" class="img-responsive"></center>
                                <!--<h5 class="title-h5">Professional</h5>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">   
                    <h5 class="title-h5">Comandero</h5>
                    <div class="col-md-6 tablacomp-caract">
                        <p>Ventanas de estadísticas en comandero</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">   
                    <div class="col-md-6 tablacomp-caract">
                        <p>Botones personalizables</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Interfaz más moderna y amigable</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Promociones configurables en pantalla</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Notificaciones de productos y bebidas menos vendidos</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tablacomp-row">   
                    <h5 class="title-h5">Servicio a domicilio</h5>
                    <div class="col-md-6 tablacomp-caract">
                        <p>Coloreado de cuentas con repartidor asignado. Permite ver en un solo momento las cuentas que ya han sido enviadas.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Últimos pedidos en servicio domicilio</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Asignación de propinas incluida también en servicio rápido</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row tablacomp-row">   
                    <h5 class="title-h5">Otras funciones</h5>
                    <div class="col-md-6 tablacomp-caract">
                        <p>Nuevo diseñador de tickets: Se pueden asignar por estación y establecer numero de copias</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Personalización de permisos para catálogos en el perfil de usuarios.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Reporte de comisiones de meseros.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Alertas de existencia.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Uso de báscula en compras.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Impresión de movimientos de almacén en miniprinter o tamaño carta.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Manejo de turnos por usuario.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Imprimir folio de orden de producción (Config. general Punto de venta I).</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Configuración de colores en monitor de producción.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Configurar tipo de mesa para cobro de billar.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Salva guarda de caja.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class=" icon-cross2 no"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Visualización de recetas en catálogo de productos e insumos elaborados.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class=" icon-cross2 no"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-row">
                    <div class="col-md-6 tablacomp-caract">
                        <p>Compatible con Soft Restaurant<sup>®</sup> Móvil</p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class=" icon-cross2 no"></p>
                            </div>
                            <div class="col-sm-6 col-xs-6 tablacomp-field">
                                <p class="icon-check yes"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tablacomp-btn">
                    <div class="col-md-6 ">
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </section>


<section id="mas">
</section>
     <section class="word-frase sections " id="frase-sr">
        <div class="fondo-gray">
            <div class="container">
                <h2>
                 Conoce nuestras promociones de actualización para las siguientes versiones. 
                </h2>
                 <center >
                        <a class="ancla" href="#promo90" id="btn-sr-vm">
                            <button class="btn btn-lg" id="btn-version-sr">
                                Versión 9.0
                            </button>
                        </a>
                        <a class="ancla" href="#promo80" id="btn-sr-vm">
                            <button class="btn btn-lg" id="btn-version-sr">
                                Versión 8.0 u anteriores
                            </button>
                        </a>
                        
                </center>

            </div>
        </div>
    </section>
    <br>
    <br>
<section  class="sr-pages soluciones-sr">
<div class="container">
<h2 id="promo90" class="title-h2" >Promociones para versiones 9.0 a 9.5  </h2>
</div>
</section>
   <section  class="p-list  h5-list title-list1 " id="caract-icrm" >
        <div class="container-fluid">
           
           
            <div class="col-md-5" id="prim2">
            
            </div>
                <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2" >
                <span style="text-align: center;" class="fa fa-star fa-3x fa-fw" aria-hidden="true"></span>
                <h4> <b> ¡Si ya tienes la versión 9.0 Professional actualízate a 9.5 Professional!</b></h4>
                <br>
                
                <p><b>¡Genera más dinero!</b> con todas la mejoras del nuevo Soft Restaurant Professional 9.5</p>

                  
                  <br>
                <div  class="row plan-features-sr">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">2,499 </span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi ">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;3 Meses de Monitor de Ventas Web</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;6 Meses de Academia Online</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;200 Timbres CFDI</h5>
                       
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Versión 3.3 del CFDI</h5>
                        <br>
                        <br>
                         <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        <br>
                        </div>
                        
                        <button id="btn-promo-sr" type="button" class="btn btn-lg " data-toggle="modal" data-target="#sr-90pro1" >Adquirir ahora</button>
                    </div>
                
               
                  <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1" >
                  <span class="fa fa-star-half-o fa-3x fa-fw" aria-hidden="true"></span>

                <h4> <b> ¡Si ya tienes la versión 9.0 Standard actualizacion con upgrade a 9.5 Professional! </b></h4>
                 <br>
                 <p> <b>¡Genera más dinero!</b> con todas la mejoras del nuevo Soft Restaurant Professional 9.5  </p>

                  

                  <br>
                <div  class="row plan-features-sr">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">3,999 </span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi ">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;3 Meses de Monitor de Ventas Web</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;6 Meses de Academia Online</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;200 Timbres CFDI</h5>
                       
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Versión 3.3 del CFDI</h5>
                        <br>
                        <br>
                         <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        </div>
                        <br>
                        <button id="btn-promo-sr" type="button" class="btn  btn-lg" data-toggle="modal" data-target="#sr-90pro1">Adquirir ahora</button>
                        
 


                    </div>
                
                   <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1" >
                   <span class="fa fa-star-o fa-3x fa-fw" aria-hidden="true"></span>

                 <h4> <b>¡Si ya tienes la versión 9.0 Standard actualízate a 9.5 Standard!</b></h4>
                    <br>
                   <br>
                    <p><b>¡No te quedes sin facturar!</b> a partir del 1° de Julio de 2017 la versión 3.3 del CFDI será obligatoria </p>


                  <br>
                <div  class="row plan-features-sr">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">2,499</span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi">
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;6 Meses de Academia Online</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;200 Timbres CFDI</H5>
                         <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Versión 3.3 del CFDI </H5>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        <br>
                        
                        </div>
                       <button id="btn-promo-sr" class="btn  btn-lg "  data-toggle="modal" data-target="#sr-90pro1">Adquirir ahora</button>
 


                    </div>
                
                

         

        </div>

    </section>
    <section class="secciones sr-pages soluciones-sr">
        <div class="container">
        
                 <p align="justify">Promoción válida del 1° al 31° de Julio de 2017 en pago de contado. Las promociones solo son válidas en pago de contado. Precios en MXN + IVA. Promoción válida exclusivamente en Republica Mexicana. Aplica únicamente a versiones 9.0 Professional, Standard 9.0. No incluye servicio servicios de instalación. No incluye captura de base de datos. No aplica para licencias nuevas. No incluye cambios de datos fiscales. La academia Online es para aprendizaje autodidacta. La versión 9.5 de Soft Restaurant incluye la actualización del SAT en CFDI 3.3 vigente a partir del 1° de Julio del 2017.</p>

       </div>
       </section>
       <br>
       <br>
    <section  class=" sr-pages soluciones-sr">
    <div class="container">
    <h2 id="promo80" class="title-h2" >Promociones para versiones 8.0 o anteriores a 9.5 </h2>
    </div>
    </section>
       <section class="p-list  h5-list title-list1 " id="caract-icrm" >
            <div class="container-fluid">
           
           
            <div class="col-md-5" id="prim2">
            
            </div>
                <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2" >
                <span style="text-align: center;" class="fa fa-star fa-3x fa-fw" aria-hidden="true"></span>
                <h4> <b> ¿Tienes Soft Restaurant Profesional en una versión 8.0  ?</b></h4>
                
                <br>
                <h3><b>¡Actualízate!</b> </h3>
                  
                  <br>
                <div  class="row plan-features-sr-abajo">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">4,999 </span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi ">
                        <H5><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;<b>10% DE DESCUENTO</b></H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;3 Meses de Monitor de Ventas Web</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;6 Meses de Academia Online</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;200 Timbres CFDI</h5>
                       
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Versión 3.3 del CFDI</h5>
                        <br>
                        <br>
                         <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        <br>
                        </div>
                        
                        <button id="btn-promo-sr-abajo" type="button" class="btn btn-lg " data-toggle="modal" data-target="#sr-90pro2" >Adquirir ahora</button>
                    </div>
                
               
                  <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1" >
                  <span class="fa fa-star-half-o fa-3x fa-fw" aria-hidden="true"></span>

                <h4> <b> ¿Tienes Soft Restaurant Standard en una versión 8.0/7.0 u anterior? </b></h4>
                 <br>
                 <h3> <b>Actualización + Upgrade</h3>

                  

                  <br>
                <div  class="row plan-features-sr-abajo">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">5,999 </span>

                                             

                </div>
                        
                       <br>
                        <h4><b>Incluye:</b></h4>
                       
                        <div class="row plan-features-coi ">
                        <H5><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;<b>10% DE DESCUENTO</b></H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;3 Meses de Monitor de Ventas Web</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;6 Meses de Academia Online</H5>
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;200 Timbres CFDI</h5>
                       
                        <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Versión 3.3 del CFDI</h5>
                        <br>
                        <br>
                         <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        </div>
                        <br>
                        <button id="btn-promo-sr-abajo" type="button" class="btn  btn-lg" data-toggle="modal" data-target="#sr-90pro2">Adquirir ahora</button>
                        
 


                    </div>
                
                   <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1" >
                   <span class="fa fa-star-o fa-3x fa-fw" aria-hidden="true"></span>

                 <h4> <b>¿Tienes Soft Restaurant en una versión Standard 8.0/7.0 u anterior?</b></h4>
                    
                   <br>
                    <h3><b>¡Actualízate!</b> </h3>


                  <br>
                <div  class="row plan-features-sr-abajo">
                        
                      <p class="text-center"> <span class=" colorprof symbol">$</span><span class=" colorprof  preci">3,850</span>

                                             

                </div>
                        
                        <br>
                        <h4>Incluye:</h4>
                       
                        <div class="row plan-features-coi">
                        <H5><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;<b>10% DE DESCUENTO</b></H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;6 Meses de Academia Online</H5>
                        <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;200 Timbres CFDI</H5>
                         <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Versión 3.3 del CFDI </H5>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                        <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                        <br>
                        
                        </div>
                       <button id="btn-promo-sr-abajo" class="btn  btn-lg "  data-toggle="modal" data-target="#sr-90pro2">Adquirir ahora</button>
 


                    </div>
                
                

         

        </div>

    </section>
    <section class="secciones sr-pages soluciones-sr">
        <div class="container">
        
                 <p align="justify">Promoción válida del 1° al 31° de Julio de 2017 en pago de contado. Las promociones solo son válidas en pago de contado. Precios en MXN + IVA. Promoción válida exclusivamente en Republica Mexicana. Aplica únicamente a versiones 8.0 Professional, Standard 8.0, 7.0 o anteriores. No incluye servicio servicios de instalación. No incluye captura de base de datos. No aplica para licencias nuevas. No incluye cambios de datos fiscales. La academia Online es para aprendizaje autodidacta. La versión 9.5 de Soft Restaurant incluye la actualización del SAT en CFDI 3.3 vigente a partir del 1° de Julio del 2017.</p>

       </div>
       </section>

<!-- BEGIN # MODAL LOGIN PROMOCION 9.0 PRO A 9.5 PRO -->
<div class="modal fade login-modal" id="sr-90pro1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

            <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
            <form action='https://crm.zoho.com/crm/WebForm'  name=WebForm2073942000003407017 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>


                <div class="modal-header" align="center">

                    <img class="img-circle" id="img_logo" src="/images/products/sr/inelco-sr-ventana-principal-popup.jpg">

                    <button type="button" onclick="this.form.reset();" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>

                </div>
                   <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5fc3cab013952893f1183e017a3f67a1a'/>
                    <input type='text' style='display:none;'  name='actionType' value='Q3VzdG9tTW9kdWxlNw=='/>

                    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx' /> 
                     <!-- Do not remove this code. -->
                  
  
                        <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="fa fa-user"></div>
                                <span id="text-login-msg">Actualización 9.0 A 9.5</span>
                            </div>
                <!-- nombre-->
              <input type='text' id="login_username" class="form-control" style='width:100%;'  placeholder="Nombre" maxlength='40' name='NAME' onkeypress="return minus(event)" required/>

            <!-- apellidos-->
               <input id="login_username" class="form-control" type="text" placeholder="Apellidos" name='COBJ7CF4' maxlength='40' onkeypress="return minus(event)" required>

            <!-- email-->
               <input id="login_username" class="form-control" type="email" placeholder="Correo" required name='Email'  maxlength='100' required>

             <!-- telefono-->
                <input id="apellidos" class="form-control" type="text" placeholder="Telefono" required name='COBJ7CF5' maxlength='10' onkeypress="return numeros(event)" required>

           <!-- telefono-->
             <input id="apellidos" class="form-control" type="text" placeholder="Empresa" required name='COBJ7CF6' maxlength='100' > 

             <br>
           <!-- comentarios-->
             <textarea id="login_username" class="form-control" style='width:100%; height: 100%; resize: none;' name='COBJ7CF1' placeholder="Comentarios" maxlength='1000'></textarea>

                     <input  type='text' style='width:250px; display: none;'  maxlength='255' name='COBJ7CF7' value='Soft&#x20;Restaurant&#x20;9.5'></input>
                     <input type='text' style='width:250px; display: none;'  maxlength='255' name='COBJ7CF12' value='Lo&#x20;nuevo&#x20;Soft&#x20;Restaurante&#x20;Inelco'></input>      

                        </div>

                        <div class="modal-footer">
                            <div>
                                <button id="btn-envio-sr-promo" type="submit" class="btn btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <p id="login_lost_btn" type="button" >Llegará una notificación a tú correo</p>
                            </div>
                        </div>
                      

 <script>
      var mndFileds=new Array('NAME');
      var fldLangVal=new Array('Nombre');
        var name='';
        var email='';

      function checkMandatory() {
        for(i=0;i<mndFileds.length;i++) {
          var fieldObj=document.forms['WebForm2073942000003407017'][mndFileds[i]];
          if(fieldObj) {
            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
             if(fieldObj.type =='file')
                { 
                 alert('Seleccione un archivo para cargar.'); 
                 fieldObj.focus(); 
                 return false;
                } 
            alert(fldLangVal[i] +' no puede estar vacío.'); 
              fieldObj.focus();
              return false;
            }  else if(fieldObj.nodeName=='SELECT') {
             if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                alert(fldLangVal[i] +' no puede ser nulo.'); 
                fieldObj.focus();
                return false;
               }
            } else if(fieldObj.type =='checkbox'){
             if(fieldObj.checked == false){
                alert('Please accept  '+fldLangVal[i]);
                fieldObj.focus();
                return false;
               } 
             } 
             try {
                 if(fieldObj.name == 'Last Name') {
                name = fieldObj.value;
                }
            } catch (e) {}
            }
        }
         }
       
</script>
    </form>
</div>
                <!-- End # DIV Form -->
            </div>
        </div>
    </div>
<!-- END # MODAL LOGIN -->

<!-- BEGIN # MODAL LOGIN PROMOCION 8.0 STD A 9.5 PRO -->
<div class="modal fade login-modal" id="sr-90pro2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

              <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                <form action='https://crm.zoho.com/crm/WebForm'  name=WebForm2073942000003407024 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>



                <div class="modal-header" align="center">

                    <img class="img-circle" id="img_logo" src="/images/products/sr/inelco-sr-ventana-principal-popup.jpg">

                    <button type="button" onclick="this.form.reset();" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>

                </div>
                 <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5fc7d33231e58dc8ca622bd80ed009339'/>
                    <input type='text' style='display:none;'  name='actionType' value='Q3VzdG9tTW9kdWxlNw=='/>

                    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx' /> 
                     <!-- Do not remove this code. -->
                                 
  
                        <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="fa fa-user"></div>
                                <span id="text-login-msg">Actualización 8.0 A 9.5 </span>
                            </div>
                                                    
             <!-- nombre-->
              <input type='text' id="login_username" class="form-control" style='width:100%;'  placeholder="Nombre" maxlength='40' name='NAME' onkeypress="return minus(event)" required/>

            <!-- apellidos-->
               <input id="login_username" class="form-control" type="text" placeholder="Apellidos" name='COBJ7CF4' maxlength='40' onkeypress="return minus(event)" required>

            <!-- email-->
               <input id="login_username" class="form-control" type="email" placeholder="Correo" required name='Email'  maxlength='100' required>

             <!-- telefono-->
                <input id="apellidos" class="form-control" type="text" placeholder="Telefono" required name='COBJ7CF5' maxlength='10' onkeypress="return numeros(event)" required>

           <!-- telefono-->
             <input id="apellidos" class="form-control" type="text" placeholder="Empresa" required name='COBJ7CF6' maxlength='100' > 

             <br>
           <!-- comentarios-->
             <textarea id="login_username" class="form-control" style='width:100%; height: 100%; resize: none;' name='COBJ7CF1' placeholder="Comentarios" maxlength='1000'></textarea>

                <input type='text' style='width:250px; display: none'  maxlength='255' name='COBJ7CF7' value='Soft&#x20;Restaurant&#x20;9.5'></input>
                <input type='text' style='width:250px; display: none'  maxlength='255' name='COBJ7CF12' value='Lo&#x20;nuevo&#x20;Soft&#x20;Restaurante&#x20;Inelco'></input>
                   
                        </div>

                        <div class="modal-footer">
                            <div>
                                <button id="btn-envio-sr-promo" type="submit" class="btn btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <p id="login_lost_btn" type="button" >Llegará una notificación a tú correo</p>
                            </div>
                        </div>
                      

 <script>
      var mndFileds=new Array('NAME');
      var fldLangVal=new Array('Nombre');
        var name='';
        var email='';

      function checkMandatory() {
        for(i=0;i<mndFileds.length;i++) {
          var fieldObj=document.forms['WebForm2073942000003407024'][mndFileds[i]];
          if(fieldObj) {
            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
             if(fieldObj.type =='file')
                { 
                 alert('Seleccione un archivo para cargar.'); 
                 fieldObj.focus(); 
                 return false;
                } 
            alert(fldLangVal[i] +' no puede estar vacío.'); 
              fieldObj.focus();
              return false;
            }  else if(fieldObj.nodeName=='SELECT') {
             if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                alert(fldLangVal[i] +' no puede ser nulo.'); 
                fieldObj.focus();
                return false;
               }
            } else if(fieldObj.type =='checkbox'){
             if(fieldObj.checked == false){
                alert('Please accept  '+fldLangVal[i]);
                fieldObj.focus();
                return false;
               } 
             } 
             try {
                 if(fieldObj.name == 'Last Name') {
                name = fieldObj.value;
                }
            } catch (e) {}
            }
        }
         }
       
</script>
    </form>
</div>
                <!-- End # DIV Form -->
            </div>
        </div>
    </div>
<!-- END # MODAL LOGIN -->


    @include('national-soft.soft-restaurant.menu-sr')
@stop

@push('add-js')
    @stack('files-menu')
    <script src="/js/comp-table.js"></script>
    <script>
        $("body").attr('pagina','Productos');
    </script>   
    <!--Script que sirve solo para numeros en el input de telefono-->
<script>
function numeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>

    <!--Script que sirve para validar solo letras en mayusculas y minusculas en el input-->
<script>
function minus(a){
    tecla = (document.all) ? a.keyCode : a.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta letras en minusculas y mayusculas asi como las acentuada en la parte de \8 la diagonal es para poner otra tecla y el 8 es el valor del espaciado
    patron =/[A-Za-z ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script> 
@endpush
