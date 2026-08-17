<?php
//a)
//primer código
$i = 1;
while ($i <= 10) {
    print $i++;
}
?>
<?php
//segundo código
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>
<?php
//tercer código
$i = 0;
do {
    print ++$i;
} while ($i < 10);

/*
códigos son equivalentes 
todos producen exactamente la misma salida en pantalla (12345678910) 
dejan la variable $i con el valor final
*/
?>

<?php
//b)
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
?>
<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>
<?php
for ($i = 1; ;$i++) {
    if ($i > 10) {
        break;
    }
    print $i;
}
?>
<?php
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    print $i;
    $i++;
}
/*
los cuatro códigos son equivalentes
todos imprimen la secuencia 12345678910 
terminan con la variable "i" valiendo 11
*/
?>

<?php
//c)
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
?>
<?php
switch ($i) {
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}
/*
ambos códigos son equivalentes 
ambas estructuras evalúan exactamente el mismo conjunto de condiciones para la variable "i" 
producen las mismas salidas para cualquier valor recibido.
*/
?>