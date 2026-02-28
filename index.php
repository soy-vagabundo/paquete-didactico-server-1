<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
<title>Login</title>
</head>
<body>

<h1>Iniciar Sesión</h1>

<form action="login.php" method="POST">
<input type="text" name="username" placeholder="Usuario" required>
<input type="password" name="password" placeholder="Contraseña" required>
<button type="submit">Entrar</button>
</form>

<a href="registro.php">Crear cuenta</a>

</body>
</html>