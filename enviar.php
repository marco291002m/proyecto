<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Formulario de contacto - Mensaje enviado</title>
</head>
<body>
	<?php 

$myemail = 'marco1129miranda@gmail.com';
$name = $_POST['NOMBRE'];
$email = $_POST['CORREO'];
$password = $_POST['CONTRASEÑA'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n NOMBRE: $name \n CORREO: $email \n CONTRASEÑA: \n $password";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

	<center>
		<h1>CONTACTO</h1>
		<form method="post" action="enviar.php">
			<input type="text" name="nombre" placeholder="NOMBRE"> </br>
			<input type="email" name="email" placeholder="CORREO"> </br>
			<input type="password" name="password" placeholder="CONTRASEÑA"> </br>
			<input type="submit" value="ENVIAR">
		</form>
	</center>

</body>
</html>