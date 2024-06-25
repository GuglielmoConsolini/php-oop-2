<?php

class Prodotto {
 
    public $nome;
    public $prezzo;
    public $categoria;
    public $immagine;


    public function __construct($primoArgomento,$secondoArgomento,Categoria $terzoArgomento)
    {
        $this->nome = $primoArgomento;
        $this->prezzo = $secondoArgomento;
        $this->categoria = $terzoArgomento;
    }

}