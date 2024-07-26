<?php
ob_start();
require_once '../entities/Auth.class.php';
require_once '../entities/Equipes.class.php';

$auth = new Auth();
$auth->verifierAdmin();

$equipe = new Equipe();

if (isset($_POST['id_equipe'])){
    $idEquipe = $_POST['id_equipe'];
    $message = $equipe->deleteEquipe($idEquipe);
    header('Location: equipes.php');
    exit();
    echo $message;
}

$equipes = $equipe->getAllEquipes();

?>

<form class="form-delete" method="POST">
    <label for="id_equipe">Équipe :</label>
    <select name="id_equipe" required>
        <?php foreach ($equipes as $equipe): ?>
            <option value="<?php echo htmlspecialchars($equipe['id_equipe']); ?>">
                <?php echo htmlspecialchars($equipe['pays']); ?>
            </option>
            <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "SUPPRIMER UNE ÉQUIPE";
require "template.php";