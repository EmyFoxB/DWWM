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
        <p class="p-login">CONNEXION</p>

        <form class="login-form" action="" method="POST">
            <input type="email" name="email" value="Email" id="">
            <br>
            <input type="password" value="Mot de passe">
            <br>
            <input class="btn-login" type="submit" value="Se connecter">
        </form>

        <p class="p-compte">Pas encore de compte ? <a href="/public/inscription.php">Inscrivez-vous !</a></p>
    </div>
</body>

<?php
$content = ob_get_clean();
$titre = "CONNEXION";
require "template.php";
?>
</html>