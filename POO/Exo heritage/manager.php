<?php

require_once "employe.php";

class Manager{
    protected $nomManager;
    protected $salaireManager;
    protected $employesGeres = [];

public function __construct($nomManager, $salaireManager, $employesGeres){
    $this->nomManager = $nomManager;
    $this->salaireManager = $salaireManager;
    $this->employesGeres = $employesGeres;

    
}
}

?>