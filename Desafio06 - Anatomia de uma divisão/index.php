<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06 - Anatomia de uma divisão</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
        $dividendo = $_GET["d1"] ?? 0;
        $divisor   = $_GET["d2"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>

        <form action="#" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?= $dividendo ?>">

            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?= $divisor ?>">

            <input type="submit" value="Analizar">
        </form>

    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 

            //Cálculo
            //Para pegar o resto, podemos fazer das duas formas abaixo
            //$quociente = (int)($dividendo / $divisor); ou
            $quociente = intdiv($dividendo, $divisor);

            $resto = $dividendo % $divisor;


            // EXIBINDO EM UMA DIV
            // echo"<ul>";

            // echo"<li>Dividendo: $dividendo</li>";
            // echo"<li>Divisor: $divisor</li>";
            // echo"<li>Quociente: $quociente</li>";
            // echo"<li>Resto: $resto</li>";

            // echo"</ul>";
        ?>
    </section>

    <!-- EXIBINDO EM FORMA DE DIVISÃO -->
    <table class="divisao">
        <tr>
            <td><?= $dividendo ?></td>
            <td><?= $divisor   ?></td>
        </tr>

        <tr>
            <td><?= $resto     ?></td>
            <td><?= $quociente ?></td>
        </tr>
        
    </table>
    
</body>
</html>