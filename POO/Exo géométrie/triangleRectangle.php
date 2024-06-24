<?php

class TriangleRectangle
{
    protected $base;
    protected $hauteur;

    // Construct

    public function __construct($base, $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    // Getter

    public function getBase()
    {
        return $this->base;
    }
    public function getHauteur()
    {
        return $this->hauteur;
    }

    // Setter

    public function setBase($base)
    {
        $this->base = $base;
    }
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    // Méthodes

    public function perimetreTriangle()
    {
        // Calcul de l'hypoténuse - sqrt sert a calculer la racine carrée d'un nombre - pow = puissance
        $hypotenuse = sqrt(pow($this->base, 2) + pow($this->hauteur, 2));

        // Calcul du périmètre
        $perimetreTriangle = $this->base + $this->hauteur + $hypotenuse;

        echo "Le périmètre du triangle rectangle est de : $perimetreTriangle cm. <br>";
    }

    public function aireTriangle()
    {
        // Calcul de l'aire
        $aire = 0.5 * $this->base * $this->hauteur;
        echo "L'aire du triangle rectangle est de : $aire cm². <br>";
    }

    public function afficherTriangle(){
        echo "La base du triangle est de $this->base cm.<br> La hauteur du triangle est de $this->hauteur cm.<br>";
        $this->perimetreTriangle();
        $this->aireTriangle();
        echo "********************************<br>";
    }
}
