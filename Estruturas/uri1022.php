<?php
    /**
     * A tarefa aqui neste problema é ler uma expressão matemática 
     * na forma de dois números Racionais (numerador / denominador) 
     * e apresentar o resultado da operação. Cada operando ou 
     * operador é separado por um espaço em branco. A sequência de 
     * cada linha que contém a expressão a ser lida é: número, 
     * caractere, número, caractere, número, caractere, número. 
     * A resposta deverá ser apresentada e posteriormente simplificada. 
     * Deverá então ser apresentado o sinal de igualdade e em seguida 
     * a resposta simplificada. No caso de não ser possível uma 
     * simplificação, deve ser apresentada a mesma resposta após o 
     * sinal de igualdade.
     */

    // Funções
    function simplifica(&$N, &$D){
        $cont = 2;
        while(1){
            if($N%$cont==0 && $D%$cont==0){
                $N /= $cont;
                $D /= $cont;
            }else
                if($N>$cont && $D>$cont)
                    $cont++;
                else
                    break;
        }
    }

    function denominador($dados){
        return ($dados[2]*$dados[6]);
    }

    function soma($dados){
        return ($dados[0]*$dados[6]+$dados[4]*$dados[2]);
    }

    function subtrai($dados){
        return ($dados[0]*$dados[6]-$dados[4]*$dados[2]);
    }

    function multiplica($dados){
        return ($dados[0]*$dados[4]);
    }

    function divide($dados){
        return ($dados[0]*$dados[6]);
    }

    function resultado($dados){
        switch($dados[3]){
            case '+': 
                $N = soma($dados);
                break;
            case '-': 
                $N = subtrai($dados);
                break;
            case '*': 
                $N = multiplica($dados);
                break;
            case '/': 
                $N = divide($dados);
                $D = $dados[4]*$dados[2];
                break;
        }
        if($dados[3]!='/')
            $D = denominador($dados);
        $frac1 = $N."/".$D;
        simplifica($N, $D);
        $frac2 = $N."/".$D;
        return $frac1." = ".$frac2."\n";
    }



    // Programa principal
    $max = fgets(STDIN);
    for($cont = 0; $cont<$max; $cont++){
        $dados = explode(" ", fgets(STDIN));
        $string = resultado($dados);
        echo $string;
    }

    
?>