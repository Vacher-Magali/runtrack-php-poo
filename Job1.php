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
}

// Instanciation de la classe Operation avec les valeurs par défaut
$operation = new Operation();

// Affichage des attributs
echo "Nombre1 : " . $operation->nombre1 . "<br>";
echo "Nombre2 : " . $operation->nombre2 . "<br>";

?>