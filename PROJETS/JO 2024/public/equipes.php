<?php

ob_start();

require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';
require_once '../entities/Equipes.class.php';

$titre = "ÉQUIPES";

session_start();
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$auth = new Auth;

$equipe = new Equipe;
$equipes = $equipe->getAllEquipes();

// echo var_dump($_POST);
if (isset($_POST['pays'], $_POST['entraineur'],  $_FILES['flag'])) {
    $pays = $_POST['pays'];
    $entraineur = $_POST['entraineur'];
    $flag = $_FILES['flag']['name'];

    $equipe = new Equipe($pays, $entraineur, $flag);

    if (isset($_FILES['flag']) && $_FILES['flag']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'Assets/Images/Flags/';
        $uploadFile = $uploadDir . basename($_FILES['flag']['name']);

        if (move_uploaded_file($_FILES['flag']['tmp_name'], $uploadFile)) {
            $image = $uploadFile;
        } else {
            echo "Erreur lors du téléchargement de l'image.";
            exit;
        }
    } else {
        $image = null;
    }

    $message = $equipe->createEquipe($pays, $entraineur, $flag);
    header('Location: equipes.php');
    exit();
    echo $message;
}

else {
    echo "Tous les champs du formulaire doivent être remplis.";
}

if($auth->estAdmin($userId)): ?>

    <form class="form-equipes" method="POST" enctype="multipart/form-data">
        <div class="div-in">
            <label for="pays">Pays :</label>
            <input class="in-equipes" type="text" name="pays" placeholder="Entrez le nom du pays" required>
        </div>
        <div class="div-in">
            <label for="entraineur">Entraîneur :</label>
            <input class="in-equipes" type="text" name="entraineur" placeholder="Entrez le nom de l'entraîneur">
        </div>
        <div class="div-in">
            <label for="flag">Drapeau :</label>
            <input class="in-equipes" type="file" name="flag" required>
        </div>
        <div class="div-in">
            <input class="add-equipes" type="submit" value="Ajouter">
        </div>
    </form>

    <span class="span-equipes">
        <a class="a-modifier" href="readEquipe.php">Modifier une équipe</a>
        <a class ="a-supprimer" href="deleteEquipe.php">Supprimer une équipe</a>
    </span>

    <?php endif; ?>

    <section class="section-cards">

<?php foreach ($equipes as $equipe) : ?>

    <div class="div-card">
        <h4><?php echo htmlspecialchars($equipe['pays']); ?></h4>
        <div class="div-img">
            <img class="img-flag" src="Assets/Images/Flags/<?php echo htmlspecialchars($equipe['flag']); ?>" alt="Image de <?php echo htmlspecialchars($equipe['pays']) ?>">
        </div>

        <span><a class="a-equipes" href="">Voir plus</a></span>

    </div>

<?php endforeach ?>

</section>

<?php
$content = ob_get_clean();
require 'template.php';
?>