<?php
//Final serve ad impedire che la classe sia ereditata
final class A {
    protected $nome;
    protected $cognome;

    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function saluta(){
        return "Ciao";
    }

    //__toString() serve a definire cosa fare quando si richiama solo l'oggetto della classe
    public function __toString(){
        return "Sono la classe A e le mie proprietà sono: " . $this->nome . " " . $this->cognome;
    }
}




$a1 = new A("Michele","Sorbo");

echo $a1->saluta();
echo $a1;