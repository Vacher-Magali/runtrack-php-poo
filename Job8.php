<?php

class Produit {
    // Attributs privés du produit
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur qui initialise le nom, le prix hors taxe et la TVA
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom    = $nom;
        $this->prixHT = $prixHT;
        $this->TVA    = $TVA;
    }

    // Méthode qui calcule et retourne le prix TTC
    public function CalculerPrixTTC() {
        // Formule : Prix TTC = Prix HT * (1 + TVA/100)
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    // Méthode qui retourne toutes les informations du produit sous forme de chaîne de caractères
    public function afficher() {
        $infos  = "Produit : " . $this->nom . "\n";
        $infos .= "Prix HT : " . $this->prixHT . " €\n";
        $infos .= "TVA : " . $this->TVA . " %\n";
        $infos .= "Prix TTC : " . $this->CalculerPrixTTC() . " €";
        return nl2br($infos); // Conversion des retours à la ligne pour affichage HTML
    }

    // Méthode permettant de modifier le nom du produit
    public function modifierNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    // Méthode permettant de modifier le prix HT du produit
    public function modifierPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthodes "getter" pour retourner chaque information du produit
    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->TVA;
    }
}

// ==================================================================
// Utilisation de la classe Produit dans un script de test
// ==================================================================

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 1000, 20);
$produit2 = new Produit("Smartphone", 500, 20);
$produit3 = new Produit("Tablette", 300, 20);

// Affichage des informations initiales de chaque produit
echo "<h3>Informations initiales :</h3>";
echo $produit1->afficher() . "<br><br>";
echo $produit2->afficher() . "<br><br>";
echo $produit3->afficher() . "<br><br>";

// Modification du nom et du prix HT de chaque produit
$produit1->modifierNom("Ordinateur Portable");
$produit1->modifierPrixHT(1200);

$produit2->modifierNom("Smartphone Haut de Gamme");
$produit2->modifierPrixHT(700);

$produit3->modifierNom("Tablette Pro");
$produit3->modifierPrixHT(400);

// Affichage des informations après modification
echo "<h3>Après modification :</h3>";
echo $produit1->afficher() . "<br><br>";
echo $produit2->afficher() . "<br><br>";
echo $produit3->afficher() . "<br>";

?>