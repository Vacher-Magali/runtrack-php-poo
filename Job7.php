<?php

class Cercle {
    // Attribut privé pour le rayon du cercle
    private $rayon;

    // Constructeur qui initialise le rayon du cercle
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    // Méthode pour modifier le rayon du cercle
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    // Méthode pour afficher les informations du cercle
    public function afficherInfos() {
        echo "Cercle de rayon : " . $this->rayon . "<br>";
    }

    // Méthode qui retourne la circonférence du cercle
    public function circonference() {
        return 2 * pi() * $this->rayon;
    }

    // Méthode qui retourne le diamètre du cercle
    public function diametre() {
        return 2 * $this->rayon;
    }

    // Méthode qui retourne l'aire du cercle
    public function aire() {
        return pi() * pow($this->rayon, 2);
    }
}

// Création de deux cercles avec des rayons 4 et 7
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations pour le premier cercle
echo "Informations du premier cercle :<br>";
$cercle1->afficherInfos();
echo "Circonférence : " . $cercle1->circonference() . "<br>";
echo "Diamètre : " . $cercle1->diametre() . "<br>";
echo "Aire : " . $cercle1->aire() . "<br><br>";

// Affichage des informations pour le deuxième cercle
echo "Informations du deuxième cercle :<br>";
$cercle2->afficherInfos();
echo "Circonférence : " . $cercle2->circonference() . "<br>";
echo "Diamètre : " . $cercle2->diametre() . "<br>";
echo "Aire : " . $cercle2->aire() . "<br>";

?>