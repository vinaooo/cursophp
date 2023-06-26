<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção de valores </title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <main>
        <form method="get" action=" ">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required value="<?= $_GET['numero'] ?? 1000 ?>" min="100"><br><br>

            <label for="porcentagem">Porcentagem: <span id="porcentagemValor"><?= $_GET['porcentagem'] ?? 0 ?>%</span>
            </label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" value="<?= $_GET['porcentagem'] ?? 0 ?>" oninput="updatePercentageValue(this.value)"><br>

            <input type="submit" name="submit" value="Corrigir"><br><br>

            <?php
            $numero = $_GET['numero'] ?? 1000;
            $porcentagem = $_GET['porcentagem'] ?? 0;

            $corrigido = $numero + ($numero * $porcentagem / 100);

            echo "Saída: " . $corrigido;
            ?>

            <script>
                function updatePercentageValue(value) {
                    var porcentagemValor = document.getElementById("porcentagemValor");
                    porcentagemValor.innerText = value + "%";
                }
            </script>
        </form>
    </main>
</body>

</html>