<?php
	$destino= "contacto@elcactus.top";
	$nombres = $_POST["first_name"];
	$apellidos = $_POST["last_name"];
	$correo = $_POST["email"];
	$telefono = $_POST["telephone"];
	$mensaje = $_POST["message"];
	$contenido = "Nombres: " . $nombres . "\nApellidos: " . $apellidos . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
	if (@mail($destino,"Contacto",$contenido);) {
		echo "Enviado"
		// header("Location:formulario.html");
	} else{
		echo "No enviado"
	}
?>