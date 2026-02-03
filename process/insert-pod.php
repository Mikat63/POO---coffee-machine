<?php
require_once "../utils/autoloader.php";
session_start();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

/** @var CoffeeMachine $pod  */
$pod = $_SESSION['machine'];

$pod->setInsertAPod();

$message = $pod->getInsertAPod() ? "Café en cours de préparation" : "Insérez une dosette";


echo json_encode([
    "status" => $pod->getInsertAPod(),
    'message' => $message
]);
