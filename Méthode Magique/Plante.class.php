<?php

class Plante{

    private $nom;
    private $type;
    private $hauteur;
    private $dureeDeVie;
    private $famille;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille)
    {
        $this->nom = $nom;
        $this->type = $type;
        $this->hauteur = $hauteur;
        $this->dureeDeVie = $dureeDeVie;
        $this->famille = $famille;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        if(property_exists($this,$prop)){
            $this->$prop = $value;
        }
        else{
            echo "La propriété $prop n'existe pas<br>";
        }
    }

    // Méthode afficher

    public function afficher(){
        echo "Nom : $this->nom<br>";
        echo "Type : $this->type<br>";
        echo "Hauteur : $this->hauteur<br>";
        echo "Durée de vie : $this->dureeDeVie<br>";
        echo "Famille : $this->famille<br>";
    }

    // _________________________________________

    public function __toString()
    {
        return "Nom : $this->nom" . "<br>".
                "Type : $this->type" . "<br>".
                "Hauteur : $this->hauteur" . "<br>".
                "Durée de vie : $this->dureeDeVie" . "<br>".
                "Famille : $this->famille" . "<br>";
    }
}