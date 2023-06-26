<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>

    <?php
    $valor1 = $_GET["valor1"] ?? 0;
    ?>
    <main>
        <h1>Análise de salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor1">Informe seu Salário</label>
            <input type="number" name="valor1" value="<?= $valor1 ?>">
            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h2>Resultado:</h2>
        <?php
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $salMin = 1380;
        echo "Salário minimo atual: " . numfmt_format_currency($padrao, $salMin, "BRL") . "<br>";
        $salarios = intdiv($valor1, $salMin);
        echo "você recebe " . intdiv($valor1, $salMin) . " salários mínimos e " . numfmt_format_currency($padrao, ($valor1 - ($salarios * $salMin)), "BRL");
        ?>




    </section>
</body>

</html>