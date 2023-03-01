<?php

$nombre = $_POST['name'];
$mail = $_POST['mail'];
$telefono = $_POST['phone'];
$empresa = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Teléfono: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $empresa . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'simonetchegno@gmail.com';
$asunto = 'Mensaje de mi sitio web';

if ($_POST['submit']) 
{
    if (mail ($para, $empresa, $asunto)) 
    {
    echo 'El mensaje se ha enviado';
    } 
    else 
    {
    echo 'Falló el envio';
    }
}

?>