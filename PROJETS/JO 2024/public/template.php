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
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Projet JO 2024</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">ACCUEIL</a></li>
                <li><a href="/public/equipes.php">ÉQUIPES</a></li>
                <li><a href="/public/matchs.php">MATCHS</a></li>
                <li><a href="/public/histoire.php">HISTOIRE & RÈGLES</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="/public/logout.php">DÉCONNEXION</a></li>
                <?php else: ?>
                    <li><a href="/public/login.php">CONNEXION/INSCRIPTION</a></li>
                <?php endif; ?>
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