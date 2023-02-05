<?php
$theme ="theme";
$theme_value = "";
setcookie($theme, $theme_value, time() + (86400 * 30), "/");


$dsn = "mysql:host=localhost;dbname=pw_[danieltalixa]";
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

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos.css">

    <title>Document</title>
</head>
<body class= " sidebar-mini <?php if(isset($_COOKIE[$theme])){echo  $_COOKIE[$theme];}?>">    

<div class="wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ESGTS</h1>
                        <img src="ESGTS.jpg" id="headerimage">
                    </div>
                    </div>
                </div>
            </div>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item">
                        <p>Tema da Página
                        
                        <form method="POST">
                    
                        <button type="submit" class="btn btn-primary btn-block" name="setThemeLight">Light Mode</button>

                        </form>

                        <form method= "POST">


                        <button type="submit" class="btn btn-primary btn-block" name="setThemeDark">Dark Mode</button>
                    
                        </form>
                    
                    
                    <?php 

                        if(isset($_POST["setThemeDark"])){
                            $theme = "theme";
                            $theme_value ="pagebodydark";
                            setcookie($theme, $theme_value, time() + (86400 * 30), "/"); 
                            
                            header("Location: index.php");

                        }

                        if(isset($_POST["setThemeLight"])){
                            $theme = "theme";
                            $theme_value ="pagebodylight";
                            setcookie($theme, $theme_value, time() + (86400 * 30), "/"); 
                            
                            header("Location: index.php");

                        }

                        ?> 
                        </p>
                        </a>
                    </li>
                    </ul>
                </nav>
                </div>
            </aside>
            
            <div id ="contentgrid">
                <div id="content">
                <?php
                $stm = $pdo->query("SELECT * FROM produtos");
                $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row) {
                printf(" 
                <table> 
                <tbody> 
                <tr> <th>Nome = </th> <td>{$row['nome']}</td> </tr> 
                <tr> <th>Descrição = </th> <td>{$row['descricao']}</td> </tr> 
                <tr> <th>Preço = </th> <td>{$row['preco']} </td> </tr> 
                </tbody> 
                </table> "); }
                ?>  
                </div>
            </div>


    <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href= >ESGTS.pt</a>.</strong>
    Todos os direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
    </footer>       

</div>
    <!-- Bootstrap core JS-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>