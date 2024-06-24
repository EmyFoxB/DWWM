<?php

require_once "employe.php";

class Manager extends Employe{
    protected $employesGeres;

    public function __construct($nom,$salaire, $employesGeres = [],){
        $this->nom = $nom;
        $this->salaire = $salaire;
        $this->employesGeres = $employesGeres;
    }

    public function getNom(){return $this->nom;}
    public function getSalaire(){return $this->salaire;}
    public function getEmployesGeres(){return $this->employesGeres;}

    public function setNom($nom){$this->nom = $nom;}
    public function setSalaire($salaire){$this->salaire = $salaire;}
    public function setEmployesGeres($employesGeres){$this->employesGeres = $employesGeres;}


    public function ajouterEmploye($employe){

        $this->employesGeres[]= $employe;
    }

    public function afficherDetail(){
        echo "Nom du manager : $this->nom <br>";
        echo "Salaire du manager : $this->salaire<br>";
        echo "Employés gérés par le manager : " . "<br>";
        foreach ($this->employesGeres as $employe) {
            echo "Nom : " . $employe->getNom() . ", " . "Salaire : " . $employe->getSalaire();
        }
    }
}