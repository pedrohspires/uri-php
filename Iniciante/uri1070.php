<?php

/**
 * Leia um valor inteiro X. Em seguida apresente os 6 valores 
 * ímpares consecutivos a partir de X, um valor por linha, 
 * inclusive o X ser for o caso.
 */

$cont = 0;
$num = intval(fgets(STDIN));

do{
    if($num%2!=0){
        echo "$num\n";
        $cont++;
    }
    $num++;
}while($cont<6);