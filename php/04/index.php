<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
/* 
La salida es:
PHP Warning:  Undefined variable $flor in /home/tomasy/utn/EG/practicas/php/04/index.php on line 2
PHP Warning:  Undefined variable $color in /home/tomasy/utn/EG/practicas/php/04/index.php on line 2
El   
El clavel blanco%
Los dos warning ocurren porque las variables del archivo datos.php
son llamadas antes del include.
Una vez declarado el include el echo puede mostrar ambas variables
*/
?>