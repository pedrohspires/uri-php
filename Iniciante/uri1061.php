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

class TempEvent{
    private $dia1, $dia2;
    private $horario1, $horario2;
    private $total;
    private int $dias, $horas, $minutos, $segundos;

    private function lerHorario1($horario){
        $this->horario1 = $horario;
    }

    private function lerHorario2($horario){
        $this->horario2 = $horario;
    }

    public function ler(){
        $this->dia1 = explode(' ', fgets(STDIN));
        $this->lerHorario1(explode(' : ', fgets(STDIN)));
        $this->dia2 = explode(' ', fgets(STDIN));
        $this->lerHorario2(explode(' : ', fgets(STDIN)));
    }

    private function transformarParaSegundos($dia, $horario){
        return ((((($dia[1]*24)+$horario[0])*60)+$horario[1])*60)+$horario[2];
    }

    public function calcularTempo(){
        $tempo1 = $this->transformarParaSegundos($this->dia1, $this->horario1);
        $tempo2 = $this->transformarParaSegundos($this->dia2, $this->horario2);
        $this->total = $tempo2 - $tempo1;
    }

    private function formatarTempo($num){
        $temp = $this->total;
        $this->total = intval(floor($this->total / $num));
        return intval(floor($temp % $num));
    }

    public function formata(){
        $this->segundos = $this->formatarTempo(60);
        $this->minutos = $this->formatarTempo(60);
        $this->horas = $this->formatarTempo(24);
        $this->dias = $this->total;
    }

    public function show(){
        echo "{$this->dias} dia(s)\n";
        echo "{$this->horas} hora(s)\n";
        echo "{$this->minutos} minuto(s)\n";
        echo "{$this->segundos} segundo(s)\n";
    }
}


$evento = new TempEvent();
$evento->ler();
$evento->calcularTempo();
$evento->formata();
$evento->show();