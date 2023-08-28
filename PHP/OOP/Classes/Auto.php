<?php

class Auto {
    //Proprietà della classe. Devo specificare il tipo di visiilità della
    //proprietà (public, private, proected)
    //Public = la propietà (variabile) è visibile da tutti
    //Private = la proprietà è visibile solo nella classe
    //Protected = la proprietà è visibile nella classe e nei suoi figli
    protected $marca;
    protected $colore;
    protected $modello;

    //Costruttore di una classe è il primo metodo chiata quando si inizializza un oggetto
    public function __construct($marca, $colore = null, $modello = null)
    {
        $this->marca = $marca; //La key $this serve come riferimento alle proprità della classe
        $this->colore = $colore;
        $this->modello = $modello;
    }

    //Incapsulamneto creo i get e set delle proprietà
    public function setMarca($newMarca){
        $this->marca = $newMarca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setColore($newColore){
        //Se il colore è Nero, Verde, Blue, Grigio ok altrimenti inserire sempre Nero come colore
        //Come fare senza usare if condizione && condizione https://www.w3schools.com/php/func_array_in_array.asp
        $colori = ["Nero","Verde","Blue","Grigio"];
        if(in_array($newColore, $colori)){
            $this->colore = $newColore;
        }else{
            $this->colore = "Nero";
        }
    }

    public function getColore(){
        return $this->colore;
    }

    public function setModello($newModello){
        $this->modello = $newModello;
    }

    public function getModello(){
        return $this->modello;
    }

    //Metodi della Classe (cioè le funzioni della classe)
    public function getCarInfo(){
        return "Maraca: " . $this->marca . " Colore: " . $this->colore . " Modello: " . $this->modello . "<br>";
    }
}


//Creo un oggetto della classe Auto (signifca che assegno ad una variabile tutte le 
//Caratteristiche della classe Auto, dalle proprietà ai  medoti)

$auto1 = new Auto("AUDI", "Nero", "A4"); //Inizalizzo l'oggetto Auto
$auto2 = new Auto("BMW", "Verde", "Serie 1");
$auto3 = new Auto("FIAT", "Blue", "500");
$auto4 = new Auto("Citroen", "Arancio", "C4");

$auto4->setColore("Viola");
//Per stampare la proprietà marca dell'oggetto Auto
echo $auto1->getMarca();
$auto1->setColore("Grigio");    //$auto1->colore = "Grigio";
echo "<br>";
echo $auto1->getColore();  //echo $auto1->colore;
echo "<br>";

//Stampo le info per le auto
echo $auto1->getCarInfo();
echo $auto2->getCarInfo();
echo $auto3->getCarInfo();
echo $auto4->getCarInfo();