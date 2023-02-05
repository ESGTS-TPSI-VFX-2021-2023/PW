<?php
$dsn = "mysql:host=localhost;dbname=PW_JoseVicente";
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

    <title>Document</title>
</head>
<body>    
    <?php include 'header.php' ?>

  <div class="container-fluid">
    <div class="row">
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

        echo "<div class='table-responsive'>
              <table class='table table-striped table-sm bg-white' border='1'>
              <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>descricao</th>
              <th>Preco</th>
              </tr>";

        foreach($results as $row)
            {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo "</tr>";
            }
            echo "</table>
                  </div>";

      ?>
          </div>
      </main>
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Trocar Tema</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
            <form action="modetoggle" method="post">
              <input type="button" value="DarkMode">
              <input type="button" value="LightMode">
            </form>
            </li>
          </ul>
        </div>
      </nav>  
    </div>
  </div>

    <!-- utilizador pode mudar o tema -->
    <!-- Bootstrap core JS-->
    <?php include 'footer.php' ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>