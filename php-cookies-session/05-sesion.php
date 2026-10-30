<?php
session_start();
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["clave"]   = $_POST["clave"];
echo "Variables creadas. <a href='05.php'>Ver valores</a>";
?>
