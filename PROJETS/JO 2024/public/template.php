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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:opsz@6..96&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Projet JO 2024</title>
</head>
<body class="body-template">
    <header class="header-template">
        <nav class="nav-template">
            <ul>
                <li><a href="../index.php">ACCUEIL</a></li>
                <li><a href="/public/equipes.php">EQUIPES</a></li>
                <li><a href="/public/matchs.php">MATCHS</a></li>
                <li><a href="/public/histoire.php">HISTOIRE & RÈGLES</a></li>
                <li><a href="/public/login.php">CONNEXION/INSCRIPTION</a></li>
            </ul>
        </nav>
        <h1><?= $titre ?></h1>
    </header>

    <?= $content ?>

    <footer>
        <p>Copyright © 2024 - Tous droits réservés</p>
    </footer>
</body>
</html>