<?php
    /**
     * Leia 2 valores com uma casa decimal (x e y), que devem representar 
     * as coordenadas de um ponto em um plano. A seguir, determine qual 
     * o quadrante ao qual pertence o ponto, ou se está sobre um dos eixos 
     * cartesianos ou na origem (x = y = 0).
     * 
     * Se o ponto estiver na origem, escreva a mensagem “Origem”.
     * Se o ponto estiver sobre um dos eixos escreva “Eixo X” ou “Eixo Y”, 
     * conforme for a situação.
     */

    function posicao($coordenadas){
        if($coordenadas[0]==0 && $coordenadas[1]==0)
            return "Origem\n"; // ponto está na origem
        if($coordenadas[0]==0)
            return "Eixo Y\n"; // ponto está em cima do eixo Y (X=0 e Y!=0)
        if($coordenadas[1]==0)
            return "Eixo X\n"; // ponto está em cima do eixo X (Y=0 e X!=0)

        if($coordenadas[0]>0){
            if($coordenadas[1]>0)
                return "Q1\n"; // ponto está no quadrante 1 (X>0 e Y>0)
            return "Q4\n"; // ponto está no quadrante 4 (X>0 e Y<0)
        }else
            if($coordenadas[1]>0)
                return "Q2\n"; // ponto está no quadrante 2 (X<0 e Y>0)
        return "Q3\n"; // passou em todas as verificações, só resta o quadrante 3 (X<0 e Y<0)
    }


    $coordenadas = explode(" ", fgets(STDIN));
    echo posicao($coordenadas);
?>