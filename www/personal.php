<?php 
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "HotelMoro");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>
<html>
<body>
    <h1>Personal del hotel</h1>
    <h3>Iniciar sesión</h3>
    <?php
    
    
    ?>
</body>
</html>