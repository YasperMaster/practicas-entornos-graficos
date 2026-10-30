<?php
include "conexion.php";
$res = mysqli_query($link, "SELECT * FROM Ciudades") or die(mysqli_error($link));
?>
<h1>Listado de ciudades</h1>
<table>
  <tr><th>id</th><th>ciudad</th><th>país</th><th>habitantes</th><th>superficie</th><th>tieneMetro</th><th>Acciones</th></tr>
<?php while ($fila = mysqli_fetch_array($res)) { ?>
  <tr>
    <td><?= $fila["id"] ?></td>
    <td><?= $fila["ciudad"] ?></td>
    <td><?= $fila["pais"] ?></td>
    <td><?= $fila["habitantes"] ?></td>
    <td><?= $fila["superficie"] ?></td>
    <td><?= $fila["tieneMetro"] ?></td>
    <td>
      <a href="modificar.php?id=<?= $fila["id"] ?>">Modificar</a> |
      <a href="baja.php?id=<?= $fila["id"] ?>" onclick="return confirm('Borrar?')">Borrar</a>
    </td>
  </tr>
<?php }
mysqli_free_result($res);
mysqli_close($link);
?>
</table>
<p><a href="index.html">Volver al menú</a></p>
