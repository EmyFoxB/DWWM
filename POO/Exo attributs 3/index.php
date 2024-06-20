<?php

require_once "stagiaire.php";

$gaetan = new Stagiaire("Gaetan", array(17, 18, 20));

$gaetan->calculerMoyenne();

$gaetan->trouverMinEtMax();

$gaetan->afficher();
?>