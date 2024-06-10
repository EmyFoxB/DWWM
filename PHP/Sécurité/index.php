<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $email="";
    if(isset($_POST['email'])){
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    }

    // Vérifier si l'email est valide
    if($email){
        echo "<p> L'adresse e-mail saisie est : . $email</p>";
    }else{
        echo "<p> L'adresse e-mail est invalide. </p>";
    }
?>

    <form action="index.php" method="POST">
        <label for="email">Entrez votre email : </label><br>
        <input type="text" name="email" id="email" value="<?= htmlspecialchars($email) ?>">
        <input type="submit" value="Envoyer">
    </form>

</body>
</html>