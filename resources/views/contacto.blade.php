@extends('templates.principal')


@section('name_title','Contacto | Inelco IT Solutions')

@push('add-css')
<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
@endpush
@section('contenido')
    <section class="banner-contact">
        <div class="fondo-gray">
            <div class="container">
                <div class="row">
                    <h2 class="h2-css"><b>Contáctanos</b></h2>
                    <h3 class="h3-css">El cambio que buscas empieza aquí. Permítenos ayudarte</h3>
                </div>
                
            </div>
        </div>            
    </section> 
    

<section class="secciones contact-form">
    <div class="container">
        <div class="col-md-8 nosotros">
            <h3 style="color: #1E3662" class="h2-css">Para mayor información</h3>
            <p>Envianos un mensaje y te contactaremos lo antes posible.</p>
        </div>
        <div class="col-md-4 nosotros">
            <h3 style="color: #1E3662" class="h2-css">Horario de atención</h3>
            <hr>
            <p>Lunes-viernes: 9:00 a.m a 6:00 p.m.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id='crmWebToEntityForm'>
                <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                <form action='https://crm.zoho.com/crm/WebForm' name=WebForm2073942000003403051 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>
                    <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6' />
                    <input type='hidden' name='zc_gad' id='zc_gad' value='' />
                    <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5d104f4095214de400d316873f599fcee' />
                    <input type='text' style='display:none;' name='actionType' value='Q3VzdG9tTW9kdWxlNw==' />
                    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx&#x2f;' />
                    <!-- Do not remove this code. -->
                    <div class="col-md-6 col-sm-6">
                        <input type='text' style='width:100%;' maxlength='40' name='NAME' placeholder="Nombre" required onkeypress="return minus(event)" />
                        <input type='text' style='width:100%;' maxlength='80' name='COBJ7CF4' placeholder="Apellidos" required onkeypress="return minus(event)" />
                        <input type='text' style='width:100%;' maxlength='100' name='COBJ7CF6' placeholder="Empresa" required />
                        <input type='email' style='width:100%;' maxlength='100' name='Email' placeholder="Email" required />
                        <input type='text' style='width:100%;' required maxlength='10' name='COBJ7CF5' placeholder="Teléfono" onkeypress="return numeros(event)" />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <textarea placeholder="Comentario" name='COBJ7CF1' ' maxlength='1000 ' style=" width:100%; height: 100%; resize: none;" rows="5"></textarea>
                        </div>

                        <div class="col-md-12" style="display: none;">
                            <tr style='display:none; ' ><td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:50% '>Sitio Web</td><td style='width:250px; ' ><input type='text ' style='width:250px; '  maxlength='255 ' name='COBJ7CF12 ' value='Contacto&#x20;&#x20;Inelco&#x20;IT&#x20;Solutions '></input></td></tr>

                        </div>
                        
                        <div class="col-md-12">
                            <p class="text-center"><input class="btn btn-lg btn-cntacto" type='submit ' value='Envíar ' /></p>
                        </div>
                        <script>
                            var mndFileds=new Array('NAME ');
                            var fldLangVal=new Array('Nombre ');
                            var name=' ';
                            var email=' ';
                            
                            function checkMandatory() {
                                for(i=0;i<mndFileds.length;i++) {
                                
                                var fieldObj=document.forms['WebForm2073942000003403051 '][mndFileds[i]];
                                
                                if(fieldObj) {
                                    if (((fieldObj.value).replace(/^\s+|\s+$/g, ' ')).length==0) {
                                        if(fieldObj.type =='file ') {
                                            alert('Seleccione un archivo para cargar. '); 
                                            fieldObj.focus(); 
                                        
                                            return false;
                                        } 
                                        alert(fldLangVal[i] +' no puede estar vacío. '); 
                                          fieldObj.focus();
                                           return false;
                                        } else if(fieldObj.nodeName=='SELECT ') {
                                            if(fieldObj.options[fieldObj.selectedIndex].value=='-None- ') {
                                                alert(fldLangVal[i] +' no puede ser nulo. '); 
                                                fieldObj.focus();
                                            
                                            return false;
                                            }
                                        } else if(fieldObj.type =='checkbox '){
                                            if(fieldObj.checked == false){
                                                alert('Please accept '+fldLangVal[i]);
                                                fieldObj.focus();
                                                
                                                return false;
                                            } 
                                         } 
                                         
                                        try {
                                            if(fieldObj.name == 'Last Name ') {
                                                name = fieldObj.value;
                                            }
                                        } catch (e) {}
                                    }
                                }
                            }          
                        </script>
                </form>
            </div>
        </div>
    </div>
</section>

    <section class="contact secciones" id="maps">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="h2-css">Oficina en Monterrey</h2>
                    <ul>
                        <li> Edificio Cintermex, Av. Fundidora N° 501 Local 18 PB, 64010 Monterrey, México.</li>
                        <li><a href="tel:528113522222">(81) 1352 2222</a></li>
                        <br>
                       

                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="canvas1">
                        <iframe class="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.793480944093!2d-100.29106668546014!3d25.678139818322215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295620b11a765%3A0xa261ff913e98ee9e!2sInelco+IT+Solutions!5e0!3m2!1ses-419!2smx!4v1464149661376" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="h2-css">Oficina en San Luis Potosí</h2>
                    <ul>
                        <li> Mariano Otero #610 Int 3, Col.Tequisquiapan San Luis Potosí S.L.P.</li>
                        <li><a href="tel:524442119009">(444) 211 9009</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="canvas1">
                        <iframe class="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.3760437451656!2d-100.99518268574494!3d22.14975345394168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a98b29695cb8d%3A0xced6173409c0a00!2sMariano+Otero+610%2C+De+Tequisquiapan%2C+78230+San+Luis%2C+S.L.P.!5e0!3m2!1ses-419!2smx!4v1464151375539" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <form>                         
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Nombre">
                        </div>                            
                        <div class="form-group">
                            <input type="text" class="form-control" id="empre" placeholder="Empresa">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="telef" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <textarea class="form-control" rows="6" id="comment" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <center><button type="submit" class="btn btn-default btn-lg">Envíar</button></center>
                    </div>
                    
                </form>
            </div> --}}
        </div>
    </section>


@endsection

@push('add-js')  
    <script>
        $(document).ready(function () {
            // you want to enable the pointer events only on click;
            $('.map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
            $('.canvas1').on('click', function () {
                $(this).find('.map_canvas1').stop(true,true).removeClass('scrolloff'); // set the pointer events true on click
            });
            // you want to disable pointer events when the mouse leave the canvas area;
            $(".map_canvas1").mouseleave(function () {
                $('.map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
            });
        });
    </script>

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
    <script>
        $("body").attr('pagina','Contacto');
    </script>
@endpush