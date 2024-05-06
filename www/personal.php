<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <title>Iniciar sesión en El Indio</title>
    <style>
=======
    <title>Iniciar sesión en Hotel Moro</title>
    <style> /* Se añade estilo CSS para aplicar al contenido de la página*/
>>>>>>> e386e32 (Naila)
        body {
            font-family: Arial, sans-serif; 
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container { /*  Se Define un contenedor */
            max-width: 600px; /* ancho máximo de 600 píxeles*/
            margin: 50px auto; /* centrado horizontalmente*/
            padding: 20px; 
            background-color: #fff;/* fondo blanco*/
            border-radius: 10px; /*bordes redondeados*/
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /*Se establece el color del título principal */
        h1 {
            text-align: center;
            color: #1f0469;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #1f0469;
        }
        /*Se define el estilo para el botón de envío*/
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%; /*El ancho de los campos se ajusta al 100% del contenedor.*/
            padding: 10px; /* Se agrega un espacio de 10 píxeles alrededor del contenido dentro de los campo*/
            margin-bottom: 20px; /* Se agrega un margen inferior de 20 píxeles a los campos*/
            border: 1px solid #ccc; /*Se define un borde de 1 píxel con un color alrededor de los campos */
            border-radius: 5px; /* Se aplican bordes redondeados a los campos */
            box-sizing: border-box; /*Se asegura que el tamaño total del campo incluya el relleno y el borde*/
        }

        input[type="submit"] { /*Se establecen los estilos específicos para el botón de envío*/
            background-color: #1f0469; /*Se establece color del fondo*/
            color: white; /*texto en blanco*/
            font-weight: bold; /*Texto en negrita*/
            cursor: pointer; /* Se cambia el cursor a una mano cuando se pasa sobre el botón*/
        }

        input[type="submit"]:hover { /*Se define el estilo cuando el cursor pasa sobre el botón de envío*/
            background-color: #230770; /*Se establece el color del fondo*/
        }
    </style>
</head>
<body>
    <div class="container"> <!-- Se crea un contenedor con una classe "container"-->
        <h1>El Indio</h1> <!--Se muestra un título principal “El Indio”-->
        <h2>Iniciar sesión</h2> <!--subtitulo-->
        <h3>Personal</h3> <!--subtitulo-->
        <form action="login_personal.php" method="post"> <!--Se define un formulario que enviará los datos al archivo “login_personal.php” utilizando el método POST-->
            <label for="username">Usuario:</label> <!-- Se añade una etiqueta para el campo de entrada de usuario -->
            <input type="text" id="username" name="username"> <!--Campo de entrada de texto para el nombre de usuario.-->
            
            <label for="password">Contraseña:</label> <!--Etiqueta para el campo de entrada de contraseña-->
            <input type="password" id="password" name="password"> <!--Campo de entrada de contraseña-->
            
            <input type="submit" value="Iniciar sesión como personal"> <!--Botón de envío con el texto “Iniciar sesión como personal”-->
        </form>
    </div>
</body>
</html>
