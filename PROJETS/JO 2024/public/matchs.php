<?php
ob_start();

require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';
require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/Matchs.class.php';

$titre = "MATCHS";

session_start();
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$matchs = Rencontre::afficherRencontre();
$auth = new Auth;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MATCHS</title>
</head>

<body>
    <table>
        <tr>
            <th>Date</th>
            <th>Heure</th>
            <th>Équipe A</th>
            <th>Équipe B</th>
            <th>Score</th>
            <?php if($auth->estAdmin($userId)):?>
            <th>Actions</th>
            <?php endif; ?>
        </tr>

        <?php foreach ($matchs as $match) : ?>
            <tr>
                <td><?php echo htmlspecialchars($match->getDate()); ?></td>
                <td><?php echo htmlspecialchars($match->getHeure()); ?></td>
                <td><?php echo htmlspecialchars($match->getEquipeA()); ?></td>
                <td><?php echo htmlspecialchars($match->getEquipeB()); ?></td>
                <td><?php echo htmlspecialchars($match->getScore()); ?></td>
                <?php if($auth->estAdmin($userId)): ?>
                <td><a href="updateMatchs.php?id=<?php echo $match->getScore(); ?>">Modifier</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>