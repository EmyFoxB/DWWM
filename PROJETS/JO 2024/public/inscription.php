<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>INSCRIPTION</title>
</head>

<body>
    <div class="div-inscription">
        <p class="p-inscription">INSCRIPTION</p>

        <form class="inscription-form" action="" method="POST">

            <input type="text" name="prenom" value="Prénom" required><br>

            <input type="email" name="email" value="Email" required><br>

            <input type="password" name="password" value="Mot de passe" required><br>
            <label for="role">Rôle:</label>
            <select name="role" required>
                <option value="non-admin">Non-Admin</option>
            </select><br><br>
            <input class="btn-inscription" type="submit" value="S'inscrire">
            <br>
        </form>
            <p class="p-compte">Déjà inscrit ? <a href="/public/login.php">Connectez-vous !</a></p>
        </div>
</body>

<?php
$content = ob_get_clean();
$titre = "INSCRIPTION";
require "template.php";
?>

</html>