<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>Resultado do processamento </h1>
    </header>
    <main>
        <?php
        //var_dump($_REQUEST); //junção de get, post e cookies
        $nome = $_GET['nome'] ?? "sem nome";
        $sobrenome = $_GET['sobrenome'] ?? "sem sobrenome";
        echo "O nome é $nome $sobrenome";
        ?>
        <p><a href="javascript:history.back()">Voltar</a></p>
    </main>

</body>

</html>