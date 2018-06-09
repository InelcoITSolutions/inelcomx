<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-sm-12 footer-w3ls1">
                <div class="inner footer-w3ls2">
                    <div align="left" class="logo">
                        <img alt="" class="img-responsive" height="60" src="/images-new/inelco/logos/inelco-logo-solucionespararestaurantes.png" width="300"/>
                    </div>
                    <p class="descripcion">
                        <span style="font-weight: 600">Soluciones para Restaurantes</span> es <span style="font-weight: 600">el área espeacializada</span> de Inelco IT Solutions dedicada a ofrecer soluciones a empresas del sector de alimentos y bebidas.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                                    </i>
                                    <a href="tel:528113522222"> (81) 1352 2222</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <ul>
                                <li>
                                    <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                                    </i>
                                    <a href="mailto:contacto@solucionespararestaurantes.mx">
                                    contacto@solucionespararestaurantes.mx
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-sm-12 footer-w3ls2">
                <div class="titulos">
                    <h4>
                        Contáctanos
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="cd1">
                        Monterrey
                    </h4>
                    <ul>
                        <li>
                            <div class="pull-left">
                                <i aria-hidden="true" class="glyphicon glyphicon-globe">
                                </i>
                            </div>
                            <div class="sppb-media-body">
                                <a href="https://www.google.com/maps/place/Inelco+IT+Solutions/@25.678022,-100.289007,16z/data=!4m5!3m4!1s0x0:0xa261ff913e98ee9e!8m2!3d25.6780221!4d-100.2890072?hl=es-MX" target="_blank">
                                Edificio Cintermex, Local 18PB, 
                                <br>
                                    Av. Fundidora N° 501 Int. 18
                                    <br>
                                        64010 Monterrey, NL
                                    </br>
                                </br>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                            </i>
                            <a href="tel:528113522222"> (81) 1352 2222</a>
                        </li>
                        {{--
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                            </i>
                            <a href="mailto:example@mail.com">
                                contacto@inelco.com.mx
                            </a>
                        </li>
                        --}}
                    </ul>
                    <br>
                </div>

                <div class="col-md-6">
                    <h4 class="cd2">
                        San Luis Potosí
                    </h4>
                    <ul>
                        <li>
                            <div class="pull-left">
                                <i aria-hidden="true" class="glyphicon glyphicon-globe">
                                </i>
                            </div>
                            <div class="sppb-media-body">
                                <a href="https://www.google.com/maps/place/SYCA+CAMBIA+INNOVA+Y+CRECE+SA+DE+CV/@22.4670902,-101.5905836,8.25z/data=!4m5!3m4!1s0x0:0xf1fd872896dfa8!8m2!3d22.1494476!4d-100.9930479" target="_blank">
                                Mariano Otero N° 610 Int.3
                                <br>
                                    Col. Tequisquiapan
                                    <br>
                                        78250 San Luis Potosí, SLP
                                    </br>
                                </br>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                            </i>
                            <a href="tel:528113522222"> (444) 211 9009</a>
                        </li>
                        {{--
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                            </i>
                            <a href="mailto:example@mail.com">
                                contacto@inelco.com.mx
                            </a>
                        </li>
                        --}}
                    </ul>
                </div>
            </div>
        </div>
        <ul class="social-icons1">
            <li>
                <a href="https://www.facebook.com/softrest" target="_blank">
                    <i class="fa fa-facebook" >

                    </i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/@SolucionesRest" target="_blank">
                    <i class="fa fa-twitter">
                    </i>
                </a>
            </li>  
            
            {{--
            <li>
                <a href="">
                    <i aria-hidden="true" class="fa fa-google-plus">
                    </i>
                </a>
            </li>
            --}}
            {{--
            <li>
                <a href="#">
                    <i class="fa fa-whatsapp">
                    </i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube">
                    </i>
                </a>
            </li>
            --}}
        </ul>
        @php
            $host= $_SERVER["HTTP_HOST"];
            $url= $_SERVER["REQUEST_URI"];
            $direc= "http://" . $host . $url;            
        @endphp
        @if($direc == 'https://www.facebook.com/softrest' OR $direc == 'http://aspelsoluciones.dev:8080/nuevo-noi' OR $direc == 'https://www.facebook.com/softrest')
        {{--plugin de botones de facebook--}}
        <div class="fb-like" data-action="like" data-href="https://www.facebook.com/softrest" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @elseif($direc == 'http://aspelsoluciones.dev:8080/actualizacion-noi' OR $direc == 'http://www.solucionespararestaurantes.mx' OR $direc == 'http://www.solucionespararestaurantes.mx/')
        <div class="fb-like" data-action="like" data-href="http://www.solucionespararestaurantes.mx" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @endif
        <p class="copyright">
        Copyright © Todos los Derechos Reservados Inelco IT Solutions S.A. de C.V. Monterrey, México 2018
        </p>
    </div>
</section>