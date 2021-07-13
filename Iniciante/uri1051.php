<?php

/**
 * Leia um valor com duas casas decimais, equivalente ao salário de uma pessoa de Lisarb. 
 * Em seguida, calcule e mostre o valor que esta pessoa deve pagar de Imposto de Renda, 
 * segundo a tabela.
 * 
 * Lembre que, se o salário for R$ 3002.00, a taxa que incide é de 8% apenas sobre R$ 
 * 1000.00, pois a faixa de salário que fica de R$ 0.00 até R$ 2000.00 é isenta de 
 * Imposto de Renda. No exemplo fornecido (abaixo), a taxa é de 8% sobre R$ 1000.00 + 18% 
 * sobre R$ 2.00, o que resulta em R$ 80.36 no total. O valor deve ser impresso com duas 
 * casas decimais.
 */

function calcula($salario){
    if($salario <= 2000)
        return 0;
    
    $salario -= 2000;
    if($salario <= 1000)
        return $salario * 0.08;
    
    $taxa = 80;
    $salario-=1000;
    if($salario <= 1500)
        return $taxa + ($salario * 0.18);
    
    $taxa += 270;
    $salario -= 1500;
    return $taxa + ($salario * 0.28);
}

$taxa = calcula(floatval(fgets(STDIN)));
if($taxa == 0)
    echo "Isento\n";
else
    echo "R$ ".number_format($taxa, 2, '.', '')."\n";