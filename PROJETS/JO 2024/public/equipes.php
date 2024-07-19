<?php
ob_start();

require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';
require_once '../entities/Equipes.class.php';

$titre = "ÉQUIPES";

$equipes = Equipe::afficherEquipe();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>ÉQUIPES</title>
</head>

<body>

    <section class="section-cards">

        <?php foreach ($equipes as $equipe) : ?>

            <div class="div-card">
                <h4><?php echo htmlspecialchars($equipe->getPays()); ?></h4>
                <div class="div-img">
                    <img class="img-flag" src="/public/Assets/Images/Flags/<?php echo htmlspecialchars($equipe->getFlag()); ?>" alt="Image de <?php echo htmlspecialchars($equipe->getPays()) ?>">
                </div>

                <span><a class="a-equipes" href="">Voir plus</a></span>
            </div>

        <?php endforeach ?>

    </section>

</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>