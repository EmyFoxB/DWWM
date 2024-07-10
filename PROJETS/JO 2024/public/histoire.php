<?php
ob_start();
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
$titre = "HISTOIRE & RÈGLES";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HISTOIRE & RÈGLES</title>
</head>

<body>
    <section class="histoire-et-regles">
        <div class="div-histoire">
            <h3>HISTOIRE</h3>
            <p>Le volleyball est né dans la même université que le basketball, à Springfield, dans le Massachusetts, en 1895.
                Le but de William G. Morgan, son inventeur, était de proposer une activité accessible aux personnes plus âgées,
                et s’appelait à la base « mintonette ». Le volleyball s’exporte très rapidement, puisque dès le tout début du 20e siècle,
                il se développe au Canada, puis à Cuba au Japon et dans d’autres pays d’Asie. Un demi-siècle plus tard, en 1947,
                la Fédération Internationale de Volleyball (FIVB) est créée. Les premiers championnats du monde masculins suivent
                un an plus tard, et en 1952 sont organisés les premiers championnats du monde de volleyball féminin.</p>
        </div>
        <div class="div-regles">
            <h3>RÈGLES</h3>
            <p>Le volleyball oppose des équipes de six joueurs qui sont départagées au meilleur des cinq sets,
                sur un terrain de dix-huit mètres de long sur neuf mètres de large. Chaque set se joue en 25 points gagnants,
                et si les deux équipes remportent deux sets chacune, le cinquième se joue cette fois en 15 points.<br><br>

                Au volleyball, le ballon peut atteindre une vitesse de 130km/h, notamment sur les services sautés et les smashs
                spectaculaire qui demandent une grande puissance, mais aussi des réflexes très développés pour pouvoir les rattraper.</p>
        </div>
    </section>

</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>