<!DOCTYPE html>
<html>
<head>
    <title>Hotel El Indio</title>
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

        .section {
            margin-bottom: 40px;
        }

        .client, .employee {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            background-color: #fff;
        }

        .client div, .employee div {
            flex: 0 0 48%;
            margin-bottom: 10px;
        }

        .client h2, .employee h2 {
            margin-top: 0;
            color: #1f0469;
        }

        .client h3, .employee h3 {
            margin-bottom: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h1>Clientes:</h1>
            <?php
            // Conexión a la base de datos MySQL
            $mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

            // Verificar la conexión
            if ($mysqli->connect_error) {
                die("Error de conexión a la base de datos: " . $mysqli->connect_error);
            }

            // Botón para eliminar un usuario
            echo '<form action="eliminar_usuario.php" method="post">';
            echo '<label for="eliminarDNI">Eliminar usuario por DNI:</label>';
            echo '<input type="text" id="eliminarDNI" name="eliminarDNI">';
            echo '<input type="submit" value="Eliminar">';
            echo '</form>';

            // Consulta para obtener los datos de la tabla 'cliente'
            $query_cliente = "SELECT * FROM cliente";
            $result_cliente = $mysqli->query($query_cliente);

            // Mostrar resultados
            if ($result_cliente->num_rows > 0) {
                echo '<div class="client">';
                while ($row_cliente = $result_cliente->fetch_assoc()) {
                    echo '<div>';
                    echo '<h2>' . $row_cliente['nombre'] . '</h2>';
                    echo '<div><h3>DNI:</h3>' . $row_cliente['DNI'] . '</div>';
                    echo '<div><h3>Email:</h3>' . $row_cliente['email'] . '</div>';
                    echo '<div><h3>Cantidad de Personas:</h3>' . $row_cliente['cantidad_personas'] . '</div>';
                    echo '<div><h3>Habitación:</h3>' . $row_cliente['habitacion'] . '</div>';
                    echo '<div><h3>Fecha de Entrada:</h3>' . $row_cliente['fecha_entrada'] . '</div>';
                    echo '<div><h3>Fecha de Salida:</h3>' . $row_cliente['fecha_salida'] . '</div>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No hay datos en la tabla "cliente".</p>';
            }
            ?>
        </div>

        <div class="section">
            <h1>Personal:</h1>
            <?php
            // Consulta para obtener los datos de la tabla 'personal'
            $query_personal = "SELECT * FROM personal";
            $result_personal = $mysqli->query($query_personal);

            // Mostrar resultados
            if ($result_personal->num_rows > 0) {
                echo '<div class="employee">';
                while ($row_personal = $result_personal->fetch_assoc()) {
                    echo '<div>';
                    echo '<h2>' . $row_personal['nombre'] . '</h2>';
                    echo '<div><h3>DNI:</h3>' . $row_personal['DNI'] . '</div>';
                    echo '<div><h3>Email:</h3>' . $row_personal['email'] . '</div>';
                    echo '<div><h3>Puesto de Trabajo:</h3>' . $row_personal['puesto'] . '</div>';
                    echo '<div><h3>Sección Laboral:</h3>' . $row_personal['seccion'] . '</div>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No hay datos en la tabla "personal".</p>';
            }

            // Cerrar la conexión a la base de datos
            $mysqli->close();
            ?>
        </div>
    </div>
</body>
</html>
