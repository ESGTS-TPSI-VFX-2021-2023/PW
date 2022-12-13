<?php 
// start the session
session_start();

// set session variables
$_SESSION["favcolor"] = "green";

// on click submit
if (isset($_POST["Submit"])){
    // change the session variable
    $_SESSION["favcolor"] = $_POST["favcolor"];
}

// on click reset
if (isset($_POST["Reset"])){
    // unset the session variable
    session_unset();
}

//session_destroy();
//print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SESSIONS</title>
</head>
<body>

    <form method="post">
        <input type="text" name="favcolor" id="favcolor">
        <input type="submit" name="Submit" value="Submit">
        <input type="submit" name="Reset" value="Reset">
    </form>

    <?php if (isset($_SESSION["favcolor"])){ ?>
        <h1>Valor = <?php echo $_SESSION["favcolor"]; ?></h1>
    <?php } ?>
    
    <?php 
    
    if (isset($_SESSION["favcolor"])){
        echo "<h1>Valor = " . $_SESSION["favcolor"] . "</h1>";
    }

    ?>


</body>
</html>