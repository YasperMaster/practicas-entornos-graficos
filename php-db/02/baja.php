<?php
include "conexion.php";
$id = intval($_GET["id"]);
mysqli_query($link, "DELETE FROM Ciudades WHERE id = $id") or die(mysqli_error($link));
mysqli_close($link);
header("Location: listado.php");
?>
