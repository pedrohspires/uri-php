<?php

/**
 * Leia um valor inteiro entre 1 e 12, inclusive. Correspondente a este valor, 
 * deve ser apresentado como resposta o mês do ano por extenso, em inglês, 
 * com a primeira letra maiúscula.
 */

$mes = intval(fgets(STDIN)-1);

if($mes <= 5){
    $meses = array("January", "February", "March", "April", "May", "June");
    echo $meses[$mes]."\n";
    return;
}

$mes-=6;
$meses = array("July", "August", "September", "October", "November", "December");
echo $meses[$mes]."\n";