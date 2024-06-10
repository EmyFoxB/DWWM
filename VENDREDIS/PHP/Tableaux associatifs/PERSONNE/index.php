<?php
// Création d'un tableau associatif

$personne=[
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "profession" => "Développeur"
];

// // Ici, j'affiche une valeur

// echo $personne["nom"];

// Tout afficher

// echo "Nom : " . $personne["nom"] ."\n";
// echo "Prénom : " . $personne["prenom"] ."\n";
// echo "Age : " . $personne["age"] ."\n";
// echo "Profession: " . $personne["profession"] ."\n";

// // Boucle foreach pour l'affichage
// foreach($personne as $key => $value){
//     echo ucfirst($key) . " : " . ucfirst($value) . "\n";
// }

// Ajouter une valeur
$personne["salaire"] = 55000;

// Modification d'une valeur
$personne["profession"] = "Chef de projet";

// Boucle foreach pour l'affichage
// foreach($personne as $key => $value){
//     echo ucfirst($key) . " : " . ucfirst($value) . "\n";
// }

// " = " est une affectation; il écrase la valeur précédente.