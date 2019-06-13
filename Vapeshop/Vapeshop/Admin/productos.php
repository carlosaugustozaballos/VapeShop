<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Productos</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Admin</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="clientes.php">CLIENTES <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php">PRODUCTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="facturas.php">FACTURAS</a>
        </li>
      </ul>

    </div>
  </nav>


  <div class="container mt-4">
    <div class="card border info">
      <div class="card-header">
        <a href="añadirProducto.php" class="btn btn-primary">Añadir producto</a>


      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Stock</th>
            <th>Categoria</th>
            <th>Funciones</th>
          </thead>
          <tbody>
            <?php require_once( "Accion/datos.php" );
            $sql = "Select * from productos";
            $result = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
              ?>

              <td><?php echo $mostrar['id_Producto'] ?></td>
              <td><?php echo $mostrar['nombre'] ?></td>
              <td><?php echo $mostrar['precio'] ?> €</td>
              <td><img src="<?php echo $mostrar['imagen'] ?>" height="40" width="40"></td>
              <td><?php echo $mostrar['stock'] ?></td>
              <td><?php echo $mostrar['categoria'] ?></td>
              <td>
                <a href="Accion/editarProductos.php?id=<?php echo $mostrar['id_Producto'] ?>" class="btn btn-warning">Editar</a>
                <a href="Accion/eliminarProducto.php?id=<?php echo $mostrar['id_Producto'] ?>" class="btn btn-danger">Eliminar</a>
              </td>

            </tbody> <?php } ?>

        </table>

      </div>
    </div>
  </div>
  </body>

</html>