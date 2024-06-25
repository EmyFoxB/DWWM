<?php

require_once "humain.class.php";
require_once "interface.php";
require_once "lapin.class.php";

class Chasseur extends Humain{

    protected $arme;

    public function __construct($nom, $arme)
    {
        parent::__construct($nom);
        $this->arme = $arme;
        echo "Le chasseur $this->nom a été créé avec un $this->arme.<br>";
    }

    public function getArme(){
        return $this->arme;
    }

    public function setArme($arme){
        $this->arme = $arme;
    }

    public function deplacerChasseur()
    {
        echo "$this->nom avance avec son $this->arme.<br>";
    }

    public function seDeplacer()
    {
        
    }

    public function chasser(Lapin $lapin){
        
            $tir = rand(1, 6);
            if($tir === 1 || $tir === 6){
                $lapin->setEnVie(false);
                echo "$this->nom tire sur le lapin avec son $this->arme et le touche.<br>";
                echo "Le pauvre petit lapin est malheureusement décédé.<br>";

            }
            else{
                echo "$this->nom tire sur le lapin avec son $this->arme et le rate.<br>";
                $this->seDeplacer();


            }
        }
    
    }



?>