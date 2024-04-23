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
<h1>Habitaciones estándar</h1>
    <p>Descubre la comodidad de nuestras habitaciones estándar en HotelMoro. Diseñadas pensando en tu confort y bienestar, nuestras habitaciones estándar ofrecen una experiencia de alojamiento excepcional a un precio asequible.</p>   
    <p>Cada habitación estándar está elegantemente decorada y equipada con todas las comodidades necesarias para una estancia relajante. Disfruta de una cama cómoda, un baño moderno y funcional, y un espacio bien distribuido que te hará sentir como en casa.</p>
    <p>Con vistas a la ciudad / playa / montañas (según la ubicación), nuestras habitaciones estándar ofrecen un entorno encantador para tu estancia. Despiértate con vistas impresionantes y comienza tu día con energía renovada.</p>
    <p>Además, en HotelMoro nos esforzamos por brindar un servicio excepcional a nuestros huéspedes. Nuestro personal amable y atento está siempre disponible para asegurarse de que tengas una experiencia memorable durante tu estancia con nosotros.</p>
    <p>¡Reserva ahora tu habitación estándar y descubre por qué somos la elección ideal para tu próximo viaje!</p>
    <img src="/img/Imagen5.jpg" alt="Imagen de habitación estandar">
    <?php
    
    
    ?>
</body>
</html>