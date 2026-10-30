<?php
if (isset($_COOKIE["contador"])) {
    $veces = intval($_COOKIE["contador"]) + 1;
    setcookie("contador", $veces, time() + 60 * 60 * 24 * 365);
    echo "Visitaste esta página $veces veces.";
} else {
    setcookie("contador", 1, time() + 60 * 60 * 24 * 365);
    echo "Bienvenido! Es tu primera visita.";
}
?>
