<?php

$employes=[];

function ajouterEmploye(&$employes, $identifiant, $nom, $poste, $salaire){
    $employes[$identifiant] = [
        "nom" => $nom,
        "poste" => $poste,
        "salaire" => $salaire
    ];
    echo $employes;
}