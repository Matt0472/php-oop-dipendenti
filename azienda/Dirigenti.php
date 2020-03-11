<?php 
  require_once 'Dipendenti.php';


  class Dirigenti extends Dipendenti 
  {
    private $bonus;
    public function __construct($_matricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_mansioneId, $_orari, $_bonus)
    {
      parent::__construct($_matricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_mansioneId, $_orari);
      $this->bonus = $_bonus;
    }
  }

?>