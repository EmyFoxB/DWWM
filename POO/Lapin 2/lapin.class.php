<?php

require_once "animal.class.php";
require_once "interface.php";

class Lapin extends Animal{

    protected $enVie = true;

    public function __construct($couleur, $nombrePattes, $enVie)
    {
        parent::__construct($couleur, $nombrePattes);
        $this->enVie = $enVie;
        echo "Le lapin $this->couleur à $this->nombrePattes pattes a été créé.<br>";

    }

    public function getEnVie(){
        return $this->enVie;
    }

    public function setEnVie($enVie){
        $this->enVie = $enVie;
    }

    public function seNourrir(){
        echo "Le lapin $this->couleur à $this->nombrePattes pattes mange.<br>";
    }

    public function estEnVie(){
        return $this->enVie;
    }

    public function fuir(){
        echo "Le lapin $this->couleur s'enfuit sur ses $this->nombrePattes pattes d'un seul bond.<br>";
    }
}

?>