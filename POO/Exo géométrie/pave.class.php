<?php

require_once "rectangle.php";

class Pave extends Rectangle{
    protected $hauteur;

    public function __construct($longueur, $largeur, $hauteur){
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function getHauteur(){
        return $this->hauteur;
    }

    public function setHauteur($hauteur){
        $this->hauteur = $hauteur;
    }

    public function perimetrePave(){
        $perimetrePave = ($this->longueur + $this->largeur)*2;
        echo "Le périmètre du pavé est de : $perimetrePave cm.<br>";
    }

    public function volumePave(){
        $volumePave = $this->longueur * $this->largeur * $this->hauteur;
        echo "Le volume du pavé est de : $volumePave cm³.<br>";
    }

    public function afficherPave(){
        $this->perimetrePave();
        $this->volumePave();
        echo "********************************<br>";
    }
}

?>