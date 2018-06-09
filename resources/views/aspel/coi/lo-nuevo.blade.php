@extends('templates.principal')


@section('name_title','Lo nuevo COI | Inelco IT Solutions')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>

    <link href="/css/animations.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.js">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
     

@endpush

@section('contenido')
    @include('aspel.coi.banner-coi-nuevo')

    <section class="secciones coi-pages soluciones-coi" >
        <div class="container">
            <h2 class="title-h2">
               Ahora con nuevas funcionalidades 
            </h2>
            <h3 class="title-h3">
                Aspel-COI 8.0 es tu mejor aliado en la Contabilidad Electrónica. Cumple con la Reforma Fiscal y te ayuda a llevar la contabilidad de la empresa en medios electrónicos.
            </h3>
           

            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Ticket Empresarial 
                    </h5>
                    <p>
                    Es una solución de la empresa "Edenred". A partir de una tarjeta corporativa, se realiza el control y administración interna de la gestión de viajes, representación, caja chica y gastos corporativos, facilitando su comprobación y sin la necesidad de usar efectivo. 
                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive" src="/images/products/coi/inelco-aspel-coi-lo-nuevo-ticket-empresarial.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/coi/inelco-aspelsoluciones-funciones-noi8.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                       Nuevas Funciones con Aspel-COI 8.0   
                    </h5>
                    
                    
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Autenticarse con Ticket empresarial.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Descargar los viajes cerrados del periodo.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Descargar archivos adjuntos de viajes cerrados.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Contabilizar viajes cerrados por medio de póliza dinámica.</p>

                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Catalogo de Perfiles de usuario 
                    </h5>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>     Nueva interfaz. </p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>     Personalización de la vista en tipo lista y tarjetas.</p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>     Nueva búsqueda.</p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>     Facilita la consulta de las empresas que accede al usuario.</p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>     Se podrá agregar la fotografía del usuario.</p>

                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive" src="/images/products/coi/inelco-aspelsoluciones-catalogo-usuarios.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/coi/inelco-aspelsoluciones-mis-espacios.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                       Mis espacios    
                    </h5>
                    
                    
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Nuevas pestañas para (carpetas, pendientes por enviar e historial).</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Se podrá agregar varios archivos a la carpeta seleccionada.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Ya no es necesario el correo del administrador ni la contraseña al crear el espacio.</p>
                       

                    
                </div>
                
            </div>
               <div class="row">
                <div class="col-md-6">
                    <h5 class="title-h5">
                        Reporte de Balance General 
                    </h5>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>Balance General comparativo contra el periodo anterior. </p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>Balance General comparativo contra presupuesto.</p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>Balance General comparativo por ejercicio.</p>
                   

                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive" src="/images/products/coi/inelco-aspelsoluciones-balance-general.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/coi/inelco-aspelsoluciones-personalizar-reporte.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                       Personalizar reportes     
                    </h5>
                    
                    
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Catalogo de cuentas.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Auxiliares.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Estado resultados.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Diario general.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Libro mayor.</p>
                       

                    
                </div>
                
            </div>
             <div class="row">

                <div class="col-md-6">
                    <h5 class="title-h5">
                        Formatos para la balanza de comprobación  
                    </h5>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>Balanza de comprobación. </p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>Balanza de comprobación (Hoja horizontal).</p>
                    <p><span class="glyphicon glyphicon-chevron-right"></span>Balanza de comprobación (Fuente grande).</p>
                   

                    </p>
                </div>
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive" src="/images/products/coi/inelco-aspelsoluciones-balanza-comprobacion.png">
                    </img>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 imagencontainer">
                    <img alt="contabilidad-electronica-total" class="img-responsive zoom1" src="/images/products/coi/inelco-aspelsoluciones-reporte-estado.png">
                    </img>
                </div>
                <div class="col-md-6">
                    <h5 class="title-h5">
                       Estado de resultados Comparativo contra presupuesto     
                    </h5>
                    
                    
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Estado de resultados Comparativo contra periodo anterior.</p>
                       <p><span class="glyphicon glyphicon-chevron-right"></span> Estado de resultados Comparativo contra presupuesto.</p>
                       
                    
                </div>
                
            </div>
        </div>
    </section>
<hr>
    <section style="margin-bottom: 64px">
        <div class="container">
           <h2 class="text-center">
                <span style="font-weight: bold">
                    ¿Aún no tienes Aspel COI 8.0?
                </span>
                <span style="display:block;">
                    ¡Consiguelo ya!
                </span>     
            </h2>
                <span style="display:block; margin-top: 32px"></span>
                <span style="display:block;"></span>
                <a href="{{url('aspel-coi#contratar-coi')}}" style="text-decoration: none" >
                    <button id="btn-coi-prob1" class="btn btn-lg center-block">
                        Lo quiero
                    </button>
                </a>
        </div>
    </section>

<!--POP UP DE LOS GIROS DE LAS EMPRESAS con nuevo diseño-->

<!-- Modal Escenario-->
<!--pop up suscripcion mensual-->
 <!-- BEGIN # MODAL LOGIN PROMOCION suscripcion coi 8.0  -->
<div class="modal fade login-modal" id="suscripcioncoi8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content">

    <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
     <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000002807170 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>


      <div class="modal-header" align="center">

                    <img class="img-circle" id="img_logo" src="/images/products/coi/inelco-coi-logo.png">

                    <button type="button" onclick="this.form.reset();" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>

        </div>

             <!-- Do not remove this code. -->
            <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
            <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
            <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5cfb33cc5571066e1ffbcd93e1c8b444c'/>
            <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

            <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx&#x2f;aspel-coi&#x2f;lo-nuevo' /> 
             <!-- Do not remove this code. -->
            <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
            <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
             <!-- Do not remove this code. -->

          <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="fa fa-user"></div>
                                <span id="text-login-msg">Suscripción Mensual COI 8.0</span>
                            </div>
   
    
            <!-- nombre-->
              <input type='text' id="login_username" class="form-control" style='width:100%;'  placeholder="Nombre" maxlength='40' name='First Name' onkeypress="return minus(event)" required/>

            <!-- apellidos-->
               <input id="login_username" class="form-control" type="text" placeholder="Apellidos" name='Last Name' maxlength='40' onkeypress="return minus(event)" required>

            <!-- email-->
               <input id="login_username" class="form-control" type="email" placeholder="Correo" required name='Email'  maxlength='100' required>

             <!-- telefono-->
                <input id="apellidos" class="form-control" type="text" placeholder="Telefono" required name='Phone' maxlength='10' onkeypress="return numeros(event)" required>

           <!-- telefono-->
             <input id="apellidos" class="form-control" type="text" placeholder="Empresa" required name='Company' maxlength='100' > 

             <br>
           <!-- comentarios-->
             <textarea id="login_username" class="form-control" style='width:100%; height: 100%; resize: none;' name='' placeholder="Comentarios" maxlength='1000'></textarea>

        <select style='width:250px; display: none;' name='LEADCF1' multiple>
            <option value='A01-SAE'>A01-SAE</option>
            <option value='A02-BCO'>A02-BCO</option>
            <option value='A03-COI'>A03-COI</option>
            <option value='A04-NOI'>A04-NOI</option>
            <option value='A05-FACTURE'>A05-FACTURE</option>
            <option value='A06-PROD'>A06-PROD</option>
            <option value='A07-CAJA'>A07-CAJA</option>
            <option value='NS1-SR9.0'>NS1-SR9.0</option>
            <option value='NS2-OTM4.5'>NS2-OTM4.5</option>
            <option value='NS3-SH'>NS3-SH</option>
            <option value='TS1-Hardware'>TS1-Hardware</option>
            <option value='TS2-Servicios&#x20;C&oacute;mputo'>TS2-Servicios C&oacute;mputo</option>
            <option value='TS3-Servidores'>TS3-Servidores</option>
            <option value='TS4-Cableado'>TS4-Cableado</option>
            <option value='NS1-SR-9.5'>NS1-SR-9.5</option>
            <option selected value='A03-COI&#x20;8.0'>A03-COI 8.0</option>
            <option value='A01-SAE&#x20;7.0'>A01-SAE 7.0</option>
        </select>

    <select style='width:250px; display: none;' name='Lead Source'>
            <option value='-None-'>Ninguno</option>
            <option value='Pagina&#x20;SYCA'>Pagina SYCA</option>
            <option value='WASPELSOLUCIONES'>WASPELSOLUCIONES</option>
            <option value='WIISSUBSCRIPCION'>WIISSUBSCRIPCION</option>
            <option value='WIISCONTACTO'>WIISCONTACTO</option>
            <option value='WIISPNOI'>WIISPNOI</option>
            <option value='Nextel'>Nextel</option>
            <option value='P&aacute;gina&#x20;Aspel&#x2f;National'>P&aacute;gina Aspel&#x2f;National</option>
            <option value='Relaciones&#x20;P&uacute;blicas&#x20;OIMR'>Relaciones P&uacute;blicas OIMR</option>
            <option value='Recomendaci&oacute;n&#x2f;Referencias'>Recomendaci&oacute;n&#x2f;Referencias</option>
            <option value='Desayuno&#x20;Empresarial'>Desayuno Empresarial</option>
            <option value='Mailing&#x2f;Campa&ntilde;as&#x20;Correo'>Mailing&#x2f;Campa&ntilde;as Correo</option>
            <option value='BNI'>BNI</option>
            <option value='Contacto&#x20;existente'>Contacto existente</option>
            <option value='Seminario&#x20;interno'>Seminario interno</option>
            <option value='Exposici&oacute;n&#x20;comercial'>Exposici&oacute;n comercial</option>
            <option value='Facebook'>Facebook</option>
            <option value='Twitter'>Twitter</option>
            <option value='Google&#x2b;'>Google&#x2b;</option>
            <option value='Internet'>Internet</option>
            <option value='AS&#x20;SAE&#x20;RENTA'>AS SAE RENTA</option>
            <option value='AS&#x20;SAE&#x20;COMPRA'>AS SAE COMPRA</option>
            <option value='AS&#x20;SAE&#x20;ACTUALIZACION'>AS SAE ACTUALIZACION</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;RENTA'>IIS SAE 7.0 RENTA</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;COMPRA'>IIS SAE 7.0 COMPRA</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;ACTUALIZACION'>IIS SAE 7.0 ACTUALIZACION</option>
        <option selected value='IIS&#x20;COI&#x20;&#x20;8.0&#x20;RENTA'>IIS COI  8.0 RENTA</option>
            <option value='IIS&#x20;COI&#x20;8.0&#x20;COMPRA'>IIS COI 8.0 COMPRA</option>
            <option value='IIS&#x20;COI&#x20;8.0&#x20;ACTUALIZACION'>IIS COI 8.0 ACTUALIZACION</option>
            <option value='AS&#x20;COI&#x20;RENTA'>AS COI RENTA</option>
            <option value='AS&#x20;COI&#x20;COMPRA'>AS COI COMPRA</option>
            <option value='AS&#x20;COI&#x20;ACTUALIZACION'>AS COI ACTUALIZACION</option>
            <option value='AS&#x20;CONTACTO'>AS CONTACTO</option>
            <option value='IIS&#x20;SR&#x20;9.0&#x20;-9.5'>IIS SR 9.0 -9.5</option>
            <option value='IIS&#x20;SR&#x20;8.0&#x20;-9.5'>IIS SR 8.0 -9.5</option>
        </select>


   

    </div>
    
         <div class="modal-footer">
                            <div>
                                <button id="btn-coi" type="submit" class="btn btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <p id="login_lost_btn" type="button" >Llegará una notificación a tú correo</p>
                            </div>
        </div>

     <script>
          var mndFileds=new Array('First Name','Email','Last Name');
          var fldLangVal=new Array('Nombre','Correo electrónico','Apellidos');
            var name='';
            var email='';

          function checkMandatory() {
            for(i=0;i<mndFileds.length;i++) {
              var fieldObj=document.forms['WebToLeads2073942000002807170'][mndFileds[i]];
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
            trackVisitor();
        }
    </script><script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {salesiq:{values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}}};var d=document;s=d.createElement('script');s.type='text/javascript';s.defer=true;s.src='https://salesiq.zoho.com/ventassyca/float.ls?embedname=ventassyca';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads2073942000002807170']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads2073942000002807170']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads2073942000002807170']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
        </form>
    </div>
        
       <!-- End # DIV Form -->
            </div>
        </div>
    </div>
<!-- END # MODAL LOGIN -->


 <!-- BEGIN # MODAL LOGIN PROMOCION compra coi 8.0  -->
<div class="modal fade login-modal" id="permanenetecoi8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content">

   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000002834036 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>


      <div class="modal-header" align="center">

                    <img class="img-circle" id="img_logo" src="/images/products/coi/inelco-coi-logo.png">

                    <button type="button" onclick="this.form.reset();" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>

        </div>

           <!-- Do not remove this code. -->
            <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
            <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
            <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5cd56af1877363daaa41906e50f21a600'/>
            <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

            <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx&#x2f;aspel-coi&#x2f;lo-nuevo' /> 
             <!-- Do not remove this code. -->
            <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
            <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
             <!-- Do not remove this code. -->

          <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="fa fa-user"></div>
                                <span id="text-login-msg">Licencia Permanente COI 8.0</span>
                            </div>
   
    
            <!-- nombre-->
              <input type='text' id="login_username" class="form-control" style='width:100%;'  placeholder="Nombre" maxlength='40' name='First Name' onkeypress="return minus(event)" required/>

            <!-- apellidos-->
               <input id="login_username" class="form-control" type="text" placeholder="Apellidos" name='Last Name' maxlength='40' onkeypress="return minus(event)" required>

            <!-- email-->
               <input id="login_username" class="form-control" type="email" placeholder="Correo" required name='Email'  maxlength='100' required>

             <!-- telefono-->
                <input id="apellidos" class="form-control" type="text" placeholder="Telefono" required name='Phone' maxlength='10' onkeypress="return numeros(event)" required>

           <!-- telefono-->
             <input id="apellidos" class="form-control" type="text" placeholder="Empresa" required name='Company' maxlength='100' > 

             <br>
           <!-- comentarios-->
             <textarea id="login_username" class="form-control" style='width:100%; height: 100%; resize: none;' name='' placeholder="Comentarios" maxlength='1000'></textarea>

        <select style='width:250px; display: none;' name='LEADCF1' multiple>
            <option value='A01-SAE'>A01-SAE</option>
            <option value='A02-BCO'>A02-BCO</option>
            <option value='A03-COI'>A03-COI</option>
            <option value='A04-NOI'>A04-NOI</option>
            <option value='A05-FACTURE'>A05-FACTURE</option>
            <option value='A06-PROD'>A06-PROD</option>
            <option value='A07-CAJA'>A07-CAJA</option>
            <option value='NS1-SR9.0'>NS1-SR9.0</option>
            <option value='NS2-OTM4.5'>NS2-OTM4.5</option>
            <option value='NS3-SH'>NS3-SH</option>
            <option value='TS1-Hardware'>TS1-Hardware</option>
            <option value='TS2-Servicios&#x20;C&oacute;mputo'>TS2-Servicios C&oacute;mputo</option>
            <option value='TS3-Servidores'>TS3-Servidores</option>
            <option value='TS4-Cableado'>TS4-Cableado</option>
            <option value='NS1-SR-9.5'>NS1-SR-9.5</option>
            <option selected value='A03-COI&#x20;8.0'>A03-COI 8.0</option>
            <option value='A01-SAE&#x20;7.0'>A01-SAE 7.0</option>
        </select>

    <select style='width:250px; display: none;' name='Lead Source'>
            <option value='-None-'>Ninguno</option>
            <option value='Pagina&#x20;SYCA'>Pagina SYCA</option>
            <option value='WASPELSOLUCIONES'>WASPELSOLUCIONES</option>
            <option value='WIISSUBSCRIPCION'>WIISSUBSCRIPCION</option>
            <option value='WIISCONTACTO'>WIISCONTACTO</option>
            <option value='WIISPNOI'>WIISPNOI</option>
            <option value='Nextel'>Nextel</option>
            <option value='P&aacute;gina&#x20;Aspel&#x2f;National'>P&aacute;gina Aspel&#x2f;National</option>
            <option value='Relaciones&#x20;P&uacute;blicas&#x20;OIMR'>Relaciones P&uacute;blicas OIMR</option>
            <option value='Recomendaci&oacute;n&#x2f;Referencias'>Recomendaci&oacute;n&#x2f;Referencias</option>
            <option value='Desayuno&#x20;Empresarial'>Desayuno Empresarial</option>
            <option value='Mailing&#x2f;Campa&ntilde;as&#x20;Correo'>Mailing&#x2f;Campa&ntilde;as Correo</option>
            <option value='BNI'>BNI</option>
            <option value='Contacto&#x20;existente'>Contacto existente</option>
            <option value='Seminario&#x20;interno'>Seminario interno</option>
            <option value='Exposici&oacute;n&#x20;comercial'>Exposici&oacute;n comercial</option>
            <option value='Facebook'>Facebook</option>
            <option value='Twitter'>Twitter</option>
            <option value='Google&#x2b;'>Google&#x2b;</option>
            <option value='Internet'>Internet</option>
            <option value='AS&#x20;SAE&#x20;RENTA'>AS SAE RENTA</option>
            <option value='AS&#x20;SAE&#x20;COMPRA'>AS SAE COMPRA</option>
            <option value='AS&#x20;SAE&#x20;ACTUALIZACION'>AS SAE ACTUALIZACION</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;RENTA'>IIS SAE 7.0 RENTA</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;COMPRA'>IIS SAE 7.0 COMPRA</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;ACTUALIZACION'>IIS SAE 7.0 ACTUALIZACION</option>
            <option value='IIS&#x20;COI&#x20;&#x20;8.0&#x20;RENTA'>IIS COI  8.0 RENTA</option>
        <option selected value='IIS&#x20;COI&#x20;8.0&#x20;COMPRA'>IIS COI 8.0 COMPRA</option>
            <option value='IIS&#x20;COI&#x20;8.0&#x20;ACTUALIZACION'>IIS COI 8.0 ACTUALIZACION</option>
            <option value='AS&#x20;COI&#x20;RENTA'>AS COI RENTA</option>
            <option value='AS&#x20;COI&#x20;COMPRA'>AS COI COMPRA</option>
            <option value='AS&#x20;COI&#x20;ACTUALIZACION'>AS COI ACTUALIZACION</option>
            <option value='AS&#x20;CONTACTO'>AS CONTACTO</option>
            <option value='IIS&#x20;SR&#x20;9.0&#x20;-9.5'>IIS SR 9.0 -9.5</option>
            <option value='IIS&#x20;SR&#x20;8.0&#x20;-9.5'>IIS SR 8.0 -9.5</option>
        </select>


   

    </div>
    
         <div class="modal-footer">
                            <div>
                                <button id="btn-coi" type="submit" class="btn btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <p id="login_lost_btn" type="button" >Llegará una notificación a tú correo</p>
                            </div>
        </div>

            <script>
              var mndFileds=new Array('First Name','Email','Last Name');
              var fldLangVal=new Array('Nombre','Correo electrónico','Apellidos');
                var name='';
                var email='';

              function checkMandatory() {
                for(i=0;i<mndFileds.length;i++) {
                  var fieldObj=document.forms['WebToLeads2073942000002834036'][mndFileds[i]];
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
                trackVisitor();
            }
        </script><script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {salesiq:{values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}}};var d=document;s=d.createElement('script');s.type='text/javascript';s.defer=true;s.src='https://salesiq.zoho.com/ventassyca/float.ls?embedname=ventassyca';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads2073942000002834036']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads2073942000002834036']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads2073942000002834036']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
            </form>
        </div>
        
       <!-- End # DIV Form -->
            </div>
        </div>
    </div>
<!-- END # MODAL LOGIN -->




 <!-- BEGIN # MODAL LOGIN PROMOCION actualizacion coi 8.0  -->
<div class="modal fade login-modal" id="actualizacioncoi8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content">

    <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000002834043 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>


      <div class="modal-header" align="center">

                    <img class="img-circle" id="img_logo" src="/images/products/coi/inelco-coi-logo.png">

                    <button type="button" onclick="this.form.reset();" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>

        </div>

          <!-- Do not remove this code. -->
        <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
        <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a508a3a379e9cb7e70bbea49dad5b63517'/>
        <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

        <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;inelco.mx&#x2f;aspel-coi&#x2f;lo-nuevo' /> 
         <!-- Do not remove this code. -->
        <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
        <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
         <!-- Do not remove this code. -->

          <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="fa fa-user"></div>
                                <span id="text-login-msg">Actualización COI 8.0</span>
                            </div>
   
    
            <!-- nombre-->
              <input type='text' id="login_username" class="form-control" style='width:100%;'  placeholder="Nombre" maxlength='40' name='First Name' onkeypress="return minus(event)" required/>

            <!-- apellidos-->
               <input id="login_username" class="form-control" type="text" placeholder="Apellidos" name='Last Name' maxlength='40' onkeypress="return minus(event)" required>

            <!-- email-->
               <input id="login_username" class="form-control" type="email" placeholder="Correo" required name='Email'  maxlength='100' required>

             <!-- telefono-->
                <input id="apellidos" class="form-control" type="text" placeholder="Telefono" required name='Phone' maxlength='10' onkeypress="return numeros(event)" required>

           <!-- telefono-->
             <input id="apellidos" class="form-control" type="text" placeholder="Empresa" required name='Company' maxlength='100' > 

             <br>
           <!-- comentarios-->
             <textarea id="login_username" class="form-control" style='width:100%; height: 100%; resize: none;' name='' placeholder="Comentarios" maxlength='1000'></textarea>

        <select style='width:250px; display: none;' name='LEADCF1' multiple>
          <option value='A01-SAE'>A01-SAE</option>
            <option value='A02-BCO'>A02-BCO</option>
            <option value='A03-COI'>A03-COI</option>
            <option value='A04-NOI'>A04-NOI</option>
            <option value='A05-FACTURE'>A05-FACTURE</option>
            <option value='A06-PROD'>A06-PROD</option>
            <option value='A07-CAJA'>A07-CAJA</option>
            <option value='NS1-SR9.0'>NS1-SR9.0</option>
            <option value='NS2-OTM4.5'>NS2-OTM4.5</option>
            <option value='NS3-SH'>NS3-SH</option>
            <option value='TS1-Hardware'>TS1-Hardware</option>
            <option value='TS2-Servicios&#x20;C&oacute;mputo'>TS2-Servicios C&oacute;mputo</option>
            <option value='TS3-Servidores'>TS3-Servidores</option>
            <option value='TS4-Cableado'>TS4-Cableado</option>
            <option value='NS1-SR-9.5'>NS1-SR-9.5</option>
        <option selected value='A03-COI&#x20;8.0'>A03-COI 8.0</option>
            <option value='A01-SAE&#x20;7.0'>A01-SAE 7.0</option>
        </select>

    <select style='width:250px; display: none;' name='Lead Source'>
            <option value='-None-'>Ninguno</option>
            <option value='Pagina&#x20;SYCA'>Pagina SYCA</option>
            <option value='WASPELSOLUCIONES'>WASPELSOLUCIONES</option>
            <option value='WIISSUBSCRIPCION'>WIISSUBSCRIPCION</option>
            <option value='WIISCONTACTO'>WIISCONTACTO</option>
            <option value='WIISPNOI'>WIISPNOI</option>
            <option value='Nextel'>Nextel</option>
            <option value='P&aacute;gina&#x20;Aspel&#x2f;National'>P&aacute;gina Aspel&#x2f;National</option>
            <option value='Relaciones&#x20;P&uacute;blicas&#x20;OIMR'>Relaciones P&uacute;blicas OIMR</option>
            <option value='Recomendaci&oacute;n&#x2f;Referencias'>Recomendaci&oacute;n&#x2f;Referencias</option>
            <option value='Desayuno&#x20;Empresarial'>Desayuno Empresarial</option>
            <option value='Mailing&#x2f;Campa&ntilde;as&#x20;Correo'>Mailing&#x2f;Campa&ntilde;as Correo</option>
            <option value='BNI'>BNI</option>
            <option value='Contacto&#x20;existente'>Contacto existente</option>
            <option value='Seminario&#x20;interno'>Seminario interno</option>
            <option value='Exposici&oacute;n&#x20;comercial'>Exposici&oacute;n comercial</option>
            <option value='Facebook'>Facebook</option>
            <option value='Twitter'>Twitter</option>
            <option value='Google&#x2b;'>Google&#x2b;</option>
            <option value='Internet'>Internet</option>
            <option value='AS&#x20;SAE&#x20;RENTA'>AS SAE RENTA</option>
            <option value='AS&#x20;SAE&#x20;COMPRA'>AS SAE COMPRA</option>
            <option value='AS&#x20;SAE&#x20;ACTUALIZACION'>AS SAE ACTUALIZACION</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;RENTA'>IIS SAE 7.0 RENTA</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;COMPRA'>IIS SAE 7.0 COMPRA</option>
            <option value='IIS&#x20;SAE&#x20;7.0&#x20;ACTUALIZACION'>IIS SAE 7.0 ACTUALIZACION</option>
            <option value='IIS&#x20;COI&#x20;&#x20;8.0&#x20;RENTA'>IIS COI  8.0 RENTA</option>
            <option value='IIS&#x20;COI&#x20;8.0&#x20;COMPRA'>IIS COI 8.0 COMPRA</option>
        <option selected value='IIS&#x20;COI&#x20;8.0&#x20;ACTUALIZACION'>IIS COI 8.0 ACTUALIZACION</option>
            <option value='AS&#x20;COI&#x20;RENTA'>AS COI RENTA</option>
            <option value='AS&#x20;COI&#x20;COMPRA'>AS COI COMPRA</option>
            <option value='AS&#x20;COI&#x20;ACTUALIZACION'>AS COI ACTUALIZACION</option>
            <option value='AS&#x20;CONTACTO'>AS CONTACTO</option>
            <option value='IIS&#x20;SR&#x20;9.0&#x20;-9.5'>IIS SR 9.0 -9.5</option>
            <option value='IIS&#x20;SR&#x20;8.0&#x20;-9.5'>IIS SR 8.0 -9.5</option>
        </select>


   

    </div>
    
         <div class="modal-footer">
                            <div>
                                <button id="btn-coi" type="submit" class="btn btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <p id="login_lost_btn" type="button" >Llegará una notificación a tú correo</p>
                            </div>
        </div>

     <script>
      var mndFileds=new Array('First Name','Email','Last Name');
      var fldLangVal=new Array('Nombre','Correo electrónico','Apellidos');
        var name='';
        var email='';

      function checkMandatory() {
        for(i=0;i<mndFileds.length;i++) {
          var fieldObj=document.forms['WebToLeads2073942000002834043'][mndFileds[i]];
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
        trackVisitor();
    }
    </script><script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {salesiq:{values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}}};var d=document;s=d.createElement('script');s.type='text/javascript';s.defer=true;s.src='https://salesiq.zoho.com/ventassyca/float.ls?embedname=ventassyca';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads2073942000002834043']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads2073942000002834043']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads2073942000002834043']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
        </form>
    </div>
       <!-- End # DIV Form -->
            </div>
        </div>
    </div>
<!-- END # MODAL LOGIN -->



     

    @include('aspel.coi.menu-coi')
@endsection



@push('add-js')
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
    @stack('files-menu')
@endpush
