<?php 
  require_once 'Dipendenti.php';

  class Amministrativo extends Dipendenti 
  {
    private $fatture;
    private $gestionale;
    public function __construct($_matricola, $_nome, $_cognome, $_fatture, $_gestionale)
    {
      parent::__construct($_matricola, $_nome, $_cognome);
      $this->fatture = $_fatture;
      $this->gestionale = $_gestionale;
    }
  }

?>