<?php 
    $v1 = 10;
    $p1 =  2;

    $v2 = 16;
    $p2 =  3;

    $ma = ($v1 + $v2) / 2;
    $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
;
    echo"<p>A média aritmética entre <strong>$v1</strong> e <strong>$v2</strong> é <strong>$ma</strong>.</p>";
    echo"<p>A média ponderada entre <strong>$v1</strong> com peso <strong>$p1</strong> e <strong>$v2</strong> cpm peso <strong>$p2</strong> é igual a <strong>$mp</strong>.</p>";
?>