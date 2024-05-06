<?php 
// Se establece la Conexión a la base de datos
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio"); 

# Verificamos si la conexión se estableció
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error); # Muestra mensaje de error si la conexión falla
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Habitaciones suites</title> <!-- Título principal -->
    <style>  /* Se añade estilo CSS para aplicar al contenido de la página */
        body {  
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        /* Se define un contenedor con un ancho máximo de 800 píxeles y centrado horizontalmente*/
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        /* Se establece el color del título*/
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
       /* Se Define un estilo para un botón de reserva con transición de color de fondo al pasar el cursor sobre él*/
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
        /*Define una función que utiliza XMLHttpRequest para cargar contenido desde una URL */
        function cargarContenido(url) { /* Se define una función llamada “cargarContenido */
            var xhttp = new XMLHttpRequest(); /* Se Crea una instancia de XMLHttpRequest para realizar solicitudes HTTP*/
            xhttp.onreadystatechange = function() {  /*Se define una función que se ejecutará cuando cambie el estado de la solicitud*/
                if (this.readyState == 4 && this.status == 200) { /* Se verifica si la solicitud se ha completado correctamente (estado 4) y si el código de estado HTTP es 200 (éxito)*/
                    document.getElementById("contenido-reserva").innerHTML = this.responseText; /* Actualiza el contenido del elemento con el ID “contenido-reserva” con la respuesta recibida*/
                }
            };
            xhttp.open("GET", url, true); /* Se abre una solicitud GET a la URL especificada de forma asíncrona */
            xhttp.send(); /* Se Envía la solicitud al servidor */
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Habitaciones suites</h1>
         <!-- Mensaje de introducción -->
        <p>¡Sumérgete en un mundo de elegancia y confort en nuestras exclusivas suites de lujo!</p>   
         <!-- Descripción de las suites -->  
         <p>En elindio, entendemos que tus vacaciones deben ser una experiencia excepcional. Por eso, nuestras suites de lujo están diseñadas para ofrecerte el máximo confort y lujo durante tu estancia.</p> 
         <!-- Detalles de las suites -->
         <p>Disfruta de amplios espacios decorados con un estilo elegante y sofisticado, donde cada detalle ha sido cuidadosamente seleccionado para ofrecerte una experiencia única. Desde lujosas camas king-size hasta salas de estar privadas y balcones con impresionantes vistas panorámicas, nuestras suites de lujo te brindarán todo lo necesario para una estancia inolvidable.</p>  
        <!-- Servicios exclusivos -->
         <p>Además, podrás disfrutar de servicios exclusivos como mayordomo personal, acceso a áreas VIP y tratamientos de spa privados en la comodidad de tu suite. Todo ello combinado con la atención excepcional de nuestro equipo, que estará siempre a tu disposición para garantizar que tu estancia sea perfecta en todos los sentidos.</p>
        <!-- Mensaje de reserva -->
         <p>¡Reserva ahora y déjate llevar por la elegancia y el lujo en elindio</p>
        <img src="/img/Imagen1.jpg" alt="Imagen de habitación suite"> <!-- Esta línea muestra una imagen de una habitación suite -->

        <!-- Botón de reservar -->
        <button class="btn-reservar" onclick="cargarContenido('reservar.php')">Reservar ahora</button>

        <!-- Contenedor para mostrar el contenido de reservar.php -->
        <div id="contenido-reserva"></div>
    </div>
</body>
</html>
