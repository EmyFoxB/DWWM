<?php

require_once '../dbConnect/MyDbConnection.php';

class Rencontre
{
    public $equipeA;
    public $equipeB;
    public $date;
    public $heure;
    public $score;

    public function __construct($equipeA, $equipeB, $date, $heure, $score)
    {
        $this->equipeA = $equipeA;
        $this->equipeB = $equipeB;
        $this->date = $date;
        $this->heure = $heure;
        $this->score = $score;
    }

    public function getEquipeA()
    {
        return $this->equipeA;
    }

    public function getEquipeB()
    {
        return $this->equipeB;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getHeure()
    {
        return $this->heure;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setEquipeA($equipeA)
    {
        $this->equipeA = $equipeA;
    }

    public function setEquipeB($equipeB)
    {
        $this->equipeB = $equipeB;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public static function afficherRencontre(){

        $db = MyDbConnection::getInstance();

        $query = "SELECT equipeA, equipeB, date, heure, score FROM matchs";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $matchs = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $matchs[] = new Rencontre($row['equipeA'], $row['equipeB'], $row['date'], $row['heure'], $row['score']);
        }

        return $matchs;
    }
}
