<?php
    /**
     * A empresa ABC resolveu conceder um aumento de salários a seus funcionários 
     * de acordo com a tabela abaixo:
     * 
     *     Salário	 Percentual de Reajuste
     * 0 - 400.00           15%
     * 400.01 - 800.00      12%
     * 800.01 - 1200.00     10%
     * 1200.01 - 2000.00    7%
     * Acima de 2000.00     4%
     * 
     * Leia o salário do funcionário e calcule e mostre o novo salário, 
     * bem como o valor de reajuste ganho e o índice reajustado, em percentual.
     */

    $salario = floatval(fgets(STDIN));

    switch($salario){
        case ($salario<=400):
            $percentual = 0.15;
            break;

        case ($salario<=800):
            $percentual = 0.12;

        case ($salario<=1200):
            $percentual = 0.10;
            break;

        case ($salario<=2000):
            $percentual = 0.07;
            break;
        
        default:
            $percentual = 0.04;
    }

    echo "Novo salario: ".number_format($salario+($salario*$percentual), 2, '.', '')."\n";
    echo "Reajuste ganho: ".number_format($salario*$percentual, 2, '.', '')."\n";
    echo "Em percentual: ".($percentual*100)." %\n";
?>