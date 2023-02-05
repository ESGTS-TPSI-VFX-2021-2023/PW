<?php

$dsn = "mysql:host=localhost;dbname=pw_joaosouza";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);
if (isset($_POST["ButaoAdicionar"])){

  
    if(isset($_COOKIE["Cor"])) {
        setcookie("Cor", "", time() + (86400 * 30), "/");
        setcookie("Cor", "White", time() + (86400 * 30), "/");
    } else {
        setcookie("Cor", "", time() + (86400 * 30), "/");
        setcookie("Cor", "white", time() + (86400 * 30), "/");
    }



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
    <link rel="stylesheet" href="css.css">

<style>
    body{
    background-color:<?. $_COOKIE["Cor"]?>;
}
    </style>
    <title>Document</title>
</head>
<body>    
<table>
  <tr id="header">
    <td><img src="ESGTS.jpg"width="500" ></td>
    <td class ="textoH">
        Teste PW
         
    </td>
  </tr>
  <tr>
  <td id="lado1"><?php 
        
        $sql = "SELECT * FROM produto";

        $result = $pdo->prepare($sql);
        $result -> execute();
        $results = $result -> fetchAll();

        echo "<div class='table-responsive'>
              <table class='table table-striped table-sm bg-white' border='1'>
              <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>descrição</th>
              <th>Preço</th>
            
              </tr>";

        foreach($results as $row)
            {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['Nome'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo "</tr>";
            }
            echo "</table>
                  </div>";

      ?></td>
    <td id="lado2">
    <form method="POST" >

<button type="submit" name="ButaoAdicionar">mudar Cor</button>
</form>
    </td>
  </tr>
  <tr>
    <td>
        Rodape
        </td>
        </tr>
</table>

    <!-- Bootstrap core JS-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>