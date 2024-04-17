<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Base de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #555;
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .no-data {
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Consulta de Base de Datos</h1>

    <h2>Personas en el Hotel</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Teléfono</th>
        </tr>

        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "admin";
        $password = "admin123";
        $dbname = "HotelMoro";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los datos de la tabla Personas
        $sql = "SELECT id, nombre, apellidos, dni, telefono FROM Personas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["apellidos"]."</td>";
                echo "<td>".$row["dni"]."</td>";
                echo "<td>".$row["telefono"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='no-data'>No hay datos</td></tr>";
        }

        $conn->close();
        ?>

    </table>

    <h2>Registro de Entradas y Salidas</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>ID Persona</th>
            <th>Hora Entrada</th>
            <th>Hora Salida</th>
        </tr>

        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los datos de la tabla RegistroHotel
        $sql = "SELECT id, id_persona, hora_entrada, hora_salida FROM RegistroHotel";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["id_persona"]."</td>";
                echo "<td>".$row["hora_entrada"]."</td>";
                echo "<td>".$row["hora_salida"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' class='no-data'>No hay datos</td></tr>";
        }

        $conn->close();
        ?>

    </table>

</div>

</body>
</html>
