<?php

/**
 * Leia 6 valores. Em seguida, mostre quantos destes 
 * valores digitados foram positivos. Na próxima linha, 
 * deve-se mostrar a média de todos os valores positivos 
 * digitados, com um dígito após o ponto decimal.
 */

$total = 0;
$positivos = 0;
for($cont=0; $cont<6; $cont++){
    $val = fgets(STDIN);
    if($val >= 0){
        $positivos++;
        $total += $val;
    }
}
echo "$positivos valores positivos\n";
echo number_format($total/$positivos, 1, '.', '')."\n";