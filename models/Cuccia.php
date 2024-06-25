<?php

class Cuccia extends Prodotto {

    public $dimensioni;

    public function __construct($primoArgomento, $secondoArgomento, Categoria $terzoArgomento, $dimensioni) 
    {
        $this->nome = $primoArgomento;
        $this->prezzo = $secondoArgomento;
        $this->categoria = $terzoArgomento;
        $this->dimensioni = $dimensioni;
    }

}