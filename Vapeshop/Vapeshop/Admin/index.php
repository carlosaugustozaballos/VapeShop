<!DOCTYPE html>
<html>

<head>
	<title>Login Para Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<?php

	//Hago llamada a la base de datos con el require once
	require_once('Accion/datos.php');

	session_start();


	if (!empty($_POST)) {
		//Declaro variables POST C
		$email = $_POST['email'];
		$password = $_POST['clave'];
		//Consulta a la base de datos
		$sql = "Select * from clientes where id_cli='1'";
		$result = mysqli_query($conexion, $sql);
		while ($mostrar = mysqli_fetch_array($result)) {

			if ($email == $mostrar['email'] && $password == $mostrar['contrasenya']) {
				header("Location: principal.php");
			} else {
				echo "<script type='text/javascript'> alert('No se ha podido Acceder A la sesion del Administrador de la VAPESHOP');</script>";
			}
		}
	}
	?>
	<div class="container">
		<div class="abs-center">
			<form action="" method="POST" class="border p-3 form">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Clave</label>
					<input type="password" name="clave" id="password" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" value="Acceder">
			</form>
		</div>
	</div>
</body>

</html>