<?php
$a = array( 'color' => 'rojo',
'sabor' => 'dulce',
'forma' => 'redonda',
'nombre' => 'manzana',
4
);
?>
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[]
 = 4;
/*
ambos códigos son equivalentes
en los dos casos se genera exactamente el mismo array
la única diferencia es la sintaxis de creación
*/
?>