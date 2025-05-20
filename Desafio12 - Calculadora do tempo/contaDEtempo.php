<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>
</head>
<body>
    <!-- 
        Para realizar calculos envolvendo tempo, temos que deizar, horas, dias, semanas, anos, tudo em segundos

        1m -> 60seg
        1h -> 60min x 60seg = 3.600seg
        1D -> 24h x 60min = 1440min x 60seg = 86.400seg
        1S -> 7D  x 24h   = 168h x 60min    = 10.080min x 60seg = 604.800
        

        Quanto é 2.000.000 de segundos quantas semanas vão ser?

        Dividimos os segundos pela semana, semana pelos dias, dias pelas horas e horas por segundos

        segundos   semana                 segundos    dias          segundos  horas                segundos minutos
        2.000.000 | 604.800          |     185.600 | 86.400       |  12.800 | 3.600             |    2.000 | 60
        1.814.400 |  -------         |     172.800 | ------       |  10.800 | -----             |    1.980   ---
        ---------      3             |     -------     2          |  -------    3               |   ------   33
        185.600                      |      12.800                |   2.000                     |     20
                                     |                            |                             |
         3 é o resultado da semana   | 2 é o numero de dias       | 3 é o numero de horas       | 33 é o numero de minutos
         185.600 é menor que 604.800 | 12.800 é menor que 86.400  | 2.000 é menor que 3         | 20 é menor que 60
         logo, dividimos este resto  | logo, dividimos este resto | logo, dividimos o resto     | logo, os 20 será os
         para saber os dias          | para saber as horas        | para saber os minutos       | segundos

         RESULTADO: 3 Semanas, 2 dias, 3 horas, 33 minutos e 20 segundos.
     -->
    
     <!-- Conta no PHP -->
     <?php 
        $total = 2_000_000;
        $sobra = $total;

        // Total de Semanas
        $semanas = (int)($sobra / 604_800);
        $sobra  = $sobra % 604_800;

        //Total de Dias
        $dias   = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;

        //Total de Horas
        $horas  = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;

        //Total de Minutos
        $minutos = (int)($sobra / 60);
        $sobra   = $sobra % 60;

        //Total de Segundos
        $segundos = $sobra;

        echo"$total segundos equivalem a $semanas semanas, $dias dias, $horas horas, $minutos minutos e $segundos segundos.";
     ?>
</body>
</html>