<!DOCTYPE html>
<html>

<head>
    <title>Simulador de Caixa Eletrônico</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <main>
        <form method="get" action="">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" required step="5" value="<?= $_GET['valor'] ?? 0 ?>"><br><br>

            <input type="submit" name="submit" value="Sacar"><br><br>

            <?php
            if (isset($_GET['submit'])) {
                $valor = $_GET['valor'];

                $notas = array(200, 100, 50, 20, 10, 5);
                $quantidadeNotas = array();

                foreach ($notas as $nota) {
                    $quantidade = floor($valor / $nota);
                    $quantidadeNotas[$nota] = $quantidade;
                    $valor -= $quantidade * $nota;
                }

                echo "Resultado:<br>";
                foreach ($quantidadeNotas as $nota => $quantidade) {
                    if ($quantidade > 0) {
                        echo $quantidade . " nota(s) de R$" . $nota . "<br>";
                    }
                }
            }
            ?>
        </form>
    </main>
</body>

</html>