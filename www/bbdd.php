<?php 
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "elindio");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>
<html>
<body>
<h1>Clientes : </h1>
<?php
// Consulta para obtener los datos de la tabla 'cliente'
    $query_cliente = "SELECT * FROM cliente";
    $result_cliente = $mysqli->query($query_cliente);

    // Mostrar resultados
    if ($result_cliente->num_rows > 0) {
        echo '<p>Total de filas: ' . $result_cliente->num_rows . '</p>';
        while ($row_cliente = $result_cliente->fetch_assoc()) {
            echo '<div style="display: inline-block; margin-right: 40px;">';
            echo 'DNI: ' . $row_cliente['DNI'] . '<br>';
            echo 'Nombre: ' . $row_cliente['nombre'] . '<br>';
            echo 'Email: ' . $row_cliente['email'] . '<br>';
            echo 'Cantidad de Personas: ' . $row_cliente['cantidad_personas'] . '<br>';
            echo 'Habitacion: ' . $row_cliente['habitacion'] . '<br>';
            echo 'fecha de Entrada: ' . $row_cliente['fecha_entrada'] . '<br>';
            echo 'Fecha de Salida: ' . $row_cliente['fecha_salida'] . '<br>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay datos en la tabla "cliente".</p>';
    }
    ?>

    <h1>Personal :</h1>

    <?php
    // Consulta para obtener los datos de la tabla 'personal'
    $query_personal = "SELECT * FROM personal";
    $result_personal = $mysqli->query($query_personal);

    // Mostrar resultados
    if ($result_personal->num_rows > 0) {
        echo '<p>Total de filas: ' . $result_personal->num_rows . '</p>';
        while ($row_personal = $result_personal->fetch_assoc()) {
            echo '<div style="display: inline-block; margin-right: 40px;">';
            echo 'DNI: ' . $row_personal['DNI'] . '<br>';
            echo 'Nomnbre: ' . $row_personal['nombre'] . '<br>';
            echo 'E-mail: ' . $row_personal['email'] . '<br>';
            echo 'Puesto de Trabajo: ' . $row_personal['puesto'] . '<br>';
            echo 'Sección laboral: ' . $row_personal['seccion'] . '<br>';
            echo '</div>';
            
        }
    } else {
        echo '<p>No hay datos en la tabla "personal".</p>';
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
    ?>
</body>
</html>