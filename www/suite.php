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
<h1>Habitaciones suites</h1>
    <p>¡Sumérgete en un mundo de elegancia y confort en nuestras exclusivas suites de lujo!</p>    
    <p>En HotelMoro, entendemos que tus vacaciones deben ser una experiencia excepcional. Por eso, nuestras suites de lujo están diseñadas para ofrecerte el máximo confort y lujo durante tu estancia.</p>
    <p>Disfruta de amplios espacios decorados con un estilo elegante y sofisticado, donde cada detalle ha sido cuidadosamente seleccionado para ofrecerte una experiencia única. Desde lujosas camas king-size hasta salas de estar privadas y balcones con impresionantes vistas panorámicas, nuestras suites de lujo te brindarán todo lo necesario para una estancia inolvidable.</p>  
    <p>Además, podrás disfrutar de servicios exclusivos como mayordomo personal, acceso a áreas VIP y tratamientos de spa privados en la comodidad de tu suite. Todo ello combinado con la atención excepcional de nuestro equipo, que estará siempre a tu disposición para garantizar que tu estancia sea perfecta en todos los sentidos.</p>
    <p>¡Reserva ahora y déjate llevar por la elegancia y el lujo en HotelMoro</p>
    <img src="/img/Imagen1.jpg" alt="Imagen de habitación suite">
    <?php
    
    
    ?>
</body>
</html>