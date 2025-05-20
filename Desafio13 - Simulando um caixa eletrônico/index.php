<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletonico</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>

    <main>
        <h1>Caixa eletrônico</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?= $saque ?>">

            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: RS100, R$50, R$10 e R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
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
    ?>

    <section>
        <h2>Saque de R$<?= number_format($saque, 2, ",", ".") ?> realizado</h2>

        <ul>
            <!-- Colocando imagens -->
            <li><img src="arquivo" aut="100">x <?= $tot100 ?></li>
            <li><img src="arquivo" aut="50" >x <?= $tot50  ?></li>
            <li><img src="arquivo" aut="10" >x <?= $tot10  ?></li>
            <li><img src="arquivo" aut="5"  >x <?= $tot5   ?></li>
        </ul>
    </section>
    
</body>
</html>