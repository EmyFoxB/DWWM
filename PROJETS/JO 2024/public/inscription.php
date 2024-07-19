<?php
ob_start();
require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';

$auth = new Auth();
$auth->startSession();

if (isset($_POST['prenom'], $_POST['email'], $_POST['password'])) {
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();

    $message = $user->createUser($prenom, $email, $password);
    $_SESSION['successMessage'] = $message;
    header("Location:login.php");
    exit();

} else {
    echo "Tous les champs doivent être remplis.";
}

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

            <input type="text" name="prenom" placeholder="Prénom" required><br>

            <input type="email" name="email" placeholder="Email" required><br>

            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <br><br>
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