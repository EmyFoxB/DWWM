<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="exemple1.php"> Exemple1</a></li>
                <li><a href="exemple2.php">Exemple2</a></li>
                <li><a href="formulaire.php">Formulaire</a></li>
            </ul>
        </nav>
    </header>

    <h1><?= $titre ?></h1>
    <?= $content ?>

</body>
</html>