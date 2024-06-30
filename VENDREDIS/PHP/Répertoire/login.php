<?php
ob_start();

require_once "dbConnect.php";

// Vérifie que la session n'est pas démarrée
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
    // function de connexion à la bdd
    $pdo = getPDOConnection();
    // préparation de la requête
    $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
    $stmt->execute([$email]);
    // fetch récupère l'information
    $user = $stmt->fetch();

    // Si (utilisateur)
    if($user){
        // id utilisateur correspond à id utilisateur dans le bdd
        $_SESSION['user_id'] = $user['id'];
        // rediriger vers
        header('Location: index.php');
        // sortir de la page de connexion
        exit();
    }
}


else{
    $error = "Utilisateur non trouvé.";
}
?>

<div class="login-container">
    <!-- Vérifie si l'entrée utilisateur correspond à ce qui est défini, sinon message d'erreur -->
    <?php if(isset($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error)?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="email">Email :</label>
        <!-- required = obligation de remplir le champ -->
        <!-- type=email force à entrer un formal (mail) valide -->
        <input type="email" name="email" required>
        <input type="submit" value="Login">
    </form>
</div>




<?php
$content = ob_get_clean();
$titre = "Identification Espace Admin";
require "template.php";
?>