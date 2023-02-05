<?php
$dsn = "mysql:host=localhost;dbname=pw_hugo";
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
    <link rel="stylesheet" href="teste.css">

    <title>Teste</title>
</head>

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <div class="flex-shrink-0 dropdown">
            <img src="ESGTS.jpg" alt="mdo" width="150" height="90">
        </div>

      <h2 id="titulo">Frequencia de PW</h2>
       
        </div>
    </div>
</header>

<body id="bodyClaro">   
    
<div class="container-fluid">
    <div class="row">
      <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div id="sidebarMenu" class="position-sticky pt-3 sidebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span id="textoSidebarClaro">Tema da Página</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a id="textoSidebarClaro" class="nav-link" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Tema Claro
              </a>
            </li>
            <li class="nav-item">
              <a id="textoSidebarClaro" class="nav-link" href="indexEscuro.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Tema Escuro
              </a>
            </li>
          </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Produtos</h1>
        </div>

        <div class="table-responsive">
        <?php 
        
        $sql = "SELECT * FROM produtos";

        $result = $pdo->prepare($sql);
        $result -> execute();
        $results = $result -> fetchAll();

        echo "<div id='textoClaro' class='table-responsive'>
              <table class='table table-striped table-sm bg-white' border='1'>
              <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Preço</th>
              </tr>";

        foreach($results as $row)
            {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo "</tr>";
            }
            echo "</table>
                  </div>";

      ?>
          </div>

        </div>

       

        <div id="footerClaro">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="30"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span id="textoClaro" class="mb-3 mb-md-0">Frequencia</span>
          </div>
        </footer>
      </div>        

    <!-- Bootstrap core JS-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>