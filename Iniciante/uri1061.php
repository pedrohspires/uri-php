<?php

/**
 * Pedrinho está organizando um evento em sua Universidade. O evento deverá ser 
 * no mês de Abril, iniciando e terminando dentro do mês. O problema é que Pedrinho 
 * quer calcular o tempo que o evento vai durar, uma vez que ele sabe quando inicia 
 * e quando termina o evento.
 * 
 * Sabendo que o evento pode durar de poucos segundos a vários dias, você deverá 
 * ajudar Pedrinho a calcular a duração deste evento.
*/

$dia1 = explode(' ', fgets(STDIN));
$horario1 = explode(' : ', fgets(STDIN));
$dia2 = explode(' ', fgets(STDIN));
$horario2 = explode(' : ', fgets(STDIN));

$dias = $dia2[1] - $dia1[1];
if($horario1[0] > $horario2[0]){
    $horario2[0] += 24;
} 
$horas = $horario2[0] - $horario1[0];

if($horario1[1] > $horario2[1]){
    $horario2[1] += 60;
    $horas--;
}
$minutos = $horario2[1] - $horario1[1];

if($horario1[2] > $horario2[2]){
    $horario2[2] += 60;
    $minutos--;
}
$segundos = $horario2[2] - $horario1[2];


echo "$dias dia(s)\n";
echo "$horas hora(s)\n";
echo "$minutos minuto(s)\n";
echo "$segundos segundo(s)\n";


/**
 * Caso de erro:
 * 
 * Dia 5
 * 08 : 50 : 37
 * Dia 6
 * 08 : 50 : 38
 * 
 * Saída esperada:
 * 1 dia(s)
 * 0 hora(s)
 * 0 minuto(s)
 * 1 segundo(s)
 */