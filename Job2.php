<?php

class Operation {
    // Déclaration des attributs
    public $nombre1;
    public $nombre2;

    // Constructeur avec des valeurs par défaut
    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
    
    // Méthode addition() qui additionne nombre1 et nombre2 et affiche le résultat
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Le résultat de l'addition est : " . $resultat . "<br>";
    }
}

// Instanciation de la classe Operation avec des valeurs d'exemple
$operation = new Operation(5, 10);

// Affichage des attributs
echo "Nombre1 : " . $operation->nombre1 . "<br>";
echo "Nombre2 : " . $operation->nombre2 . "<br>";

// Appel de la méthode addition() pour afficher le résultat de l'addition
$operation->addition();

?>
