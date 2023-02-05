<?php 
$dsn = "mysql:host=localhost;dbname=pw";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);

if (isset($_GET["idAluno"])){

    $stm = $pdo->query("SELECT * FROM alunos WHERE idAluno = " . $_GET["idAluno"]);
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

    $aluno = $rows[0];

}

if (isset($_POST["btnGravar"])){

    $data = [
        'idAluno' => $_POST["txtIdAluno"],
        'nome' => $_POST["txtNome"],
        'email' => $_POST["txtEmail"],
    ];

    $sql = "UPDATE alunos SET Nome = :nome, Email = :email WHERE idAluno = :idAluno";
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

        <input type="hidden" name="txtIdAluno" value="<?= $aluno["idAluno"] ?>" />

        <input type="text" name="txtNome" value="<?= $aluno["Nome"] ?>" />

        <input type="text" name="txtEmail" value="<?php echo $aluno["Email"]; ?>" />

        <button type="submit" name="btnGravar">Gravar</button>

    </form>

</body>
</html>