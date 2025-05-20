<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_REQUEST['seg'] ?? 0;
    ?>

    <main>
        <h1>Calculadora do Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required
            value="<?= $total ?>"> 

            <input type="submit" value="Calcular">

        </form>
    </main>

    <?php 
        
        $sobra = $total;

        // Total de Semanas
        $semanas = (int)($sobra / 604_800);
        $sobra   = $sobra % 604_800;

        //Total de Dias
        $dias   = (int)($sobra / 86_400);
        $sobra  = $sobra % 86_400;

        //Total de Horas
        $horas  = (int)($sobra / 3_600);
        $sobra  = $sobra % 3_600;

        //Total de Minutos
        $minutos = (int)($sobra / 60);
        $sobra   = $sobra % 60;

        //Total de Segundos
        $segundos = $sobra;
    ?>


    <section>
        <h2>Totalizando tudo</h2>

        <p>Analizando o valor que você digitou, <?= $total ?> segundos equivalem a um total de:</p>

        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias    ?> dias</li>
            <li><?= $horas   ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>
    </section>
    
</body>
</html>