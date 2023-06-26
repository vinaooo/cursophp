<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Dolar</title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <main>
        <h1>Conversor de Dolar</h1>
        <?php

        $dataInicial = date('m-d-Y', strtotime('-7 days'));
        $dataFinal = date('m-d-Y');

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataInicial . '\'&@dataFinalCotacao=\'' . $dataFinal . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        // print $url . "<br><br>";

        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);

        $cotacao = $dados['value'][0]['cotacaoCompra'];

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // print(numfmt_format_currency($padrao, $cotacao, "BRL"));

        // Verifica se o formulário foi enviado (botão clicado)
        if (isset($_POST['converter'])) {
            $valorEmReais = $_POST['valor'];
            $valorEmReais = str_replace(',', '.', $valorEmReais);

            if ($cotacao) {
                // Calcula o valor em Dólares
                $valorEmDolares = $valorEmReais / $cotacao;

                // echo "Valor em Reais: R$ " . number_format($valorEmReais, 2, ',', '.') . "<br>";
                // echo "Valor em Dólares: $ " . number_format($valorEmDolares, 2, '.', ',');

                echo "<p>Valor em Reais: " . numfmt_format_currency($padrao, $valorEmReais, "BRL") . "</p>";
                echo "<p>Valor em Dolar: " . numfmt_format_currency($padrao, $valorEmDolares, "USD") . "</p>";
                // echo "<p>Valor em Reais: " . $valorEmReais . "</p>";
                // echo "<p>Valor em Dolar: " . $valorEmDolares . "</p>";
            } else {
                echo "Não foi possível obter a taxa de câmbio.";
            }
        }

        ?>
        <p><a href="javascript:history.back()">Voltar</a></p>
    </main>

</body>

</html>