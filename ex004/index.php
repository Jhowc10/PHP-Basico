<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <h2>Numeros inteiros</h2>
    <?php 
        $num = 300;
        echo "O valor da variável é $num - ";
        
        $num = 0x1A;
        echo "$num - ";

        $num = 0b1011;
        echo "$num";
    ?>

    <br><br>

    <?php
        $v = 300;
        var_dump($v);
    ?>

    <br><br>

    <?php 
        $vet = [1, 2.4, "Maria", 6, false];  // array
        var_dump($vet);
    ?>

    <br><br>

    <?php
        class Pessoa{     //Objeto
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)
    ?>
    
</body>
</html>