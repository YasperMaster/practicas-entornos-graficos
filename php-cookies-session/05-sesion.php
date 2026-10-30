<?php
session_start();
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["clave"]   = $_POST["clave"];
echo "Variables de sesión creadas. <a href='ej5_recuperar.php'>Ver valores</a>";
?>
