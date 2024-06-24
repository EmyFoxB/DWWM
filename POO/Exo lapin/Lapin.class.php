<?php

require_once "Animal.class.php";

class Lapin extends Animal{
    protected $enVie = true;

    public function __construct($couleur, $nombrePattes, $enVie){
        parent::__construct($couleur, $nombrePattes);
        $this->enVie = $enVie;
    }

    public function getEnVie(){
        return $this->enVie;
    }

    public function setEnVie($enVie){
        $this->enVie = $enVie;
    }

    public function creerLapin(){
        echo "Le lapin $this->couleur à $this->nombrePattes pattes a été créé.<br> ";
    }

    

    public function seNourrir(){
        echo "Le lapin se nourrit.<br>";
    }

}

?>