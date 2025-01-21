<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "./vendor/autoload.php";

$head = includeAndReplaceContents('./includes/head.php', [
    'pageTitle' = "Kyle Ross Beasley",
]);

?>

<!DOCTYPE html>
<html lang="en">
    <?php echo $head ?>

    <body>
        <h1>Kyle Ross Beasley</h1>
        <p>Checking on updates</p>
    </body>
</html>

