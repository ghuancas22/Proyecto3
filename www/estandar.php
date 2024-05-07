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
    <title>Habitaciones estándar</title> <!--titulo de la pagina-->
    <style>
        body {
            font-family: Arial, sans-serif; /* Fuente predeterminada para el cuerpo del documento */
            padding: 20px; /* Espacio interno para el cuerpo */
        }

        .container {
            max-width: 800px; /* Ancho máximo del contenedor */
            margin: 0 auto; /* Se centra el contenedor horizontalmente */
            text-align: center; /* Alinea el texto al centro */
        }

        h1 {
            color: #1f0469; /* Color del encabezado principal */
        }

        p {
            margin-bottom: 20px; /* Margen inferior para los párrafos */
        }

        img {
            display: block; /* Hace que la imagen sea un elemento de bloque */
            margin: 0 auto 20px; /* Margen superior e inferior 0 y lateral automático para centrar */
            max-width: 100%; /* Ancho máximo de la imagen */
            height: auto; /* Altura automática para mantener la proporción */
        }
        .btn-reservar {
            display: inline-block; /* Se hace que el botón sea un elemento en línea con ancho ajustable */
            background-color: #1f0469; /* Color de fondo para el botón */
            color: white; /* Color del texto del botón */
            padding: 10px 20px; /* Espacio interno para el botón */
            text-decoration: none; /* Sin decoración de texto */
            border-radius: 5px; /* Bordes redondeados */
            transition: background-color 0.3s ease; /* Transición suave para el cambio de color de fondo */
        }
    
        .btn-reservar:hover {
            background-color: #230770; /* Color de fondo al pasar el cursor sobre el botón */
        }
    </style>
    <script>
        function cargarContenido(url) {
            var xhttp = new XMLHttpRequest(); /* Objeto para realizar solicitudes HTTP */
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("contenido-reserva").innerHTML = this.responseText; /* Se actualiza el contenido del contenedor con la respuesta del servidor */
                }
            };
            xhttp.open("GET", url, true); /* Se abre una nueva solicitud GET al servidor */
            xhttp.send(); /* Se envía la solicitud al servidor */
        }
        </script>
</head>
<body>
    <div class="container">
        <h1>Habitaciones estándar</h1> <!-- Encabezado principal -->
         <!-- Párrafo de introducción -->
        <p>Descubre la comodidad de nuestras habitaciones estándar en elindio. Diseñadas pensando en tu confort y bienestar, nuestras habitaciones estándar ofrecen una experiencia de alojamiento excepcional a un precio asequible.</p>
        <!-- Párrafo sobre las comodidades de las habitaciones -->
        <p>Cada habitación estándar está elegantemente decorada y equipada con todas las comodidades necesarias para una estancia relajante. Disfruta de una cama cómoda, un baño moderno y funcional, y un espacio bien distribuido que te hará sentir como en casa.</p> 
        <!-- Párrafo sobre las vistas -->
        <p>Con vistas a la ciudad / playa / montañas (según la ubicación), nuestras habitaciones estándar ofrecen un entorno encantador para tu estancia. Despiértate con vistas impresionantes y comienza tu día con energía renovada.</p> 
        <!-- Párrafo sobre el servicio al cliente -->
        <p>Además, en elindio nos esforzamos por brindar un servicio excepcional a nuestros huéspedes. Nuestro personal amable y atento está siempre disponible para asegurarse de que tengas una experiencia memorable durante tu estancia con nosotros.</p> 
        <!-- Párrafo de llamado a la acción -->
        <p>¡Reserva ahora tu habitación estándar y descubre por qué somos la elección ideal para tu próximo viaje!</p> 
        <img src="/img/Imagen5.jpg" alt="Imagen de habitación estandar"> <!-- Imagen de una habitación estándar -->

        <!-- Botón de reserva -->
        <button class="btn-reservar" onclick="cargarContenido('reservar.php')">Reservar ahora</button>

        <!-- Contenedor para mostrar el contenido de reservar.php -->
        <div id="contenido-reserva"></div>
    </div>
</body>
</html>
