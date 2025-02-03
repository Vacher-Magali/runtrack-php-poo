<?php
class opération {
  Public $numero1;
  Public $numéro2;
  
  Public function __construct ($nombre1 = 5 , $nombre2 = 10){
    $this ->nombre1 = $nombre1;
    $this ->nombre2 = $nombre2;

  }
}
  $operation = new operation ();

  echo "nombre1: " . $operation->nombre1 . "<br>";
  echo "nombre2: " . $operation->nombre2 . "<br>";

 
?>