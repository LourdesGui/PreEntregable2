<?php

$nombre = $_POST['fullname'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['mensaje'];

$formcontent="
    fullname: $nombre \n
    email: $correo \n
    phone: $telefono \n
    mensaje: $mensaje 

";

$recipient = "lourdes.guiretti@hotmail.com", $correo;

$subject = "Consultas web de $nombre";

$header = "From: $correo \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: gracias.html");

?>