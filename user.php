<?php

class Utente  {
    protected $nome;
    protected $prodotto;
    protected $prezzo;

    //constructor

    public function __construct($nome, $prodotto, $prezzo) {
        $this->nome = $nome;
        $this->prodotto = $prodotto;
        $this->prezzo = $prezzo;
    }

    //SetPublic

    public function getName(){
        $nome = $this->nome;
        return $nome;
    }

    public function getSurname(){
        $prodotto = $this->prodotto;
        return $prodotto;
    }

    public function getPrice(){
        $prezzo = $this->prezzo;
        return $prezzo;
    }
}
