<?php
    $nota1 = fgets(STDIN) * 3.5;
    $nota2 = fgets(STDIN) * 7.5;
    $MEDIA = number_format(($nota1+$nota2)/11,5,'.','');
    echo "MEDIA = $MEDIA\n";
?>