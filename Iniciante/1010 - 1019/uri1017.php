<?php

/**
 * Joaozinho quer calcular e mostrar a quantidade de litros de combustível 
 * gastos em uma viagem, ao utilizar um automóvel que faz 12 KM/L. Para isso, 
 * ele gostaria que você o auxiliasse através de um simples programa. Para 
 * efetuar o cálculo, deve-se fornecer o tempo gasto na viagem (em horas) 
 * e a velocidade média durante a mesma (em km/h). Assim, pode-se obter 
 * distância percorrida e, em seguida, calcular quantos litros seriam 
 * necessários. Mostre o valor com 3 casas decimais após o ponto.
 */

$T = (int) fgets(STDIN); // recebe o tempo
$kmh = (int) fgets(STDIN); // recebe a velocidade média
$km = $kmh * $T; // calcula a distância percorrida com base na velocidade e no tempo
$consumo = $km/12; // calcula o consumo dividindo a distância pelo consumo em km/l

echo number_format($consumo, 3, '.', '')."\n"; // imprime com a formatação de duas casas decimais