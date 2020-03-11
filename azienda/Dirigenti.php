<?php 
  require_once 'Dipendenti.php';


  class Dirigenti extends Dipendenti 
  {
    private $bonus;
    private $investimenti;
    
    public function setBonus($_bonus)
    {
      if (!is_numeric($_bonus)) {
        throw new Exception('Spiacente non hai inserito un numero');
      } else {
        $this->bonus = $_bonus;
      }
    }

    public function getBonus()
    {
      return $this->bonus;
    }

    public function getStipendioBonus($_orario, $prezzoUnitario, $_bonus)
    {
      return $this->stipendio = ($_orario * $prezzoUnitario) + $_bonus;
    }
  }
