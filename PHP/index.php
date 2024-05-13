<?php

// $joueur = "Toto";
// $age = 20;

// // "\n" = retour à la ligne dans la console

// echo "Nom du joueur : " . $joueur . "\n"; 
// echo "Age du joueur : " . $age . "\n";


// // $age = $age +1;
// $age++;
// // $age--;
// echo "Age du joueur : " . $age;


// string
// $a = "Hello world";

// // int
// $b = 1;

// // float = double
// $c = 3.14;

// // boolean
// $d = true;

// echo $a . "\n";
// echo $b . "\n";
// echo $c . "\n";
// echo $d . "\n";

// // connaître le type de variable
// echo gettype ($a);

// $operation = 2 + 2 * 5;
// echo $operation;

// déclarer une constante 1 :
// define("MACONST","Hello");
// echo MACONST;
// // MACONST = "Hello World"; ===> ne fonctionne car on ne peut pas modifier une constante

// // déclarer une constante 2 :
// const PI = 3.14;

// if(true){
//     define("MACONST","Hello");
// }else{
//     define("MACONST","Hello World");
// }

// $saisie = readline("Saisir un nombre : ");
// echo $saisie;

// $age = 10;
// if($age === 10){
//     echo "Age est égal à 10";
// }else{
//     echo "N'est pas égal à 10";
// }

// $nbre = 10;

// if($nbre > 50){
//     echo "Supérieur à 50";
// }elseif($nbre > 20){
//     echo "Supérieur à 20";
// }elseif($nbre > 5){
//     echo "Supérieur à 5";
// }else{
//     echo "Inférieur à 5";
// }
// echo"********************************\n";

// if($nbre > 50):
//     echo "Supérieur à 50";
// elseif($nbre > 20):
//     echo "Supérieur à 20";
// elseif($nbre > 5):
//     echo "Supérieur à 5";
// else:
//     echo "Inférieur à 5";
// endif;

// $prenom = "Jean";

// switch($prenom){
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul":
//         echo "Bonjour Paul";
//         break;
//     case "Pierre":
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de nom";
//         break;
// }

// // ------------------------------------ même chose écrite différemment :

// switch($prenom):
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul":
//         echo "Bonjour Paul";
//         break;
//     case "Pierre":
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de nom";
// endswitch;


// $prenom ="Jean";

// $resultat = match($prenom){
//     "Jean" => "Bonjour Jean",
//     "Paul" => "Bonjour Paul",
//     default => "Qui êtes-vous ?"
// };
// echo $resultat;

// // ---------------------------------- même chose écrite différemment :

// $prenom = "Jean";

// echo match($prenom){
//     "Jean" => "Bonjour Jean",
//     "Paul" => "Bonjour Paul",
//     default => "Qui êtes-vous ?"
// };


// $age = 10;
// $isAllowed;
// if($age > 10){
//     $isAllowed = true;
// }else{
//     $isAllowed = false;
// }

// // correspond à :

// $age = 10;
// $isAllowed = $age > 10 ? true : false;


// fusion null
// $a = null;
// $b = "hello";
// $c;

// if($a){
//     $c = $a;
// }elseif($b){
//     $c = $b;
// }else{
//     $c = "Inconnue";
// }
// echo $c;

// correspond à :

// $a = null;
// $b = "hello";
// $c;

// $c = $a ?? $b ?? "inconnue";
// echo $c;