<?php

class Stagiaire{
    private $nom = "";
    public $notes = [];

    public function getNom(){
        return $this->nom;}
    public function getNotes(){
        return $this->notes;}

    public function setNom($nom){
        $this->nom = $nom;}
    public function setNotes($notes){
        $this->notes = $notes;}

    public function __construct($nom, $notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }

    public function calculerMoyenne(){
        $moyenne = array_sum($this->notes)/count($this->notes);
        echo "La moyenne de " . $this->nom . " est de : " .$moyenne . "<br>";
    }

    public function trouverMinEtMax(){
        $noteMin = min($this->notes);
        $noteMax = max($this->notes);
        echo "La note minimum de " . $this->nom . " est de : " . $noteMin . "<br>";
        echo "La note maximum de " . $this->nom . " est de : " . $noteMax . "<br>";
    }

    public function afficher(){
        $convertir = implode(", ", $this->notes);
        echo "Prénom du stagiaire : " .$this->nom ."<br>" . "Notes du stagiaire : " . $convertir;
    }
}

?>