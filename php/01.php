<?php
function doble($i) {
return $i*2;
}
/*
Esta es una función llamada "doble"
tiene un solo parámetro "i"
devuelve el valor recibido por "i" multiplicado por dos. 
*/
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
/* 
"a" es una variable booleana
"b" y "c" son strings definidos con comillas dobles y simples
"d" es un entero
*/
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
// echo gettype() muestra en pantalla/consola los tipos de cada variable
if (is_int($d)) {
$d += 4;
}
/*
is_int devuelve true si la variable es un valor entero
si se cumple la condición le suma cuatro al valor previamente definido
*/
if (is_string($a)) {
echo "Cadena: $a";
}
/*
is_string devuelve true si la variable es una cadena
si se cumple la condición devuelve en consola "Cadena: " concatenando luego el string "a"
*/

$d = $a ? ++$d : $d*3;
/*
Se evalúa "a", como es TRUE se ejecuta "++$d"
se le suma uno a "d"
si "a" fuese FALSE, se ejecutaría "$d*3"
*/
$f = doble($d++);
// Se le asigna a "f" el doble del valor de "d" incrementado en uno
$g = $f += 10;
//Se le suma 10 al valor actual de $f y luego se le asigna a "g"
echo $a, $b, $c, $d, $f , $g;

// Devuelve: booleanstringstringinteger1xyzxyz184444% 
?>

