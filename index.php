<?php

require_once "./vendor/autoload.php";

$head = includeAndReplaceContents('./includes/head.php', [
    'pageTitle' => "Kyle Ross Beasley",
]);

$header = includeAndReplaceContents('./includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
    <?php echo $head ?>

    <body>
        <?php echo $header ?>

        <h1>Kyle Ross Beasley</h1>
        <p>Checking on updates</p>
    </body>
</html>

