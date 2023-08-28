<?php
/*
Quando creo un metodo astratto tutta la classe diventa astratta e devo aggiungere prima di class la parola chiave abstract
Le classi astratte non possono diventare oggetti
*/
abstract class Animale{
    protected $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function info(){
        return "Mi chiamo " . $this->nome;
    }

    //Creo un metodo astratto 
    abstract public function verso();
}

//Classe Cane
class Cane extends Animale{

    public function verso(){
        return " Il mio verso è Bau";
    }
}

class Gatto extends Animale{
    public function verso(){
        return " Il mio verso è Miao";
    }
}

$c1 = new Cane("Pippo");
$g1 = new Gatto("Silvestro");

echo $c1->info();
echo $c1->verso();

echo $g1->info();
echo $g1->verso();