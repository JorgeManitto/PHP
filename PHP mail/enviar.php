<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$archivo=$_POST['archivo'];

$denstinatario="jevicgames@hotmail.com.ar";
$asunto="Contacto desde nuestra web";

$carta="De: $nombre\n";
$carta .="Correo: $email\n";
$carta .="Mensaje: $mensaje\n";
$carta .="Archivo: $archivo";

mail($denstinatario,$asunto,$carta);
header ('location:enviado.html');
?>