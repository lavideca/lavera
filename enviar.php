<?php

$para= 'fernanda@bbbeditions.com';
$asunto= 'Consulta desde sitio web';
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];
$remitente= $email;
$mensaje= "

---Datos de la Consulta---

Nombre: $nombre
E-mail: $email
Consulta: $consulta


";
mail($para, $asunto, $mensaje, "From: $remitente");
include("gracias.htm");
?>