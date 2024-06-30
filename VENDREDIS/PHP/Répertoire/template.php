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
    <title>Répertoire</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="">Ajouter</a></li>
                <li><a href="read.php">Voir les utilisateurs</a></li>
                <li><a href="">Modifier un utilisateur</a></li>
                <li><a href="">Supprimer un utilisateur</a></li>
                <!-- ":" équivalent de "{" -->
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <li><a href="logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="login.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <!-- Afficher titre de chaque page dynamiquement -->
    <h1><?= $titre ?></h1>
    <!-- "=" remplace "echo" -->
    <?= $content ?>
    <footer>
        <p class="foot">Copyright AFCI - 2024</p>
    </footer>
</body>
</html>