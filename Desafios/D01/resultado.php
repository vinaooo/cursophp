<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <header>
        <h1>Resultado do processamento </h1>
    </header>
    <main>
        <?php
        //var_dump($_REQUEST); //junção de get, post e cookies
        $num = $_GET['num'] ?? "Vazio";
        $numAnt = $num - 1;
        $numPos = $num + 1;
        echo "O número é $num <br>";
        echo "O número anterior é $numAnt <br>";
        echo "O número posterior é $numPos";
        ?>
        <!-- <button onclick="javascript:window.location.href='index.php'">&#x2B05 Voltar</button> -->
        <!-- <button onclick="javascript:window.history.go(-1)">&#x2B05 Voltar</button> -->
        <button onclick="javascript:window.history.back()">&#x2B05 Voltar</button>
    </main>

</body>

</html>