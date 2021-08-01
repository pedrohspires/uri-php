<?php

/**
 * Leia um valor inteiro X (1 <= X <= 1000). Em seguida mostre os 
 * ímpares de 1 até X, um valor por linha, inclusive o X, se for o caso.
 */

$num = fgets(STDIN);
for($cont=1; $cont<=$num; $cont++)
    if($cont%2 != 0)
        echo "$cont\n";