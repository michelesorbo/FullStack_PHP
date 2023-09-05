<?php

class Utente {
    public $nome;
    public static $utenti = 0; //è una proprietà della classe non posso usarla con il comando this

    public function __construct($nome){
        $this->nome = $nome;
        self::$utenti++; //Self si riferisce alla classe e posso prenderer le variabili/metodi statici
    }

    public static function salutaClasse(){
        return "Ciao dal metodo statico";
    }
}

$u1 = new Utente("Michele");
$u2 = new Utente("Davide");
$u3 = new Utente("Gloria");

echo $u1->nome;
echo $u2->nome;
echo $u3->nome;
echo "<br>";
echo Utente::$utenti;
echo Utente::salutaClasse();