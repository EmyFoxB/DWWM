<?php
$content = ob_get_clean();
$titre = "VOLLEY BALL";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="baccueil">
    <h1><?= $titre ?></h1>
    <p class="paccueil">JEUX OLYMPIQUES 2024</p>
</body>
</html>
