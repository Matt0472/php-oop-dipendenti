<?php 
  require_once 'Dipendenti.php';
  require_once 'Dirigenti.php';
  require_once 'Amministrativo.php';

  $dirigente_1 = new Dirigenti('fffffffff', 'gianuario', 'fiore', 'via la vespa', 'hhhhhhhh', 'jjjjjjjjj', 6, '9-18', 20);

  var_dump($dirigente_1);
?>