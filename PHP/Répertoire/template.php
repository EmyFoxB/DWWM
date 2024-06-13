<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Répertoire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="create.php">Ajouter un utilisateur</a></li>
            <li><a href="read.php">Voir les utilisateurs</a></li>
            <li><a href="update.php">Modifier un utilisateur</a></li>
            <li><a href="delete.php">Supprimer un utilisateur</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Déconnexion</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </nav>
    </header>
    <h1><?= $titre ?></h1>
    <?= $content ?>
</body>

</html>