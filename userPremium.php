<?php
require_once __DIR__ . '/user.php'
?>

<?php

class UtentePrime extends Utente{

    protected $prezzoScontato;

    public function __construct($nome, $cognome, $prezzo){

            parent:: __construct($nome, $cognome, $prezzo);
    }
    public function getPrezzoScontato(){
        $prezzoScontato = $this->prezzoScontato;
        return $prezzoScontato;
    }

    public function setPrezzoScontato(){
        $prezzoScontato = $this->getPrice() - 10;
        return $prezzoScontato;
    }
    public function valoreSconto(){
        $sconto = ($this->getPrice() - $this->setPrezzoScontato());
        return $sconto;
    }
}
?>