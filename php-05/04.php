
<?php
session_start();
if (!isset($_SESSION["paginas_visitadas"])) {
    $_SESSION["paginas_visitadas"] = 0;
}
$_SESSION["paginas_visitadas"]++;
?>