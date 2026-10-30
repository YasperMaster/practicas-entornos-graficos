<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "Compras") or die(mysqli_connect_error());
if (isset($_GET["vaciar"])) {
    unset($_SESSION["carrito"]);
}
echo "<h1>Mi carrito</h1>";
$total = 0;

if (!empty($_SESSION["carrito"])) {
    echo "<table border='1'><tr><th>Producto</th><th>Cantidad</th><th>Subtotal</th></tr>";
    foreach ($_SESSION["carrito"] as $id => $cantidad) {
        $res = mysqli_query($link, "SELECT * FROM catalogo WHERE id = " . intval($id));
        $fila = mysqli_fetch_array($res);
        $subtotal = $fila["precio"] * $cantidad;
        $total += $subtotal;
        echo "<tr><td>{$fila['producto']}</td><td>$cantidad</td><td>$$subtotal</td></tr>";
    }
    echo "</table><p><b>Total: $$total</b></p>";
    echo "<a href='?vaciar=1'>Vaciar carrito</a> | ";
}
?>
<a href="07-carrito.php">Seguir comprando</a>
