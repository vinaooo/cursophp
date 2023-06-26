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
        // Verifica se o formulário foi enviado (botão clicado)
        if (isset($_POST['gerar_numero'])) {
            // Gera um número aleatório de 0 a 100

            //$numero_aleatorio = rand(0, 100); //Linear congrential generation - 1951
            $numero_aleatorio = mt_rand(0, 100); // mt_rand(min, max) -> Mersenne Twister
            //$numero_aleatorio = random_int(0, 100); //criptograficamente seguro 
            echo "Número aleatório gerado: " . $numero_aleatorio;
        }
        ?>


        <p><a href="javascript:history.back()">Voltar</a></p>
    </main>

</body>

</html>