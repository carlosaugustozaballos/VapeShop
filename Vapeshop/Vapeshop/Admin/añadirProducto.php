<!DOCTYPE html>
<meta charset="utf-8">
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Añadir producto</title>
</head>

<body>
  <form action="Accion/añadirProducto.php" method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre de producto">

    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" name="precio" placeholder="Introduzca el precio">
    </div>

    <div class="form-group">
      <label for="Imagen">Imagen</label>
      <input type="text" class="form-control" placeholder="Introduzca URL de la imagen" name="imagen">
    </div>

    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="text" name="stock" class="form-control" placeholder="Introduzca el stock que dispongamos">
    </div>

    <div class="form-group">
      <label for="Categoria">Categoria</label>
      <input type="text" name="categoria" class="form-control" placeholder="¿A que categoria pertenece?">
    </div>

    <input type="submit" class="btn btn-primary" value="Añadir">
  </form>
</body>

</html>