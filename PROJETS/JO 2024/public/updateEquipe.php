<?php
ob_start();
require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/Auth.class.php';
require_once '../entities/Equipes.class.php';

$auth = new Auth();

$equipe = new Equipe();

if (isset($_POST['id_equipe'], $_POST['pays'], $_POST['entraineur'], $_FILES['flag'])) {
    $idEquipe = $_POST['id_equipe'];
    $pays = $_POST['pays'];
    $entraineur = $_POST['entraineur'];
    $flag = $_FILES['flag']['name'];

    $message = $equipe->updateEquipe($idEquipe, $pays, $entraineur, $flag);

    echo $message;
}

if (isset($_GET['id_equipe'])){
    $team = $equipe->getEquipeById($_GET['id_equipe']);

    if (!$team){
        echo "Équipe non trouvée.";
        exit();
    }
} else {
    echo "Aucun ID d'équipe fourni.";
    exit();
}

?>

<div class="form-update">
    <?php if ($team): ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_equipe" value="<?php echo htmlspecialchars($team['id_equipe']); ?>">
            <label for="pays">Pays :</label>
            <input type="text" name="pays" value="<?php echo htmlspecialchars($team['pays']); ?>" required><br>
            <label for="entraineur">Entraîneur :</label>
            <input type="text" name="entraineur" value="<?php echo htmlspecialchars($team['entraineur']); ?>" required><br>
            <label for="flag">Drapeau :</label>
            <input type="file" name="flag">
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else: ?>
        <p>Équipe non trouvée.</p>
        <?php endif ?>
</div>

<?php
$content = ob_get_clean();
$titre = "MODIFIER UNE ÉQUIPE";
require 'template.php';