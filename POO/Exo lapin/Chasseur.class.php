<?php

require_once "Humain.class.php";
require_once "interfaces.php";
require_once "Lapin.class.php";

class Chasseur extends Humain implements iInterface{
    protected $arme;


    public function __construct($nom, $arme){
        parent::__construct($nom);
        $this->arme = $arme;
    }
    public function getArme(){
        return $this->arme;
    }
    public function setArme($arme){
        $this->arme = $arme;
    }

    public function creerChasseur(){
        echo "Le chasseur $this->nom a été créé avec un $this->arme.<br>";
    }

    public function deplacerChasseur(){
        echo "$this->nom avance avec son $this->arme. <br>";
    }

    public function seDeplacer(){
        echo "Le lapin blanc s'enfuit sur ses 4 pattes d'un seul bond.<br>";
    }

    public function chasser(&$enVie){
        do{
            $tir = rand(1, 6);
            if($tir == 1 || $tir == 6){
                $enVie = false;
                echo "Paul tire sur le lapin avec son fusil et le touche.<br>";
                echo "Le pauvre petit lapin blanc est malheureusement décédé.<br>";
                break;
            }
            else{
                echo "Paul tire sur le lapin avec son fusil et le loupe.<br>";
                $this->seDeplacer();
            }
        }
        while($tir !== 1 || $tir !== 6);
    }
}

?>