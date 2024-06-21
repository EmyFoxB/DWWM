<?php

class Employe{
    protected $nomEmploye;
    protected $salaireEmploye;

    public function __construct($nomEmploye, $salaireEmploye){
        $this->nomEmploye = $nomEmploye;
        $this->salaireEmploye = $salaireEmploye;
    }

    public function afficherDetails(){
        echo "Nom du salarié : $this->nomEmploye" . "<br>";
        echo "Salaire : $this->salaireEmploye" . "<br>";
    }
}

?>