<?php 
    //Pegando a data atual
    //De quiser que o ano seja 2023 use o 'Y' maiusculo, se quiser só 23, use o 'y' minusculo.

    $atual = date("Y");
    $nasc  = 1988;
    $ano   = $atual;

    //Descobrindo a idade da pessoa 
    $idade = $ano - $nasc;
    echo"Quem nasceu em $nasc vai ter $idade anos em $ano."
?>