<?php 
    // Pegando a data atual do sistema, vai sempre atualizando conforme muda o dia
    $inicio = date("m-d-Y", strtotime("- 19 days")); // Pega a data de 19 dias antes da data atual
    $fim    = date("m-d-Y");  //Pega a data atual



    // As ' tem que ser simples, se for duplas ela irá confundir os $ com variaveis
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    // Tratando os dados em JASON
    $dados = json_decode(file_get_contents($url), true);

    //var_dump($dados); Serve para ver o valor e o tipo da variável

    $cotacao = $dados ["value"][0]["cotacaoCompra"];

    echo "A cotação foi $cotacao";
?>