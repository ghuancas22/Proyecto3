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
    <h1>Habitaciones familiares</h1>
    <p>¡Disfruta de momentos inolvidables con tu familia en nuestras acogedoras habitaciones familiares!</p>
    <p>En HotelMoro, entendemos que la familia es lo más importante. Por eso, nuestras habitaciones familiares están diseñadas pensando en el confort y la comodidad de todos los miembros de la familia.</p>
    <p>Con un ambiente cálido y espacioso, nuestras habitaciones familiares ofrecen todo lo necesario para que tu estancia sea perfecta. Desde amplias camas hasta áreas de estar separadas, cada detalle está cuidadosamente pensado para garantizar el máximo disfrute para ti y tu familia.</p>
    <p>Además, nuestras habitaciones familiares ofrecen impresionantes vistas panorámicas que harán que tus momentos en familia sean aún más especiales. Ya sea disfrutando de la ciudad, la playa o las montañas, aquí encontrarás el escenario perfecto para crear recuerdos que perdurarán para siempre.</p>
    <p>¡Reserva ahora y vive una experiencia única con tus seres queridos en HotelMoro!</p>

    <img src="/img/Imagen3.jpg" alt="Imagen de habitación familiar">
    <?php
    
    
    ?>
</body>
</html>