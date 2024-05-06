<?php
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Verificar si se ha enviado el formulario de reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"]; // Nombre del cliente obtenido del formulario
    $email = $_POST["email"]; // Correo del cliente obtenido del formulario
    $dni = $_POST["dni"]; // Nuevo campo para el DNI del cliente
    $cantidad_personas = $_POST["cantidad_personas"]; // Cantidad de personas obtenidas del formulario
    $fecha_inicio = $_POST["fecha_inicio"]; // Fecha de entrada obtenida del formulario
    $fecha_fin = $_POST["fecha_fin"]; // Fecha de salida obtenida del formulario
    $habitacion = $_POST["habitacion"]; // Nuevo campo para la habitación

    // Insertar la reserva en la base de datos con uN Querry
    $query = "INSERT INTO cliente (nombre, email, DNI, cantidad_personas, habitacion, fecha_entrada, fecha_salida) VALUES ('$nombre', '$email', '$dni', '$cantidad_personas', '$habitacion', '$fecha_inicio', '$fecha_fin')";
    if ($mysqli->query($query) === TRUE) { // Ejecutar la consulta y verificar si se realizó correctamente
        echo "Reserva realizada con éxito."; // Mensaje de éxito si la reserva se realizó correctamente
    } else { 
        echo "Error al realizar la reserva: " . $mysqli->error; // Mensaje de error si hay problema en la reserva
    }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar - El Indio</title> <!-- Título de la página -->
    <style>  /* Estilos CSS */
        body {
            font-family: Arial, sans-serif; /* Fuente del texto */
            background-color: #f1f1f1; /* Color de fondo del cuerpo */
            margin: 0; /* Elimina los márgenes externos */
            padding: 0; /* Elimina el relleno externo */
        }

        .container {
            max-width: 600px; /* Ancho máximo del contenedor */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
            padding: 20px; /* Relleno interno del contenedor */
            background-color: #fff; /* Color de fondo del contenedor */
            border-radius: 10px; /* Borde redondeado del contenedor */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  /* Sombra del contenedor */
        }

        h1 {
            text-align: center; /* Alineación centrada del texto */
            color: #1f0469; /* Color del texto */
        }

        form {
            margin-top: 20px; /* Margen superior del formulario */
        }

        label {
            display: block; /* Mostrar las etiquetas en bloques separados */
            margin-bottom: 10px; /* Margen inferior de las etiquetas */
            color: #1f0469; /* Color del texto de las etiquetas */
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;  /* Ancho completo para los campos de entrada y el botón de envío */
            padding: 10px;  /* Relleno interno de los campos de entrada y el botón de envío */
            margin-bottom: 20px; /* Margen inferior de los campos de entrada y el botón de envío */
            border: 1px solid #ccc; /* Borde de 1 píxel sólido con un color*/
            border-radius: 5px; /* Borde redondeado de 5 píxeles */
            box-sizing: border-box; /* Tamaño de la caja incluyendo el borde */
        }

        input[type="submit"] { 
            background-color: #1f0469; /* Color de fondo del botón de envío */
            color: white; /* Color del texto del botón de envío */
            font-weight: bold; /* Texto en negrita */
            cursor: pointer; /* Cursor apuntando */
        }

        input[type="submit"]:hover { 
            background-color: #230770; /* Color de fondo del botón de envío al pasar el cursor */
        }
    </style>
</head>
<body>
    <div class="container"> <!-- Inicio del contenedor principal -->
        <h1>Reservar - El Indio</h1> <!-- Titulo principal -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <!-- Formulario de reserva con método POST -->
            <label for="nombre">Nombre:</label> <!-- Etiqueta para el nombre -->
            <input type="text" id="nombre" name="nombre" required> <!-- Campo de entrada para el nombre -->
            
            <label for="email">Email:</label> <!-- Etiqueta para el email -->
            <input type="email" id="email" name="email" required> <!-- Campo de entrada para el correo -->
            
            <label for="dni">DNI:</label> <!-- Nuevo campo para el DNI -->
            <input type="text" id="dni" name="dni" required> <!-- Campo de entrada para el DNI -->
            
            <label for="cantidad_personas">Cantidad de personas:</label> <!-- Etiqueta para la cantidad de personas -->
            <input type="number" id="cantidad_personas" name="cantidad_personas" required> <!-- Campo de entrada para la cantidad de personas -->

            <label for="habitacion">Habitación:</label> <!-- Nuevo campo para la habitación -->
            <input type="text" id="habitacion" name="habitacion" required> <!-- Campo de entrada para la habitación -->
            
            <label for="fecha_inicio">Fecha de entrada:</label> <!-- Etiqueta para la fecha de entrada -->
            <input type="date" id="fecha_inicio" name="fecha_inicio" required> <!-- Campo de entrada para la fecha de entrada -->
            
            <label for="fecha_fin">Fecha de salida:</label> <!-- Etiqueta para la fecha de salida -->
            <input type="date" id="fecha_fin" name="fecha_fin" required> <!-- Campo de entrada para la fecha de salida -->
            
            <input type="submit" value="Reservar"> <!-- Botón de envío del formulario -->
        </form>
    </div> <!-- Fin del contenedor principal -->
</body>
</html>
