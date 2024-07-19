<?php

require_once '../dbConnect/MyDbConnection.php';

class User {
    private $pdo;

    public function __construct() {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function createUser($prenom, $email, $password, $role = "non-admin") {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $this->pdo->prepare('INSERT INTO user (prenom, email, pwd) VALUES (?, ?, ?)');
            $stmt->execute([$prenom, $email, $hashedPassword]);

            $userId = $this->pdo->lastInsertId();

            $stmt = $this->pdo->prepare('INSERT INTO UserRoles (user_id, role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            return "Bienvenue $prenom ! Connecte-toi !";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    // public function deleteUser($id) {
    //     try {
    //         $stmt = $this->pdo->prepare('DELETE FROM user WHERE id = ?');
    //         $stmt->execute([$id]);
    //         return "Utilisateur supprimé avec succès.";
    //     } catch (PDOException $e) {
    //         return "Erreur : " . $e->getMessage();
    //     }
    // }

    public function updateUser($id, $prenom, $email, $password, $role) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {
            $stmt = $this->pdo->prepare('UPDATE user SET prenom = ?, email = ?, pwd = ? WHERE id = ?');
            $stmt->execute([$prenom, $email, $hashedPassword, $id]);

            $stmt = $this->pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare('SELECT user.*, userroles.role FROM user JOIN userroles ON user.id = userroles.user_id WHERE user.id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // public function getAllUsers() {
    //     $stmt = $this->pdo->prepare('SELECT * FROM user');
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function getAllUsersRole() {
    //     $stmt = $this->pdo->prepare('SELECT user.id, user.prenom, user.email, userroles.role FROM user JOIN userroles ON user.id = userroles.user_id');
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
}
?>
