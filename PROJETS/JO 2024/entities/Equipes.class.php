<?php

require_once "../dbConnect/MyDbConnection.php";

class Equipe{

    public $pays;
    public $entraineur;
    public $flag;



    public function __construct($pays, $entraineur, $flag)
    {
        $this->pays = $pays;
        $this->entraineur = $entraineur;
        $this->flag = $flag;
    }

    public function getPays(){
        return $this->pays;
    }
    public function getEntraineur(){
        return $this->entraineur;
    }
    public function getFlag(){
        return $this->flag;
    }

    public function setPays($pays){
        $this->pays = $pays;
    }
    public function setEntraineur($entraineur){
        $this->entraineur = $entraineur;
    }
    public function setFlag($flag){
        $this->flag = $flag;
    }

    public static function afficherEquipe(){

        $db = MyDbConnection::getInstance();

        $query = "SELECT pays, entraineur, flag FROM equipes";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $equipes = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $equipes[] = new Equipe($row['pays'], $row['entraineur'], $row['flag']);
        }

        return $equipes;
    }
}