<?php
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error); // Mensaje de error si la conexión falla
}

// Verificar si se ha enviado el formulario de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el DNI del formulario
    $eliminarDNI = $_POST["eliminarDNI"];

    // Query para eliminar el cliente con el DNI proporcionado
    $query_eliminar_cliente = "DELETE FROM cliente WHERE DNI='$eliminarDNI'"; // Consulta SQL para eliminar el cliente


    // Ejecutar la consulta
    if ($mysqli->query($query_eliminar_cliente) === TRUE) {
        echo "Cliente con DNI " . $eliminarDNI . " eliminado correctamente."; // Mensaje de éxito si se elimina correctamente
    } else {
        echo "Error al eliminar el cliente: " . $mysqli->error;  // Mensaje de error si no se puede eliminar
    }
}

// Cerrar la conexión a la base de datos
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Usuario - Hotel El Indio</title> <!-- Título de la página -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Fuente predeterminada para el cuerpo del documento */
            background-color: #f7f7f7; /* Color de fondo para el cuerpo */
            margin: 0; /* Elimina los márgenes predeterminados */
            padding: 0; /* Elimina el relleno predeterminado */
        }

        .container {
            max-width: 800px; /* Ancho máximo para el contenedor principal */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
            padding: 20px; /* Espacio interno para el contenedor */
        }

        h1 {
            color: #1f0469; /* Color del encabezado principal*/
        }

        form {
            margin-bottom: 20px; /* Espacio inferior para el formulario */
        }

        input[type="text"] {
            padding: 10px; /* Espacio interno para el campo de entrada de texto */
            width: 300px; /* Ancho del campo de entrada de texto */
            border-radius: 5px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde con color */
        }

        input[type="submit"] {
            padding: 10px 20px; /* Espacio interno para el botón de envío */
            background-color: #1f0469; /* Color de fondo para el botón */
            color: white; /* Color del texto del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar por encima del botón */
        }

        input[type="submit"]:hover {
            background-color: #230770; /* Color de fondo cuando se pasa el cursor por encima del botón */
        }

        .back-button {
            background-color: #ccc; /* Color de fondo para el botón de volver atrás */
            color: #333; /* Color del texto del botón de volver atrás */
            padding: 10px 20px; /* Espacio interno para el botón de volver atrás */
            text-decoration: none; /* Sin subrayado para el enlace */
            border-radius: 5px; /* Bordes redondeados */
        }

        .back-button:hover {
            background-color: #999; /* Color de fondo cuando se pasa el cursor por encima del botón de volver atrás */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Eliminar Usuario - Hotel El Indio</h1> <!-- Encabezado principal -->

        <form method="post" action="eliminar_usuario.php"> <!-- Formulario para enviar el DNI del cliente a eliminar -->
            <label for="eliminarDNI">Introduce el DNI del cliente que deseas eliminar:</label><br> <!-- Etiqueta para el campo de entrada -->
            <input type="text" id="eliminarDNI" name="eliminarDNI" required><br><br> <!-- Campo de entrada para el DNI con validación requerida -->
            <input type="submit" value="Eliminar Usuario"> <!-- Botón de envío del formulario -->
        </form>

        <a href="index.php" class="back-button">Volver al listado de clientes</a> <!-- Enlace para volver atrás -->
    </div>
</body>
</html>  
