<?php

require_once("datos.php");




$email = $_POST['email'];
$nick = $_POST['nick'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$Sentencia = "INSERT INTO clientes(email, nick, contrasenya,nombre,telefono) VALUES ('$email','$nick','$clave','$nombre','$telefono');";


$consulta = mysqli_query($conexion, $Sentencia);

if (!$consulta) {
  echo "No ha podido insertarse en la base de datos";
  echo "<a href='index.php'>Volver a Inicio</a>";
} else {
  echo "Se ha insertado en la base de datos";
  echo "<a href='index.php'>Volver a Inicio</a>";
}

mysqli_close($conexion);
?>