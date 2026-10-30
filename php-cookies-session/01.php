<?php
$estilos = [
    "claro"  => "background:#fff; color:#000;",
    "oscuro" => "background:#222; color:#eee;",
    "azul"   => "background:#cde; color:#036;"
];

if (isset($_POST["estilo"]) && isset($estilos[$_POST["estilo"]])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + 60 * 60 * 24 * 30);   // 30 días
} elseif (isset($_COOKIE["estilo"]) && isset($estilos[$_COOKIE["estilo"]])) {
    $estilo = $_COOKIE["estilo"];
} else {
    $estilo = "claro";
}
?>
<html>
<body style="<?= $estilos[$estilo] ?>">
  <h1>Mi página</h1>
  <p>Elegí el aspecto que querés ver:</p>
  <form method="post">
    <select name="estilo">
      <option value="claro">Claro</option>
      <option value="oscuro">Oscuro</option>
      <option value="azul">Azul</option>
    </select>
    <input type="submit" value="Aplicar">
  </form>
</body>
</html>
