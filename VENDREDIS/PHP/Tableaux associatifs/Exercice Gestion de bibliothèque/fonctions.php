<?php

$bibliotheque = [];

// Fonction pour demander des informations sur le livre à l'utilisateur

function demanderLivre(){
    $id = readline("Entrez l'ID du livre : \n");
    $titre = readline("Entrez le titre du livre : \n");
    $auteur = readline("Entrez le nom de l'auteur : \n");
    $annee = readline("Entrez l'année de publication : \n");
    $genre = readline("Entrez le genre du livre : \n");

    return [$id, $titre, $auteur, $annee, $genre];

}

// Fonction pour ajouter un livre

function ajouterLivre(&$livre, $id, $titre, $auteur, $annee, $genre){
    $livre[$id] = [
        "titre" => $titre,
        "auteur" => $auteur,
        "annee" => $annee,
        "genre" => $genre
    ];
}

// Fonction pour afficher les livres

function afficherLivres($bibliotheque){
    foreach($bibliotheque as $id => $livre){
        echo "ID : " . $id . "\n";
        echo "Titre : " . $livre['titre'] . "\n";
        echo "Auteur : " . $livre['auteur'] . "\n";
        echo "Année : " . $livre['annee'] . "\n";
        echo "Genre : " . $livre['genre'] . "\n";
    }
}

// Fonction pour modifier un livre

// function modifierLivre($bibliotheque, $modifLivre){
//     foreach ($bibliotheque as $livre) {
//         if($bibliotheque[0]==$id){
//             $livre['titre'] = $modifLivre[];
//     }
// }
// }

?>