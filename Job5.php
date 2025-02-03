<?php

class Animal {
    // Attributs de la classe
    public $age;
    public $prenom;

    // Constructeur qui initialise l'âge à 0 et le prénom à une chaîne vide
    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    // Méthode pour faire vieillir l'animal d'une année
    public function vieillir() {
        $this->age++;
    }

    // Méthode pour nommer l'animal
    public function nommer($nom) {
        $this->prenom = $nom;
    }
}

// Instanciation de l'objet Animal
$animal = new Animal();

// Affichage de l'âge initial de l'animal
echo "L'âge de l'animal : " . $animal->age . " ans<br>";

// Vieillissement de l'animal
$animal->vieillir();

// Affichage de l'âge de l'animal après avoir vieilli
echo "L'âge de l'animal après appel de la méthode vieillir : " . $animal->age . " ans<br>";

// Nommer l'animal
$animal->nommer("Luna");

// Affichage du nom de l'animal
echo "L'animal se nomme " . $animal->prenom . "<br>";

?>
