<?php
    fgets(STDIN);
    $SAL = fgets(STDIN); //ler o salario
    $VENDAS = fgets(STDIN); //ler o montante de vendas
    $SALARIO = number_format(round($SAL+($VENDAS*0.15),2,PHP_ROUND_HALF_EVEN), 2, '.', '');
    print "TOTAL = R$ $SALARIO\n"
?>