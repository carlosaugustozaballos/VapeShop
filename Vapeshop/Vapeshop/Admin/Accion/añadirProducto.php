<?php

require_once( "datos.php" );




$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];

$Sentencia = "INSERT INTO productos(nombre, precio, imagen,stock,categoria) VALUES ('$nombre','$precio','$imagen','$stock','$categoria');";


$consulta = mysqli_query($conexion, $Sentencia);

if (!$consulta) {
  echo "No ha podido insertarse en la base de datos";
  echo "<a href='../productos.php'>Volver a Inicio</a>";
} else {
  echo "Se ha insertado en la base de datos";
  echo "<a href='../productos.php'>Volver a Inicio</a>";
}

mysqli_close($conexion);
?>