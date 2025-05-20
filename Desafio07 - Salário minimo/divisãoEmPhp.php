<?php 
    $sal = 8160;
    $min = 1000;

    //Fazendo a divisão inteira, sem o resto. Pode se fazer de duas maneiras
    $tot = intdiv($sal, $min);  // ou
    $res = (int)($sal / $min);

    //Obtendo o resto da divisão
    $dif = $sal % $min;

    echo"Quem ganha $sal por mês, ganha um total de $tot salários mínimos + $dif";

?>