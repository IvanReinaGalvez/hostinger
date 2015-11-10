<?php
	session_start();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página 2</title>
        <link rel="stylesheet" href="form1.css">
    </head>
    <body>
        <h1 id="cabecera">Null Pointer Developer</h1>
		<div id="contenido" class="row">
			<h1> Datos Usuario</h1>
			<form id="form" action="p3.php" method="post" accept-charset="utf-8">
				<fieldset class="row">
			    	<legend>Datos Obtenidos:</legend>

			    	<?php
				    	if(!empty($_POST))
						{
					    		$_SESSION["nombre"]=$_POST["nombre"];
					    		$_SESSION["apellido"] = $_POST["apellido"];
					    		$_SESSION["email"] = $_POST["email"];

					    		if(isset($_POST["sex"]))
					    			$_SESSION["sex"] = $_POST["sex"];
					    		
					    		$_SESSION["diaFnac"] = $_POST["diaFnac"];	
					    		$_SESSION["mesFnac"] = $_POST["mesFnac"];
					    		$_SESSION["anioFnac"] = $_POST["anioFnac"];

					    		if(isset($_POST["tlf"]) && !empty($_POST["tlf"]))
					    		{
					    			$_POST["tlf"]= trim($_POST["tlf"]);
					    			$_SESSION["tlf"] = $_POST["tlf"];	
					    		}
					    		$_SESSION["usrName"] = $_POST["usrName"];
					    		$_SESSION["usrPass"] = $_POST["usrPass"];
					    		$_SESSION["usrPassCheck"] = $_POST["usrPassCheck"];

					    		if(isset($_POST["usrImg"]))
					    			$_SESSION["usrImg"] = $_POST["usrImg"];

					    		if(isset($_POST["navegador"]))
					    			$_SESSION["navegador"] = $_POST["navegador"];	

					    		echo "<label class='col-12'>Nombre: ".$_SESSION["nombre"]."</label>";
					    		echo "<label class='col-12'>Apellidos: ".$_SESSION["apellido"]."</label>";
					    		echo "<label class='col-12'>Email: ".$_SESSION["email"]."</label>";

					    		if(isset($_POST["sex"]))
					    			echo "<label class='col-12'>Sexo: ".$_SESSION["sex"]."</label>";

					    		echo "<label class='col-12'>Fecha de nacimiento: ".$_SESSION["diaFnac"]."/".$_SESSION["mesFnac"]."/".$_SESSION["anioFnac"]."</label>";
					    		if(isset($_POST["tlf"]) && !empty($_POST["tlf"]))
					    			echo "<label class='col-12'>Tlf: ".$_SESSION["tlf"]."</label>";
					    		echo "<label class='col-12'>Usuario: ".$_SESSION["usrName"]."</label>";
					    		echo "<label class='col-12'>Password: ".$_SESSION["usrPass"]."</label>";

					    		if(isset($_POST["usrImg"]))
					    			echo "<label class='col-12'>Avatar: ".$_SESSION["usrImg"]."</label>";

					    		if(isset($_POST["navegador"]))
					    		{
					    			echo "<label class='col-2'>Navegadores:</label>";
					    			foreach ($_SESSION["navegador"] as $nav)
					    			{
					    				echo "<label class='col-2'>".$nav."</label>";
					    			}
					    		}
				    	}
				    	else
				    	{
				    		print_r("<p class='email'> SU SESIÓN ESTÁ CADUCADA</p>");
				    	}
			    	?>

				</fieldset>
				<!-- FILA SEPARADORA -->
			<div class="rowSeparator"></div>
				<?php 
					if(!empty($_POST))
					{
				?>
				<div id="botonera" class="row">
					<button id="btnLeft" class="btn" type="submit"> Enviar </button>
				</div>
				<?php 
					}
				?>
			</form>
		</div>

		<div id="footer" class="row">
		<div class="col-12">
			Todos los derechos reservados.
		</div>
	</div>
        	
    </body>
</html>