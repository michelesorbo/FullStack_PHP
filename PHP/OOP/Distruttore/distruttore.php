<?php
//Il distruttore di una classe viene eseguito al termine della pagina PHP
class A{
    public function __construct(){
        echo "Sono il costruttore della Classe A";
    }

    public function __destruct(){
        echo "Vengo eseguito prima della effettiva distruzione della classe";
    }
}

$obj = new A();

?>
<h1>Ciao Mondo</h1>