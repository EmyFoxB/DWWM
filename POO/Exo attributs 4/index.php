<?php

require_once "produits.php";

$pomme = new Produits ("Pomme", "0.30", "50");

$pomme->afficherProduit();

$pomme->mettreAJourPrix(0.35);
$pomme->afficherProduit();

$pomme->ajouterStock(100);
$pomme->afficherProduit();

$pomme->vendreProduit(12);
$pomme->afficherProduit();
?>