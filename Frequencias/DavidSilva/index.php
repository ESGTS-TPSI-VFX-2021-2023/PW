<?php
$dsn = "mysql:host=localhost;dbname=PW_davidsilva";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);

$cookie_theme= 'lightTheme';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    



    <div class= "container" <?php
        

     if( $_COOKIE[$cookie_theme]=="lighttheme"){     
        printf("'whiteTheme'"); 
       }  elseif($_COOKIE[$cookie_theme]=="darktheme") printf("darkTheme");
    ?>
    >
        <table>
        <tr>
                <th class="header">                    
                <h3>Produtos David Silva</h3></th>

                <th><img src="resources/ESGTS.jpg" class="headerImg"></th>
          
        <tr>
        </table>


        <table>
            <td class="mainContent">
                
            <?php
            $stm = $pdo->query(("SELECT nome, descricao, preco FROM produtos "));
            $produtos = $stm->fetchAll(PDO::FETCH_ASSOC);

                foreach($produtos as $produto){
                        printf("<div>Incrivel Produto aproveite agora:</div><br>");
                        printf("<div>Preço={$produto['preco']}</div><br>");
                        printf("<div>Descrição={$produto['descricao']}</div><br>");
                        printf("<div>Nome={$produto['nome']}</div><br>");
                }

            
            ?>

            </td>
            <td class="sidebar">            
                <div  >
                <form >

                    <input type="submit" name="darktheme" value="Dark theme" class="button">
                    <input type="submit" name="lighttheme" value="Light theme" class="button">

                <?php 
                   if(isset($_GET['darktheme'])){
                $theme= $_GET['darktheme'];
            setcookie($cookie_theme,$theme, time()+3600 );
        } elseif(isset($_GET['lighttheme'])){            
                $theme= $_GET['lighttheme'];
            setcookie($cookie_theme,$theme, time()+3600 );}
            ?>
                </form>    

            </div></td>
        </tr> 
        </table>

        <?php ?>


</div>

            
     

       






  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>