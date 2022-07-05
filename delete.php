<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// 1. J'appelle pdo
include('pdo.php');

// 2. Je récupère les données POST de mon formulaire
$id = $_GET['id'];

// 3. j'insère ces données en base
// Ecriture de la requête INSERT INTO
$sql = "DELETE FROM argonautes WHERE ID = :id";

// Execution de la requête d'insertion
$pdoStatement = $newBD->prepare($sql);
$pdoStatement->bindValue(':id', $id, PDO::PARAM_STR);
$pdoStatement->execute();

$rowCount = $pdoStatement->rowCount();

if ($rowCount > 0) {
    $msg = 'La suppression a été effectuée';
    $return = [
        'msg' => $msg,
        'status' => 1
    ];
    $json = json_encode($return);
    echo $json;
} else {
    $msg = 'Erreur lors de la suppression';
    $return = [
        'msg' => $msg,
        'status' => 0
    ];
    $json = json_encode($return);
    echo $json;
}
