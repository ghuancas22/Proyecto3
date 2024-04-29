<?php
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "HotelMoro");

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Consulta SQL para obtener los datos de la tabla personal
$query = "SELECT * FROM personal";
$result = $mysqli->query($query);

// Generar archivo LDIF
$ldif_content = "";
while ($row = $result->fetch_assoc()) {
    // Crear entradas LDIF para cada registro en la tabla personal
    $ldif_content .= "dn: cn=" . $row['nombre'] . ",ou=personal,dc=hotelmoro,dc=com\n";
    $ldif_content .= "objectClass: inetOrgPerson\n";
    $ldif_content .= "cn: " . $row['nombre'] . "\n";
    $ldif_content .= "sn: " . $row['apellido'] . "\n";
    $ldif_content .= "mail: " . $row['email'] . "\n";
    // Agregar más atributos según sea necesario
    $ldif_content .= "\n";
}

// Guardar el contenido LDIF en un archivo
file_put_contents("personal.ldif", $ldif_content);

// Cerrar la conexión a la base de datos
$mysqli->close();

echo "Archivo LDIF generado exitosamente.";
?>
