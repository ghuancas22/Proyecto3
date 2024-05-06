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
<div class="row">
    <div class="card">
        <div id="leftcolumn" class="leftcolumn">
            <div class="card">
            <h1>Datos de la BBDD</h1>
            <?php
            // Consulta para obtener los datos de las tablas
                $query_cliente = "SELECT * FROM cliente";
                $result_cliente = $conexion->query($query_cliente);

                $query_personal = "SELECT * FROM personal";
                $result_personal = $conexion->query($query_personal);


                // Mostrar resultados de la tabla cliente
                if ($result_cliente->num_rows > 0) {
                    echo '<h2>Total de filas en la tabla cliente: ' . $result_cliente->num_rows . '</h2>';
                    while ($row_cliente = $result_cliente->fetch_assoc()) {
                        echo '<div class="bbdd">';
                        echo 'DNI: ' . $row_cliente['DNI'] . '<br>';
                        echo 'Nombre: ' . $row_cliente['Nombre'] . '<br>'; 
                        echo 'email: ' . $row_cliente['email'] . '<br>';
                        echo 'habitación: ' . $row_cliente['habitacion'] . '<br>';
                        echo 'Cantidad de Personas: ' . $row_cliente['cantidad_personas'] . '<br>'; 
                        echo 'Fecha de entrada ' . $row_cliente['fecha_entrada'] . '<br>'; 
                        echo 'Fecha de Salida: ' . $row_cliente['fecha_salida'] . '<br>'; 
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay datos en la tabla cliente.</p>';
                }

                // Mostrar resultados de la tabla personal
                if ($result_personal->num_rows > 0) {
                    echo '<h2>Total de filas en la tabla personal: ' . $result_personal->num_rows . '</h2>';
                    while ($row_personal = $result_personal->fetch_assoc()) {
                        echo '<div class="bbdd">';
                        echo 'DNI/NIE: ' . $row_personal['DNI'] . '<br>';
                        echo 'Nombre: ' . $row_personal['Nombre'] . '<br>';
                        echo 'Edad: ' . $row_personal['edad'] . '<br>'; 
                        echo 'Email: ' . $row_personal['email'] . '<br>'; 
                        echo 'Puesto: ' . $row_personal['Puesto'] . '<br>'; 
                        echo 'Seccion: ' . $row_personal['Seccion'] . '<br>';
                        echo 'Fecha de Nacimiento: ' . $row_personal['FechaNacimiento'] . '<br>';
                        echo 'NumExpedient: ' . $row_personal['NumExpediente'] . '<br>';
                        echo 'IDBicicleta: ' . $row_personal['IDBicicleta'] . '<br>'; 
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay datos en la tabla personal.</p>';
                }
                ?>
        </div>
    </div>
</div>
</body>
</html>