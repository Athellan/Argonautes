<?php

// 1.j'appelle pdo
include('pdo.php');

// 2. je récupère les données POST de mon formulaire
$name = $_POST['name'];

// 3. j'insère ces données en base

// Ecriture de la requête INSERT INTO
$sql = "INSERT INTO argonautes (name) VALUES (:name)";

// Execution de la requête d'insertion
$pdoStatement = $newBD->prepare($sql);
$pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
$pdoStatement->execute();

$rowCount = $pdoStatement->rowCount();

if ($rowCount > 0) {
    header('location: http://perso/WCS/');
} else {
    echo 'Une erreur s\'est produite';
}
