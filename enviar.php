<?php
	//campos
$nombre = $_POST['nombres'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

//datos para el correo
$destinatario = "jose.eduardo.bernal2912@gmail.com";
$asunto = "Registro de errores";

$envioMensaje = "De: $nombre \n";
$envioMensaje .= "Correo: $correo \n";
$envioMensaje .= "Mensaje: $mensaje";

//enviar mensaje
mail($destinatario, $asunto, $envioMensaje);
header('Location: correcto.html');
?>
