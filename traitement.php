<?php
include 'bdd.php';

try{

    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $requet = $pdo->prepare("INSERT INTO users (pseudo, email, password, role) VALUES (:pseudo, :email, :password, :role)");

    $requet->execute([
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => $password,
        'role' => 'user'
    ]);

    header("location: connexion.php");
}
catch (PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}
?>

