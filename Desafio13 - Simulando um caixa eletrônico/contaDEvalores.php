<?php 
    $saque = 385;
    $resto = $saque;

    //Saque de R$100,00
    $tot100   = (int)($resto / 100);
    $resto = $resto % 100;

    //Saque de R$50,00
    // A função floor() é a mesma coisa que o int, ela sempre arredonda o numero para baixo
    $tot50 = floor($resto / 50);
    $resto %= 50;
    // $resto %= 50 é um resumo de $resto = $resto % 50;. Podemos resumir quando a variavel é a mesma.

    //Saque de R$10,00
    $tot10 = (int)($resto / 10);
    $resto %= 10;

    //Saque de R$5,00
    $tot5 = (int)($resto / 5);
    $resto %= 5;

    echo"Seu saque de R\$$saque vai resultar em: $tot100 notas de 100, $tot50 notas de 50, $tot10 notas de 10 e $tot5 nota de 5. Faltou $resto reias para sacar.";
?>