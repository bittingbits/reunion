<?php
$nombre = $_POST['contactName'];
$mail = $_POST['contactEmail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['contactMessage'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'juanpablo@bittingbits.com';
$asunto = 'Contacto desde la aplicación móvil';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>