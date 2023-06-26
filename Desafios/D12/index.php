<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção de valores </title>
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <main>
        <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="segundos">Número de segundos:</label>
            <input type="text" name="segundos" id="segundos" required value="<?= $_POST['segundos'] ?? 0 ?>"><br><br>

            <input type="submit" name="submit" value="Converter"><br><br>

            <?php
            if (isset($_POST['submit'])) {
                $segundos = $_POST['segundos'];

                $anos = floor($segundos / (31536000));
                $segundos -= $anos * (31536000);

                $meses = floor($segundos / (2592000));
                $segundos -= $meses * (2592000);

                $semana = floor($segundos / 604800);
                $segundos -= $semana * (604800);

                $dias = floor($segundos / 86400);
                $segundos -= $dias * (86400);

                $horas = floor($segundos / 3600);
                $segundos -= $horas * (3_600);

                $minutos = floor($segundos / 60);
                $segundos -= $minutos * 60;

                echo "Resultado:<br>";
                echo $anos . " ano(s)<br>";
                echo $meses . " mes(es)<br>";
                echo $semana . " semana(s)<br>";
                echo $dias . " dia(s)<br>";
                echo $horas . " hora(s)<br>";
                echo $minutos . " minuto(s)<br>";
                echo $segundos . " segundo(s)";
            }
            ?>
        </form>
    </main>
</body>

</html>