<?php

$serveurname = "localhost";
$username = "root";
$password = "root";
$dbname = "admin";

try {
    $pdo = new PDO("mysql:host=$serveurname;dbname=$dbname;charset=utf8", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    ]);
} catch (PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}

?>