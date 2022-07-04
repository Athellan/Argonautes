<?php
$host = 'localhost';
$port = 3306;
$dbname = 'BDDJason';
$user = 'root';
$pwd = '';

// je me connecte à ma bdd
try {
    // $newBD = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname . '', $user, $pwd);
    $newBD = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pwd);
    // header('location: http://perso/WCS');
} catch (PDOException $e) {
    // Récupération de l'objet PDO représentant la connexion à la DB
    die('Erreur : ' . $e->getMessage());
}
