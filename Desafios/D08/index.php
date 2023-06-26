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
            <label for="valor1">Informe um número</label>
            <input type="number" name="valor1" value="<?= $valor1 ?>">
            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h2>Resultado:</h2>

        <?php
        echo "A raiz quadrada de " . $valor1 . " é " . sqrt($valor1) . "<br>";
        echo "A raiz cúbica de " . $valor1 . " é " . pow($valor1, 1 / 3);
        ?>

    </section>
</body>

</html>