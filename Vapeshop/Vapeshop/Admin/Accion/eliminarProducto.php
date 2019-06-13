<?php
require_once( "datos.php" );
$id = $_GET["id"];
$sentencia = "delete from productos where id_Producto =$id";
mysqli_query($conexion, $sentencia);


mysqli_close($conexion);
header("location:../productos.php");
?>