<?php

/**
 * Faça um programa que leia 5 valores inteiros. Conte quantos 
 * destes valores digitados são pares e mostre esta informação.
 */

$pares = 0;
for($cont=0; $cont<5; $cont++){
    if(fgets(STDIN)%2 == 0)
        $pares++;
}
echo "$pares valores pares\n";