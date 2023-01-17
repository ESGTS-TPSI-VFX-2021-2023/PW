<?php 
$dsn = "mysql:host=localhost;dbname=pw";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);

if (isset($_POST["btnGravar"])){

    $data = [
        'nome' => $_POST["txtNome"],
        'email' => $_POST["txtEmail"],
    ];

    $sql = "INSERT INTO alunos(nome, email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

    header("Location: list.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>

    <form method="POST" >

        <input type="text" name="txtNome" />

        <input type="text" name="txtEmail" />

        <button type="submit" name="btnGravar">Gravar</button>

    </form>

</body>
</html>