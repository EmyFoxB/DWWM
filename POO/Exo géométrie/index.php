<?php

require_once "rectangle.php";
require_once "triangleRectangle.php";
require_once "cercle.php";
require_once "pave.class.php";
require_once "pyramide.class.php";
require_once "sphere.class.php";

$rectangle = new Rectangle(5, 8);
$rectangle->afficherRectangle();

$triangle = new TriangleRectangle(4, 6);
$triangle->afficherTriangle();

$cercle = new Cercle(5);
$cercle->afficherCercle();

$pave = new Pave(5, 8, 2);
$pave->afficherPave();

$pyramide = new Pyramide(4, 6);
$pyramide->afficherPyramide();

$sphere = new Sphere(4, 2);
$sphere->afficherSphere();
?>