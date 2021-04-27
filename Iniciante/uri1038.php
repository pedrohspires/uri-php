<?php
    /**
     * Com base na tabela abaixo, escreva um programa que leia o 
     * código de um item e a quantidade deste item. A seguir, 
     * calcule e mostre o valor da conta a pagar.
     */

    /**
     * Vetor apenas com os preços. Visto que não é necessário
     * apresentar o código e o nome do item, então o código
     * passa a ser o índice do vetor meno um, e o nome será
     * desprezado.
     */
    $dados = array(4, 4.5, 5, 2, 1.5);

    // Guarda os dados em um array onde o índice 0 é o código do item
    // e o índice 1 é a quantidade de itens
    $codigoQuantidade = explode(" ", fgets(STDIN));


    // number_format formata o resultado do total com duas casas decimais.
    // O total é calculado acessando o vetor $dados na posição passada
    // pelo usuário na posição 0 do vetor $codigoQuantidade menos um,
    // para dar o valor de um índice válido, multiplicado pela quantidade
    // de itens, passado pelo usuário no vetor $codigoQuantidade na posição 1.
    echo "Total: R$ ".number_format(($dados[$codigoQuantidade[0]-1]*$codigoQuantidade[1]), 2, '.', '')."\n";
?>