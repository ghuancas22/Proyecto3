<?php
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Verificar si se ha enviado el formulario de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el DNI del formulario
    $eliminarDNI = $_POST["eliminarDNI"];

    // Query para eliminar el cliente con el DNI proporcionado
    $query_eliminar_cliente = "DELETE FROM cliente WHERE DNI='$eliminarDNI'";

    // Ejecutar la consulta
    if ($mysqli->query($query_eliminar_cliente) === TRUE) {
        echo "Cliente con DNI " . $eliminarDNI . " eliminado correctamente.";
    } else {
        echo "Error al eliminar el cliente: " . $mysqli->error;
    }
}

// Cerrar la conexión a la base de datos
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Usuario - Hotel El Indio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #1f0469;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #1f0469;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #230770;
        }

        .back-button {
            background-color: #ccc;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Eliminar Usuario - Hotel El Indio</h1>
        
        <form method="post" action="eliminar_usuario.php">
            <label for="eliminarDNI">Introduce el DNI del cliente que deseas eliminar:</label><br>
            <input type="text" id="eliminarDNI" name="eliminarDNI" required><br><br>
            <input type="submit" value="Eliminar Usuario">
        </form>

        <a href="index.php" class="back-button">Volver al listado de clientes</a>
    </div>
</body>
</html>
