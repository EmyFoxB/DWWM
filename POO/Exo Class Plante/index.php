<?php

require_once "Rose.class.php";

$rose = new Rose("Rose", "Fleur", 30, "pas ouf", "Rosacée", "rose", "Avec");

$rose->afficherRose();

$rose->setCouleur("bleu");

$rose->afficherRose();



?>