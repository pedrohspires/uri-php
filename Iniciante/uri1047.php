<?php
    /**
     * Leia a hora inicial, minuto inicial, hora final e minuto final de um jogo. 
     * A seguir calcule a duração do jogo.
     * 
     * Obs: O jogo tem duração mínima de um (1) minuto e duração máxima de 24 horas.
     */

    $val = explode(" ", fgets(STDIN));
    $HI = (int) $val[0];
    $MI = (int) $val[1];
    $HF = (int) $val[2];
    $MF = (int) $val[3];

    $minutosInicial = ($HI*60)+$MI;
    $minutosFinal = ($HF*60)+$MF;

    if($minutosFinal < $minutosInicial)
        $minutosFinal += 24*60;

    if($HI == $HF && $MI == $MF)
        echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
    else{
        $minutosInicial = $minutosFinal-$minutosInicial;
        $H = intval($minutosInicial/60);
        $minutosInicial %= 60;
        echo "O JOGO DUROU $H HORA(S) E $minutosInicial MINUTO(S)\n";
    }
?>