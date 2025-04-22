<?php

    $x = 6;
    $y = 5;
    $media = ($x + $y) / 2;
    //media >= 6,0 = 'aprovado'
    //media < 6,0 || >= 4,0 = 'recuperação'
    //media < 4,0 = 'reprovado'

    if ($media >= 6.0) {
        echo "Aprovado";
        die;
    }

    if ($media < 4.0) {
        echo "Reprovado";
        die;
    }

    echo "Recuperação";    

?>