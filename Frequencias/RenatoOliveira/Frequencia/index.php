<?php

$dsn = "mysql:host=localhost;dbname=PW_Renato";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);

if (isset($_POST['inserirProdutos'])) {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $data = [
        'nome' => $nome,
        'descricao' => $descricao,
        'preco' => $preco,
    ];

    $sql = "INSERT INTO produtos(nome, descricao, preco) VALUES (:nome,:descricao,:preco)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

}

if (isset($_GET["idProduto"])) {

    $stm = $pdo->query("SELECT * FROM produtos WHERE idProduto = " . $_GET["idProduto"]);
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    $produto = $rows[0];
 
 } else {
   $nome = "";
   $descricao = "";
   $preco = "";
 }

 if (isset($_GET['temaClaro'])){

    $claro =  $_GET['temaClaro'];

    $cookie_name = "temaClaro";
    $cookie_value = $claro ;

    setcookie($cookie_name, $cookie_value , time() + (86400 * 30), "/");
 }

 if (isset($_GET['temaEscuro'])){

    $escuro =  $_GET['temaEscuro'];

    $cookie_name = "temaEscuro";
    $cookie_value = $escuro ;

    setcookie($cookie_name, $cookie_value , time() + (86400 * 30), "/");
 }


    $stm = $pdo->query("SELECT * FROM produtos");
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Renato</title>
</head>
<body>
    <header>
        <h1 class="h2">Produtos</h1>
        <p style="text-align:center;"><img name="img" src="ESGTS.jpg"></p>
    </header>

    <div id="principal" class="container-fluid">
        <div class="row">
            <div id="tabela" class="col-md-9 text-center">
            <table class="table">
            <thead>
                     <tr>
                        <th scope="col">idProduto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                    </tr>   
            </thead>   
            <tbody class="table-group-divider">
            <tr>
                     <?php
                    foreach($rows as $row) {
                    printf("<tr><td>{$row['idProduto']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['descricao']}</td>
                    <td>{$row['preco']}</td></tr><br>");
                }
                ?>
                   </tr>
                </tbody>
             </table>
            </div>
            <div id="user" class="col-md-3 text-center">
            <h2 class="h2">Tema</h2>
            <input disabled class="text-center" value="tema escolhido"><br><br>
            <form action="index.php" method="get" name="temaClaro">
            <input type="hidden" name="claro"/>
            <input type='submit' name="temaClaro" id="claro" value="Claro"></input>
            </form><br>
            <form action="index.php" method="get" name="temaEscuro">
            <input type="hidden" name="escuro"/>
            <input type="submit" name="temaEscuro" id="escuro" value="Escuro"></input>
            </form><br>

            <form action="index.php" method="post" name="inserirProdutos">
            <br><label><b>Produtos</b></label><br>
            <input type="hidden" name="idProduto" value=""/>
            <label>Nome</label><br>
                  <input type="text" required maxlength="" name="nome" id="nome" value=""></br>
                  <label>Descricao</label><br>
                  <input type="text" required maxlength="" name="descricao" id="descricao" value=""></br>
                  <label>Preco</label><br>
                  <input type="text" required maxlength="" name="preco" id="preco" value=""></br>
                  <br><button type='submit' name='inserirProdutos'>Inserir Produto
                     </button>
            </form>
            </div>
        </div>
        </div>

    <footer class="col-md-12 text-center">
        <h6> Realizado por Renato Oliveira </h6>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>