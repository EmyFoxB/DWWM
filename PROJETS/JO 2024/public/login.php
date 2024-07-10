<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="div-form">
        <p>CONNEXION</p>

        <form action="" method="POST">
            <input type="email" name="email" id="">
            <br>
            <input type="password">
            <input type="submit" value="Login">
            <a href="">Identifiant/Mot de passe oublie</a>
        </form>

        <p>Pas encore de compte ? <a href="">Inscrivez-vous !</a></p>
    </div>
</body>

<?php
$content = ob_get_clean();
$titre = "Identification Espace Admin";
require "template.php";
?>
</html>