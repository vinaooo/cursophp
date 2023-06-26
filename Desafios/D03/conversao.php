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
        //var_dump($_REQUEST); //junção de get, post e cookies
        $din = $_GET['din'];
        $valorDolar = 4.92;
        $valorTotal = $din / $valorDolar;

        // $formattedDolar = number_format($valorDolar, 2, ',', '.');
        // $formattedReal = number_format($din, 2, ',', '.');
        // $formattedTotal = number_format($valorTotal, 2, ',', '.');

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>" . numfmt_format_currency($padrao, $din, 'BRL') . " são " . numfmt_format_currency($padrao, $valorTotal, 'USD') . "</p>";
        echo "<p>*valor da cotação do dolar em 07/06/2023 é: " . numfmt_format_currency($padrao, $valorDolar, "USD") . "</p>";
        ?>
        <p><a href="javascript:history.back()">Voltar</a></p>
    </main>

</body>

</html>