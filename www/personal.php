<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión en El Indio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

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

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #1f0469;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #230770;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>El Indio</h1>
        <h2>Iniciar sesión</h2>
        <h3>Personal</h3>
        <form action="login_personal.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            
            <input type="submit" value="Iniciar sesión como personal">
        </form>
    </div>
</body>
</html>
