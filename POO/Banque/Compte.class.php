<?php

require_once "Client.class.php";

class Compte{

    protected $numeroCompte;
    protected $solde;

    public function __construct($numeroCompte, $solde)
    {
        $this->numeroCompte = $numeroCompte;
        $this->solde = $solde;
    }

    public function getNumeroCompte(){
        return $this->numeroCompte;
    }
    public function getSolde(){
        return $this->solde;
    }

    public function setNumeroCompte($numeroCompte){
        $this->numeroCompte = $numeroCompte;
    }
    public function setSolde($solde){
        $this->solde = $solde;
    }
}

?>