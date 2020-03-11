<?php 
  class Dipendenti {
    private $matricola;
    private $nome;
    private $cognome;
    private $indirizzo;
    private $cf;
    private $iban;
    private $mansioneId;
    private $orari;
    public function __construct($_matricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_mansioneId, $_orari)
    {
      $this->matricola = $_matricola;
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->indirizzo = $_indirizzo;
      $this->cf = $_cf;
      $this->iban = $_iban;
      $this->mansioneId = $_mansioneId;
      $this->orari = $_orari;
    }
  }


?>