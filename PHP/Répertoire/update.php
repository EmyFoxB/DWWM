<?php

ob_start();
require "auth.php";
verifAdmin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['role'], $_POST['id'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $role = $_POST['role'];

        try {
            $pdo = getPDOConnexion();

            $stmt = $pdo->prepare('UPDATE users SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, role = :role WHERE id = :id');


            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':telephone', $telephone, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);


            $stmt->execute();

            echo "Utilisateur mis à jour avec succès";
        } catch (PDOException $e) {
            die("Erreur: " . $e->getMessage());
        }
    } else {
        echo "Tous les champs sont obligatoires.";
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
<div class="form-container">
    <form method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" required><br>

        <label for="role">Rôle:</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>

        <input type="submit" value="Mettre à jour">
    </form>
</div>
</body>
</html>
