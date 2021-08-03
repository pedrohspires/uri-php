<?php

/**
 * Leia um valor inteiro N. Este valor será a quantidade 
 * de valores inteiros X que serão lidos em seguida.
 * Mostre quantos destes valores X estão dentro do 
 * intervalo [10,20] e quantos estão fora do intervalo, 
 * mostrando essas informações.
 */

$max = intval(fgets(STDIN));
$in = $out = 0;

for($cont=0; $cont<$max; $cont++){
    $num = intval(fgets(STDIN));
    if($num >=10 && $num <= 20)
        $in++;
    else $out++;
}

echo "$in in\n";
echo "$out out\n";