<?php

$host = '127.0.0.1';
$port = '3306';
$db = 'entreprise';
$user = 'root';
$pwd = '';
$charset = 'utf8mb4';
// dsn = data source name
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Gestion des erreurs :

try{
    $pdo = new PDO($dsn, $user, $pwd, $options);
    echo "Connexion réseau à la base de données réussie";
}catch(PDOException $e){
    throw new PDOException($e->getMessage(),(int)$e->getCode());
}

?>