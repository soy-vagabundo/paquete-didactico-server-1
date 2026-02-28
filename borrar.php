<?php
include("conexion.php");

$idArchivo = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM archivos WHERE id=$idArchivo");
$archivo = $resultado->fetch_assoc();

if ($_SESSION['rol'] == "admin" || $_SESSION['id'] == $archivo['usuario_id']) {
    unlink("uploads/".$archivo['nombre']);
    $conexion->query("DELETE FROM archivos WHERE id=$idArchivo");
}

header("Location: panel.php");
?>