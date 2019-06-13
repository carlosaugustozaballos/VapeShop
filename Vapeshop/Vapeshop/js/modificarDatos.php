<?php 

session_start();
$array_productos = $_SESSION['carrito'];
$total=0;
$numero = 0;
for ($i = 0; $i < count($array_productos); $i++) {
    if ($array_productos[$i]['Id'] == $_POST['Id']) {
        $numero = $i;
    }
}
$array_productos[$numero]['Cantidad'] = $_POST['Cantidad'];
for ($i = 0; $i < count($array_productos); $i++) {
       $total = ($array_productos[$i]['Precio']*$array_productos[$i]['Cantidad'])+$total;
}
    $_SESSION['carrito']=$array_productos;
    echo $total ;
?> 