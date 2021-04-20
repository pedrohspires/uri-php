<?php
    $entrada1 = explode(" ", fgets(STDIN));
    $entrada2 = explode(" ", fgets(STDIN));
    $valorTotal = number_format(($entrada1[1]*$entrada1[2])+($entrada2[1]*$entrada2[2]), 2, '.', '');
    echo "VALOR A PAGAR: R$ $valorTotal\n";
?>