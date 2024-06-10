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

// $tabNotes = array("Pikachu"=>array(15, 18, 13),
//                 "Bulbizarre"=>array(8, 19, 12),
//                 "Carapuce"=>array(16, 11, 2),
//                 "Salamèche"=>array(13, 14, 19),
//                 "Osselait"=>array(20, 20, 20),
//                 "Goupix"=>array(18, 9, 17),
//                 "Togepi"=>array(13, 20, 18));

// // foreach($tabNotes as $key => $value){
// //     echo "Nom de l'élève : $key \n";
// //     echo "Note de l'élève :" .join(", ", $value). "\n";
// // }


// foreach ($tabNotes as $key => $value){
//     echo "Nom de l'élève : $key \n", "Moyenne de l'élève : " .array_sum($value)/count($value), "\n";
// }




// ____________________________________________EXERCICE 8.1

// $T = [
//     [54, 62, 2, 46, 31, 41, 94, 6],
//     [78, 62, 5, 43, 57, 91, 7, 32],
//     [87, 12, 42, 8, 64, 22, 3, 17],
//     [41, 12, 68, 4, 9, 26, 43, 55],
//     [62, 49, 57, 36, 1, 6, 44, 13],
//     [98, 74, 69, 27, 50, 18, 9, 65],
//     [71, 20, 53, 4, 16, 58, 84, 47],
//     [99, 56, 83, 2, 67, 41, 28, 15],
//     [11, 61, 17, 72, 77, 95, 57, 37],
//     [90, 23, 61, 85, 4, 94, 69, 33],
//     [88, 14, 6, 59, 62, 24, 83, 91],
//     [75, 66, 77, 82, 7, 96, 44, 18]
// ];

// $maxValue = $T[0][0];


// for ($i = 0; $i < count($T); $i++) {

//     for ($j = 0; $j < count($T[$i]); $j++) {

//         if ($T[$i][$j] > $maxValue) {
//             $maxValue = $T[$i][$j];
//         }
//     }
// }


// echo $maxValue;



// _____________________________ EXERCICE 8.2

// $etoile = "*";

// $tab = [];


// for ($i=1; $i <= 7; $i++) { 
// $ligne = str_repeat($etoile, $i);
// array_push($tab, $ligne);
// }

// for ($i= 6 ; $i >= 1 ; $i--) { 
//     $ligne = str_repeat($etoile , $i);
//     array_push($tab, $ligne);
// }

// foreach ($tab as $ligne) {
// echo $ligne , "\n";
// }




// $tab =[];
// $etoile = "X";
// $rond = "0" ;

// for ($i=0; $i < 8; $i++) { 
//     $ligne = str_repeat($etoile, $i);
    
//     if ($i < 3 || $i > 6) {
//         array_push($tab, $ligne);
//     }else{
//         $ligne = str_repeat($etoile, 1) . str_repeat($rond, $i - 2) . str_repeat($etoile, 1);
//         array_push($tab, $ligne);

//     }
// }

// foreach ($tab as $ligne) {
//     echo $ligne , "\n";
// }



//  ________________________________________ LES FONCTIONS ___________________________



// __________________________________________ EXERCICE 10.1



// require "fonctions.php";

// $prixHT = readline("Entrez le prix HT : ");
// $nombre = readline("Entrez le nombre d'articles : ");

// echo calculTTC($prixHT, $nombre);




// __________________________________________ EXERRCICE 10.2

// $nombre1 = readline('Entrez un nombre entier positif');
// $nombre2 = readline('Entrez un deuxième nombre entier positif');

// echo "le PGCD (Plus grand diviseur commun) de $nombre1 et de $nombre2 est de :" .PGCD($nombre1, $nombre2);




// ______________________________________ EXERCICE REPERTOIRE 1


// $repertoire = [[]];


// // ______________________________________ EXERCICE REPERTOIRE 2



// require "fonctions.php";

// $contact = readline("Entrez un nom : ");

// print_r($contact);

// ______________________________________ EXERCICE REPERTOIRE 3



// $nombre = rand(1, 9);

// echo "Table de multiplication pour : $nombre\n";

// for ($i = 1; $i <= 10; $i++) {
//     $resultat = $nombre * $i;
//     echo "$nombre x $i = $resultat\n";
// } 








// // Tableau vide pour pouvoir y mettre des contacts plus tard
// $repertoire = [];

// // Fonction pour ajouter des contacts
// function PushTabl($nom, $numero) {
//     global $repertoire;
//     array_push($repertoire, [$nom, $numero]);
//     echo "**********************************************\n";
//     echo "Contact ajouté : $nom, $numero\n \n";
//     echo "**********************************************\n";
// }

// // Fonction pour rechercher un contact
// function recherche($nom) {
//     global $repertoire;
//     foreach ($repertoire as $contact) {
//         if ($contact[0] === $nom) {
//             return $contact[1];
//         }
//     }
//     return "Contact non trouvé \n";
// }

// // Fonction pour voir tout les contacts
// function toutVoir() {
//     global $repertoire;
//     if (count($repertoire) === 0) {
//         echo "**********************************\n";
//         echo "Le répertoire est vide.\n";
//         echo "**********************************\n";
//     } else {
//         foreach ($repertoire as $contact) {
            
//             echo "\n".$contact[0] . " " . $contact[1]."\n";
            
//         }
//     }
// }













// // Boucle do While pour rentrer au moin 1 fois dans la boucle
// do {
// $choix1 = 1;
// $choix2 = 2;
// $choix3 = 3;

// echo "Vous souhaitez :\n\n $choix1 : Ajouter un nouveau contact\n $choix2 : Recherchez un contact\n $choix3 : Rechercher Tout contact\n\n";

// $choix = readline("Que voulez-vous faire ? ");

// // Switch pour traiter le choix que l'utilisateur veux faire
//     switch ($choix) {
//         case $choix1:
//             // Rappel de fonction pour ajouter des contacts
//         $nom = readline("Entrez le prénom de la personne : ");
//         $numero = readline("Entrez le numéro de téléphone : ");
//         PushTabl($nom, $numero);
//             break;
    
//         case $choix2:
//             // Rappel de fonction pour rechercher un contact
//         $nomRecherche = readline("Entrez le prénom de la personne à rechercher : ");
//         $resultatRecherche = recherche($nomRecherche);
//         echo "**********************************************************************\n";
//         echo $nomRecherche." a ce numéro : ". $resultatRecherche. "\n";
//         echo "**********************************************************************\n";
//             break;
    
//         case $choix3:
//             // Rappel de fonction pour voir tout les contacts
//         toutVoir();
//             break;
    
//         default:
//         // Si il fait un choix hors de ceux proposé
//             echo "Merci de saisir un choix valide !";
//             break;
//     }
//     // Demande pour continuer ou sortir de la boucle
//     $choix = readline("Voulez-vous faire autre chose dans votre menu ? ");
//     // Strtolower pour que même si il met en majuscule ca met en minuscule et valide la condition
//     $choix = strtolower($choix);
// } while ($choix == "oui" || $choix == "yes" || $choix == "y");

// // Fin de programme et de la boucle
// echo "Merci au revoir";