@extends('templates.principal')

@section('name_title','Promociones | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/mis-estilos.css">

    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush

@section('contenido')

    @include('promociones.banner-promociones')

{{-- <div class="row gray-img" id="mas"></div> --}}

<section id="aspel" class="descripcion-prod aspel-pages secciones ">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom:-80px;">
                <h2>Frase introducción a promos</h2>
{{--                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illum eveniet minus facere aliquid facilis rem sed dolores qui, eaque, obcaecati quod eligendi deleniti ab provident asperiores distinctio veniam tempora amet architecto voluptas? Unde ipsum alias, adipisci quae pariatur, expedita, natus fuga, aut aperiam omnis sint impedit. Magnam, blanditiis ducimus.</p>  --}}
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     INICIO SECCIÓN PARA ¡PROMOCIONES! ASPEL SAE
    ============================================= -->

<section class="p-list h5-list title-list1" id="caract-icrm">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="/images-new/inelco/otros/inelco-promos-aspel-sae-banco.png" alt="Paquete aspel sae y banco" style="width: 300px;height: 150px;margin-bottom: 24px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="title-h2">
                    Frase para interfaz
                </p>
            </div>
        </div>
        <div class="row">
            <div style="margin-left:1000px;"></div>
            <div class="col-md-3 col-md-offset-1 box-solutions pullUp" style="margin-right: 6px;margin-left: 160px;">
                <span style="text-align: center;" class="fa fa-certificate fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400">Bundle con 16% de descuento.</span></h4>
                <br>
                <p>Lorem ipsum dolor sit amet.</p>
                <h3><span style="font-weight: 400">Paquete:</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-promos">
                    <p class="text-center"><span class="colorprof preci" style="font-size: 52px;">SAE + BANCO</span></p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row  ">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel SAE 7.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;Descuento adicional en Inelco</h5>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="fa fa-asterisk"></span>&nbsp;&nbsp;Sólo usuarios nuevos</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <a href="#ventana1"> 
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-inelco" id="btn-sae">Adquirir ahora</button></a>
                </a>
            </div>

            <div class="col-md-3 box-solutions pullUp" style="margin-right: 6px;">
                <span style="text-align: center;" class="fa fa-certificate fa-3x fa-fw"></span>
                <h4><span style="font-weight: 400">SAE con 3 meses gratis de banco o un 25% de descuento en banco.</span></h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <h3><span style="font-weight: 400">Paquete:</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-promos">
                    <p class="text-center"><span class="colorprof preci" style="font-size: 52px;">SAE + BANCO</span></p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row  ">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel SAE 7.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;Descuento adicional en Inelco</h5>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <br>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <a href="#ventana1"> 
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-inelco" id="btn-sae">Adquirir ahora</button></a>
                </a>
            </div>
            <div class="col-md-3 box-solutions pullUp">
                <span style="text-align: center;" class="fa fa-certificate fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400">Suscribete a SAE y obten un mes gratis.</span></h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <h3><span style="font-weight: 400">Paquete:</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-promos">
                    <p class="text-center"><span class="colorprof preci" style="font-size: 52px;">SAE + BANCO</span></p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row  ">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel SAE 7.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;Descuento adicional en Inelco</h5>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="fa fa-asterisk"></span>&nbsp;&nbsp;Sólo si migras a SAE</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <a href="#ventana1"> 
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-inelco" id="btn-sae">Adquirir ahora</button></a>
                </a>
            </div>
        </div>

<!-- -.-.-.-.-.-.-.-.-.-. SEPARADOR -.-.-.-.-.-.-.-.-.-. 

        <div class="row">
            <div style="margin-left:1000px;"></div>
            <div class="col-md-3 col-md-offset-1 box-solutions pullUp" style="margin-right: 6px;margin-left: 160px;">
                <span style="text-align: center;" class="fa fa-certificate fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400">Bundle con 16% de descuento.</span></h4>
                <br>
                <p>Lorem ipsum dolor sit amet.</p>
                <h3><span style="font-weight: 400">Paquete:</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-promos">
                    <p class="text-center"><span class="colorprof preci" style="font-size: 52px;">SAE + BANCO</span></p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row  ">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel SAE 7.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;Descuento adicional en Inelco</h5>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="fa fa-asterisk"></span>&nbsp;&nbsp;Sólo usuarios nuevos</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <a href="#ventana1"> 
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-inelco" id="btn-sae">Adquirir ahora</button></a>
                </a>
            </div>
            <div class="col-md-3 box-solutions pullUp" style="margin-right: 6px;">
                <span style="text-align: center;" class="fa fa-certificate fa-3x fa-fw"></span>
                <h4><span style="font-weight: 400">SAE con 3 meses gratis de banco o un 25% de descuento en banco.</span></h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <h3><span style="font-weight: 400">Paquete:</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-promos">
                    <p class="text-center"><span class="colorprof preci" style="font-size: 52px;">SAE + BANCO</span></p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row  ">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel SAE 7.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;Descuento adicional en Inelco</h5>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <br>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <a href="#ventana1"> 
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-inelco" id="btn-sae">Adquirir ahora</button></a>
                </a>
            </div>
            <div class="col-md-3 box-solutions pullUp">
                <span style="text-align: center;" class="fa fa-certificate fa-3x fa-fw"></span>
                <h4> <span style="font-weight: 400">Suscribete a SAE y obten un mes gratis.</span></h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <h3><span style="font-weight: 400">Paquete:</span></h3>
                <span style="display:block;"></span>
                <div class="row plan-features-promos">
                    <p class="text-center"><span class="colorprof preci" style="font-size: 52px;">SAE + BANCO</span></p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row  ">
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel SAE 7.0</h5>
                    <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Licencia Aspel BANCO 4.0</h5>
                    <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;Descuento adicional en Inelco</h5>
                    <h5><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;Precio en Moneda Nacional + IVA</h5>
                    <h5><span class="fa fa-asterisk"></span>&nbsp;&nbsp;Sólo si migras a SAE</h5>
                    <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye servicios de instalación</h5>
                    <span style="display:block;"></span>
                </div>
                <a href="#ventana1"> 
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-inelco" id="btn-sae">Adquirir ahora</button></a>
                </a>
            </div>
        </div>-->
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div style="text-align: justify;color:red;">
                <p>Promoción válida del 1° al 31° de Junio de 2017 en pago de contado. Precios en MXN + IVA. Promoción válida exclusivamente en Republica Mexicana. Aplica únicamente a versiones 9.0 Professional, 9.0 Standard. No incluye servicio servicios de instalación. No incluye captura de base de datos. No aplica para licencias nuevas. No incluye cambios de datos fiscales. La academia Online es para aprendizaje autodidacta. La versión 9.5 de Soft Restaurant incluye la actualización del SAT en CFDI 3.3 vigente a partir del 1° de Julio del 2017. </p>
            </div>
        </div>
    </div>
</section>
<hr>
        
    <section class="secciones nosotros-span">
        <div class="container">
            <div class="row" style="border:1px solid #d9d9d9;">
                <div class="col-md-4">
                    <h4 class="text-center">
                        <i class="fa fa-user-plus fa-2x" aria-hidden="true" style="color:#1e3662"></i>
                         Dirigida a:
                     </h4>
                    <p class="text-center" style="color:#595959;">Nuevos usuarios.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="text-center">
                        <i class="fa fa-certificate fa-2x" aria-hidden="true" style="color:#1e3662;"></i>
                         Promoción
                    </h4>
                    <p style="font-style: justify;color:#595959;">COMBO Aspel-SAE + Aspel-BANCO con 25% de descuento sobre el valor de la licencia de Aspel-BANCO.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="text-center">
                        <i class="fa fa-desktop fa-2x" aria-hidden="true" style="color:#1e3662"></i>
                         Sistemas
                     </h4>
                    <img src="/images-new/inelco/otros/inelco-promos-aspel-sae-banco.png" alt="Paquete aspel sae y banco" class="center-block" style="width: 170px;height: 82px;">
                    <a style="text-decoration:none" href="https://survey.zohopublic.com/zs/QLCuPP" target="_blank">
                        <button type="button" class="btn btn-primary btn-inelco center-block" id="btn-sae" style="margin-top: 16px">
                            Adquirir ahora
                        </button>
                    </a>
                </div>                 
            </div>
        </div>
    </section>

<section>
    <div class="container">
        <div class="row">
            <div style="text-align: justify;color:red;">
                <p>Promoción válida del 1° al 31° de Junio de 2017 en pago de contado. Precios en MXN + IVA. Promoción válida exclusivamente en Republica Mexicana. Aplica únicamente a versiones 9.0 Professional, 9.0 Standard. No incluye servicio servicios de instalación. No incluye captura de base de datos. No aplica para licencias nuevas. No incluye cambios de datos fiscales. La academia Online es para aprendizaje autodidacta. La versión 9.5 de Soft Restaurant incluye la actualización del SAT en CFDI 3.3 vigente a partir del 1° de Julio del 2017. </p>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="p-list  h5-list title-list1 " id="caract-icrm">
    <div class="container-fluid">
        <div class="col-md-1" id="prim">
        </div>
        <div class="col-md-2 box-solutions pullUp" id="listpres-color1">
            <h3><b>Aspel</b></h3>
            <p>Actualización en suscripción de:</p>
            <p class="text-center"><span class="preci">SAE 7.0</span></p>
            <p align="center">1 mes gratis</p>
            <span style="display:block;margin-top: 18px"></span>
            <div class="plan-features">
                <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Suscripción SAE 7.0</h5>
                <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;-20% en poliza</h5>
                <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;-20% en curso</h5>
            </div>
            <br>
            <div class="plan-features1">
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Lorem ipsum dolor.</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Lorem ipsum dolor.</h5>
                <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye implementación</h5>
                <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Lorem ipsum dolor.</h5>
            </div>
            <a href="https://incrementacrm.com/invite-code/inelco" target="_blank">
                <button type="button" class="btn btn-primary btn-inelco">¡Contratar ahora!</button>
            </a>
        </div>
        <div class="col-md-2 box-solutions pullUp" id="listpres-color">
            <h3><b>Aspel</b></h3>
            <p>Actualización en suscripción de:</p>
            <p class="text-center"><span class="preci">SAE 7.0</span></p>
            <p align="center">1 mes gratis</p>
            <span style="display:block;margin-top: 18px"></span>
            <div class="plan-features">
                <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Suscripción SAE 7.0</h5>
                <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;-20% en poliza</h5>
                <h5><span class="fa fa-percent"></span>&nbsp;&nbsp;-20% en curso</h5>
            </div>
            <br>
            <div class="plan-features1">
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Lorem ipsum dolor.</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Lorem ipsum dolor.</h5>
                <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;No incluye implementación</h5>
                <h5><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Lorem ipsum dolor.</h5>
            </div>
            <a href="https://incrementacrm.com/invite-code/inelco" target="_blank">
                <button type="button" class="btn btn-primary btn-inelco">¡Contratar ahora!</button>
            </a>
        </div>
        <div class="col-md-2 box-solutions pullUp" id="promos-color">
            <h3><b>Aspel</b></h3>
            <p align="center"><span class=" colorprof">Actualización en suscripción de:</span></p>
                        <p class="text-center"><span class=" colorprof  preci">SAE 7.0</span></p>
            <p align="center"><span class=" colorprof">en pago mensual</span></p>
            <br>
            <div class="plan-features">
                <H5><span class=" colorprof glyphicon glyphicon-user" aria-hidden="true"></span><span class=" colorprof">&nbsp;&nbsp;15,000 clientes</span></H5>
                <h5><span class="colorprof glyphicon glyphicon-envelope"></span><span class=" colorprof">&nbsp;&nbsp;4,000 correos/mes</span></h5>
                <h5><span class="colorprof glyphicon glyphicon-paperclip"></span><span class=" colorprof">&nbsp;&nbsp;2 GB para adjuntos</span></h5>
            </div>
            <br>
            <div class="plan-features1">
                <H5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Cotizaciones</span></H5>
                <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Geolocalización</span></h5>
                <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Seguimiento automático</span></h5>
                <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;Campos personalizados</span></h5>
                <h5><span class="colorprof glyphicon glyphicon-ok"></span><span class=" colorprof">&nbsp;&nbsp;15 días de prueba</span></h5>
            </div>
            <a href="#">
                <button type="button" class="btn btn-default">¡Contrata ahora!</button>
            </a>
        </div>
        <div class="col-md-2 box-solutions pullUp" id="listpres-color">
            <h3><b>Empresarial</b></h3>
            <p align="center"> 10 Usuarios</p>
            <p class="text-center"> <span class="symbol">$</span><span class="preci">2,950 </span><span class="code">MXN</span><span class="period">Mes</span></p>
            <p align="center">en pago mensual</p>
            <br>
            <div class="plan-features">
                <H5><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;25,000 clientes</H5>
                <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;6,000 correos/mes</h5>
                <h5><span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;3 GB para adjuntos</h5>
            </div>
            <br>
            <div class="plan-features1">
                <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cotizaciones</H5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Geolocalización</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Seguimiento automático</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Campos personalizados</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;5 días de prueba</h5>
            </div>
            <a href="#">
                <button type="button" class="btn btn-primary btn-inelco">¡Contratar ahora!</button>
            </a>
        </div>
        <div class="col-md-2 box-solutions pullUp" id="listpres-color">
            <h3><b>Corporativo</b></h3>
            <p align="center"> 20 Usuarios</p>
            <p class="text-center"> <span class="symbol">$</span><span class="preci">3,950 </span><span class="code">MXN</span><span class="period">Mes</span></p>
            <p align="center">en pago mensual</p>
            <br>
            <div class="plan-features">
                <H5><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;45,000 clientes</H5>
                <h5><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;9,000 correos/mes</h5>
                <h5><span class="glyphicon glyphicon-paperclip"></span>&nbsp;&nbsp;4 GB para adjuntos</h5>
            </div>
            <br>
            <div class="plan-features1">
                <H5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Cotizaciones</H5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Geolocalización</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Seguimiento automático</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Campos personalizados</h5>
                <h5><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;5 días de prueba</h5>
            </div>
            <a href="#">
                <button type="button" class="btn btn-primary btn-inelco">¡Contratar ahora!</button>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div style="text-align: justify;color:red;">
                <p>Promoción válida del 1° al 31° de Junio de 2017 en pago de contado. Precios en MXN + IVA. Promoción válida exclusivamente en Republica Mexicana. Aplica únicamente a versiones 9.0 Professional, 9.0 Standard. No incluye servicio servicios de instalación. No incluye captura de base de datos. No aplica para licencias nuevas. No incluye cambios de datos fiscales. La academia Online es para aprendizaje autodidacta. La versión 9.5 de Soft Restaurant incluye la actualización del SAT en CFDI 3.3 vigente a partir del 1° de Julio del 2017. </p>
            </div>
        </div>
    </div>
</section>
<!-- -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-
    FIN SECCIÓN PARA ¡PROMOCIONES! ASPEL SAE
    ============================================= -->

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
