<!DOCTYPE html>
<html>
<head>
  <title>Registro de Deportes</title>
</head>
<body>
  <h1>Registro de Deportes</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <h2>Deportes:</h2>
    <input type="checkbox" id="futbol" name="deportes[]" value="Fútbol">
    <label for="futbol">Fútbol</label><br>

    <input type="checkbox" id="basquet" name="deportes[]" value="Básquet">
    <label for="basquet">Básquet</label><br>

    <input type="checkbox" id="tennis" name="deportes[]" value="Tenis">
    <label for="tennis">Tenis</label><br>

    <input type="checkbox" id="voley" name="deportes[]" value="Vóley">
    <label for="voley">Vóley</label><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required><br>

    <input type="submit" value="Enviar">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $deportesSeleccionados = isset($_POST["deportes"]) ? $_POST["deportes"] : [];
    $direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";

    echo "<h2>Datos del Registro:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Email: $email</p>";
    echo "<h3>Deportes:</h3>";
    if (!empty($deportesSeleccionados)) {
      echo "<ul>";
      foreach ($deportesSeleccionados as $deporte) {
        echo "<li>$deporte</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No se ha seleccionado ningún deporte.</p>";
    }
    echo "<p>Dirección: $direccion</p>";
    echo "<p>Teléfono: $telefono</p>";
  }
  ?>

</body>
</html>
