<?php

require_once "triangleRectangle.php";

class Pyramide extends TriangleRectangle{
    

    public function __construct($base, $hauteur){
        parent::__construct($base, $hauteur);
    }

    public function volumePyramide(){
        $aireTriangleRectangle = 0.5 * $this->base * $this->hauteur;
        $volumePyramide = $aireTriangleRectangle * $this->hauteur / 3;
        echo "Le volume de la pyramide est de $volumePyramide cm³.<br>";
        echo "********************************<br>";
    }

    public function afficherPyramide(){
        $this->volumePyramide();
    }
}

?>