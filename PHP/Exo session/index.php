<?php

session_start();

if(isset($_SESSION['identifiant'])){
    echo "L'utilisateur est connecté : " . $_SESSION['identifiant'], "<br>";
    echo "Bonjour, bienvenue " . $_SESSION['identifiant'], "<br>";
}else{
    echo "L'utilisateur n'est pas connecté.", "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="login.php">Connexion</a>
    <a href="logout.php">Déconnexion</a>
</body>
</html>