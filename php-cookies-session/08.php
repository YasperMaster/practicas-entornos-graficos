<form method="post">
  Buscar canción: <input type="text" name="texto">
  <input type="submit" value="Buscar">
</form>
<?php
if (isset($_POST["texto"])) {
    $link = mysqli_connect("localhost", "root", "", "prueba") or die(mysqli_connect_error());
    $texto = mysqli_real_escape_string($link, $_POST["texto"]);
    $res = mysqli_query($link, "SELECT canciones FROM buscador WHERE canciones LIKE '%$texto%'")
        or die(mysqli_error($link));

    if (mysqli_num_rows($res) > 0) {
        while ($fila = mysqli_fetch_array($res)) {
            echo htmlspecialchars($fila["canciones"]) . "<br>";
        }
    }
}
?>
