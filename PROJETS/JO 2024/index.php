<?php
ob_start();
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
    <title>ACCUEIL</title>
</head>
<body>
    <h2>VOLLEY BALL</h2>
    <p class="p-accueil">JEUX OLYMPIQUES 2024</p>
</body>
</html>

<?php
$content = ob_get_clean();
$titre = "";
require "template.php";
?>