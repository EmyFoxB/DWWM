<?php

require_once "animal.class.php";
require_once "lapin.class.php";
require_once "humain.class.php";
require_once "chasseur.class.php";
require_once "interface.php";

$lapin = new Lapin("blanc", 4, true);
$lapin->seNourrir();

$chasseur = new Chasseur("Paul", "fusil");
$chasseur->seDeplacer();

$lapin->crier();

$lapin->setEnVie(true);

while($lapin->estEnVie()){
    $chasseur->seDeplacer();
    $chasseur->chasser($lapin);
    if(!$lapin->estEnVie()){
        break;
    }
    $lapin->fuir();


}
echo "Le programme s'arrête. Le lapin est mort.";

// while($lapin->estEnVie()){
//     $chasseur->seDeplacer();
//     $lapin->crier();
//     $chasseur->chasser($lapin);

//     if(!$lapin->estEnVie()){
//         break;
//     }

//     $lapin->fuir();
// }
// echo "Le prog est terminé car le lapin est mort";

?>