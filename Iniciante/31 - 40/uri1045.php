<?php
    /**
     * Leia 3 valores de ponto flutuante A, B e C e ordene-os em ordem decrescente, 
     * de modo que o lado A representa o maior dos 3 lados. A seguir, determine o 
     * tipo de triângulo que estes três lados formam, com base nos seguintes casos, 
     * sempre escrevendo uma mensagem adequada:
     * 
     * se A ≥ B+C, apresente a mensagem: NAO FORMA TRIANGULO
     * se A2 = B2 + C2, apresente a mensagem: TRIANGULO RETANGULO
     * se A2 > B2 + C2, apresente a mensagem: TRIANGULO OBTUSANGULO
     * se A2 < B2 + C2, apresente a mensagem: TRIANGULO ACUTANGULO
     * se os três lados forem iguais, apresente a mensagem: TRIANGULO EQUILATERO
     * se apenas dois dos lados forem iguais, apresente a mensagem: TRIANGULO ISOSCELES
     */

    [ $A, $B, $C ] = explode(" ", fgets(STDIN));
    $A = floatval($A);
    $B = floatval($B);
    $C = floatval($C);


    while($A < $B || $B < $C){
        if($A < $B){
            $A += $B;
            $B = $A-$B;
            $A -= $B;
        }
        if($B < $C){
            $B += $C;
            $C = $B-$C;
            $B -= $C;
        }
    }


    if($A >= ($B+$C)) 
        echo "NAO FORMA TRIANGULO\n";
    else{
        if(($A*$A) == (($B*$B)+($C*$C))) echo "TRIANGULO RETANGULO\n";
        if($A > sqrt(($B*$B)+($C*$C))) echo "TRIANGULO OBTUSANGULO\n";
        if($A < sqrt(($B*$B)+($C*$C))) echo "TRIANGULO ACUTANGULO\n";
        if($A == $B && $A == $C && $B == $C) echo "TRIANGULO EQUILATERO\n";
        if($A == $B && $A != $C) echo "TRIANGULO ISOSCELES\n";
        if($A == $C && $A != $B) echo "TRIANGULO ISOSCELES\n";
        if($B == $C && $B != $A) echo "TRIANGULO ISOSCELES\n";
    }
?>