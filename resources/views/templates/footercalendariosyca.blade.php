<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-6 col-sm-6 footer-w3ls1">
                <div class="inner footer-w3ls2">
                    <div align="left" class="logo">
                        <img alt="" class="img-responsive" height="60" src="/images/calendarioSyca/Inelco-logo-syca-blanco.png" width="180"/>
                    </div>
                    <p class="descripcion">
                        En
                        <b>
                            Syca Consultores
                        </b>
                        te ayudamos a mejorar y automatizar el control de tu negocio a través de tecnología, sistemas administrativos y consultoría de bajo costo y alto impacto.
                        
                        Por que con <b>Syca cambia, Innova y crece</b> 
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                                </i>
                                01  (444) 211 9009
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                                </i>
                                <a href="mailto:ventas@syca.com.x">
                                ventas@syca.com.mx
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-sm-6 footer-w3ls2">
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
                                Edificio Cintermex
                                <br>
                                    Av. Fundidora N° 501 Int. 18
                                    <br>
                                        64010 Monterrey, NL
                                    </br>
                                </br>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                            </i>
                            (81) 1352 2222
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
                                Mariano Otero N° 610 Int.3
                                <br>
                                    Col. Tequisquiapan
                                    <br>
                                        78250 San Luis Potosí, SLP
                                    </br>
                                </br>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                            </i>
                            (444) 211 9009
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
                <a href="https://www.facebook.com/SYCACONSULTORES" target="_blank">
                    <i class="fa fa-facebook" >

                    </i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/@SYCACONSULTORES" target="_blank">
                    <i class="fa fa-twitter">
                    </i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/syca-consultores?report%2Esuccess=8zaNG1HwhPbAR9iQhZ5rfGeqz_vQFftHun0ZWU0Wy9vNemRJ8vtcKdJvzQfW8XagyOJSKg0XvfJ1dp" target="_blank">
                    <i class="fa fa-linkedin">
                    </i>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCKRDtGHIJnGIaC6CHnK3SAQ" target="_blank">
                    <i class="fa fa-youtube">
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
        @if($direc == 'https://www.facebook.com/SYCACONSULTORES' OR $direc == 'http://aspelsoluciones.dev:8080/nuevo-noi' OR $direc == 'https://www.facebook.com/SYCACONSULTORES')
        {{--plugin de botones de facebook--}}
        <div class="fb-like" data-action="like" data-href="https://www.facebook.com/SYCACONSULTORES" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @elseif($direc == 'http://aspelsoluciones.dev:8080/actualizacion-noi' OR $direc == 'http://aspelsoluciones.com/actualizacion-noi' OR $direc == 'http://www.aspelsoluciones.com/actualizacion-noi')
        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/actualizacion-noi" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @endif
        <p class="copyright">
         © 2017 Todos los derechos reservados de SYCA Consultores
        </p>
    </div>
</section>