<?php

ob_start();
require_once "auth.php";
verifAdmin();
$pdo = getPDOConnection();
// Eviter d'utiliser pdo->query. Préférer ->prepare et ->execute.
$stmt = $pdo->query('SELECT * FROM users');
$users = $stmt->fetchAll();

?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>
    <!-- Pour chaque valeur de $user dans le tableau $users -->
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo htmlspecialchars($user['identifiant']); ?></td>
        <td><?php echo htmlspecialchars($user['nom']); ?></td>
        <td><?php echo htmlspecialchars($user['prenom']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td><?php echo htmlspecialchars($user['telephone']); ?></td>
        <td><a href="update.php?id=<?php echo $user['identifiant']; ?>">Modifier</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php

$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";

?>