<?php 
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "HotelMoro");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión en Hotel Moro</title>
</head>
<body>
    <h1>Hotel Moro</h1>
    <h2>Iniciar sesión</h2>
    <h3>Personal</h3>
    <form action="login_personal.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Iniciar sesión como personal">
    </form>
</body>
</html>