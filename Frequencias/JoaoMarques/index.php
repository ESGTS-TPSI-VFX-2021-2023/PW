<?php

setcookie("Escuro", "Tema Escuro", time() + (86400 * 30), "/"); 
setcookie("Claro", "Tema Claro", time() + (86400 * 30), "/"); 

?>

<?php 
$dsn = "mysql:host=localhost;dbname=pw_joaomarques";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);
if (isset($_GET["id"])){

    $stm = $pdo->query("SELECT * FROM produtos WHERE id_produto= " . $_GET["id_produto"]);
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    

    $produto = $rows[0];

}
if (isset($_POST["btnGravar"])){

    $data = [
        'id_produto' => $_POST["txtIdProduto"],
        'nome' => $_POST["txtNome"],
        'descricao' => $_POST["txtEmail"],
        'preco' => $_POST["txtPreco"],
    ];

    $sql = "UPDATE produtos SET nome = :nome, descricao = :descricao WHERE id_produto = :id_produto";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body>    


<div id="grid">
        <div id="sidebar">

            <form>
                <input type="submit" value="Escuro">

                <input type="submit" value="Claro">
            </form>

            

        </div>
        <div id="sidecontent">

            <div id="header"> 
            
            <h1> Produtos </h1> 
            <img src="ESGTS.jpg"> 
          
            </div>
            <div id="content">
                <form method="POST" >

        <input type="hidden" name="txtIdProduto" value="<?= $produto["id_produto"] ?>" />

        <input type="text" name="txtNome" value="<?= $produto["nome"] ?>" />

        <input type="text" name="txtDescricao" value="<?php echo $produto["descricao"]; ?>" />

        <input type="hidden" name="txtPreco" value="<?= $produto["preco"] ?>" />


        <button type="submit" name="btnGravar">Gravar</button>

    </form>
            </div>
            <div id="footer"></div>

        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>