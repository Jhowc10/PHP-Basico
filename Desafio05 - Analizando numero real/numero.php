<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizador de número real</h1>
        <?php 
            $num = $_POST ["n"] ?? 0;

            echo "<p>Analizando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

            //Pegando o numero inteiro de um valor real digitado pelo usuário
            $inte = (int)$num;
            //Pegando o numero flutuante de um valor real digitado pelo usuario
            $fra = $num - $inte;

            echo "<ul><li>A parte interna do número é <strong>" . number_format($inte, 0, ",", ".") . "</strong></li>";
            echo "<li>A parte fracionária do número é <strong>" . number_format($fra, 3 , ",", ".") . "</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

    
</body>
</html>