<?php

$dsn = "mysql:host=localhost;dbname=PW_GONCALO";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);

if (isset($_POST['registoProduto'])) {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
 
    $data = [
       'nome' => $nome,
       'descricao' => $descricao,
       'preco' => $preco,
    ];
 
    $sql = "INSERT INTO produtos (idProduto, nome, descricao, preco) VALUES ('',:nome,:descricao,:preco)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
 
}

if (isset($_GET["idProduto"])) {

    $stm = $pdo->query("SELECT * FROM produtos WHERE idProduto = " . $_GET["idProduto"]);
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    $produto = $rows[0];
 
 } else {
    $produto["idProduto"] = "";
    $produto["nome"] = "";
    $produto["descricao"] = "";
    $produto["preco"] = "";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos.css">
    <title>Teste</title>
</head>
<body>    
    <div id="grid">
        <div id="header">
            <a style="text-align:center">Teste de PW</a>
            <img src="ESGTS.jpg" width="500px" style="text-align: center;" ></div>
        <div class="col-md-3 text-right">
            <select id="tema" name="tema">
                <option value="escuro">Escuro</option>
                <option value="claro" selected>Claro</option>
            </select>
        </div>
        <div id="principal">
            <div class="col-md-9">
                <table class="table">
                    <tr>
                        <th scope="col">idProduto</th>
                        <th scope="col">nome</th>
                        <th scope="col">descricao</th>
                        <th scope="col">preco</th>
                        <th scope="col">*</th>
                    </tr>
                    <tbody class="table-group-divider">
                    <?php
                    foreach ($rows as $row) {
                        printf("<tr><td>{$row['idProduto']}</td>
                        <td>{$row['nome']}</td>
                        <td>{$row['descricao']}</td>
                        <td>{$row['preco']}</td>
                        <td><a class='editarEliminar' href='index.php?idProduto={$row['idProduto']}'>Editar</a> | <a class='editarEliminar' href='index.php?idDelete={$row['idProduto']}'>Eliminar</a></td><br>");
                    }
                    ?>
               </tbody>
                </table>
            </div>
        </div>
        <div id="footer"></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>