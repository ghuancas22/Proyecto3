<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Verificar las credenciales (aquí puedes agregar tu lógica de autenticación)
    $username = $_POST["username"]; //Se obtiene el valor del campo de entrada de usuario del formulario y lo almacena en la variable 
    $password = $_POST["password"]; //Se obtiene el valor del campo de entrada de contraseña del formulario y lo almacena en la variable 

    // Ejemplo básico de autenticación (cambia esto según tus necesidades)
    if ($username === "admin" && $password === "admin123") { // Se verifica si las credenciales ingresadas coinciden
        // Iniciar sesión (puedes implementar tu propio sistema de sesiones aquí)
        session_start(); //Se inicia la sesión para el usuario actual
        $_SESSION["loggedin"] = true; // Se establece el indicador de inicio de sesión eN "True".

        // Redirigir a PHPMyAdmin
        header("Location: bbdd.php"); // Se redirige al usuario a la página de PHPMyAdmin
        exit; // Se finaliza la ejecución del script
    } else {
        // Redirigir de vuelta al formulario de inicio de sesión si las credenciales son incorrectas
        header("Location: login.php"); // Se redirige al usuario de vuelta al formulario de inicio de sesión
        exit; // Se finaliza la ejecución del script
    }
} else { // 
    // Redirigir al formulario de inicio de sesión si no se han enviado los datos del formulario
    header("Location: login.php"); //Se redirige al usuario de vuelta al formulario de inicio de sesión
    exit; // Se finaliza la ejecución del script
}
?>
