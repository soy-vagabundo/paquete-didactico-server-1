<?php
include("conexion.php");

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
<title>Panel</title>
</head>
<body>

<h1>Bienvenido <?php echo $_SESSION['username']; ?></h1>

<form action="subir.php" method="POST" enctype="multipart/form-data">
<input type="file" name="archivo" required>
<button type="submit">Subir</button>
</form>

<h2>Archivos</h2>

<?php
$resultado = $conexion->query("SELECT archivos.*, usuarios.username FROM archivos 
JOIN usuarios ON archivos.usuario_id=usuarios.id");

while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . " - " . $fila['username'];
    echo "<a href='borrar.php?id=".$fila['id']."'>Borrar</a><br>";
}
?>

<a href="logout.php">Cerrar sesión</a>

</body>
</html>
