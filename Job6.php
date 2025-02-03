<?php

class Personnage {
    // Attributs représentant la position du personnage dans le tableau
    private $x;
    private $y;

    // Constructeur qui initialise la position avec les valeurs passées en paramètres
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour déplacer le personnage vers la gauche (décrémente x)
    public function gauche() {
        $this->x--;
    }

    // Méthode pour déplacer le personnage vers la droite (incrémente x)
    public function droite() {
        $this->x++;
    }

    // Méthode pour déplacer le personnage vers le haut (décrémente y)
    public function haut() {
        $this->y--;
    }

    // Méthode pour déplacer le personnage vers le bas (incrémente y)
    public function bas() {
        $this->y++;
    }

    // Méthode qui retourne la position actuelle sous forme de chaîne
    public function position() {
        return "Position actuelle : (" . $this->x . ", " . $this->y . ")";
    }
}

// Exemple d'utilisation de la classe Personnage :

// Création d'un personnage avec une position initiale (par exemple x = 3 et y = 4)
$personnage = new Personnage(3, 4);

// Affichage de la position initiale
echo $personnage->position() . "<br>";

// Déplacement du personnage
$personnage->gauche();
echo "Après déplacement à gauche : " . $personnage->position() . "<br>";

$personnage->droite();
echo "Après déplacement à droite : " . $personnage->position() . "<br>";

$personnage->haut();
echo "Après déplacement vers le haut : " . $personnage->position() . "<br>";

$personnage->bas();
echo "Après déplacement vers le bas : " . $personnage->position() . "<br>";

?>
