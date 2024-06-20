<?php

require "fonctions.php";

// Le menu principal

while(true){
    echo "1. Ajouter un livre\n";
    echo "2. Modifier un livre\n";
    echo "3. Supprimer un livre\n";
    echo "4. Afficher tous les livres\n";
    echo "5. Quitter\n";
    $choix = readline("Entrez votre choix : ");

    switch($choix){
        case 1:
            list($id, $titre, $auteur, $annee, $genre) = demanderLivre();
            ajouterLivre($biblio, $id, $titre, $auteur, $annee, $genre);
            break;
        case 2:
            afficherLivres($biblio);
            break;

        case 5:
            exit("Au revoir");
        default:
        echo "Choix invalide";

    }
}

// ajouterLivre($bibliotheque, 1, "Les Hauts de Hurlevent", "Emily Brontë", 1892, "Tragédie");
// ajouterLivre($bibliotheque, 2, "Harry Potter et l'Ordre du Phénix", "J.K. Rowling", 2003, "Fantastique");
// ajouterLivre($bibliotheque, 3, "Orgueil et Préjugès", "Jane Austen", 1813, "Romance");
// ajouterLivre($bibliotheque, 4, "Changer l'eau des fleurs", "Valérie Perrin", 2018, "Tragédie");
// ajouterLivre($bibliotheque, 5, "Dix Petits Nègres", "Agatha Christie", 1939, "Thriller");


echo "";



?>