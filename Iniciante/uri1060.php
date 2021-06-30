<?php

/**
 * Faça um programa que leia 6 valores. Estes valores serão somente negativos 
 * ou positivos (desconsidere os valores nulos). A seguir, mostre a quantidade 
 * de valores positivos digitados.
*/

$aux=0;
for($cont=0; $cont<6; $cont++){
    if(fgets(STDIN) >= 0)
        $aux++;
}
echo "$aux valores positivos\n";