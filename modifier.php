<?php
session_start();
require_once('bdd.php');

if($_SESSION['role'] !== 'admin'){
    header("location: index.php");
}
if(isset($_SESSION["pseudo"])){
    
    if(isset($_POST['ok'])){
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['pass'];
    

    $sql = "UPDATE users SET pseudo = ?, password = ? WHERE pseudo = ?";
    $stmt = $pdo->prepare($sql);
    $oldPseudo = $_SESSION['pseudo'];
    
    $stmt->execute([$pseudo, $pass, $oldPseudo]);

    
    $_SESSION['pseudo'] = $pseudo;


    header('Location: index.php');
  exit();
}
}else{
    header ("Location: ../php/formulaire.php");
}




?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/modifiez/modifiez.css">
</head>
<body>
    <form action="" method="post">
        <h3>Voulez vous vraiment modifiez vos information ?</h3>
        <br>
        <br>
        <label for="pseudo">Votre pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" value = <?php echo $_SESSION['pseudo'] ?>>
        <br>
        <br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="pass" required <?php echo $_SESSION['password'] ?>>
        <br>
        <br>
        <input type="submit" id="button" name="ok" value="modifier">
        <a href="index.php">retournez en arriere</a>
    </form>
</body>
</html>
 