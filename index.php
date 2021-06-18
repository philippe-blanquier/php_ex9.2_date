<?php
    declare(strict_types = 1);
    /*  Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).
    */
    $currentDate= date('d-m-y');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.2 Date</title>
    </head>
    <body >
        <p>Date courrant formatée comme 'jj-mm-aa': <?= $currentDate ?></p>
    </body>
</html>