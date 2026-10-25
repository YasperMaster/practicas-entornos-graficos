<?php
if (isset($_POST["email_amigo"])) {
    $asunto = "Te recomiendo esta página";
    $cuerpo = $_POST["nombre"] . " te recomienda visitar: http://www.mipagina.com";
    mail($_POST["email_amigo"], $asunto, $cuerpo);
    echo "ok";
}
?>
<form method="post">
  Tu nombre: <input type="text" name="nombre"><br>
  Email de tu amigo: <input type="text" name="email_amigo"><br>
  <input type="submit" value="Recomendar">
</form>