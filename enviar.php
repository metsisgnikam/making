<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "makingsystems@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "email: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>