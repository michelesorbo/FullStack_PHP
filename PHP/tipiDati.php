<?php 
//I tipi di dato in php 
$numero = 2; //int 
$float = 3.8; //Numeri con le virgole
$boolenai = true; //Valori vero falso
$str = "Stringa"; //Tipo Stringa
$carattere = 'c'; //Singolo carattere
$ar_es = [1,4,5]; //Array
$val_nul = null; //Dichiare una variabile nulla 
$var_vuota = ""; //Variabile stringa vuota

class Persona {
    public $nome;
    public $cognome;

    //Ogno classe deve avere un costruttore
    public function __construct($nome,$cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

//Tipo di doato Oggetto
$persona1 = new Persona("Michele","Sorbo"); //Tipo di dati Oggetto

echo $persona1->nome;
?>