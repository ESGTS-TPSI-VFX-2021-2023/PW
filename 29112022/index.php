<?php

$cookie_name = "user";
$cookie_value = "Rafael Silva";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// Delete coookie
setcookie($cookie_name, "", time() - 3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <?php 

        echo "O valor é " . $_COOKIE[$cookie_name];

    ?>
</body>
</html>