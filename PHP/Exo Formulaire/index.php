<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $nom = "";
    if (isset($_POST['nom'])) {
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    $email = "";
    if (isset($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    }

    if ($email) {
        echo "<p> L'adresse e-mail saisie est : . $email</p>";
    }
    else {
        echo "<p> L'adresse e-mail est invalide. </p>";
    }

    $password = "";
    $confpass = "";
    if (isset($_POST['password'])) {
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (isset($_POST['confpass'])) {
        $confpass = filter_input(INPUT_POST, 'confpass', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if ($password != $confpass) {
        echo "Les mots de passe sont différents.";
    }

    $ddn = "";
    if (isset($_POST['ddn'])) {
        $ddn = filter_input(INPUT_POST, 'ddn', FILTER_VALIDATE_INT);
    }

    ?>
    <div>
        <form action="index.php" method="POST">


            <label for="nom">Nom complet :</label><br>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom) ?>"><br><br>

            <label for="email">Adresse e-mail :</label><br>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>"><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password" value="<?= htmlspecialchars($password) ?>"><br><br>

            <label for="confpass">Confirmation du mot de passe :</label><br>
            <input type="password" name="confpass" id="confpass"><br><br>

            <label for="ddn">Date de naissance :</label><br>
            <input type="date" name="ddn" id="ddn"><br><br>

            <p>Sexe :</p>
            <label for="option1">Masculin</label>
            <input type="radio" name="option" id="option1" value="Masculin">
            <label for="option2">Féminin</label>
            <input type="radio" name="option" id="option2" value="Feminin"><br><br>


            <input type="submit" class="insub" value="Envoyer">
        </form>
    </div>


</body>

</html>