<?php 
    
    $numero1 = null;
    $numero2 = null;

    if ( isset($_GET['numero1']) && isset($_GET['numero2']) ){

        // Ler informações em GET
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        //operacoes
        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;

        $msg = "";

        //imprimir resultados
        if ( isset($_GET['btnSomar']) || isset($_GET['btnTudo']) ){
            $msg .= "Soma: $soma <br>";
        }
        
        if ( isset($_GET['btnSubtrair']) || isset($_GET['btnTudo']) ){
            $msg .= "Subtração: $subtracao <br>";
        }
        
        if ( isset($_GET['btnMultiplicar']) || isset($_GET['btnTudo']) ){
            $msg .= "Multiplicação: $multiplicacao <br>";
        }

        if ( isset($_GET['btnDividir']) || isset($_GET['btnTudo']) ){
            $msg .= "Divisão: $divisao <br>";
        }

    }

    if (isset($_GET["btnLimpar"])) {
        $numero1 = null;
        $numero2 = null;
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        <input type="text" name="numero1" value="<?php echo $numero1; ?>" placeholder="Enter first number">

        <input type="text" name="numero2" value="<?= $numero2 ?>" placeholder="Enter second number">

        <input type="submit" name="btnTudo" value="Total"> 
        <input type="submit" name="btnSomar" value="+">
        <input type="submit" name="btnSubtrair" value="-">
        <input type="submit" name="btnMultiplicar" value="*">
        <input type="submit" name="btnDividir" value="/">

        <!-- Botão Limpar -->
        <input type="submit" name="btnLimpar" value="Limpar">

    </form>

    <?php 
    if (isset($msg)){
        echo $msg;
    }
    ?>

</body>
</html>