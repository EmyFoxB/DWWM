<?php

class Cercle{
    protected $diametre;

    public function __construct($diametre){
        $this->diametre = $diametre;
    }

    // Getter

    public function getDiametre(){
        return $this->diametre;
    }

    // Setter

    public function setDiametre($diametre){
        $this->diametre = $diametre;
    }

    // Méthodes

    public function perimetreCercle(){
        $perimetreCercle = M_PI * $this->diametre;
        echo "Le périmètre du cercle est de " . round($perimetreCercle, 2) . " cm.<br>";
    }

    public function aireCercle(){
        $aireCercle = (($this->diametre/2)*($this->diametre/2)) * M_PI;
        echo "L'aire du cercle est de " . round($aireCercle, 2) . " cm².<br>";
    }

    public function afficherCercle(){
        echo "Diamètre : $this->diametre cm.<br>";
        $this->perimetreCercle();
        $this->aireCercle();
        echo "********************************<br>";
    }

}

?>