<?php

require_once "cercle.php";

class Sphere extends Cercle{
    
    protected $rayon;

    public function __construct($diametre, $rayon){
        parent::__construct($diametre);
        $this->rayon = $rayon;
    }

    public function volumeSphere(){
        $volumeSphere = 4 * M_PI * pow($this->rayon, 3);
        echo "Le volume de la sphère est de " . round($volumeSphere, 2) . " cm³.<br>";
    }

    public function afficherSphere(){
        $this->volumeSphere();
        echo "********************************<br>";
    }
}

?>