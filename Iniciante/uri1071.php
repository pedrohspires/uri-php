<?php

/**
 * Leia 2 valores inteiros X e Y. A seguir, calcule e 
 * mostre a soma dos números impares entre eles.
 */

$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

if($num2<$num1){
    $num1 += $num2;
    $num2 = $num1-$num2;
    $num1 = $num1-$num2;
}

$sum = 0;
if($num1%2 == 0)
    $num1++;
else $num1 += 2;
while($num1<$num2){
    $sum += $num1;
    $num1 += 2;
}

echo "$sum\n";