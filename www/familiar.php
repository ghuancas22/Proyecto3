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
    <title>Habitaciones familiares</title>
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
        <h1>Habitaciones familiares</h1>
        <p>¡Disfruta de momentos inolvidables con tu familia en nuestras acogedoras habitaciones familiares!</p>
        <p>En elindio, entendemos que la familia es lo más importante. Por eso, nuestras habitaciones familiares están diseñadas pensando en el confort y la comodidad de todos los miembros de la familia.</p>
        <p>Con un ambiente cálido y espacioso, nuestras habitaciones familiares ofrecen todo lo necesario para que tu estancia sea perfecta. Desde amplias camas hasta áreas de estar separadas, cada detalle está cuidadosamente pensado para garantizar el máximo disfrute para ti y tu familia.</p>
        <p>Además, nuestras habitaciones familiares ofrecen impresionantes vistas panorámicas que harán que tus momentos en familia sean aún más especiales. Ya sea disfrutando de la ciudad, la playa o las montañas, aquí encontrarás el escenario perfecto para crear recuerdos que perdurarán para siempre.</p>

        <img src="/img/Imagen3.jpg" alt="Imagen de habitación familiar">

        <!-- Botón de reservar -->
        <button class="btn-reservar" onclick="cargarContenido('reservar.php')">Reservar ahora</button>

        <!-- Contenedor para mostrar el contenido de reservar.php -->
        <div id="contenido-reserva"></div>
    </div>
</body>
</html>
