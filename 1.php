<?php

$nombre = $_POST['Nombre y Apellido'];
$correo = $_POST['Correo Electrónico'];
$telefono = $_POST['Teléfono de contacto'];
$mensaje = $_POST['Mensaje'];

$formcontent="
    Nombre y Apellido: $nombre \n
    Correo electrónico: $correo \n
    Teléfono de contacto: $telefono \n
    Mensaje: $mensaje 

";

$recipient = "lourdes.guiretti@hotmail.com", $correo;

$subject = "Consultas web de $nombre";

$header = "From: $correo \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: gracias.html");

?>