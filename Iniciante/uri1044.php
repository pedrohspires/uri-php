<?php
    /**
     * Leia 2 valores inteiros (A e B). Após, o programa deve mostrar 
     * uma mensagem "Sao Multiplos" ou "Nao sao Multiplos", indicando 
     * se os valores lidos são múltiplos entre si.
     */

    function multiplos($valores){
        if($valores[0]%$valores[1]==0 || $valores[1]%$valores[0]==0)
            return true;
        return false;
    }

    $valores = explode(" ", fgets(STDIN));

    echo (multiplos($valores) ? "Sao Multiplos\n" : "Nao sao Multiplos\n");
?>