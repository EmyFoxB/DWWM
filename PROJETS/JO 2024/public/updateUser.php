<!-- <?php

require_once '../entities/Auth.class.php';
require_once '../entities/User.class.php';
require_once '../dbConnect/MyDbConnection.php';

$auth = new Auth();
$auth->verifierAdmin();

$user = new User();

if(isset($_POST['id'], $_POST['prenom'], $_POST['email'], $_POST['pwd'], $role['role'])){
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $role = $_POST['role'];

    $message = $user->updateUser($id, $prenom, $email, $password, $role);
    echo $message;
}

if (isset($_GET['id'])) {
    $utilisateur = $user->getUserById($_GET['id']);

    if (!$utilisateur) {
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID d'utilisateur fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($utilisateur) : ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($utilisateur['id']); ?>">

            <input type="text" name="prenom" value="<?php echo htmlspecialchars($utilisateur['prenom']); ?>" required><br>

            <input type="email" name="email" value="<?php echo htmlspecialchars($utilisateur['email']); ?>" required><br>

            <input type="password" name="password" value="<?php echo htmlspecialchars($utilisateur['pwd']); ?>" required><br>

            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Utilisateur non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require "template.php";
?> -->