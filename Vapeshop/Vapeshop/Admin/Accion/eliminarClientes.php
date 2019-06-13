<?php
require_once( "datos.php" ) ;
$id = $_GET["id"];
$sentencia = "delete from clientes where id_cli =$id";
mysqli_query($conexion, $sentencia);


mysqli_close($conexion);
header("location:../clientes.php");
?>