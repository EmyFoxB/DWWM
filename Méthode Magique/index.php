<?php

require_once "Plante.class.php";

$chene = new Plante("Le chêne", "arbre", "20 mètres", "100 ans", "Fagacées");
$rose = new Plante("La rose", "fleur", "21 mètre", "2 ans", "Rosacées");
$tournesol = new Plante("Le tournesol", "fleur", "3 mètres", "1 an", "Astéracées");

$chene->afficher();
$rose->afficher();
$tournesol->afficher();

// Apporter une modification

$chene->hauteur = "55 mètres";
echo $chene;

$chene->dureeDeVie = "200 ans";
echo $chene;