<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<!-- 
    Existe 3 jeitos para usar aleatóros
    rand() - Função pouco confiável, existe desde 1951
    mt_rand() - Surgiu em 1997 e é 4x mais rápido que o rand() - Melhor jeito para usar
    random_int() gera números aleatórios criptograficamente seguros - Usado para criação de senhas, porém é muito lento
-->

<body>

    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max); //
            echo "<p>Gerado um número aleatório entre $min e $max...<br> o valor gerado foi <strong>$num</strong></p>";
        ?>
        <!-- Botão que gera outro código, o JavaScript recarrega a página -->
        <button onclick="javascript:document.location.reload()">&#x1F504; GERAR OUTRO</button>

    </main>

</body>
</html>