<?php 
    //Formula para descobrir prcentagem

    $preco = 155;  //O _ é o .
    $porc  = 20;
    $form  = ($preco * $porc) / 100;  //Memorizar esta fórmula, ela que dá a porcentagem
    $novo  = $preco + $form;  // Calcula o aulmento de um valor ao somar a porcentagem

    echo"$porc% de " . number_format($preco, 2, ",", ".") . "é igual a " . number_format($form, 2, ",", ".") . " e o produto vai custar" . number_format($novo, 2, ",", ".");
?>