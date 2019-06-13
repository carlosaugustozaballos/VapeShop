<?php

require_once( "datos.php" );

$descripcion = $_POST['descripcion'];
$productos = $_POST['productos'];
$precio = $_POST['precio'];

$Sentencia = "INSERT INTO detallepedido(descripcion, productos,precio) VALUES ('$descripcion','$productos','$precio');";

$consulta = mysqli_query($conexion, $Sentencia);

if (!$consulta) {
  echo "No ha podido insertarse en la base de datos";
  echo "<a href='../facturas.php'>Volver a Inicio</a>";
} else {
  echo "Se ha insertado en la base de datos";
  echo "<a href='../facturas.php'>Volver a Inicio</a>";
}

mysqli_close($conexion);
?>