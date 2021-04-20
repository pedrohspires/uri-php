<?php

/**
 * Leia um valor inteiro. A seguir, calcule o menor número de notas possíveis 
 * (cédulas) no qual o valor pode ser decomposto. As notas consideradas são 
 * de 100, 50, 20, 10, 5, 2 e 1. A seguir mostre o valor lido e a relação 
 * de notas necessárias.
 */

$notas = array(0,0,0,0,0,0,0); // inicializa o array para garantir que existirá os índices
$valor = (int) fgets(STDIN); // lê o valor

echo $valor."\n"; //printa o valor no começo para não precisar guardar em outra variável para mostrar no fim

while($valor>0){ // repete enquanto o valor não for decomposto por completo
    switch($valor){ // switch para o valor que calcula a quantidade de notas de todas as possibilidades
        case ($valor>=100):
            $notas[0] = (int) ($valor/100);
            $valor %= 100;
            break;

        case ($valor>=50):
            $notas[1] = (int) ($valor/50);
            $valor %= 50;
            break;

        case ($valor>=20):
            $notas[2] = (int) ($valor/20);
            $valor %= 20;
            break;

        case ($valor>=10):
            $notas[3] = (int) ($valor/10);
            $valor %= 10;
            break;

        case ($valor>=5):
            $notas[4] = (int) ($valor/5);
            $valor %= 5;
            break;

        case ($valor>=2):
            $notas[5] = (int) ($valor/2);
            $valor %= 2;
            break;

        case ($valor>=1):
            $notas[6] = (int) ($valor/1);
            $valor %= 1;
            break;

    }
}


// Saída pedida no problema (junto com o valor no primeiro echo do código)
echo $notas[0]." nota(s) de R$ 100,00\n";
echo $notas[1]." nota(s) de R$ 50,00\n";
echo $notas[2]." nota(s) de R$ 20,00\n";
echo $notas[3]." nota(s) de R$ 10,00\n";
echo $notas[4]." nota(s) de R$ 5,00\n";
echo $notas[5]." nota(s) de R$ 2,00\n";
echo $notas[6]." nota(s) de R$ 1,00\n";