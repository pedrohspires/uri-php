<?php
    /**
     * Você deve fazer um programa que leia um valor qualquer e 
     * apresente uma mensagem dizendo em qual dos seguintes 
     * intervalos ([0,25], (25,50], (50,75], (75,100]) este valor 
     * se encontra. Obviamente se o valor não estiver em nenhum 
     * destes intervalos, deverá ser impressa a mensagem “Fora de intervalo”.
     */

    /**
     * Recebe um valor e retorna em que intervalo ele está contido.
     * Caso não esteja em nenhum deles, retorna null
     */
    function getIntervalo($valor){
        switch($valor){
            case $valor<0 || $valor>100:
                return null;
            case $valor<=25:
                return "[0,25]\n";
            case $valor<=50:
                return "(25,50]\n";
            case $valor<=75:
                return "(50,75]\n";
            default:
                return "(75,100]\n";
        }
    }

    $valor = fgets(STDIN);
    $intervalo = getIntervalo($valor);
    if($intervalo === null)
        echo "Fora de intervalo\n";
    else
        echo "Intervalo ".$intervalo;
?>