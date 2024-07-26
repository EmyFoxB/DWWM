<?php

require_once '../dbConnect/MyDbConnection.php';

class Joueur
{
    private $pdo;
    public $nom;
    public $prenom;
    public $ddn;
    public $poste;

    public function __construct($nom = null, $prenom = null, $ddn = null, $poste = null)
    {
        $this->pdo = MyDbConnection::getInstance();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ddn = $ddn;
        $this->poste = $poste;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getDdn()
    {
        return $this->ddn;
    }
    public function getPoste()
    {
        return $this->poste;
    }

    public function createJoueur($nom, $prenom, $ddn, $poste)
    {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO joueurs (nom, prenom, ddn, poste) VALUES (?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $ddn, $poste]);
            return "Joueur créé avec succès";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function recupererJoueur()
    {
        try {
            $db = MyDbConnection::getInstance();
            $query = "SELECT nom, prenom, ddn, poste FROM joueurs";
            $stmt = $db->prepare($query);
            $stmt->execute();

            $joueurs = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $joueurs[] = new Joueur($row['nom'], $row['prenom'], $row['ddn'], $row['poste']);
            }

            return $joueurs;
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function afficherJoueur(){
        echo $this->nom;
        echo $this->prenom;
        echo $this->ddn;
        echo $this->poste;
    }


    public function getJoueursByEquipeId()
    {
        try {
            $stmt = $this->pdo->prepare(
                'SELECT joueurs.* FROM joueurs JOIN equipes ON joueurs.id_joueur = equipes.id_joueur WHERE equipes.id_equipe = ?'
            );
            $stmt->execute([]);
            $joueurs = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $joueurs[] = new Joueur($row['nom'], $row['prenom'], $row['ddn'], $row['poste']);
            }

            return $joueurs;
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public function getAllJoueurs()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM joueurs');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
