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
    <link rel="stylesheet" href="/public/style.css">
    <title>ACCUEIL</title>
</head>

<body>
    <nav>
        <div class="div-logo">
            <a href="../index.php">
                <img class="img-logo" src="/public/Assets/Images/Logo/Logo1.png" alt="Logo de JPF Agencement">
            </a>
        </div>
        <ul>
            <li class="li-nav"><a class="a-nav" href="../index.php">ACCUEIL</a></li>
            <li class="li-nav"><a class="a-nav" href="/public/quiSommesNous.php">QUI SOMMES-NOUS ?</a></li>
            <li class="li-nav"><a class="a-nav" href="/public/prestations.php">NOS PRESTATIONS</a></li>
            <li class="li-nav"><a class="a-nav" href="/public/realisations.php">NOS RÉALISATIONS</a></li>
            <li class="li-nav"><a class="a-nav" href="/public/contact.php">CONTACT</a></li>
            <li class="li-nav"><a class="a-nav" href="">LOGIN</a></li>
        </ul>
    </nav>
    <img class="img-gradient" src="/public/Assets/Images/Logo/Line 13.png" alt="">

    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php'): ?>

        <header>
            <img class="img-header" src="/public/Assets/Images/Logo/Logo6.png" alt="">
        </header>
    <?php endif; ?>

    <h1><?= $titre ?></h1>
    <?= $content ?>

    <img class="img-gradient" src="/public/Assets/Images/Logo/Line 13.png" alt="">
    <footer>
        <div>
            <span>© J.P F Agencement - 2024</span>
        </div>
        <div>
            <span>Suivez-nous !</span>
            <a href="/">
                <img src="/public/Assets/Icons/instagram.png" alt="">
            </a>
            <a href="/">
                <img src="/public/Assets/Icons/facebook.png" alt="">
            </a>
        </div>
        <div>
            <a href="/">Mentions légales</a>
            <a href="/">Conditions générales d'utilisation</a>
            <a href="/">Politique de cookies</a>
        </div>
    </footer>
</body>

</html>