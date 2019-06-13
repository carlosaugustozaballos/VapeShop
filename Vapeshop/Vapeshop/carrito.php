<html>
<?php  ?>
<?php
require_once("templates/header.php");
error_reporting(0);
require_once ("datos.php");

if (isset($_SESSION['carrito'])) {
    $array_productos = $_SESSION['carrito'];
    $mismo_producto = false;
    $numero = 0;
    for ($i = 0; $i < count($array_productos); $i++) {
        if ($array_productos[$i]['Id'] == $_GET['id']) {
            $mismo_producto = true;
            $numero = $i;
        }
    }

    if ($mismo_producto == true) {
        $array_productos[$numero]['Cantidad'] = $array_productos[$numero]['Cantidad'] + 1;
        $_SESSION['carrito'] = $array_productos;
    } else {
        $nombre = "";
        $precio = 0;
        $imagen = "";
        $sql = "Select * from productos where id_Producto ='" . $_GET['id'] . "'";
        $resultado = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($resultado)) {
            $nombre = $mostrar['nombre'];
            $precio = $mostrar['precio'];
            $imagen = $mostrar['imagen'];
        }
        $datosNuevos = array(
            'Id' => $_GET['id'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1
        );
        array_push($array_productos, $datosNuevos);
        $_SESSION['carrito'] = $array_productos;
    }
} else {
    if (isset($_GET["id"])) {
        $nombre = "";
        $precio = 0;
        $imagen = "";
        $sql = "Select * from productos where id_Producto ='" . $_GET['id'] . "'";
        $resultado = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($resultado)) {
            $nombre = $mostrar['nombre'];
            $precio = $mostrar['precio'];
            $imagen = $mostrar['imagen'];
        }
        $array_productos[] = array(
            'Id' => $_GET['id'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1
        );
        $_SESSION['carrito'] = $array_productos;
    }
}
?>
<?php
$total = 0;
if (isset($_SESSION['carrito'])) {

    $datos = $_SESSION['carrito'];
    for ($i = 0; $i < count($datos); $i++) {
        ?>

        <div class="producto">
        <div class="card-body">
            PRODUCTO :
            
            <div class="row">
                
                <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="imagen" src="<?php echo $datos[$i]['Imagen']; ?>" width="120" height="100">
                </div>
                <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                    <h4 class="product-name"><strong><?php echo $datos[$i]['Nombre']; ?></strong></h4>
                </div>
                <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h6><strong><span class="subprecio" ><?php echo $datos[$i]['Precio']; ?> €</span></strong></h6>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <div class="quantity">
                            <input class="cantidad" type="number" min="0" value="<?php echo $datos[$i]['Cantidad']; ?>" data-id="<?php echo $datos[$i]['Id'] ?>" class="cantidad">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

       

        <div class="subtotal">  <?php $total = ($datos[$i]['Cantidad'] * $datos[$i]['Precio']) + $total; ?></div>
        <?php
    }
} else {
    echo "<center><h3>El carrito de compras esta vacio</h3></center>";
}
echo '<div id="total" ><center><h1>Total :' . $total . '€</h1></center></div>';

?>
<div id="vCatalogo">
    <h5><a href="tienda.php" class="btn btn-success">Ver Catalago</a></h5>
</div>
<div id="vCarrito">
    <h5><a href="vaciar.php" class="btn btn-danger">Vaciar Carrito</a></h5>
</div>
<div id="vCarrito">
<a href="vaciar.php"><input type="submit" class="btn btn-primary" onclick="vaciar.php" value="Pagar <?php echo $total ?>€"></a>
</div>
   

    <?php
    //print_r($array_productos);
    $_SESSION['total']= $total;
    for ($i = 0; $i < count($array_productos); $i++) {  
        $obtenerNombres = $array_productos[$i]['Nombre'] ;
        $obtenerPrecios = $array_productos[$i]['Precio'];
       
     
    }
    $sentencia = "INSERT INTO detallepedido(estado, productos, precio) VALUES ('Recien comprado','$obtenerNombres', '$obtenerPrecios')";
    $consulta = mysqli_query($conexion,$sentencia);
   
 
    ?>
  
    
    </body>

</html>

