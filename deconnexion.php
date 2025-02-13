<?php
session_start();
session_destroy(); // Détruit la session de l'utilisateur
header("Location: index.php"); // Redirige vers la connexion
exit();
?>
