<?php
ob_start();
require_once '../dbConnect/MyDbConnection.php';
require_once '../entities/Auth.class.php';

$auth = new Auth();
$auth->startSession();

if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pdo = MyDbConnection::getInstance();
    $stmt = $pdo->prepare('SELECT id, pwd FROM user WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['pwd'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../index.php');
        exit();
    } else {
        $error = "Email ou mot de passe incorrect.";
    }
}
?>


    <?php if (isset($error)) : ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php elseif (isset($_SESSION['successMessage'])) : ?>
        <p class="success"><?php echo htmlspecialchars($_SESSION['successMessage']); ?></p>
    <?php endif; ?>

<div class="div-form">
    <p class="p-login">CONNEXION</p>


    <form class="login-form" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <br>
        <input class="btn-login" type="submit" value="Se connecter">
    </form>

    <p class="p-compte">Pas encore de compte ? <a class="a-login" href="/public/inscription.php">Inscrivez-vous !</a></p>
</div>

<?php
$content = ob_get_clean();
$titre = "CONNEXION";
require "template.php";
?>