<!DOCTYPE html>
<?php require_once("templates/header.php"); ?>
<section class="sections random-product">
    <br>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php require_once( "datos.php" );
                $sql = "Select * from productos where categoria = 'RTA'";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $mostrar['imagen'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="producto.php?id=<?php echo $mostrar['id_Producto'] ?>" class="text-dark"><?php echo $mostrar['nombre'] ?></a>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <div class="badge badge-danger float-right"></div>
                                <div class="float-left">
                                    <p class="text-danger"><?php echo $mostrar['categoria'] ?></p>
                                    <br>
                                    <div><?php echo $mostrar['precio'] ?>€</div>
                                </div>
                            </div>
                            <div class="botonProductos">
                                <button class="btn btn-warning"><a href="carrito.php?id=<?php echo $mostrar['id_Producto'] ?>">Añadir a carrito</a></button>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!--.col-->

                <?php }
            require_once("templates/footer.php"); ?>