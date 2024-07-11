<?php

require_once "./entities/Paypal/Paiement.class.php";
require_once "./entities/Stripe/Paiement.class.php";

// Pour indiquer le chemin une seule fois
use \entities\Paypal\Paiement as PaypalPaiement;
use \entities\Stripe\Paiement;

// et permettre de ne pas l'écrire ici
$paiementPaypal = new PaypalPaiement();
$paiementStripe = new Paiement();

var_dump($paiementPaypal) . "<br>";
var_dump($paiementStripe) . "<br>";