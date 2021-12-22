<?php


class Movie {
    // PROPRIETA
    public $titolo;
    public $autore;
    public $trama;
    public $anno;
    public $prezzoBiglietto;
    public $scontoEta = 5;



// COSTRUTTORE   
function __costruct($titolo, $autore, $trama, $anno ) {
    echo "Istanza<br>";
    $this->titolo = $titolo;
    $this->autore = $autore;
    $this->trama = $trama;
    $this->anno = $anno;
  }

 



}