<?php

class Point {
    // Déclaration des attributs privés x et y
    private $x;
    private $y;

    // Constructeur qui initialise les coordonnées du point
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode qui affiche les coordonnées complètes du point
    public function afficherLesPoints() {
        echo "Coordonnées du point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode qui affiche uniquement la coordonnée x
    public function afficherX() {
        echo "x = " . $this->x . "<br>";
    }

    // Méthode qui affiche uniquement la coordonnée y
    public function afficherY() {
        echo "y = " . $this->y . "<br>";
    }

    // Méthode pour changer la valeur de x
    public function changerX($nouvelleX) {
        $this->x = $nouvelleX;
    }

    // Méthode pour changer la valeur de y
    public function changerY($nouvelleY) {
        $this->y = $nouvelleY;
    }
}

// Exemple d'utilisation de la classe Point

// Création d'une instance de Point avec des coordonnées initiales
$point = new Point(3, 4);

// Affichage des coordonnées complètes
$point->afficherLesPoints();

// Affichage séparé de x et y
$point->afficherX();
$point->afficherY();

// Modification des coordonnées
$point->changerX(10);
$point->changerY(20);

// Affichage après modification
echo "Après modification :<br>";
$point->afficherLesPoints();

?>
