<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "marlyn89.go@gmail.com";
$asunto = "Cita desde la pagina Web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

mail ($destinatario, $asunto, $carta);
header('location:enviado.html')

?>