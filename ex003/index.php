<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>

</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x - hexadecimal
    // 0b - binario
    // 0 - octal

    $a = 0xFF;
    $b = 0b1111;
    $c = 010;
    $d = 'asdasd';

    var_dump($a);
    print '<br>';

    var_dump($b);
    print '<br>';

    var_dump($c);
    print '<br>';

    var_dump($d);
    print '<br>';

    $num = 3e2; //3X10² (float)
    var_dump($num);
    print '<br>';

    $num = (int) 3e2; //3X10² (integer)
    var_dump($num);
    print '<br>';

    $num = "950";
    var_dump($num);
    print '<br>';

    $num = (float) "950";
    var_dump($num);
    print '<br>';

    $booleano = true;
    var_dump($booleano);
    print "valor: $booleano ";
    print '<br>';

    $vet = [0, 1, 2, 3, 4, 5, 6, true, "asdfd", 3e2, 0x20];
    var_dump($vet);
    print '<br>';

    class Pessoa
    {
        private string $nome = "vinicius";
    }

    $p = new Pessoa();
    var_dump($p);
    print '<br>';


    $p = "asdsadf";
    var_dump($p);
    print '<br>';

    $nome = "Vinicius";
    $sobrenome = "Pedrinho ";

    print '$nome $sobrenome <br>';
    print "$nome $sobrenome <br>";

    const ESTADO = "SP";
    print "Moro em ESTADO <br>";
    print 'Moro em ESTADO <br>';
    print "Moro em " . ESTADO . "<br>";

    print "$nome \"Vinaooo\" $sobrenome <br>";

    //heredoc
    echo <<< FRASE
        Me chamo $nome $sobrenome<br>
        Estou fazendo um curso de PHP<br>
        Moro no estado de . ESTADO<br>
    FRASE;

    //nowdoc
    echo <<< 'FRASE2'
        Me chamo $nome $sobrenome<br>
        Estou fazendo um curso de PHP<br>
        Moro no estado de . ESTADO<br>
    FRASE2;

    ?>
</body>

</html>