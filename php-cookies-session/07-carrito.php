<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "Compras") or die(mysqli_connect_error());

if (isset($_GET["agregar"])) {
    $id = intval($_GET["agregar"]);
    $_SESSION["carrito"][$id] = ($_SESSION["carrito"][$id] ?? 0) + 1;
}

$res = mysqli_query($link, "SELECT * FROM catalogo") or die(mysqli_error($link));
?>
<h1>Catálogo</h1>
<table border="1">
  <tr><th>Producto</th><th>Precio</th><th></th></tr>
<?php while ($fila = mysqli_fetch_array($res)) { ?>
  <tr>
    <td><?= $fila["producto"] ?></td>
    <td>$<?= $fila["precio"] ?></td>
    <td><a href="?agregar=<?= $fila["id"] ?>">Agregar al carrito</a></td>
  </tr>
<?php } ?>
</table>
<p><a href="07.php">Ver carrito</a></p>
