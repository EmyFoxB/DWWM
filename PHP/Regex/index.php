<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification mdp</title>
</head>
<body>
    <form action="mdp.php" method="POST">
        <label for="sentence">Entrez un mdp</label>
        <input type="text" id="sentence" name="mdp" required>
        <label for="sentence">Confirmez votre mdp</label>
        <input type="text" id="sentence" name="mdp2" required>
        <button type="submit">Vérifier</button>
    </form>
</body>
</html>