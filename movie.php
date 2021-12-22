<?php


class Movie {
    // PROPRIETA
    public $titolo;
    public $autore;
    public $trama;
    public $anno;
    public $eta;
    public $scontoeta = 5;



// COSTRUTTORE   
function __construct($titolo, $autore, $trama, $anno ) {
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


  // MOVIE 1


  $movie1 = new Movie('Jurassic Park', 'Michael Crichton', 'Due paleontologi e un matematico sono tra le persone selezionate per partecipare a un giro organizzato a un parco a tema. Quando i dinosauri si animano e prendono il sopravvento, però, la visitasi trasforma presto in un incubo.', '1993');


  $movie1->setAge(28);

  var_dump($movie1);


  // SCONTO  

  $scontoFilm = $movie1->getScontoEta();

  echo "Lo sconto per la tua età è $scontoFilm% ";


  echo '<hr>';