<?php

if (isset($_POST['enviar'])) {
	if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['message'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$message = $_POST['message'];
		$header = "From: noreply@example.com" . "\r\n";
		$header.= "Reply-To: noreply@example.com" . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$mail = @mail($email,$first_name,$message,$header);
		if ($mail) {
			echo "<h4>Gracias por enviarnos un correo <br>
			Nuestro equipo de WebBots se pondrá en contacto contigo.
			</h4>";
		} else
		echo "Correo no enviado"
	}
}