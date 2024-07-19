<?php
ob_start();
require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';
require_once '../entities/Matchs.class.php';

$auth = new Auth();
$auth->verifierAdmin();

$user = new User();
$match = new Rencontre($equipeA, $equipeB, $date, $heure, $score);

if (isset($_POST['id_match'], $_POST['equipeA'], $_POST['equipeB'], $_POST['date'], $_POST['heure'], $_POST['score'])) {
    $idMatch = $_POST['id_match'];
    $equipeA = $_POST['equipeA'];
    $equipeB = $_POST['equipeB'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $score = $_POST['score'];

    $message = $match->updateMatch($idMatch, $equipeA, $equipeB, $date, $heure, $score);
    echo $message;
}

if (isset($_GET['id_match'])) {
    $matchDetails = $match->getMatchById($_GET['id_match']);

    if (!$matchDetails) {
        echo "Match non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID de match fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($match) : ?>
        <form method="POST">
            <input type="hidden" name="id_match" value="<?php echo htmlspecialchars($match['id_match']); ?>">

            <input type="text" name="date" value="<?php echo htmlspecialchars($match['date']); ?>" required><br>

            <input type="text" name="heure" value="<?php echo htmlspecialchars($match['heure']); ?>" required><br>

            <input type="text" name="equipeA" value="<?php echo htmlspecialchars($match['equipeA']); ?>" required><br>

            <input type="text" name="equipeB" value="<?php echo htmlspecialchars($match['equipeB']); ?>" required><br>

            <input type="text" name="score" value="<?php echo htmlspecialchars($match['score']); ?>" required><br>

            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Match non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un match";
require "template.php";
?>