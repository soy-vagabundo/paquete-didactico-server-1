<?php
include("conexion.php");

$user = $_POST['username'];
$pass = MD5($_POST['password']);

$sql = "SELECT * FROM usuarios WHERE username='$user' AND password='$pass'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $datos = $resultado->fetch_assoc();
    $_SESSION['id'] = $datos['id'];
    $_SESSION['username'] = $datos['username'];
    $_SESSION['rol'] = $datos['rol'];
    header("Location: panel.php");
} else {
    echo "Datos incorrectos";
}
?>