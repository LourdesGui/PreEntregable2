<?php

$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent="
    fullname: $name \n
    email: $email \n
    phone: $phone \n
    message: $message 

";

$recipient = "lourdes.guiretti@hotmail.com";

$subject = "Consultas web de $name";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
$success = mail($recipient, $subject, $formcontent, $header);
if (!$success) {
    print_r(error_get_last());
}
header("Location: /gracias.html");

?>