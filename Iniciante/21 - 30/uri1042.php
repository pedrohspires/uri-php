<?php
    /**
     * Leia 3 valores inteiros e ordene-os em ordem crescente. 
     * No final, mostre os valores em ordem crescente, uma linha 
     * em branco e em seguida, os valores na sequência como foram lidos.
     */

    /**
     * Utiliza a técnica de bubble sort, inútil para o problema, pois é
     * bem simples, mas resolvi treinar essa técnica aqui.
     */
    function ordena($vetor){
        $cont = count($vetor);
        $i = 0;
        while($cont > 0){
            if($vetor[$i] > $vetor[$i+1]){
                /**
                 * Troca os valores com base em cálculos aritméticos.
                 * Economiza espaço na memória, mas adiciona comandos extras.
                 * Não é necessário muito menos afeta no desempenho, mas fiz 
                 * por questões de conhecimentos prévios nessa técnica.
                 */
                $vetor[$i] += $vetor[$i+1];
                $vetor[$i+1] = $vetor[$i] - $vetor[$i+1];
                $vetor[$i] -= $vetor[$i+1];
            }else $i++;
            if($i >= $cont-1){
                $i = 0;
                $cont--;
            }
        }
        return $vetor;
    }

    function printVetor($vetor){
        for($cont=0; $cont<count($vetor); $cont++)
            echo $vetor[$cont]."\n";
    }

    function removeQuebraDeLinha($vetor){
        $index = count($vetor)-1;
        $vetor[$index] = str_replace("\n", "", $vetor[$index]);
        return $vetor;
    }

    $vetor = explode(" ", fgets(STDIN));
    $vetor = removeQuebraDeLinha($vetor);
    $newVetor = ordena($vetor);
    printVetor($newVetor);
    echo "\n";
    printVetor($vetor);
?>