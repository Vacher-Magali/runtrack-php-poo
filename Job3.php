<?php

class Personne {
    // Déclaration des attributs
    public $nom;
    public $prenom;

    // Constructeur qui initialise les attributs
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode SePresenter() qui retourne une chaîne de présentation
    public function sePresenter() {
        return "Je suis " . $this->prenom . " " . $this->nom;
    }
}

$personne1 = new Personne("Doe", "John");
$personne2 = new Personne("Dupon", "Jean");

// Affichage des présentations
echo $personne1->sePresenter() . "<br>";
echo $personne2->sePresenter();

?>