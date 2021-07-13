<?php
    /**
     * Leia a hora inicial e a hora final de um jogo. 
     * A seguir calcule a duração do jogo, sabendo que o 
     * mesmo pode começar em um dia e terminar em outro, 
     * tendo uma duração mínima de 1 hora e máxima de 24 horas.
     */

    $val = explode(" ", fgets(STDIN));
    $inicio = (int) $val[0];
    $fim = (int) $val[1];

    if($fim <= $inicio)
        $fim += 24;
    
    echo "O JOGO DUROU ".($fim-$inicio)." HORA(S)\n";
?>