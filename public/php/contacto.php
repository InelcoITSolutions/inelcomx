<?php
    echo "";
//Importamos las variables del formulario de contacto
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tel = $_POST["telefono"];
    $emp = $_POST["empresa"];
    $mensaje = $_POST["comment"];

//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n"."CC: $email\n";
$asunto = "Contacto desde inelco.mx"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "contacto@inelco.com.mx"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web inelco.mx\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Telefono: $tel\n"
. "Empresa: $emp\n"
. "Mensaje: $mensaje\n"
. "\n";

//Enviamos el mensaje y comprobamos el resultado
mail($email_to, $asunto ,$contenido ,$cabeceras);
?>