<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>

    <?php
    $valor1 = $_GET["valor1"] ?? 0;
    $valor2 = $_GET["valor2"] ?? 0;
    ?>
    <main>
        <h1>Análise de divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" value="<?= $valor1 ?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" value="<?= $valor2 ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Resultado: <?= $valor1 / $valor2 ?></h2>


        <table class="divisao">
            <tr>
                <td><?= $valor1 ?></td>
                <td><?= $valor1 ?></td>
            </tr>
            <tr>
                <td><?= $valor1 % $valor2 ?></td>
                <td><?= intdiv($valor1, $valor2) ?></td>
            </tr>
        </table>

    </section>
</body>

</html>