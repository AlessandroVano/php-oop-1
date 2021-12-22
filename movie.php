<?php


class Movie {
    // PROPRIETA
    public $titolo;
    public $autore;
    public $trama;
    public $anno;
    public $eta;
    public $scontoEta = 5;



// COSTRUTTORE   
function __costruct($titolo, $autore, $trama, $anno ) {
    echo "Istanza<br>";
    $this->titolo = $titolo;
    $this->autore = $autore;
    $this->trama = $trama;
    $this->anno = $anno;
  }

  // METODI

  public function setAge($eta) {
      $this->eta = $eta;
  }

  public function getScontoEta() {
      if($this->eta > 75) {
          $this->scontoeta = 40;
      }

       return $this->scontoeta;
  }
}


