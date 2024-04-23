<?php 
$host = "mysql";  
$database = "HotelMoro"; 
$user = "admin"; 
$password = "admin123"; 
$conexion = mysqli_connect($host, $user, $password,$database); 

if (!$conexion)   die("No ha podido realizarse la conexión".mysqli_connect_error()); 
?>
<html>
<body>
    <h1>Personal del hotel</h1>
    <h3>Iniciar sesión</h3>
    <?php
    
    
    ?>
</body>
</html>