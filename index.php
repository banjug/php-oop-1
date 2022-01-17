<?php

/**
* DEFINIRE CLASSE Film:
*      Attributi:
*      - titolo
*      - sottotiolo
*      - regista
* 
*      Metodi:
*      - costruttore che accetta titolo
*      - getFullTitle: 
*          Se sottotitolo presente:
*            restituisce "titolo: sottotitolo" 
*          Se sottotiolo assente:
*            restituisce "titolo" 
*      - __toString: 
*          Se regista presente:
*            restituisce "fullTitle | regista"
*          Se regista assente:
*            restituisce "fullTitle | ???"
* 
* UTILIZZO OGGETTI Film:
* 
*      Generare 3 istanze della classe Film:
*      - uno con solo il titolo
*      - uno con titolo e sottotitolo
*      - uno con titolo, sottotiolo e regista
* 
*      Stampare tutti gli oggetti tramite toString (implicito)
* 
*  RISULTATO ATTESO:
* 
*      Matrix | ???
*      Fantozzi 2: il ritorno di fantozzi | ???
*      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
*/

class Film {
    public $titolo;
    public $sottotitolo;
    public $regista;

    public function __construct($titolo){
        $this -> titolo = $titolo;
    }

    public function getFullTitle(){
        if (!$this->sottotitolo) {
            return $this->titolo;
        } else {
            return $this->titolo . ": " . $this->sottotitolo;
        }
    }

    public function __toString(){
        if (!$this->regista) {
            return $this->getFullTitle() . " | ???";
        } else {
            return $this->getFullTitle() . " | " . $this->regista;
        }
    }
}

$f1 = new Film("Matrix");

$f2 = new Film("Fantozzi 2");
$f2 -> sottotitolo = "Il ritorno di Fantozzi";

$f3 = new Film("Peter Pan 2");
$f3 -> sottotitolo = "Il ritorno all'isola che non c'è";
$f3 -> regista = "Robin Budd";

echo $f1 . "<br>";
echo $f2 . "<br>";
echo $f3 . "<br>";

?>