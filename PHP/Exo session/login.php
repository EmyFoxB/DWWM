<?php
session_start();


$identifiant = "";
$password = "";
$idcorrect = "emyfox";
$passcorrect = "100194";
if (isset($_POST['identifiant'])&& isset($_POST['password'])) {
    $identifiant = filter_input(INPUT_POST, 'identifiant', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    if($identifiant == $idcorrect && $password == $passcorrect){
        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['password'] = $_POST['password'];
        header("location: index.php");
        exit();
    }else{
        echo "Identifiant et/ou mot de passe incorrect(s)";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="login.php" method="POST">


        <label for="identifiant">Identifiant</label><br>
        <input type="text" name="identifiant" id="identifiant" value="<?= htmlspecialchars($identifiant) ?>"><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password" value="<?= htmlspecialchars($password) ?>"><br><br>

        <input type="submit" value="Se connecter">

    </form>

</body>

</html>