<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$titre = "ÉQUIPES";
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

    <div class="div-card">
        <h3></h3>
    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>
    <div class="div-card">

    </div>

</body>

</html>

<?php
$content = ob_get_clean();
require "template.php";
?>