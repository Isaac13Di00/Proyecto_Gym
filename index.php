<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Krachtig Gym - Ingresar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section>
		<div class="divIMG">
			<img src="/Proyecto_Gym/imagenes/loginIMG.jpeg">
		</div>
		<div>
			<form action="./componentes/utilidades/identificacion.php" method="POST">
				<div class="formulario">
					<h3>Ingresar</h3>
					<input name="correo" type="text" id="inpCorreo" class="inputLogin" placeholder="Correo electrónico">
					<br>
					<input name="contra" type="password" id="inpContras" class="inputLogin" placeholder="Contraseña">
					<br>
					<input type="submit" id="btnIngresar" value="Iniciar sesión">
				</div>
			</form>
		</div>
	</section>
</body>
</html>
