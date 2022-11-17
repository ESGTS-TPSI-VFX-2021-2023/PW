<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Formulário para introduzir o nome [GET] -->
    <form>
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit">
    </form>

    <?php 
    
    if ( isset($_GET['name']) ){

        $nome = $_GET['name'];
        echo "<h1>Olá $nome </h1>";

    }
    

    ?>
    
</body>
</html>