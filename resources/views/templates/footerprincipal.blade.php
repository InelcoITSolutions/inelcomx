<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-6 col-sm-6 footer-w3ls1">
                <div class="inner footer-w3ls2">
                    <div align="left" class="logo">
                        <img alt="" class="img-responsive" height="60" src="/images/iis_logo_blanco.png" width="117"/>
                    </div>
                    <p class="descripcion">
                        Brindamos
                        <b>
                            soluciones de tecnología y servicios
                        </b>
                          especializados en implementación, capacitación, consultoría y soporte para
                        <b>
                            pymes.
                        </b>
                        
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="glyphicon glyphicon-earphone">
                                </i>
                                01 (81) 1352 2222
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                                </i>
                                <a href="mailto:contacto@aspelsoluciones.com">
                                contacto@inelco.com.mx
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
                <a href="https://www.facebook.com/Aspel-Soluciones-1392656057613447/?fref=ts" target="_blank">
                    <i class="fa fa-facebook" >

                    </i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/AspelSoluciones" target="_blank">
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
        @if($direc == 'http://aspelsoluciones.com/nuevo-noi' OR $direc == 'http://aspelsoluciones.dev:8080/nuevo-noi' OR $direc == 'http://www.aspelsoluciones.com/nuevo-noi')
        {{--plugin de botones de facebook--}}
        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/nuevo-noi" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @elseif($direc == 'http://aspelsoluciones.dev:8080/actualizacion-noi' OR $direc == 'http://aspelsoluciones.com/actualizacion-noi' OR $direc == 'http://www.aspelsoluciones.com/actualizacion-noi')
        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/actualizacion-noi" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @endif

        <div class="col-md-4 col-sm-6 col-xs-12">
                        <h6>Suscribete</h6>
                        <hr>
                        <p class="p-css">Enterate de las últimas noticias e información sobre descuentos y promociones</p>
                        {{-- <div class=""> --}}
                        <div id='crmWebToEntityForm'>
                           <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                           <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000001052009 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8' class="form-inline">

                             <!-- Do not remove this code. -->
                            <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
                            <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                            <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5d9000f3f2c4de3b5c5d16ae5ce433859'/>
                            <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                            <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx' /> 
                             <!-- Do not remove this code. -->

                            <input type='text' class="form-control" maxlength='100' name='Email' placeholder="Email" />

                            <div style="display: none;">
                                <select style='width:250px;' name='Lead Source'>
                                    <option selected value='WIISSUBSCRIPCION'>WIISSUBSCRIPCION</option>
                                </select>
                            </div>
                            
                            <div style="display: none;">
                                <input type='text' placeholder="noo" style='width:250px;'  maxlength='80' name='Last Name' value="IIS"  />
                            </div>

                            <button  class="btn btn-success btn-md" type='submit'>Suscribirme</button>
                            
                            <script>
                              var mndFileds=new Array('Last Name');
                              var fldLangVal=new Array('Last Name');
                                var name='';
                                var email='';

                              function checkMandatory() {
                                for(i=0;i<mndFileds.length;i++) {
                                  var fieldObj=document.forms['WebToLeads2073942000001052009'][mndFileds[i]];
                                  if(fieldObj) {
                                    if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                                     if(fieldObj.type =='file')
                                        { 
                                         alert('Please select a file to upload.'); 
                                         fieldObj.focus(); 
                                         return false;
                                        } 
                                    alert(fldLangVal[i] +' cannot be empty.'); 
                                      fieldObj.focus();
                                      return false;
                                    }  else if(fieldObj.nodeName=='SELECT') {
                                     if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                                        alert(fldLangVal[i] +' cannot be none.'); 
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
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>   
        <p class="copyright">
            © 2017 Inelco IT Solutions S.A. de C.V. Todos los derechos reservados
        </p>
    </div>
</section>