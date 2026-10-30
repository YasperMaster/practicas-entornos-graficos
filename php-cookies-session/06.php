<?php
session_start();
if (isset($_SESSION["nombre"])) {
    echo "Hola, " . htmlspecialchars($_SESSION["nombre"]);
}
?>
