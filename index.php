<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "./vendor/autoload.php";

$pageTitle = "Hello World";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title><?php echo $pageTitle ?></title>
        <link rel="stylesheet" href="./src/styles/main.css">
    </head>
    <body>
        <h1>Kyle Ross Beasley</h1>
        <p>Checking on updates</p>
    </body>
</html>

