<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuario</title>
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

        <label for="nivel_estudios">Nivel de Estudios:</label><br>
        <input type="radio" id="sin_estudios" name="nivel_estudios" value="sin_estudios">
        <label for="sin_estudios">Sin estudios</label><br>

        <input type="radio" id="primarios" name="nivel_estudios" value="primarios">
        <label for="primarios">Primarios</label><br>

        <input type="radio" id="secundarios" name="nivel_estudios" value="secundarios">
        <label for="secundarios">Secundarios</label><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $nivelEstudios = $_POST["nivel_estudios"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        echo "<h2>Datos del Usuario:</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Nivel de Estudios: $nivelEstudios</p>";
        echo "<p>Dirección: $direccion</p>";
        echo "<p>Teléfono: $telefono</p>";
    }
    ?>

</body>

</html>