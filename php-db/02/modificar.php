<?php
include "conexion.php";

if (isset($_POST["id"])) {
    $id         = intval($_POST["id"]);
    $ciudad     = mysqli_real_escape_string($link, $_POST["ciudad"]);
    $pais       = mysqli_real_escape_string($link, $_POST["pais"]);
    $habitantes = intval($_POST["habitantes"]);
    $superficie = floatval($_POST["superficie"]);
    $metro      = isset($_POST["tieneMetro"]) ? 1 : 0;

    mysqli_query($link, "UPDATE Ciudades SET ciudad='$ciudad', pais='$pais', habitantes=$habitantes,
                         superficie=$superficie, tieneMetro=$metro WHERE id=$id")
        or die(mysqli_error($link));
    header("Location: listado.php");
    exit;
}

$id = intval($_GET["id"]);
$res = mysqli_query($link, "SELECT * FROM Ciudades WHERE id = $id") or die(mysqli_error($link));
$fila = mysqli_fetch_array($res);
?>
<h1>Modificar ciudad</h1>
<form method="post">
  <input type="hidden" name="id" value="<?= $fila["id"] ?>">
  Ciudad: <input type="text" name="ciudad" value="<?= $fila["ciudad"] ?>"><br>
  País: <input type="text" name="pais" value="<?= $fila["pais"] ?>"><br>
  Habitantes: <input type="text" name="habitantes" value="<?= $fila["habitantes"] ?>"><br>
  Superficie: <input type="text" name="superficie" value="<?= $fila["superficie"] ?>"><br>
  Tiene metro: <input type="checkbox" name="tieneMetro" <?= $fila["tieneMetro"] ? "checked" : "" ?>><br>
  <input type="submit" value="Guardar">
</form>
<p><a href="index.html">Volver al menú</a></p>
