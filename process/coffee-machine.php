<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

// Récupérer les données JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

error_log(print_r($data, true));
