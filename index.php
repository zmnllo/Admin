<?php
session_start();
include 'bdd.php';
$admin ="";
$connexion ="";
$deconnexion= "";
$nutrution = "";
if(isset($_SESSION['pseudo'])){
    $bienvenue = 'Bonjour ' .$_SESSION['pseudo'];
    $deconnexion = "<li><a href='deconnexion.php'>Se déconnecter</a></li>";
    $nutrution = "<li><a href='nut.php'>Nutrition</a></li>";
    if($_SESSION['role'] === 'admin'){
    $admin = "<li><a href='admin.php'>Admin</a></li>";
    
    }
}else{
    $connexion = "<li><a href='connexion.php'>Se connecter</a></li>";
    $salut = 'Salut';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <?php echo $admin;?>
            <?php echo $nutrution;?>
            <?php echo $deconnexion;?>
            <?php echo $connexion;?>
            <li><a href="contact.php">Contact</a></li>

            
        </ul>
    </nav>
   <h1><?php if(isset($_SESSION['pseudo'])){echo $bienvenue;}else{ echo $salut;} ?></h1>
</body>
</html>
<style>
    body{
        margin: 0px;
        padding: 0px;
    }
    nav ul{
        display:flex;
        justify-content: space-around;
        background-color: blue;
        padding: 15px;
        margin: 0px;
    }
    li{
        list-style: none;
        font-size: 20px;
    }
    a{
        color: white;
        text-decoration: none;
    }
    h1{
        text-align: center;
    }
</style>
