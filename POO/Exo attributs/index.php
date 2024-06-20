<?php
require_once "plante.php";

$chene = new Plante("Chêne","Arbre","20 mètres", "100 ans", "Fagacées");
$rose = new Plante("Rose","fleur","1 mètre","2 ans", "Rosacées");
$tournesol = new Plante("Le tournesol","fleur","3 mètres","1 an", "Astéracées");

$chene -> affichage();
$rose -> affichage();
$tournesol -> affichage();

$chene->setHauteur("50 mètres");
$chene->affichage();

?>