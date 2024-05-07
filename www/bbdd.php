<!DOCTYPE html>
<html>
<head>
    <title>Hotel El Indio</title>  <!-- Título de la página -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Fuente y estilo para el cuerpo del documento */
            margin: 0; /* Elimina los márgenes predeterminados */
            padding: 0; /* Elimina el relleno predeterminado */
        }

        .container {
            max-width: 800px; /* Ancho máximo para el contenedor principal */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
            padding: 20px; /* Espacio interno para el contenedor */
        }

        h1 {
            color: #1f0469; /* Color del encabezado principal (h1) */
        }

        .section {
            margin-bottom: 40px; /* Espacio inferior para las secciones */
        }

        .client, .employee {
            display: flex; /* Usa el modelo de caja flexible para los elementos */
            flex-wrap: wrap; /* Permite que los elementos se envuelvan en varias líneas si es necesario */
            justify-content: space-between; /* Distribuye el espacio entre los elementos */
            border: 1px solid #ccc; /* Borde con color */
            border-radius: 5px;  /* Bordes redondeados */
            padding: 15px; /* Espacio interno para los elementos  */
            background-color: #fff; /* Color de fondo */
        }

        .client div, .employee div { /* Establece el ancho de los elementos div al 48% */
            flex: 0 0 48%;
            margin-bottom: 10px; /* Espacio inferior para los elementos div */
        }

        .client h2, .employee h2 {
            margin-top: 0; /* Elimina el margen superior para los encabezados h2 */
            color: #1f0469; /* Color del texto para los encabezados */
        }

        .client h3, .employee h3 {
            margin-bottom: 5px; /* Espacio inferior para los encabezados*/
            color: #333;/* Color del texto para los encabezados*/
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h1>Clientes:</h1> <!-- Encabezado para la sección de clientes -->
            <?php
            // Conexión a la base de datos MySQL
            $mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

            // Verificar la conexión
            if ($mysqli->connect_error) {
                die("Error de conexión a la base de datos: " . $mysqli->connect_error); // Mensaje de error si la conexión falla
            }

            // Botón para eliminar un usuario
            echo '<form action="eliminar_usuario.php" method="post">'; // Formulario para eliminar un usuario
            echo '<label for="eliminarDNI">Eliminar usuario por DNI:</label>'; // Etiqueta para el campo de entrada
            echo '<input type="text" id="eliminarDNI" name="eliminarDNI">'; // Campo de entrada para el DNI
            echo '<input type="submit" value="Eliminar">'; // Botón para enviar el formulario
            echo '</form>';

            // Consulta para obtener los datos de la tabla 'cliente'
            $query_cliente = "SELECT * FROM cliente"; // Consulta SQL para obtener los datos de los clientes
            $result_cliente = $mysqli->query($query_cliente); // Se ejecuta la consulta

            // Mostrar resultados
            if ($result_cliente->num_rows > 0) { // Se verifica Si hay resultados
                echo '<div class="client">'; // Se abre un contenedor para los datos de los clientes
                while ($row_cliente = $result_cliente->fetch_assoc()) { // Iterar a través de los resultados
                    echo '<div>'; // Abrir un contenedor para cada cliente
                    echo '<h2>' . $row_cliente['nombre'] . '</h2>'; // Mostrar el nombre del cliente
                    echo '<div><h3>DNI:</h3>' . $row_cliente['DNI'] . '</div>'; // Mostrar el DNI del cliente
                    echo '<div><h3>Email:</h3>' . $row_cliente['email'] . '</div>'; // Mostrar el email del cliente
                    echo '<div><h3>Cantidad de Personas:</h3>' . $row_cliente['cantidad_personas'] . '</div>'; // Mostrar la cantidad de personas
                    echo '<div><h3>Habitación:</h3>' . $row_cliente['habitacion'] . '</div>'; // Mostrar la habitación
                    echo '<div><h3>Fecha de Entrada:</h3>' . $row_cliente['fecha_entrada'] . '</div>'; // Mostrar la fecha de entrada
                    echo '<div><h3>Fecha de Salida:</h3>' . $row_cliente['fecha_salida'] . '</div>'; // Mostrar la fecha de salida
                    echo '</div>'; // Se cierra el contenedor del cliente
                }
                echo '</div>';  // Se cierra el contenedor de los datos de los clientes
            } else {
                echo '<p>No hay datos en la tabla "cliente".</p>'; // Mensaje si no hay datos
            }
            ?>
        </div>

        <div class="section">
            <h1>Personal:</h1> <!-- Encabezado para la sección de personal -->
            <?php
            // Consulta para obtener los datos de la tabla 'personal'
            $query_personal = "SELECT * FROM personal"; // Consulta SQL para obtener los datos del personal
            $result_personal = $mysqli->query($query_personal); // Se ejecutar la consulta

            // Mostrar resultados
            if ($result_personal->num_rows > 0) { // Se verifica si hay resultados
                echo '<div class="employee">'; // Se abre un contenedor para los datos del personal
                while ($row_personal = $result_personal->fetch_assoc()) { // Iterar a través de los resultados
                    echo '<div>'; // Se abre un contenedor para cada empleado
                    echo '<h2>' . $row_personal['nombre'] . '</h2>'; // Mostrar el nombre del empleado
                    echo '<div><h3>DNI:</h3>' . $row_personal['DNI'] . '</div>'; // Mostrar el DNI del empleado
                    echo '<div><h3>Email:</h3>' . $row_personal['email'] . '</div>'; // Mostrar el email del empleado
                    echo '<div><h3>Puesto de Trabajo:</h3>' . $row_personal['puesto'] . '</div>'; // Mostrar el puesto de trabajo
                    echo '<div><h3>Sección Laboral:</h3>' . $row_personal['seccion'] . '</div>'; //Mostrar la seccion laboral
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No hay datos en la tabla "personal".</p>'; /* Mensaje si no hay datos de personal */
            }

            // Se cierra la conexión a la base de datos
            $mysqli->close();
            ?>
        </div>
    </div>
</body>
</html>
