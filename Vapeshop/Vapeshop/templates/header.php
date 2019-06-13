<?php session_start();
header('Content-Type: text/html; charset=UTF-8');  
define('MAX_SESSION_TIEMPO', 3600 * 1);
?>
<!DOCTYPE html>
<html>


<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- Libreria para funcion validarEdadBonito -->
  <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
  <script type="text/javascript" src="js/principal.js"></script>

  <title>Vapeshop</title>

  <nav class="navbar navbar-dark bg-dark">
  
    <!-- Navbar content -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      Menu
    </button>
    <a href="#" class="funcionalidades"><img src="Imagenes/IconoTienda.png" width="50" height="50" alt="Tienda"></a>
    <a href="tienda.php" class="funcionalidades"><img src="Imagenes/tienda.png" width="50" height="50" alt="Tienda"></a>
    <a href="ofertas.php" class="funcionalidades"><img src="Imagenes/rebajas.png" width="50" height="65" alt="Ofertas"></a>
    <a href="sobreNosotros.php" class="funcionalidades"><img src="Imagenes/SobreNos.png" width="50" height="50" alt="Sobre Nosotros"></a>
    <a href="carrito.php" class="funcionalidades"><img src="Imagenes/carrito.png" width="50" height="60" alt="Carrito"></a>


    <?php if (!isset($_SESSION['Usuario'])) { ?>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-warning btn-rounded" id="logID">Identifiquese</a><br>
      </li>
    <?php } else { ?>

      <li class="list-inline-item">
        <a href="" class="btn btn-light btn-rounded">Usuario : <?php echo $_SESSION['Usuario']; ?></a><br>
      </li>

      <li class="list-inline-item">
        <a href="logout.php" class="btn btn-danger btn-rounded">Logout</a><br>
      </li>


    <?php

  } ?>





    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tienda.php">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ofertas.php">OFERTAS</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="RDA.php">RDA</a>
            <a class="dropdown-item" href="RTA.php">RTA</a>
            <a class="dropdown-item" href="LIQUIDOS.php">LIQUIDOS</a>
            <a class="dropdown-item" href="MOD.php">MOD</a>

          </div>
        </li>
      </ul>

    </div>
  </nav>
  <div class="oculto" id="loginOculto">
    <form method="post" action="login.php">
      <label>Email</label>
      <input type="email" name="correo" placeholder="Introdozca su Correo"><br>
      <label>Contraseña</label>
      <input type="password" name="password" placeholder="Introdozca su Contraseña"><br>
      <input type="submit" value="Enviar">
    </form>
  </div>
</head>

<body>