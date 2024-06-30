<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projet JO 2024</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
                <li><a href="equipes.php">EQUIPES</a></li>
                <li><a href="matchs.php">MATCHS</a></li>
                <li><a href="histoire.php">HISTOIRE & RÈGLES</a></li>
                <li><a href="login.php">CONNEXION</a></li>
            </ul>
        </nav>
    </header>

    <h1><?= $titre ?></h1>
    <?= $content ?>

    <footer>
        <p>Copyright © 2024 - Tous droits réservés</p>
    </footer>
</body>
</html>