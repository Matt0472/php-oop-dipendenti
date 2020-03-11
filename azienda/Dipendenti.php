<?php 
  class Dipendenti {
    private $matricola;
    private $nome;
    private $cognome;
    private $indirizzo;
    private $cf;
    private $iban;
    private $mansioneId;
    private $orario;
    private $stipendio;
    public function __construct($_matricola, $_nome, $_cognome)
    {
      if (!is_numeric($_matricola)) {
        throw new Exception('La matricola è sbagliata');
      } else {
        $this->matricola = $_matricola;
      }
      
      if (!is_string($_nome)) {
        throw new Exception('Spiacente non hai inserito un nome');
      }else {
        $this->nome = $_nome;
      }
      if (!is_string($_cognome)) {
        throw new Exception('Spiacente non hai inserito un cognome');
      }else {
        $this->cognome = $_cognome;
      }
    }

    public function setOrario($_orario) {
      if (!is_numeric($_orario)) {
        throw new Exception('Spiacente non hai inserito un numero');
      } else {
        $this->orario = $_orario;
      }
    }

    public function getOrario()
    {
      return $this->orario;
    }

    public function getStipendio($_orario, $prezzoUnitario)
    {
      return $this->stipendio = $_orario * $prezzoUnitario;
    }
  }


?>