<?php

abstract class Animal{
    protected $couleur;
    protected $nombrePattes;

    public function __construct($couleur, $nombrePattes){
        $this->couleur = $couleur;
        $this->nombrePattes = $nombrePattes;
    }

    public function getCouleur(){
        return $this->couleur;
    }
    public function getNombrePattes(){
        return $this->nombrePattes;
    }

    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setNombrePattes($nombrePattes){
        $this->nombrePattes = $nombrePattes;
    }

    public function crier(){
        echo "Le lapin glapit de peur.<br>";
    }
}

?>