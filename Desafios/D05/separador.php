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

        $numero = $_POST['valor'];

        echo '<p>O número é: ' . number_format($numero, 3, ',', '.') . '</p>';
        $inteira = (int)$numero;
        $fracionada = $numero - $inteira;
        echo "<ul><li>A parte inteira é " . number_format($inteira, 0, ',', '.') . " </li><li>A parte fracionária é " . number_format($fracionada, 3, ',', '.') . "</li></ul>";
        ?>
        <p><a href="javascript:history.back()">Voltar</a></p>
    </main>

</body>

</html>