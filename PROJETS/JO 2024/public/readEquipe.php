<?php

require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';
require_once '../entities/Equipes.class.php';

$titre = "MODIFIER UNE ÉQUIPE";

$auth = new Auth();

$equipe = new Equipe();
$equipes = $equipe->getAllEquipes();
?>

<table>
    <tr>
        <th>PAYS</th>
        <th>ENTRAÎNEUR</th>
        <th>DRAPEAU</th>
        <th>Action</th>
    </tr>

    <?php foreach ($equipes as $equipe): ?>

        <tr>
            <td><?php echo htmlspecialchars($equipe['pays']);?></td>
            <td><?php echo htmlspecialchars($equipe['entraineur']);?></td>
            <td><?php echo htmlspecialchars($equipe['flag']);?></td>
            <td><a href="updateEquipe.php?id_equipe=<?php echo $equipe['id_equipe'];?>">Modifier</a></td>
        </tr>
        <?php endforeach;?>
</table>

<?php
$content = ob_get_clean();
$titre = "MODIFIER UNE ÉQUIPE";
require 'template.php';