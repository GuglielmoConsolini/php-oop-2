<?php

class Cibo extends Prodotto {

    public $peso;

    public function __construct($primoArgomento, $secondoArgomento, Categoria $terzoArgomento, $peso) 
    {
        $this->nome = $primoArgomento;
        $this->prezzo = $secondoArgomento;
        $this->categoria = $terzoArgomento;
        $this->peso = $peso;
    }


}