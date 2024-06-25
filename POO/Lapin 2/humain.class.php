<?php

require_once "interface.php";

abstract class Humain implements iInterface{

    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
}

?>