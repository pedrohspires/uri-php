<?php

/**
 * Leia um número inteiro que representa um código de DDD para discagem interurbana. 
 * Em seguida, informe à qual cidade o DDD pertence, considerando a tabela.
 * 
 * Se a entrada for qualquer outro DDD que não esteja presente na tabela acima, 
 * o programa deverá informar: DDD nao cadastrado
 */

$ddd = intval(fgets(STDIN));

switch($ddd){
    case 61: echo "Brasilia\n"; break;
    case 71: echo "Salvador\n"; break;
    case 11: echo "Sao Paulo\n"; break;
    case 21: echo "Rio de Janeiro\n"; break;
    case 32: echo "Juiz de Fora\n"; break;
    case 19: echo "Campinas\n"; break;
    case 27: echo "Vitoria\n"; break;
    case 31: echo "Belo Horizonte\n"; break;
    default: echo "DDD nao cadastrado\n";
}