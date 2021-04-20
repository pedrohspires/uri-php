<?php

/**
 * Leia um valor inteiro, que é o tempo de duração em segundos de um determinado 
 * evento em uma fábrica, e informe-o expresso no formato horas:minutos:segundos.
 */

$tempo = (int) fgets(STDIN);
$horario = array(0, 0, 0);

while($tempo>0){
    switch($tempo){
        case $tempo<60:
            $horario[2] = $tempo;
            $tempo = 0; //condição de parada
        break;

        case $tempo<3600:
            $horario[1] = (int) ($tempo/60); //minutos;
            $tempo %= 60;
        break;

        default:
            $horario[0] = (int) ($tempo/3600);
            $tempo %= 3600;
    }
}

echo $horario[0].":".$horario[1].":".$horario[2]."\n";