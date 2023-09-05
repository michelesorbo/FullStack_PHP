<?php 
//Vado a scrivere tutti i metodi che riguardano gli ordini
trait ordini {
    public function aggCarrello(){
        echo "Prodotto aggiunto al carrello";
    }

    public function rimuoviProdotto(){
        echo "Prodotto rimosso dal carrello";
    }

    public function metodo1(){
        echo "Sono metodo 1 di Ordini";
    }
}

trait statistiche{
    public function mediaVendite(){
        echo "La tua media delle vendite è:...";
    }

    public function mediVisite(){
        echo "Questo mese hai avuto 100000 visite";
    }

    public function metodo1(){
        echo "Sono metodo 1 di Statistiche";
    }
}

class Negozio{
    //use statistiche, ordini;
    //In caso di confillo di metodi si deve dire quale metodo utilizzare
    use ordini, statistiche{
        //statistiche::metodo1 insteadof ordini;
        ordini::metodo1 insteadof statistiche;
    }
}

//Testo la classe
$n1 = new Negozio();

//$n1->aggCarrello();
//$n1->mediaVendite();
$n1->metodo1();