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
    <h1>Create</h1>
    <?php
    $nome = "António";
    $email = "antonio@teste.pt";
    $data = [
        'nome' => $nome,
        'email' => $email,
    ];
    $sql = "INSERT INTO alunos (Nome, Email) VALUES (:nome, :email)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($data);
    ?>
</body>
</html>