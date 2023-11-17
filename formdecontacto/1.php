<?php

$name = $_POST['Nombre y Apellido'];
$email = $_POST['Correo Electrónico'];
$phone = $_POST['Teléfono de contacto'];
$emessage = $_POST['Mensaje'];

$formcontent="
    Nombre y Apellido: $name \n
    Correo electrónico: $email \n
    Teléfono de contacto: $phone \n
    Mensaje: $emessage 

";

$recipient = "lourdes.guiretti@gmail.com";

$subject = "Consultas web";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>