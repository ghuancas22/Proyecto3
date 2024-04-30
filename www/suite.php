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
    <title>Habitaciones suites</title>
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
        <h1>Habitaciones suites</h1>
        <p>¡Sumérgete en un mundo de elegancia y confort en nuestras exclusivas suites de lujo!</p>    
        <p>En HotelMoro, entendemos que tus vacaciones deben ser una experiencia excepcional. Por eso, nuestras suites de lujo están diseñadas para ofrecerte el máximo confort y lujo durante tu estancia.</p>
        <p>Disfruta de amplios espacios decorados con un estilo elegante y sofisticado, donde cada detalle ha sido cuidadosamente seleccionado para ofrecerte una experiencia única. Desde lujosas camas king-size hasta salas de estar privadas y balcones con impresionantes vistas panorámicas, nuestras suites de lujo te brindarán todo lo necesario para una estancia inolvidable.</p>  
        <p>Además, podrás disfrutar de servicios exclusivos como mayordomo personal, acceso a áreas VIP y tratamientos de spa privados en la comodidad de tu suite. Todo ello combinado con la atención excepcional de nuestro equipo, que estará siempre a tu disposición para garantizar que tu estancia sea perfecta en todos los sentidos.</p>
        <p>¡Reserva ahora y déjate llevar por la elegancia y el lujo en HotelMoro</p>
        <img src="/img/Imagen1.jpg" alt="Imagen de habitación suite">

        <!-- Botón de reservar -->
        <button class="btn-reservar" onclick="cargarContenido('reservar.php')">Reservar ahora</button>

        <!-- Contenedor para mostrar el contenido de reservar.php -->
        <div id="contenido-reserva"></div>
    </div>
</body>
</html>
