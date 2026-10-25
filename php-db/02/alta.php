<?php
include "conexion.php";
if (isset($_POST["ciudad"])) {
    $ciudad     = mysqli_real_escape_string($link, $_POST["ciudad"]);
    $pais       = mysqli_real_escape_string($link, $_POST["pais"]);
    $habitantes = intval($_POST["habitantes"]);
    $superficie = floatval($_POST["superficie"]);
    $metro      = isset($_POST["tieneMetro"]) ? 1 : 0;

    mysqli_query($link, "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
                         VALUES ('$ciudad', '$pais', $habitantes, $superficie, $metro)")
        or die(mysqli_error($link));
    echo "Ciudad agregada.";
}
?>
<h1>Alta de ciudad</h1>
<form method="post">
  Ciudad: <input type="text" name="ciudad"><br>
  País: <input type="text" name="pais"><br>
  Habitantes: <input type="text" name="habitantes"><br>
  Superficie: <input type="text" name="superficie"><br>
  Tiene metro: <input type="checkbox" name="tieneMetro"><br>
  <input type="submit" value="Agregar">
</form>
<p><a href="index.html">Volver al menú</a></p>
