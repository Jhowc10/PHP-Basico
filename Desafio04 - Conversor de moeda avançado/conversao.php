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

            // Pegando a data atual do sistema, vai sempre atualizando conforme muda o dia
            $inicio = date("m-d-Y", strtotime("- 19 days")); // Pega a data de 19 dias antes da data atual
             $fim    = date("m-d-Y");  //Pega a data atual


            //  COTAÇÃO VINDA DA API DO BANCO CENTRAL

            // As ' tem que ser simples, se for duplas ela irá confundir os $ com variaveis
             $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Tratando os dados em JASON
            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados); Serve para ver o valor e o tipo da variável

            $cotacao = $dados ["value"][0]["cotacaoCompra"];
        
            //Quantos reais você tem?
            $real = $_GET ["din"] ?? 0;
        
            //Equivalencia em dolar
            $dolar = $real / $cotacao;
        
        

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