<?php

class Rectangle{
    protected $longueur;
    protected $largeur;

    // Construct

    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Getter

    public function getLongueur(){
        return $this->longueur;
    }
    public function getLargeur(){
        return $this->largeur;
    }

    // Setter

    public function setLongueur($longueur){
        $this->longueur = $longueur;
    }
    public function setLargeur($largeur){
        $this->largeur = $largeur;
    }

    // Méthodes

    public function perimetre(){
        $perimetre = ($this->longueur + $this->largeur)*2;
        echo "Le périmètre du rectangle est de $perimetre cm.<br>";
        
    }

    public function aire(){
        $aire = $this->longueur * $this->largeur;
        echo "L'aire du rectangle est de $aire cm².<br>";
    }

    public function estCarre(){
        if($this->longueur === $this->largeur){
            echo "La figure est un carré.<br>";
        }
        else{
            echo "La figure n'est pas un carré.<br>";
        }
    }

    public function afficherRectangle(){
        echo "Longueur :  $this->longueur cm. - Largeur : $this->largeur cm.<br>";
        $this->perimetre();
        $this->aire();
        $this->estCarre();
        echo "********************************<br>";
    }
}

?>