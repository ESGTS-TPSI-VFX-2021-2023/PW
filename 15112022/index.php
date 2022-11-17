<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

    $numero1 = 10;
    $numero2 = 20;

    // Operadores aritméticos
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    // concatenação
    echo "<b>Soma</b> = " . ($numero1 + $numero2) . "<br>";
    echo "<b>Subtração</b> = " . ($numero1 - $numero2) . "<br>";
    echo "<b>Multiplicação</b> = " . ($numero1 * $numero2) . "<br>";
    echo "<b>Divisão</b> = " . ($numero1 / $numero2) . "<br>";

    echo "<p>Soma = $soma | Subtração = $subtracao | Multiplicação = $multiplicacao | Divisão = $divisao</p>";

    // condições
    if ($numero1 > $numero2) {
        echo "O número 1 é maior que o número 2";
    } else {
        echo "O número 2 é maior que o número 1";
    }

    // repeticoes for
    for ($i = 0; $i < 10; $i++) {
        echo "<p>Repetição $i</p>";
    }

    // repeticoes while
    $i = 0;
    while ($i < 10) {
        echo "<p>Repetição $i</p>";
        $i++;
    }

    // switch
    $dia = 1;
    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
            break;
        case 3:
            echo "Terça";
            break;
        case 4:
            echo "Quarta";
            break;
        case 5:
            echo "Quinta";
            break;
        case 6:
            echo "Sexta";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
            break;
    }

    ?>

</body>
</html>