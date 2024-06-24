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
        echo "Le périmètre du cercle et de $perimetreCercle cm.<br>";
    }

}

?>