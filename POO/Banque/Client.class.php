<?php

require_once "iConsultation.php";

class Client implements iConsultation{
    protected $identifiant;
    protected $listeComptesBancaires=[];

    public function __construct($identifiant, $listeComptesBancaires)
    {
        $this->identifiant = $identifiant;
        $this->listeComptesBancaires = $listeComptesBancaires;
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }
    public function getComptesBancaires(){
        return $this->listeComptesBancaires;
    }

    public function setIdentifiant($identifiant){
        $this->identifiant = $identifiant;
    }
    public function setComptesBancaires($listeComptesBancaires){
        $this->listeComptesBancaires = $listeComptesBancaires;
    }
    
    public function afficherSesInfos(){
        echo "Identifiant : $this->identifiant <br>";
        echo "Comptes : $this->listeComptesBancaires <br>";
    }

    public function consulter(){}

}


?>