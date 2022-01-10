<?php

class Utente  {
    protected $nome;
    protected $cognome;
    protected $prezzo;

    //constructor

    public function __construct($nome, $cognome, $età) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->prezzo = $prezzo;
    }

    //SetPublic

    public function getName(){
        $nome = $this->nome;
        return $nome;
    }

    public function getSurname(){
        $cognome = $this->cognome;
        return $cognome;
    }

    public function getPrice(){
        $prezzo = $this->prezzo;
        return $prezzo;
    }
}
