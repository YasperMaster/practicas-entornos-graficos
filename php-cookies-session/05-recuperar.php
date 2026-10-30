<?php
session_start();
if (isset($_SESSION["usuario"])) {
    echo "Usuario: " . htmlspecialchars($_SESSION["usuario"]) . "<br>";
    echo "Clave: " . htmlspecialchars($_SESSION["clave"]);
} else {
    echo "No hay datos en la sesión.";
}
?>
