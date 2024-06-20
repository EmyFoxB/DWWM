<?php

class Produits{
    private $nom;
    public $prix;
    public $quantite;

public function getNom(){
    return $this->nom;
}
public function getPrix(){
    return $this->prix;
}
public function getQuantite(){
    return $this->quantite;
}

public function setNom($nom){
    $this->nom = $nom;
}
public function setPrix($prix){
    $this->prix = $prix;
}
public function setQuantite($quantite){
    $this->quantite = $quantite;
}

public function __construct($nom, $prix, $quantite){
    $this->nom = $nom;
    $this->prix = $prix;
    $this->quantite = $quantite;
}

public function afficherProduit(){
    echo "Produit : " . $this->nom . "<br>";
    echo "Prix unitaire : " . $this->prix . " euros" . "<br>";
    echo "Quantité en stock : " . $this->quantite . "<br>";
}

public function mettreAJourPrix($nouveauPrix){
    $this->prix = $nouveauPrix;
}

public function ajouterStock($nouveauStock){
    $this->quantite = $nouveauStock;
}

public function vendreProduit($quantiteVendue){
    if($quantiteVendue <= $this->quantite){
        $this->quantite -= $quantiteVendue;
        echo "Vente réussie ! Le nouveau stock est de : $this->quantite " . "<br>";
    }
    else{
        echo "Vente impossible." . "<br>";
    }
}
}

?>