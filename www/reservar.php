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
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $dni = $_POST["dni"]; // Nuevo campo para el DNI del cliente
    $cantidad_personas = $_POST["cantidad_personas"];
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_fin = $_POST["fecha_fin"];
    $habitacion = $_POST["habitacion"]; // Nuevo campo para la habitación

    // Insertar la reserva en la base de datos
    $query = "INSERT INTO cliente (nombre, email, DNI, cantidad_personas, habitacion, fecha_entrada, fecha_salida) VALUES ('$nombre', '$email', '$dni', '$cantidad_personas', '$habitacion', '$fecha_inicio', '$fecha_fin')";
    if ($mysqli->query($query) === TRUE) {
        echo "Reserva realizada con éxito.";
    } else {
        echo "Error al realizar la reserva: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar - Hotel Moro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #1f0469;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #1f0469;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #1f0469;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #230770;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reservar - Hotel Moro</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="dni">DNI:</label> <!-- Nuevo campo para el DNI -->
            <input type="text" id="dni" name="dni" required>
            
            <label for="cantidad_personas">Cantidad de personas:</label>
            <input type="number" id="cantidad_personas" name="cantidad_personas" required>

            <label for="habitacion">Habitación:</label> <!-- Nuevo campo para la habitación -->
            <input type="text" id="habitacion" name="habitacion" required>
            
            <label for="fecha_inicio">Fecha de entrada:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required>
            
            <label for="fecha_fin">Fecha de salida:</label>
            <input type="date" id="fecha_fin" name="fecha_fin" required>
            
            <input type="submit" value="Reservar">
        </form>
    </div>
</body>
</html>
