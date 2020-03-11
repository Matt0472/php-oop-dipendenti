<?php 
  require_once 'Dipendenti.php';
  require_once 'Dirigenti.php';
  require_once 'Amministrativo.php';

  try {
    $dipendente_1 = new Dipendenti(12345, 'nnnnnn','ggggggg');
  } catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
  }
  $dipendente_1->setOrario(9);
  $dipendente_1->getStipendio($dipendente_1->getOrario(), 60);
  var_dump($dipendente_1);

try {
  $dirigente_1 = new Dirigenti(125454577, 'nnnnnnggg', 'gggggggyyy');
} catch (Exception $e) {
  echo 'Errore: ' . $e->getMessage();
}

$dirigente_1->setBonus(100);
$dirigente_1->setOrario(9);
$dirigente_1->getStipendioBonus($dirigente_1->getOrario(), 70, $dirigente_1->getBonus());
var_dump($dirigente_1);
?>