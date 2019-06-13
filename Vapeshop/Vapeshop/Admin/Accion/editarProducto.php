<!DOCTYPE html>
<html>
<head>
	<title>Editar Productos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
			
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php
error_reporting(0);
include "datos.php" ; 
$id = $_GET['id']; 
$sql = "Select * from productos where id_Producto ='".$id."'";
$resultado = mysqli_query($conexion,$sql);
		while ($mostrar = mysqli_fetch_assoc($resultado)){

 ?>



<form >
	 <div class="form-group">
    <label for="ID">Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $mostrar['id_Producto'] ?>">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" value="<?php echo $mostrar['nombre'] ?>">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="text" class="form-control" name="precio" value="<?php echo $mostrar['precio'] ?>">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Imagen</label>
    <input type="text" class="form-control" value="<?php echo $mostrar['imagen'] ?>" name="imagen">
  </div>

   <div class="form-group">
    <label for="exampleInputNombre1">Stock</label>
    <input type="text" name="stock" class="form-control" value="<?php echo $mostrar['stock'] ?>">
  </div>

   <div class="form-group">
    <label for="exampleInputTelefono1">Categoria</label>
    <input type="text" name="categoria" class="form-control" value="<?php echo $mostrar['categoria'] ?>">
  </div>
 
  <input type="submit" class="btn btn-primary" value="Editar">

</form>
<?php }

 ?>

 <?php  
 
      $id2 = $_GET['id'];
      $nombre = $_GET['nombre'];
      $precio= $_GET['precio'];
      $imagen =$_GET['imagen'];
      $stock =$_GET['stock'];
      $categoria =$_GET['categoria'];

      $Sentencia2="update productos set nombre ='".$nombre."', precio='".$precio."', imagen = '".$imagen."' , stock ='".$stock."', categoria='".$categoria."' where id_Producto = '".$id2."'";


      $consulta= mysqli_query($conexion,$Sentencia2);

        if (!$consulta) {
          echo "No ha podido actualizarse el id = $id2 en la base de datos";
          echo "<a href='../productos.php'>Volver a Inicio</a>";
         
        }else{
          echo "Se ha actualizado en la base de datos";
          echo "<a href='../productos.php'>Volver a Inicio</a>";
          

        }
       

?>

</body>
</html>