<?php
session_start();

// si le role n'est pas égale a admin tu le ramene vers index.php

if($_SESSION['role'] !== 'admin'){
    header("location: index.php");    
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
    <h2>Bienvenu Admin</h2>

    <p>ici vous pourrez <a href="modifier.php">modifier</a> ou <a href="#">céer des utilisateurs</a></p>
</body>
</html>