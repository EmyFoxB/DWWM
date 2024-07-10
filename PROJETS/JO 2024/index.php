<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:opsz@6..96&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <title>ACCUEIL</title>
</head>

<body background="./public/Assets/Images/bg-accueil.png">

    <div class="accueil">
        <h2>VOLLEY BALL</h2>
        <p class="p-accueil">JEUX OLYMPIQUES 2024</p>
    </div>


</body>

</html>

<?php
$content = ob_get_clean();
$titre = "ACCUEIL";
require "./public/template.php";
?>