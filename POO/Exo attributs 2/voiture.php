<?php

class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    public $vitesseActuelle;

    public function __construct($marque, $modele, $annee, $couleur, $vitesseActuelle){
        $this ->marque =$marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getCouleur(){return $this->couleur;}
    public function getVitesseActuelle(){return $this->vitesseActuelle;
    }

    public function setMarque($marque){
        $this->marque = $marque;
    }
    public function setModele($modele){
        $this->modele = $modele;
    }
    public function setAnnee($annee){
        $this->annee = $annee;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function afficher(){
        echo "Marque : $this->marque " , "<br>";
        echo "Modèle (Année) : $this->modele  " . "($this->annee)" , "<br>";
        echo "Couleur : $this->couleur " , "<br>";
        echo "Vitesse: $this->vitesseActuelle " , "<br>";
        echo "**<br>";
    }

    public function accelerer(){

        $accelerer = 30;
        $this -> vitesseActuelle += $accelerer;

        echo "La vitesse après acceleration est de : " .$this->vitesseActuelle . "km/h";
        echo "<br>*<br>";
    }

}
?>