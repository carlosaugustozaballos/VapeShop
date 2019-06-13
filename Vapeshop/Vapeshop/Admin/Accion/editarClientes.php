<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title> Editar Clientes</title>
</head>
<?php
//Para no ver los fallos que da que no tienen sentido.
error_reporting(0);
require_once "datos.php";
$id = $_GET['id'];
$sql = "Select * from clientes where id_cli ='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_assoc($resultado)) {

  ?>

  <body>
    <form>
      <div class="form-group">
        <label for="ID">Id</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $mostrar['id_cli'] ?>">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $mostrar['email'] ?>">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nick</label>
        <input type="text" class="form-control" name="nick" value="<?php echo $mostrar['nick'] ?>">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Clave</label>
        <input type="text" class="form-control" value="<?php echo $mostrar['contrasenya'] ?>" name="clave">
      </div>

      <div class="form-group">
        <label for="exampleInputNombre1">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $mostrar['nombre'] ?>">
      </div>

      <div class="form-group">
        <label for="exampleInputTelefono1">Telefono</label>
        <input type="text" name="telefono" class="form-control" value="<?php echo $mostrar['telefono'] ?>">
      </div>

      <input type="submit" class="btn btn-primary" value="Editar">

    </form>
  <?php }

?>
  <?php
  $id2 = $_GET['id'];
  $email = $_GET['email'];
  $nick = $_GET['nick'];
  $clave = $_GET['clave'];
  $nombre = $_GET['nombre'];
  $telefono = $_GET['telefono'];

  $Sentencia2 = "Update clientes set email ='" . $email . "', nick='" . $nick . "', contrasenya = '" . $clave . "' , nombre ='" . $nombre . "', telefono='" . $telefono . "' where id_cli = '" . $id2 . "'";


  $consulta = mysqli_query($conexion, $Sentencia2);

  if (!$consulta) {
    echo "No ha podido actualizarse el id = $id2 en la base de datos";
    echo "<a href='../clientes.php'>Volver a Inicio</a>";
  } else {
    echo "Se ha actualizado en la base de datos";
    echo "<a href='../clientes.php'>Volver a Inicio</a>";
  }


  ?>



</body>



</html>