<?php

// EXERCICE 1 :

// $saisie = readline("Saisir un nomre : ");
// $operation = $saisie**2;
// echo $operation;




// EXERCICE 2 :

// $saisie = readline("Entrez votre prénom : ");
// echo "Bonjour ", $saisie;



// EXERCICE 3 :

// $prixHT = 20;
// $nbreArticles = 2;
// $tva = $prixHT * 0.2;
// $prixTTC = $prixHT + $tva;
// $prixTotal = $prixTTC * $nbreArticles;

// echo "Prix HT : " . $prixHT . "\n", "Nombre d'articles : " . $nbreArticles . "\n", "TVA : " . $tva . "\n", "Prix TTC : " . $prixTTC . "\n", "Prix total TTC : " . $prixTotal . "\n";


// _______________________________________________________________________________________________________________________________________



// EXERCICE 1 :

// $nombre = readline("Entrez un nombre : ");

// if($nombre > 0){
//     echo "Le nombre est positif";
// }else{
//     echo "Le nombre est négatif";
// }


// EXERCICE 2 :

// $nombreA = readline("Entrez un nombre : ");
// $nombreB = readline("Entrez un second nombre : ");

// if($nombreA * $nombreB > 0){
//     echo "Positif";
// }else{
//     echo "Négatif";
// }


// EXERCICE 3 :

// $nombre = readline("Entrez un nombre : ");

// if($nombre > 0){
//     echo "Positif";
// }elseif($nombre < 0){
//     echo "Négatif";
// }else{
//     echo "Neutre";
// }


// EXERCICE 4 :

// $nombreA = readline("Entrez un nombre : ");
// $nombreB = readline("Entrez un second nombre : ");

// if($nombreA * $nombreB > 0){
//     echo "Positif";
// }elseif($nombreA * $nombreB < 0){
//     echo "Négatif";
// }else{
//     echo "Nul";
// }


// EXERCICE 5 :

// $age = readline("Entre ton âge : ");

// switch($age):
//     case($age >5 and $age <8):
//         echo "Poussin";
//         break;
//     case($age >7 and $age<10):
//         echo "Pupille";
//         break;
//     case($age >9 and $age <12):
//         echo "Minime";
//         break;
//     case($age >=12):
//         echo "Cadet";
//         break;
//     default :
//         echo "Inconnu";
// endswitch;


// EXERCICE 6 :


// $heure = readline("Tapes l'heure actuelle");
// $minute = readline("Tapes les minutes")+1;

// if($minute >= 60):
//     $heure += 1;
//     $minute -= 60;
// endif;
// if($heure >=24):
//     $heure -=24;
// endif;

// echo "Dans une minute il sera :", " ",$heure, " ", "heures", " ", $minute, " ", "minutes;



// EXERCICE 7 :


// $heure = readline("Tapes l'heure actuelle");
// $minute = readline("Tapes les minutes");
// $seconde = readline("Tapes les secondes")+1;

// if($seconde >=60):
//     $minute += 1;
//     $seconde -=60;
// endif;
// if($minute >= 60):
//     $heure += 1;
//     $minute -= 60;
// endif;
// if($heure >=24):
//     $heure -=24;
// endif;

// echo "Dans une minute il sera :", " ",$heure, " ", "heures", " ", $minute, " ", "minutes et ", " ", $seconde, " ", "secondes";



// EXERCICE 8


// $nombrePhotocopies = readline("Entrez le nombre de photocopies : ");
// $prix;

// if($nombrePhotocopies >0 and $nombrePhotocopies <11){
//     $prix = $nombrePhotocopies * 0.10;
// }elseif($nombrePhotocopies >10 and $nombrePhotocopies <31){
//     $prix = 10 * 0.10 + ($nombrePhotocopies - 10) * 0.09;
// }elseif($nombrePhotocopies >30){
//     $prix = (10 * 0.10) + (20*0.09) + ($nombrePhotocopies -30) * 0.08;
// }

// echo "Facture : ", $prix, "€";



// EXERCICE 9


// $age = readline("Entrez votre âge : ");
// $sexe = readline("Entrez votre sexe : ");

// if($sexe = "Homme" and $age >20){
//     echo "Imposable";
// }elseif($sexe = "Femme" and $age >17 and $age <36){
//     echo "Imposable";
// }else{
//     echo "Non imposable";
// }



// EXERCICE 10

// $numJour = readline("Entrez le jour : ");
// $numMois = readline("Entrez le mois : ");
// $numAnnée = readline("Entrez l'année : ");

// if($numAnnée % 4 == 0 and $numAnnée % 100 != 0 or $numAnnée % 400 == 0){
//     echo "Année bissextile";
// }else{
//     echo "Année non bissextile";
// }