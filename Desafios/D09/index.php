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
    $nota1 = $_GET["nota1"] ?? 1;
    $peso1 = $_GET["peso1"] ?? 1;
    $nota2 = $_GET["nota2"] ?? 1;
    $peso2 = $_GET["peso2"] ?? 1;
    ?>
    <main>
        <h1>Análise de salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" required>
            <label for="valor1">Informe Nota 1</label>
            <input type="number" name="nota1" value="<?= $nota1 ?>" required>

            <label for="valor1">Informe Peso 1</label>
            <input type="number" name="peso1" value="<?= $peso1 ?>" min="1" required>

            <label for="valor1">Informe Nota 2</label>
            <input type="number" name="nota2" value="<?= $nota2 ?>" required>

            <label for="valor1">Informe Peso 2</label>
            <input type="number" name="peso2" value="<?= $peso2 ?>" min="1" required>

            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h2>Resultado:</h2>
        <?php
        echo "A média simples é " . ($nota1 + $nota2) / 2 . "<br>";
        echo "A média ponderada é " . ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2) . "<br>";
        ?>

    </section>
</body>

</html>