<?php
require_once "../utils/autoloader.php";

$delonghi = new CoffeeMachine("Delonghi")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Machine à café</title>

    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1 class="title">Une petite pause café ?!</h1>

    <p><?= $delonghi->Ignition(false) ?></p>
    <p><?= $delonghi->insertAPod(false) ?></p>
</body>

</html>