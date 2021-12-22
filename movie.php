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
function __construct($titolo, $autore, $trama, $anno, $voto ) {
    echo "Istanza<br>";
    $this->titolo = $titolo;
    $this->autore = $autore;
    $this->trama = $trama;
    $this->anno = $anno;
    $this->voto = $voto;
    $this->setFilmRaccomandato();
    
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

  public function setFilmRaccomandato() {
      if($this->voto > 6) {
          $this->raccomandato = true;
          echo 'ottimo film consigliato per tutti';
      } else {
        $this->raccomandato = false;
        echo 'vi prego non andate al cinema';

      }
  }
}


  // MOVIE 1


  $movie1 = new Movie('Jurassic Park', 'Michael Crichton', 'Due paleontologi e un matematico sono tra le persone selezionate per partecipare a un giro organizzato a un parco a tema. Quando i dinosauri si animano e prendono il sopravvento, però, la visitasi trasforma presto in un incubo.', '1993', 9);


  $movie1->setAge(28);

  var_dump($movie1);


  // SCONTO  

  $scontoFilm = $movie1->getScontoEta();

  echo "Lo sconto per la tua età è $scontoFilm% ";


  echo '<hr>';

  // MOVIE 2


  $movie2 = new Movie('Il Signore degli Anelli', 'Peter Jackson', 'Mentre Frodo e Sam, accompagnati da Gollum, proseguono il loro viaggio verso Monte Fato per distruggere l\anello, il resto della compagnia corre in soccorso di Rohan e Gondor, impegnati nella battaglia dei Campi del Pellenor..', '2004', 10);


  $movie2->setAge(82);

  var_dump($movie2);


  // SCONTO  

  $scontoFilm = $movie2->getScontoEta();

  echo "Lo sconto per la tua età è $scontoFilm% ";




  echo '<hr>';


   // MOVIE 3


   $movie3 = new Movie('Me contro Te', 'Gianluca Leuzzi', 'Luì e Sofì sono una gioiosa e sorridente coppia di fidanzati, ma il temibile Signor S decide di dare loro dei problemi. Dopo averli catturati, il misterioso nemico crea due cloni della coppia, molto meno simpatici.', '2020', 1);


   $movie3->setAge(12);
 
   var_dump($movie3);
 
 
   // SCONTO  
 
   $scontoFilm = $movie3->getScontoEta();
 
   echo "Lo sconto per la tua età è $scontoFilm% ";
 
 
 
 
   



