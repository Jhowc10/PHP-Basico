<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritimética e Ponderada</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 0;

        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;
    ?>

    <main>
        <h1>Médias Aritiméticas</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$v1 ?>">

            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$p1 ?>">

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$v2 ?>">

            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?=$p2 ?>">

            <input type="submit" value="Calcular Médias">           
        </form>
    </main>
    
    <section>
        <?php 
            $ma = ($v1 + $v2) / 2;
            $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
        ?>
        <h2>Calculo das Médias</h2>

        <p>Analizando os valores <strong><?= $v1 ?></strong> e <strong><?= $v2 ?></strong>:</p>

        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <strong><?= number_format($ma, 2, ",", ".") ?></strong></li>
            <li>A <strong>Média Aritimética Ponderada</strong> com pesos <strong><?= $p1 ?></strong> e <strong><?= $p2 ?></strong> é igual a <strong><?= number_format($mp, 2, ",", ".") ?></strong>.</li>
        </ul>
    </section>
</body>
</html>