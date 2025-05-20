<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php
            //Calculo para fazer uma cotação   
            // Cotação copiada do Google
            $cotacao = 5.17;
        
            //Quantos reais você tem?
            $real = $_GET ["din"];
        
            //Equivalencia em dolar
            $dolar = $real / $cotacao;
        
            // JEITO TRADICIONAL
            //Mostrar resultado   - Para imprimir o $, temos que por o \ antes
            // number_format() serve para formatar o numero, primeiro a variavel depois a quantidade de casa, podemos mudar a posição do ponto e da virgula
        
            // echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a US$" . number_format($dolar, 2, ",", ".");
        

            // JEITO PROFICIONAL
            // Formatação de moedas com internacionalização
            // Primeiro criamos um padrão
        
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";  
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>