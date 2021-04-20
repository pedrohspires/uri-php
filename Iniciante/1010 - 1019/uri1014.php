<?php

/**
 * Calcule o consumo médio de um automóvel sendo fornecidos a distância total p
 * ercorrida (em Km) e o total de combustível gasto (em litros).
 */

$km = (int) fgets(STDIN);
$litros = (float) fgets(STDIN);

echo number_format($km/$litros, 3, '.', '')." km/l\n";