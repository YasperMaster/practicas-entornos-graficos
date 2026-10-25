<?php
include "conexion.php";

$por_pagina = 3;
$pagina = isset($_GET["pagina"]) ? max(1, intval($_GET["pagina"])) : 1;
$inicio = ($pagina - 1) * $por_pagina;

$total = mysqli_fetch_array(mysqli_query($link, "SELECT COUNT(*) FROM Ciudades"))[0];
$paginas = ceil($total / $por_pagina);

$res = mysqli_query($link, "SELECT * FROM Ciudades LIMIT $inicio, $por_pagina") or die(mysqli_error($link));
?>
<h1>Listado paginado</h1>
<table border="1">
  <tr><th>id</th><th>ciudad</th><th>país</th><th>habitantes</th><th>superficie</th><th>tieneMetro</th></tr>
<?php while ($fila = mysqli_fetch_array($res)) { ?>
  <tr>
    <td><?= $fila["id"] ?></td>
    <td><?= $fila["ciudad"] ?></td>
    <td><?= $fila["pais"] ?></td>
    <td><?= $fila["habitantes"] ?></td>
    <td><?= $fila["superficie"] ?></td>
    <td><?= $fila["tieneMetro"] ?></td>
  </tr>
<?php }
mysqli_free_result($res);
mysqli_close($link);
?>
</table>
<p>
<?php for ($i = 1; $i <= $paginas; $i++) { ?>
  <a href="?pagina=<?= $i ?>"><?= ($i == $pagina) ? "<b>$i</b>" : $i ?></a>
<?php } ?>
</p>
<p><a href="index.html">Volver al menú</a></p>
