<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
/*
muestra la fecha y hora actual.
Has entrado en esta página a las 19 horas, con 13 minutos y 25 segundos, del 26/8/2026.
*/
?>

<?php
function sumar($sumando1,$sumando2){
$suma=$sumando1+$sumando2;
echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
/*
5+6=11
*/
?>