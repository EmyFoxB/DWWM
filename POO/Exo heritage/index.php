<?php

require_once "Employe.php";
require_once "manager.php";

$employe = new Employe("Alice", "50000");
$manager = new Manager("Bob", "70000", []);

$employe-> afficherDetails();
$manager->ajouterEmploye($employe);
$manager->afficherDetail();

?>