<?php

// if(isset($_POST['mdp'])){
//     $mdp = $_POST['mdp'];
//     $mdp2 = $POST['mdp2'];
//     $minuscule = "/[a-z]/";
//     $majuscule = "/[A-Z]/";
//     $caracteres = "/[&é'(èçà)=.,]/";
//     $chiffre = "/[0-9]/";


//     if(preg_match('/^.{8,}$/', $mdp)){
//         echo "Mot de passe valide";
//     }else{
//         echo "Le mot de passe doit contenir 8 caractères";
//     } 
//     if(preg_match($majuscule, $mdp)){
//         echo "Mot de passe valide";
//     }else{
//         echo "Le mot de passe doit contenir au moins une majuscule";
//     } 
//     if(preg_match($minuscule, $mdp)){
//         echo "Mot de passe valide";
//     }else{
//         echo "Le mot de passe doit contenir au moins une minuscule";
//     } 
//     if(preg_match($caracteres, $mdp)){
//         echo "Mot de passe valide";
//     }else{
//         echo "Le mot de passe doit contenir au moins un caractère spécial (&é'(èçà)=.,)";
//     } 
//     if(preg_match($chiffre, $mdp)){
//         echo "Mot de passe valide";
//     }else{
//         echo "Le mot de passe doit contenir au moins un chiffre";
//     } 
//     if($mdp !== $mdp2){
//         echo "Les deux mots passes ne sont pas identiques";
//     }else{
//         "Mot de passe valide";
//     }

// }else{
//     echo "Veuillez soumettre le formulaire";
// }

if(isset($_POST['mdp'])){
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    $minuscule = "/[a-z]/";
    $majuscule = "/[A-Z]/";
    $caracteres = "/[&é'(èçà)=.,]/";
    $chiffre = "/[0-9]/";



    if(!preg_match('/^.{8,}$/', $mdp)){
        echo "Le mot de passe doit contenir 8 caractères<br>";
    }
    if(!preg_match($majuscule, $mdp)){
        echo "Le mot de passe doit contenir au moins une majuscule<br>";
    }
    if(!preg_match($minuscule, $mdp)){
        echo "Le mot de passe doit contenir au moins une minuscule<br>";
    } 
    if(!preg_match($caracteres, $mdp)){
        echo "Le mot de passe doit contenir au moins un caractère spécial (&é'(èçà)=.,)<br>";
    }
    if(!preg_match($chiffre, $mdp)){
        echo "Le mot de passe doit contenir au moins un chiffre<br>";;
    }
    if($mdp !== $mdp2){
        echo "Les deux mots passes ne sont pas identiques<br>";
    }

else{
    echo "Veuillez soumettre le formulaire";
}}


?>