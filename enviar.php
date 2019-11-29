<?php
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "marlyn89.go@gmail.com";
$asunto = "Cita desde la pagina Web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

mail ($destinatario, $asunto, $carta);
header('location:enviado.html')

?>
