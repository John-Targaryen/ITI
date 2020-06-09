<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$tel=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$destino="ja913195@gmail.com";
$asunto="Interesado en mas informacion";
$mailto="De: $nombre \n";
$mailto .="Correo: $email \n";
$mailto .="Telefono: $tel \n";
$mailto .="Mensaje: $mensaje";
mail($destino, $asunto, $mailto);
header('Location:contactenos.html')
?>