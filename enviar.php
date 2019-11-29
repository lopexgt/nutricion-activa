<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "marlyn89.go@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('enviado.html');

?>
