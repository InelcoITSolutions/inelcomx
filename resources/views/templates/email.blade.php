<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Respuesta a registro</title>
</head>

<body style="margin:0;">
    <div style="width: 100.0%;" align="center">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td style="background-color: rgb(234,234,234);" valign="top" align="center">
                        <br>
                        <br>
                        <table width="583" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td style="background-color: rgb(255,255,255);" valign="top" bgcolor="#FFFFFF" align="left"><img src="https://inelco.mx/images/mail/inelco-mail-banner.jpg" height="118" width="583"></td>
                                </tr>
                                <tr>
                                    <td style="background-color: rgb(255,255,255);" valign="top" bgcolor="#FFFFFF" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="35" valign="top" align="left"></td>
                                                    <td valign="top" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="top" align="center">
                                                                        <div><img src="" height="70"></div>
                                                                        <div style="color: rgb(30,54,98);font-family: Arial , Times , serif;font-size: 18.0px;">
                                                                            <p><b>Inelco IT Solutions</b> le agradece su interés y reservación a nuestro evento. </p>
                                                                        </div>
                                                                        <div style="color: #777; font-family: Arial , Times , serif; font-size: 18.0px; line-height: 1.3;">
                                                                            <p>{{ $nombre.' '.$apellidos}}</p>
                                                                            <p>{{ $empresa }}</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Arial , Helvetica , sans-serif;font-size: 12.0px;color: rgb(82,82,82);" valign="top" align="left">
                                                                        <br>
                                                                        @php
                                                                            $individual=$paga;
                                                                            $individual=$paga + ($paga*0.16);
                                                                            $total = $individual * $contador;
                                                                        @endphp
                                                                        <ul style="list-style: none; padding-left: 0px; line-height: 1.5;">
                                                                            <li>Evento: <b>{{ $evento}}</b></li>
                                                                            <li>Lugar: <b>{{ $lugar }}</b></li>
                                                                            <li>Fecha: <b>{{ $fecha }}</b></li>
                                                                            <li>Horario: <b> {{ $horario }}</b></li>
                                                                            @if($paga>0)
                                                                                <li>Costo: <b>$ {{number_format( $total,2)}}</b> <em>IVA Incluido</em></li>
                                                                            @endif
                                                                            @if($link_webinar)
                                                                                <li>Enlace: <a href="{{$link_webinar}}">Ingresar a la sala virtual</a></li>
                                                                            @endif
                                                                            <li>No. reservacion: <b> {{ $no_reservacion }}</b></li>
                                                                        </ul>
                                                                        
                                                                        @if($paga>0)
                                                                            <br>
                                                                            <hr>
                                                                            <h3 style="text-align: center;">Datos para realizar su pago (transferencia electrónica - deposito bancario)</h3>
                                                                            <table>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                        <img alt="Logo Banco" class="img-responsive logo-banco" src="http://aspelsoluciones.com/img/logo-banco.jpg" width="135">
                                                                                        </td>
                                                                                        <td>
                                                                                            <ul style="list-style: none; padding-left: 10px; line-height: 1.5;">
                                                                                                <li>Beneficiario: SYCA CAMBIA INNOVA Y CRECE SA DE CV</li>
                                                                                                <li>RFC: SCI140820ITA</li>
                                                                                                <li>Banco: SANTANDER</li>
                                                                                                <li>Sucursal: 0392 CARRANZA</li>
                                                                                                <li>Cuenta:	92002154104</li>
                                                                                                <li>CLABE: 014700920021541040</li>
                                                                                                <li>Importe: <b>$ {{number_format( $total,2)}}</b></li>
                                                                                                <li>No. Referencia: <b>{{$referencia}}</b></li>
                                                                                            </ul>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <p>Favor de enviar sus datos fiscales para la emisión de su factura y su comprobante de pago al correo: ventas@inelco.com.mx</p>
                                                                        @endif
                                                                            

                                                                        <hr>
                                                                        @if($link_webinar)
                                                                            <p>En este correo electrónico le enviamos <b>el enlace de la sala virtual</b>. Le agradecemos conectarse 10 minutos antes de su inicio, si presenta dificultades para abrir el enlace, copie la siguiente URL y peguela en su navegador: <b>{{$link_webinar}}</b></p>
                                                                        @else
                                                                            <p>En este correo electrónico le enviamos <b>el archivo de su reservación</b>. Le agradecemos imprimir su reservación y presentarla en la mesa de registro en la recepción del evento.</p>
                                                                        @endif
                                                                        
                                                                        <!--<p>Le invitamos a conocer Aspel NOI en <a target="_blank" href="https://inelco.mx/aspel-noi">https://inelco.mx/aspel-noi</a> así como las novedades y promociones del nuevo en: <a target="_blank" href="https://inelco.mx/nuevo-noi">https://inelco.mx/nuevo-noi</a></p>-->
                                                                        <p>Te invitamos a visitar nuestro calendario de eventos, donde encontraras cursos que beneficiarán a tu empresa.</p>
                                                                        <p style="text-align: center;">
                                                                            <a target="_blank" href="https://inelco.mx/calendario">
                                                                                <button style="background-color: rgb(30,54,98);border: 1.0px solid rgb(30,54,98);color: rgb(255,255,255);padding: 5.0px 10.0px;margin-top: 5.0px;">Ver calendario</button>
                                                                            </a>
                                                                        </p>
                                                                        <br><br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" align="center">
                                                                        <div>
                                                                            <a target="_blank" href="https://www.facebook.com/inelcoitsolutions/"><img src="https://inelco.mx/images/mail/Inelco-facebook.png" height="40"></a>
                                                                            <a target="_blank" href="https://twitter.com/inelcoit"><img src="https://inelco.mx/images/mail/Inelco-twiteer.png" height="40"></a>
                                                                            <a target="_blank" href="https://plus.google.com/113306608517720796590"><img src="https://inelco.mx/images/mail/Inelco-google-plus.png" height="40"></a>
                                                                        </div>
                                                                        <br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Arial , Helvetica , sans-serif;font-size: 12.0px;color: rgb(82,82,82);" valign="top" align="left"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td width="35" valign="top" align="left"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color: rgb(30,54,98);" valign="top" bgcolor="#3d90bd" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="35"></td>
                                                    <td style="color: rgb(255,255,255);font-size: 11.0px;font-family: Arial , Helvetica , sans-serif;" height="50" valign="middle">
                                                        <br><b>Monterrey: </b>
                                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Edificio Cintermex, local 18 PB, 64010.
                                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (81) 1352 2222
                                                        <br><b>San Luis Potosí: </b>
                                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mariano Otero #610 Int 3, Col.Tequisquiapan.
                                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (444) 211 9009
                                                        <br>
                                                        <br>
                                                    </td>
                                                    <td width="35"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
