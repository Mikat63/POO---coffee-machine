<?php
require_once "../utils/autoloader.php";

$delonghi = new CoffeeMachine("Delonghi")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Petite exercice sur la manipulation d'une machine à café en orienté objet">
    <meta name="author" content="Mickael">
    <title>POO - Machine à café</title>


    <!-- script and css -->
    <link rel="stylesheet" href="../style.css">
    <script defer src="../assets/scripts/coffeeMachine.js"></script>

</head>

<body>
    <header>
        <h1 class="title">Une petite pause café ?!</h1>
    </header>

    <main class="main-container">
        <!-- coffeeMachine  -->
        <div class="container">
            <div class="coffee-header">
                <div id="coffee-force" tabindex="0" aria-label="augmenter la force du café" class="coffee-header__buttons coffee-header__button-one"></div>
                <div id="coffee-type" tabindex="0" aria-label="Choisir café allongé, serré ou expresso" class="coffee-header__buttons coffee-header__button-two"></div>
                <div id="on-off-machine" tabindex="0" aria-label="Allumer ou éteindre la machine" class="coffee-header__display"></div>
                <div id="machine-status" tabindex="0" aria-label="État du la machine" class="coffee-header__details"></div>
            </div>
            <div class="coffee-medium">
                <div class="coffe-medium__exit"></div>
                <div id="screen-message" class="coffee-medium__arm"></div>
                <div class="coffee-medium__liquid coffee" hidden></div>
                <div class="coffee-medium__smoke coffee-medium__smoke-one coffee" hidden></div>
                <div class="coffee-medium__smoke coffee-medium__smoke-two coffee" hidden></div>
                <div class="coffee-medium__smoke coffee-medium__smoke-three coffee" hidden></div>
                <div class="coffee-medium__smoke coffee-medium__smoke-for coffee" hidden></div>
                <div tabindex="0" aria-label="Votre tasse" class="coffee-medium__cup coffee"></div>
            </div>
            <div class="coffee-footer"></div>
        </div>


        <img id="coffee-pod" tabindex="0" src="../assets/img/coffee-pod.webp" alt="Capsule de café">

    </main>
</body>

</html>