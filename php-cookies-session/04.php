<?php
$titulares = ["politica"  => "el Congreso debate una nueva ley.", "economica" => "el dólar no para de subir.", "deportiva" => "Newell's ganó el clásico."];
if (isset($_POST["titular"]) && isset($titulares[$_POST["titular"]])) {
    $elegido = $_POST["titular"];
    setcookie("titular", $elegido, time() + 60 * 60 * 24 * 30);
} elseif (isset($_COOKIE["titular"]) && isset($titulares[$_COOKIE["titular"]])) {
    $elegido = $_COOKIE["titular"];
} else {
    $elegido = "";
}
?>
<h1>El Periódico</h1>
<?php
if ($elegido != "") {
    echo "<h2>" . $titulares[$elegido] . "</h2>";
} else {
    foreach ($titulares as $t) echo "<h2>$t</h2>";
}
?>
<form method="post">
  <input type="radio" name="titular" value="politica"> Política<br>
  <input type="radio" name="titular" value="economica"> Económica<br>
  <input type="radio" name="titular" value="deportiva"> Deportiva<br>
  <input type="submit" value="Guardar preferencia">
</form>
<a href="borrar_cookie.php">Borrar preferencia</a>
