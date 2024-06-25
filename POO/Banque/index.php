<?php

require_once "Client.class.php";
require_once "Compte.class.php";
require_once "iConsultation.php";

$client1 = new Client("Client1", []);
$client2 = new Client("Client2", []);

$courantA = new Compte("Compte courant A", 0);
$epargneA = new Compte("Epargne A", 0);

$courantB = new Compte("Compte courant B", 0);
$epargneB = new Compte("Epargne B", 0);

$saisie = readline("Entrez votre identifiant : ");

switch($saisie){
    case 1 :
        $saisie = "client1";
        $this->afficherSesInfos();
        break;
    case 2 :
        $saisie = "client2";
        $this->afficherSesInfos();
        break;
}


?>