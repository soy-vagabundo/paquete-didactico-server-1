<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
<title>Registro</title>
</head>
<body>

<h1>Crear Usuario</h1>

<form action="" method="POST">
<input type="text" name="username" placeholder="Usuario" required>
<input type="password" name="password" placeholder="Contraseña" required>
<button type="submit">Registrar</button>
</form>

<a href="index.php">Volver</a>

<?php
if ($_POST) {
    $user = $_POST['username'];
    $pass = MD5($_POST['password']);
    $conexion->query("INSERT INTO usuarios (username,password,rol) VALUES ('$user','$pass','user')");
    echo "Usuario creado";
}
?>

</body>
</html>