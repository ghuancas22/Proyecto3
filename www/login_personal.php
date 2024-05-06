<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar las credenciales (aquí puedes agregar tu lógica de autenticación)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ejemplo básico de autenticación (cambia esto según tus necesidades)
    if ($username === "admin" && $password === "admin123") {
        // Iniciar sesión (puedes implementar tu propio sistema de sesiones aquí)
        session_start();
        $_SESSION["loggedin"] = true;

        // Redirigir a PHPMyAdmin
        header("Location: elindio:90");
        exit;
    } else {
        // Redirigir de vuelta al formulario de inicio de sesión si las credenciales son incorrectas
        header("Location: login.php");
        exit;
    }
} else {
    // Redirigir al formulario de inicio de sesión si no se han enviado los datos del formulario
    header("Location: login.php");
    exit;
}
?>
