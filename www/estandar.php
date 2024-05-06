<?php 
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>
<html>
<head>
    <title>Habitaciones estándar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: #1f0469;
        }

        p {
            margin-bottom: 20px;
        }

        img {
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
            height: auto;
        }

        .btn-reservar {
            display: inline-block;
            background-color: #1f0469;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-reservar:hover {
            background-color: #230770;
        }
    </style>
    <script>
        function cargarContenido(url) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("contenido-reserva").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", url, true);
            xhttp.send();
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Habitaciones estándar</h1>
        <p>Descubre la comodidad de nuestras habitaciones estándar en elindio. Diseñadas pensando en tu confort y bienestar, nuestras habitaciones estándar ofrecen una experiencia de alojamiento excepcional a un precio asequible.</p>   
        <p>Cada habitación estándar está elegantemente decorada y equipada con todas las comodidades necesarias para una estancia relajante. Disfruta de una cama cómoda, un baño moderno y funcional, y un espacio bien distribuido que te hará sentir como en casa.</p>
        <p>Con vistas a la ciudad / playa / montañas (según la ubicación), nuestras habitaciones estándar ofrecen un entorno encantador para tu estancia. Despiértate con vistas impresionantes y comienza tu día con energía renovada.</p>
        <p>Además, en elindio nos esforzamos por brindar un servicio excepcional a nuestros huéspedes. Nuestro personal amable y atento está siempre disponible para asegurarse de que tengas una experiencia memorable durante tu estancia con nosotros.</p>
        <p>¡Reserva ahora tu habitación estándar y descubre por qué somos la elección ideal para tu próximo viaje!</p>
        <img src="/img/Imagen5.jpg" alt="Imagen de habitación estandar">

        <!-- Botón de reservar -->
        <button class="btn-reservar" onclick="cargarContenido('reservar.php')">Reservar ahora</button>

        <!-- Contenedor para mostrar el contenido de reservar.php -->
        <div id="contenido-reserva"></div>
    </div>
</body>
</html>
