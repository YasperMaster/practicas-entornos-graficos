<?php
session_start();
if (isset($_POST["mail"])) {
    $link = mysqli_connect("localhost", "root", "", "base2") or die(mysqli_connect_error());
    $mail = mysqli_real_escape_string($link, $_POST["mail"]);
    $res = mysqli_query($link, "SELECT nombre FROM alumnos WHERE mail = '$mail'") or die(mysqli_error($link));
    if ($fila = mysqli_fetch_array($res)) {
        $_SESSION["nombre"] = $fila["nombre"];
        echo "Alumno encontrado.";
    } else {
        echo "El mail no existe.";
    }
}
?>
<form method="post">
  Mail del alumno: <input type="text" name="mail">
  <input type="submit" value="Buscar">
</form>
<a href="ej6_bienvenida.php">Ir a la página de bienvenida</a>
