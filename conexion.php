<?php
$conexion = new mysqli("localhost", "root", "", "proyecto");

if ($conexion->connect_error) {
    die("Error de conexión");
}

session_start();
?>