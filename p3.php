<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="form1.css">
</head>
<body>
	<h1 id="cabecera">Null Pointer Developer</h1>
	<div id="contenido" class="row">
		<h1>Email</h1>
		<div class="col-12">
			<?php 
				if(!empty($_SESSION))
				{
			 ?>
			<p class="email">Bienvenido/a a los Foros de Academy of Skill
				<br>Por favor, conserva este e-mail, te puede resultar muy útil.
				<br>Los datos de tu cuenta en "Academy of Skill" - <a href="">http://nullpointerdeveloper.com</a> son los siguentes:
				<br>----------------------------
				<br><b>Nombre de usuario:</b> <?php echo $_SESSION["usrName"]; ?>
				<br><b>Contraseña:</b> <?php echo $_SESSION["usrPass"]; ?>
				<br>----------------------------
				<br>Tu cuenta se encuentra actualmente inactiva. No puedes usarla hasta que no visites este vínculo:
				<br><a href="p1.html" target="_blank">Haz clic aquí</a>
				<br><br>Si suprimes este mail y olvidas tu contraseña, podrás pedir una nueva contraseña que será activada de la misma manera que esta cuenta.
				<br><br><br>Muchas gracias por registrarte.
			</p>
			<?php 
				}
				else
				{
					print_r("<p class='email'> SU SESIÓN ESTÁ CADUCADA</p>");
				}

			 ?>
		</div>
	</div>

	
	<div id="footer" class="row">
		<div class="col-12">
			Todos los derechos reservados.
		</div>
	</div>

	<?php
		session_unset();
		session_destroy();
	?>
</body>
</html>