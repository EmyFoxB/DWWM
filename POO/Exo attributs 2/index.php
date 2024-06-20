<?php
require_once "voiture.php";

$p308 = new Voiture("Peugeot","308","2019", "Gris", "0");

$p308 -> afficher();

$p308->accelerer();
$p308->afficher();

?>