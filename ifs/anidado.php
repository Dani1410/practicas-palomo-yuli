<?php
$username = "john";
$password = "password1";

// Ejemplo de if anidado
if ($username == "john") {
    if ($password == "password1") {
        echo "Bienvenido, John!";
    } elseif ($password == "password2") {
        echo "Bienvenido, John (contraseña temporal)!";
    } else {
        echo "Contraseña incorrecta para John.";
    }
} elseif ($username == "mary") {
    if ($password == "password3") {
        echo "Bienvenida, Mary!";
    } elseif ($password == "password4") {
        echo "Bienvenida, Mary (contraseña temporal)!";
    } else {
        echo "Contraseña incorrecta para Mary.";
    }
} else {
    echo "Credenciales inválidas.";
}
