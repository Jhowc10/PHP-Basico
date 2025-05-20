<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 0;

        echo "O antecessor de $num é " . ($num - 1) . " \n";
        echo "<br>O sucessor de $num é " . ($num + 1) . " \n";
    ?>
    <button onclick="javascript:window.location.href='index.html'" >&#x2B05; Voltar</button>

    <!-- Outra maneira de voltar, esta maneira vem com o ultimo caractere digitado
    <button onclick="javascript:history.go(-1)" >&#x2B05; Voltar</button> -->
</body>
</html>