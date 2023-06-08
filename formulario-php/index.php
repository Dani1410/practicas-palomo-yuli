<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro de Usuario</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .datos-enviados {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .datos-enviados h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .datos-enviados p {
            color: #555;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <h1>Registro de Usuario</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <label for="confirmar-contrasena">Confirmar Contraseña:</label>
        <input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br>

        <input type="submit" value="Registrarse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];
        $confirmar_contrasena = $_POST["confirmar-contrasena"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        if ($contrasena !== $confirmar_contrasena) {
            echo "<p style='color: red;'>Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</p>";
        } else {
            echo "<div class='datos-enviados'>";
            echo "<h2>Datos enviados:</h2>";
            echo "<p>Nombre: " . $nombre . "</p>";
            echo "<p>Apellido: " . $apellido . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Dirección: " . $direccion . "</p>";
            echo "<p>Teléfono: " . $telefono . "</p>";
            echo "</div>";
        }
    }
    ?>
</body>

</html>