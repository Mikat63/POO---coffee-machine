<?php
require_once "../utils/autoloader.php";
session_start();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

/** @var CoffeeMachine $machine  */
$machine = $_SESSION['machine'];

$machine->setIgnition();
$message = $machine->getIgnition() ? "Allumage de votre machine " . $machine->getBrand() . ", veuillez insérer une dosette" : "Votre machine " . $machine->getBrand() . " Va s'éteindre";

echo json_encode([
    'status' => $machine->getIgnition(),
    'message' => $message,
]);
