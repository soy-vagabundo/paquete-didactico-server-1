<?php
include("conexion.php");

if ($_FILES['archivo']) {

    $nombre = $_FILES['archivo']['name'];
    move_uploaded_file($_FILES['archivo']['tmp_name'], "uploads/".$nombre);

    $id = $_SESSION['id'];

    $conexion->query("INSERT INTO archivos (nombre,usuario_id) VALUES ('$nombre','$id')");
}

header("Location: panel.php");
?>