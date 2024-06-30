<?php

// Création d'une fonction pour se connecter à la BDD
function getPDOConnection(){
    // host = hébergeur
    $host = 'localhost';
    // port mysql clic droit outils
    $port = '3306';
    $db = 'repertoire';
    // à communiquer plus tard via hébergeur
    $user = 'root';
    $pass = '';
    // encodage
    $charset = 'utf8mb4';

    // Data Source Name
    // A ne jamais modifier
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    $options = [
        // NE CHANGE PAS
        // Gestion d'erreurs
        PDO::ATTR_ERRMODE                   =>PDO::ERRMODE_EXCEPTION,
        // Définit le mode de récupération des résultats (sous forme de tableau associatif fetch_assoc)
        PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
        // Utilisation de requêtes préparées. 4 lignes. Permet de sécurier la connexion à la BDD.
        PDO::ATTR_EMULATE_PREPARES          => false,
        // Opérateur de résolution de portée : " :: "
    ];

    // Try = essayer
    // Catch = attraper

    try{
        return new PDO($dsn,$user,$pass,$options);
        // $e = erreur
    }catch(PDOException $e){
        throw new PDOException($e->getMessage(),(int)$e->getCode());
    }

}

?>