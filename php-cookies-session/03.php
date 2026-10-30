<?php
$ultimo = "";
if (isset($_POST["usuario"])) {
    setcookie("usuario", $_POST["usuario"], time() + 60 * 60 * 24 * 30);
    echo "Usuario guardado.";
}
if (isset($_COOKIE["usuario"])) {
    $ultimo = htmlspecialchars($_COOKIE["usuario"]);
    echo "<p>Último usuario ingresado: $ultimo</p>";
}
?>
<form method="post">
  Nombre de usuario: <input type="text" name="usuario">
  <input type="submit" value="Guardar">
</form>
