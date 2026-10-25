<?php
$webmaster = "webmaster@pagina.com";
$mensaje_estado = "";
$nombre = $email = $asunto = $consulta = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre   = trim($_POST["nombre"]   ?? "");
    $email    = trim($_POST["email"]    ?? "");
    $asunto   = trim($_POST["asunto"]   ?? "");
    $consulta = trim($_POST["consulta"] ?? "");

    if ($nombre === "" || $email === "" || $asunto === "" || $consulta === "") {
        $mensaje_estado = "completá todos los campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensaje_estado = "El correo no es válido.";
    } else {
        $nombre_h = str_replace(["\r", "\n"], " ", $nombre);
        $asunto_h = str_replace(["\r", "\n"], " ", $asunto);

        $cuerpo  = "Consulta recibida desde el sitio\n\n";
        $cuerpo .= "Nombre: $nombre_h\n";
        $cuerpo .= "Email: $email\n\n";
        $cuerpo .= "Mensaje:\n$consulta\n";
        $cabeceras  = "From: $webmaster\r\n";
        $cabeceras .= "Reply-To: $email\r\n";
        $cabeceras .= "Content-type: text/plain; charset=UTF-8\r\n";
        if (mail($webmaster, "Contacto: $asunto_h", $cuerpo, $cabeceras)) {
            $mensaje_estado = "Tu consulta fue enviada.";
            $nombre = $email = $asunto = $consulta = "";
        } else {
            $mensaje_estado = "No se pudo enviar la consulta.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Contacto</title></head>
<body>
  <h1>Contacto</h1>
  <?php if ($mensaje_estado): ?>
    <p><strong><?= htmlspecialchars($mensaje_estado) ?></strong></p>
  <?php endif; ?>
  <form method="post" action="">
    <p><label>Nombre:<br>
      <input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>" required></label></p>
    <p><label>Email:<br>
      <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required></label></p>
    <p><label>Asunto:<br>
      <input type="text" name="asunto" value="<?= htmlspecialchars($asunto) ?>" required></label></p>
    <p><label>Consulta:<br>
      <textarea name="consulta" rows="6" cols="40" required><?= htmlspecialchars($consulta) ?></textarea></label></p>
    <p><input type="submit" value="Enviar"></p>
  </form>
</body>
</html>