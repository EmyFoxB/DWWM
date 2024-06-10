<?php

// 1°) Ecrire un programme qui demande un nombre à l’utilisateur, puis qui calcule et affiche le carré
// de ce nombre.

// $saisie = readline("Entrez un nombre : ");
// $calcul = $saisie*$saisie;

// echo $calcul;




// 2°) Ecrire un programme qui demande son prénom à l'utilisateur, et qui lui réponde par un
// charmant « Bonjour » suivi du prénom.


// $prenom = readline("Entrez votre prénom : ");

// echo "Bonjour" . " " . $prenom;



// 3°) Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui
// fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.

// require "fonctions.php";

// $prixHT = readline("Indiquez le prix HT : ");
// $nombreArticles = readline("Indiquez le nombre d'articles : ");

// echo prixTTC($prixHT, $nombreArticles);




// 1°) Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce
// nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).


$nombre = readline("Entrez un nombre : ");

if($nombre >= 1){
    echo "Positif";
}
else{
    echo "Négatif";
}