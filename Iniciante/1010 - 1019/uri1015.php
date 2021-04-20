<?php

/**
 * Leia os quatro valores correspondentes aos eixos x e y de dois pontos 
 * quaisquer no plano, p1(x1,y1) e p2(x2,y2) e calcule a distância entre eles, 
 * mostrando 4 casas decimais após a vírgula.
 */

$P1 = explode(" ", fgets(STDIN));
$P2 = explode(" ", fgets(STDIN));
$D = sqrt(pow($P2[0]-$P1[0],2)+pow($P2[1]-$P1[1],2));

echo number_format($D, 4, '.', '')."\n";