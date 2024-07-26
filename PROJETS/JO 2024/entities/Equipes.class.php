<?php

require_once "../dbConnect/MyDbConnection.php";

class Equipe
{

    private $pdo;
    public $idEquipe;
    public $pays;
    public $flag;
    public $idClassement;
    public $entraineur;



    public function __construct()
    {
        $this->pdo = MyDbConnection::getInstance();
    }

    public function getIdEquipe()
    {
        return $this->idEquipe;
    }
    public function getPays()
    {
        return $this->pays;
    }
    public function getFlag()
    {
        return $this->flag;
    }
    public function getIdClassement()
    {
        return $this->idClassement;
    }
    public function getEntraineur()
    {
        return $this->entraineur;
    }

    public function setIdEquipe($idEquipe)
    {
        $this->idEquipe = $idEquipe;
    }
    public function setPays($pays)
    {
        $this->pays = $pays;
    }
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }
    public function setIdClassement($idClassement)
    {
        $this->idClassement = $idClassement;
    }
    public function setEntraineur($entraineur)
    {
        $this->entraineur = $entraineur;
    }

    // CREATE

    public function createEquipe($pays, $entraineur, $flag)
    {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO equipes (pays, entraineur, flag) VALUES (?, ?, ?)');
            $stmt->execute([$pays, $entraineur, $flag]);

            return "Équipe créée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    // DELETE

    public function deleteEquipe($idEquipe)
    {
        try {
            $stmt = $this->pdo->prepare('DELETE FROM equipes WHERE id_equipe = ?');
            $stmt->execute([$idEquipe]);

            return "Équipe supprimée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    // UPDATE

    public function updateEquipe($idEquipe, $pays, $entraineur, $flag){
        try{
            $stmt = $this->pdo->prepare('UPDATE equipes SET pays = ?, entraineur = ?, flag = ? WHERE id_equipe = ?');
            $stmt->execute([$pays, $entraineur, $flag, $idEquipe]);

            return "Équipe mise à jour avec succès.";
        } catch (PDOException $e){
            return "Erreur : " . $e->getMessage();
        }
    }

    // GET

    public function getAllEquipes(){
        $stmt = $this->pdo->prepare('SELECT * FROM equipes');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEquipeById($idEquipe){
        $stmt = $this->pdo->prepare('SELECT equipes.* FROM equipes WHERE equipes.id_equipe=?');
        $stmt->execute([$idEquipe]);
        return $stmt->fetch();
    }
}
