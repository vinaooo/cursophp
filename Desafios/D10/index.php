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
    $nascAno = $_GET["nascAno"] ?? 2000;
    $ano = $_GET["ano"] ?? 0;
    $nascMax = $ano - 1
    ?>
    <main>
        <h1>Análise de idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor1">Informe ano de nascimento</label>
            <input type="number" name="nascAno" value="<?= $nascAno ?>" max="<?= $nascMax ?>" min="1900">
            <?php $anoAtual = date("Y") ?>
            <label for="valor1"><?= "Informe o ano para o calculo, ano atual " . $anoAtual ?></label>
            <input type="number" name="ano" value="<?= $ano ?>" min="1900">

            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h2>Resultado:</h2>
        <?php
        echo "A idade é : " . ($ano - $nascAno) . "<br>";
        ?>

    </section>
</body>

</html>