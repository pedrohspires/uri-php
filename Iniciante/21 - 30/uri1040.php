<?php
    // Média 3 - uri problema 1040

    /**
     * Recebe um vetor de notas e retorna uma média
     */
    function media($notas){
        return (($notas[0]*2)+($notas[1]*3)+($notas[2]*4)+$notas[3])/10;
    }

    function mediaExame($media, $notaExame){
        return ($media+$notaExame)/2;
    }

    function exame($media){
        echo "Aluno em exame.\n";
        $notaExame = fgets(STDIN);
        echo "Nota do exame: ".number_format($notaExame, 1, '.', '')."\n";
        $mediaExame = mediaExame($media, $notaExame);
        if($mediaExame>=5)
            return "Aluno aprovado.\nMedia final: ".number_format($mediaExame, 1, '.', '')."\n";
        else
            return "Aluno reprovado.\nMedia final: ".number_format($mediaExame, 1, '.', '')."\n";
    }

    function resultado($notas){
        $media = media($notas);
        $mediaText = $media."";
        if(!isset($mediaText[1])){
            $mediaText[1] = '.';
            $mediaText[2] = '0';
        }
        echo "Media: ".$mediaText[0].$mediaText[1].$mediaText[2]."\n";
        switch($media){
            case ($media<5): 
                return "Aluno reprovado.\n";
            case ($media>=7): return "Aluno aprovado.\n";
            default: return exame($media);
        }
    }


    // Programa principal
    $notas = explode(" ", fgets(STDIN));
    echo resultado($notas);
?>