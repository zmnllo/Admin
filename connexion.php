<?php
session_start();
include 'bdd.php';

if(isset($_POST['connecter'])){
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    if($password >= 1){
        $sql = "SELECT id_user, pseudo, email, role, password FROM users WHERE email = :pseudo OR pseudo = :pseudo";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt -> execute();
        $user = $stmt -> fetch();

        if ($user && $password === $user['password']){
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['password'] = $user['id_user'];

            header("location: index.php");
            exit ();
        }else{
            echo '<p style="color:red;">Connexion impossible. Vérifiez vos identifiants.</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo">

        <label for="password">Mot de passe : </label>
        <input type="password" name="password" id="password" placeholder="Mot de passe">

        <input type="submit" value="Me connecter" name="connecter">
        <a href="formulaire.php">S'inscrire</a>

    </form>
</body>

</html>