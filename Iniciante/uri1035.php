<?php

/**
 * Leia 4 valores inteiros A, B, C e D. A seguir, se B for maior do que C e 
 * se D for maior do que A, e a soma de C com D for maior que a soma de A e 
 * B e se C e D, ambos, forem positivos e se a variável A for par escrever 
 * a mensagem "Valores aceitos", senão escrever "Valores nao aceitos".
 */

/**
 * Retorna true para valor aceito e false para não aceito
 * Utiliza a variável global $nums
 */
function valorAceito(){
    global $nums;

    if(($nums[1]>$nums[2]) && ($nums[3]>$nums[0])){
        $sum1 = $nums[2]+$nums[3];
        $sum2 = $nums[0]+$nums[1];
        if(($sum1>$sum2) && ($sum1>=0) && ($sum2>=0))
            if($nums[0]%2==0)
                return true;
    }
    return false;
}

/**
 * $nums[0] == A
 * $nums[1] == B
 * $nums[2] == C
 * $nums[3] == D
 */
$nums = explode(" ", fgets(STDIN));

if(valorAceito())
    echo "Valores aceitos\n";
else
    echo "Valores nao aceitos\n";