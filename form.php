<?php

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$comentario = $_POST['comentario'];

$comentario = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$comentario .= "Su e-mail es: " . $mail . " \r\n";
$comentario .= "Mensaje: " . $_POST['comentario'] . " \r\n";
$comentario .= "Enviado el " . date('d/m/y', time());

$destinatario = 'anfusobruno60@gmail.com';
$asunto = 'Este mail fue enviado desde la web Vida Saludable'

mail($destinatario, $asunto, utf8_decode($comentario), $header);

header('location:exito.html');