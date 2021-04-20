<?php
    $pi = 3.14159;
    $raio = fgets(STDIN);
    $vol = number_format((4.0/3)*$pi*pow($raio,3),3,'.','');
    echo "VOLUME = $vol\n";
?>