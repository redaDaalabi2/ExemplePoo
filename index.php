<?php
    require 'CompteBancaire.php';
    require 'CompteEpargne.php';

    $compteReda = new CompteBancaire("DH", 150, "Reda");
    echo $compteReda . '<br />';
    $compteReda->crediter(100);
    echo $compteReda . '<br />';

    $compteJawad = new CompteEpargne("DH", 200, "Jawad", 0.05);
    echo $compteJawad . '<br />';
    echo 'Interets pour ce compte : ' . $compteJawad->calculerInterets() . ' ' . $compteJawad->getDevise() . '<br />';
    $compteJawad->calculerInterets(true);
    echo $compteJawad . '<br />';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banke</title>
</head>
<body>
    <style>
        body{
            display: flex;
            justify-content: center;
            padding-top: 60px;
            font-weight: bold;
            font-size: xx-large;
        }
    </style>
</body>
</html>