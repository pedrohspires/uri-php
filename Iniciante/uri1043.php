<?php
    /**
     * Leia 3 valores reais (A, B e C) e verifique se eles formam ou não um triângulo. 
     * Em caso positivo, calcule o perímetro do triângulo e apresente a mensagem:
     * 
     * Perimetro = XX.X
     * 
     * Em caso negativo, calcule a área do trapézio que tem A e B como base e C como 
     * altura, mostrando a mensagem
     * 
     * Area = XX.X
     */

    $valores = explode(" ", fgets(STDIN));
    if($valores[0]>abs($valores[1]-$valores[2]) && $valores[0]<($valores[1]+$valores[2]))
        echo "Perimetro = ".number_format($valores[0]+$valores[1]+$valores[2],1,'.','')."\n";
    else{
        $area = (($valores[0]+$valores[1])*$valores[2])/2;
        echo "Area = ".number_format($area, 1, '.', '')."\n";
    }
?>