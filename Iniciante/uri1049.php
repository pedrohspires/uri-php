<?php
    /**
     * Neste problema, você deverá ler 3 palavras que definem o 
     * tipo de animal possível segundo o esquema abaixo, da 
     * esquerda para a direita.  Em seguida conclua qual dos 
     * animais seguintes foi escolhido, através das três 
     * palavras fornecidas.
     */

    function ave($animal){
        if(strcmp($animal[2], "carnivoro\n") == 0)
            echo "aguia\n";
        else
            echo "pomba\n";
    }

    function mamifero($animal){
        if(strcmp($animal[2], "onivoro\n") == 0)
            echo "homem\n";
        else
            echo "vaca\n";
    }

    function inseto($animal){
        if(strcmp($animal[2], "hematofago\n") == 0)
            echo "pulga\n";
        else
            echo "lagarta\n";
    }

    function anelideo($animal){
        if(strcmp($animal[2], "hematofago\n") == 0)
            echo "sanguessuga\n";
        else
            echo "minhoca\n";
    }

    function vertebrado($animal){
        if(strcmp($animal[1], "ave\n") == 0)
            ave($animal);
        else
            mamifero($animal);
    }

    function invertebrado($animal){
        if(strcmp($animal[1], "inseto\n") == 0)
            inseto($animal);
        else
            anelideo($animal);
    }

    $animal[] = fgets(STDIN);
    $animal[] = fgets(STDIN);
    $animal[] = fgets(STDIN);

    switch($animal[0]){
        case (strcmp($animal[0], "vertebrado\n")==0): vertebrado($animal); break;
        default: invertebrado($animal);
    }
?>