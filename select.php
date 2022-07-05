<?php

// version API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include('pdo.php');

// script appel BDD
$sql = "SELECT * 
FROM `argonautes` 
ORDER BY name";

$pdoStatement = $newBD->query($sql);
$results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($results);

echo $json;
