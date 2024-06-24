<?php

require_once "Animal.class.php";
require_once "Humain.class.php";
require_once "Lapin.class.php";
require_once "Chasseur.class.php";

$lapin = new Lapin("blanc", 4, true);
$chasseur = new Chasseur("Paul", "fusil");

$chasseur->creerChasseur();
$lapin->creerLapin();

$lapin->seNourrir();

$chasseur->deplacerChasseur();

$lapin->crier();

$chasseur->chasser($enVie);

?>