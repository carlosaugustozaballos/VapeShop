<?php
session_start();
require_once "datos.php";


if (isset($_POST)) {
    $email = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Clientes where email='$email'";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($result);
    if ($email == $row['email'] && $password == $row['contrasenya']) {
        $_SESSION['logedin'] = true;
        $_SESSION['Usuario'] = $email;

        header("location:tienda.php");
    } else {
        echo '<script type="text/javascript">
                        alert("Usuario incorrecto");   
                                             </script>';
        echo "<center><h1><a href='tienda.php'>Volver a tienda</a></h1></center>";
    }
    mysqli_close($conexion);
}
?>