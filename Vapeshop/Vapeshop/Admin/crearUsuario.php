<!DOCTYPE html>
<html>
<meta charset="utf-8">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Crear Usuario</title>
</head>

<body>
  <form action="Accion/insertarUsuario.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Introduzca email cliente">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nick</label>
      <input type="text" class="form-control" name="nick" placeholder="Nick del usuario">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Clave</label>
      <input type="text" class="form-control" placeholder="Contraseña o clave para el usuario" name="clave">
    </div>

    <div class="form-group">
      <label for="exampleInputNombre1">Nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre del usuario">
    </div>

    <div class="form-group">
      <label for="exampleInputTelefono1">Telefono</label>
      <input type="text" name="telefono" class="form-control" placeholder="Telefono del Usuario">
    </div>

    <input type="submit" class="btn btn-primary" value="Añadir">
  </form>
</body>

</html>