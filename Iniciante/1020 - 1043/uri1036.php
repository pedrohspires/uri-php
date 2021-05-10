<?php
    /**
     * Leia 3 valores de ponto flutuante e efetue o cálculo das 
     * raízes da equação de Bhaskara. Se não for possível calcular 
     * as raízes, mostre a mensagem correspondente “Impossivel calcular”, 
     * caso haja uma divisão por 0 ou raiz de numero negativo.
     */

    /**
     * Recebe os valores em um array, com o seguinte formato:
     * $valores[0] é o coeficiente A
     * $valores[1] é o coeficiente B
     * $valores[2] é o coeficiente C
     */
    $valores = explode(" ", fgets(STDIN));


    // Funções úteis
    function delta(){
        global $valores;
        return pow($valores[1], 2)-(4*$valores[0]*$valores[2]);
    }

    function X1(){
        global $valores;
        return ((-$valores[1])+sqrt(delta()))/(2*$valores[0]);
    }

    function X2(){
        global $valores;
        return ((-$valores[1])-sqrt(delta()))/(2*$valores[0]);
    }

    // Programa
    if((delta()<0) || ((2*$valores[0]) == 0))
        echo "Impossivel calcular\n";
    else{
        echo "R1 = ".number_format(X1(), 5, '.', '')."\n";
        echo "R2 = ".number_format(X2(), 5, '.', '')."\n";
    }
?>