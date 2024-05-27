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


// 

// $notes=[];
// for($i= 0;$i<9;$i++){
//     $notes[$i] = readline("Entrez une valeur " . ($i + 1) . " : ");
//     while (!is_numeric($notes[$i]) || $notes[$i] < 1 || $notes[$i] > 9) {
//         echo "Entrez un nombre valide !\n";
//         $notes[$i] = readline("Entrez une nouvelle valeur (entre 0 et 10). " . ($i + 1) . " : ");
//     }
// }

// Calculer la moyenne
// $sum = array_sum($notes);
// $moy = $sum/count($notes);
// echo "Voici la moyenne des valeurs : " . $moy;


// EXERCICE 2

// $tab = [];

// $saisie1 = readline('écrit le nombre de valeur que tu va entrer: ');

// for ($i=0; $i < $saisie1; $i++) { 
//     $saisie2 = readline('ecrit une valeur a ajouter au tableau: ');
//     $tab[] = $saisie2;
// }

// $positives = 0;
// $negatives = 0;

// foreach ($tab as $value) {

//     if ($value < 0){
//         $negatives++;
//     }elseif ($value > 0)
//     $positives++;
// }

// echo "nombre de valeur negative = " , $negatives , "\n";
// echo "nombre de valeur positive = " , $positives , "\n";



// EXERCICE 3

// $tab = [1, 8, 3, 4, 5];
// $total = 0;

// for ($i = 0; $i < count($tab); $i++) { 
//     $total += $tab[$i];
// }

// echo "Total : " . $total;



// EXERCICE 4

// function afficherTab($tab, $nomTab){
//     echo "$nomTab : ";
//     foreach($tab as $index => $valeur){ 
//         echo "$valeur ";
//     }
//     echo "\n";
// }

// $tab_1 = [4, 8, 7, 9, 1, 5, 4, 6];
// $tab_2 = [7, 6, 5, 2, 1, 3, 7, 4];

// afficherTab($tab_1, "Tableau 1");
// afficherTab($tab_2, "Tableau 2");


// for($i=0; $i<count($tab_1); $i++){
//     $tab_3[$i] = $tab_1[$i] + $tab_2[$i];
// }

// afficherTab($tab_3, "Tableau 3");





// EXERCICE 5

// $nombreDeValeurs = readline("Saisie combien tu veux de valeur ? ");

// $tab = [];

// for ($i = 0; $i < $nombreDeValeurs; $i++) {
//     $valeur = readline("Saisie une valeur") . ($i + 1) . ": ";
//     $tab[] = $valeur;
// }

// $upValeur = $tab[0];
// $position = 0;

// for ($i = 1; $i < count($tab); $i++) {
//     if ($tab[$i] > $upValeur) {
//         $upValeur = $tab[$i];
//         $position = $i;
//     }
// }

// echo "La plus grande valeur est " . $upValeur . " à la position " . ($position + 1) . ".\n";



// EXERCICE 6

// $arrayLength = readline("Veuillez entrer la taille du tableau : ");
// $arr = [];

// for ($i = 0; $i < $arrayLength; $i++) {
//     $arr[$i] = readline("Veuillez entrer une note : ");
// }

// $average = array_sum($arr) / $arrayLength;

// echo "moyenne : " . $average . "\n";

// foreach ($arr as $value) {
//     if ($value > $average) {
//         echo $value . "\n";
//     }
// }





// EXERCICE 7

// $prix = [5, 50, 23, 11];
// $quantite = [10, 1, 4, 3];  
// $tab3 = [];

// for ($i = 0; $i < count($prix); $i++) {
//     $tab3[] = $prix[$i] * $quantite[$i]; 
// }

// foreach ($tab3 as $value) {
//     $value;
// }

// $total = array_sum($tab3);
// echo "La somme totale est : " . $total;



// ________________________________ LES TABLEAUX ASSOCIATIFS


// _________ EXERCICE 9.1

// $chomage = array("Autriche" => 4.9,
//                 "Allemagne" => 9.3,
//                 "Danemark" => 4.8,
//                 "Espagne" => 9.4,
//                 "France" => 9.7);


// ___________________________ 1)


// foreach ($chomage as $key => $value) { 


// echo  "Taux de chomage de $key : $value \n";

// }



// ___________________________ 2)


// foreach ($chomage as $key => $value) {
//     if($value < 5)

//     echo "Pays inférieur à 5% : $key : $value \n";
// }


// ____________________________ 3)


// foreach ($chomage as $key => $value) {
//     asort($chomage);
// }

// echo array_key_first($chomage);






// EXERCICE 9.2

// ___________________________ 1)

// $tabNotes = array("boucher"=>16, 
//                 "bourdette"=>13,
//                 "Nezuko"=>20,
//                 "Osselait"=>17,
//                 "Ryuk"=>8);

// // foreach ($tabNotes as $key => $value){
// //     echo "Nom : $key, Note : $value, ";
// // }


// // ____________________________ 2)

// echo array_sum($tabNotes) / count($tabNotes);



// EXERCICE 9.3

$tabNotes = array("Pikachu"=>array(15, 18, 13),
                "Bulbizarre"=>array(8, 19, 12),
                "Carapuce"=>array(16, 11, 2),
                "Salamèche"=>array(13, 14, 19),
                "Osselait"=>array(20, 20, 20),
                "Goupix"=>array(18, 9, 17),
                "Togepi"=>array(13, 20, 18));

// foreach($tabNotes as $key => $value){
//     echo "Nom de l'élève : $key \n";
//     echo "Note de l'élève :" .join(", ", $value). "\n";
// }


foreach ($tabNotes as $key => $value){
    echo "Nom de l'élève : $key \n", "Moyenne de l'élève : " .array_sum($value)/count($value), "\n";
}
