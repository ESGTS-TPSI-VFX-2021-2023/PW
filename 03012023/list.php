<?php

$dsn = "mysql:host=localhost;dbname=pw";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO</title>
</head>
<body>

    <h1>Listagem</h1>
    
    <?php
    $stm = $pdo->query("SELECT * FROM alunos");

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach($rows as $row) {

        printf("{$row['idAluno']} {$row['Nome']} {$row['Email']}<br>");
    }
    ?>

</body>
</html>