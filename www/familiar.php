<?php 
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Habitaciones familiares</title> <!-- Título de la página -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Fuente predeterminada para el cuerpo del documento */
            padding: 20px; /* Espacio interno para el cuerpo */
        }

        .container {
            max-width: 800px; /* Ancho máximo del contenedor */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
            text-align: center; /* Alineación del texto al centro */
        }

        h1 {
            color: #1f0469; /* Color del encabezado principal */
        }

        p {
            margin-bottom: 20px; /* Margen inferior para los párrafos */
        }

        img {
            display: block; /* Se hace que la imagen sea un elemento de bloque */
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
        <h1>Habitaciones familiares</h1> <!-- Encabezado principal -->
        <!-- Introducción -->
        <p>¡Disfruta de momentos inolvidables con tu familia en nuestras acogedoras habitaciones familiares!</p> 
        <!-- Explicacion sobre el enfoque en la familia -->
        <p>En elindio, entendemos que la familia es lo más importante. Por eso, nuestras habitaciones familiares están diseñadas pensando en el confort y la comodidad de todos los miembros de la familia.</p> 
        <!-- Explicacion sobre las comodidades de las habitaciones familiares -->
        <p>Con un ambiente cálido y espacioso, nuestras habitaciones familiares ofrecen todo lo necesario para que tu estancia sea perfecta. Desde amplias camas hasta áreas de estar separadas, cada detalle está cuidadosamente pensado para garantizar el máximo disfrute para ti y tu familia.</p> 
        <!-- Explicacion sobre las vistas panorámicas -->
        <p>Además, nuestras habitaciones familiares ofrecen impresionantes vistas panorámicas que harán que tus momentos en familia sean aún más especiales. Ya sea disfrutando de la ciudad, la playa o las montañas, aquí encontrarás el escenario perfecto para crear recuerdos que perdurarán para siempre.</p> 
        <img src="/img/Imagen3.jpg" alt="Imagen de habitación familiar"> <!-- Imagen de una habitación familiar -->

        <!-- Botón de reserva -->
        <button class="btn-reservar" onclick="cargarContenido('reservar.php')">Reservar ahora</button>

        <!-- Contenedor para mostrar el contenido de reservar.php -->
        <div id="contenido-reserva"></div>
    </div>
</body>
</html>
