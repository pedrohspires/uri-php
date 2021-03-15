<?php
    $NUM = fgets(STDIN); //ler número do funcionário
    $HRS = fgets(STDIN); //ler a quantidade de horas trabalhada
    $VHR = fgets(STDIN); //ler o valor por hora recebido
    $SALARIO = number_format($HRS * $VHR, 2, '.', '');
    print "NUMBER = $NUM";
    print "SALARY = U$ $SALARIO\n"
?>