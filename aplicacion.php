<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

// Mostrar información de la aplicación y del desarrollador
$nombreDesarrollador = "Marius"; // Reemplaza con tu nombre
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación</title>
</head>
<body>
<h1>Bienvenido a la Aplicación</h1>
<p>Acceso correcto. Desarrollado por: <?php echo $nombreDesarrollador; ?></p>

<!-- Opciones de alta, modificación, eliminación y salir -->
<ul>
    <li><a href="alta_usuario.php">Dar de Alta Usuario</a></li>
    <li><a href="modificar_usuario.php">Modificar Datos de Usuario</a></li>
    <li><a href="eliminar_usuario.php">Eliminar Usuario</a></li>
</ul>

<form method="post" action="salir.php">
    <input type="submit" value="Salir">
</form>
</body>
</html>

