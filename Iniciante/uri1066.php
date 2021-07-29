<?php

/**
 * Leia 5 valores Inteiros. A seguir mostre quantos valores 
 * digitados foram pares, quantos valores digitados foram 
 * ímpares, quantos valores digitados foram positivos e 
 * quantos valores digitados foram negativos.
 */

$pares = $impares = $positivos = $negativos = 0;
for($cont=0; $cont<5; $cont++){
    $num = fgets(STDIN);
    $num%2 == 0 ? $pares++ : $impares++;

    if($num>0){
        $positivos++;
        continue;
    }
    
    if($num<0)
        $negativos++;
}

echo "$pares valor(es) par(es)\n";
echo "$impares valor(es) impar(es)\n";
echo "$positivos valor(es) positivo(s)\n";
echo "$negativos valor(es) negativo(s)\n";