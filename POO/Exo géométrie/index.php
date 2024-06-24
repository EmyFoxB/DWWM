<?php

require_once "rectangle.php";
require_once "triangleRectangle.php";
require_once "cercle.php";

$rectangle = new Rectangle(5, 8);
$rectangle->perimetre();
$rectangle->aire();
$rectangle->estCarre();
$rectangle->afficherRectangle();

$triangle = new TriangleRectangle(4, 6);
$triangle->perimetreTriangle();
$triangle->aireTriangle();
$triangle->afficherTriangle();

$cercle = new Cercle(5);
$cercle->perimetreCercle();
?>