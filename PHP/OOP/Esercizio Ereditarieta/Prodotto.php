<?php

class Prodotto {
    protected $codice;
    protected $descrizione;
    protected $prezzo;

    public function __construct($codice,$descrizione,$prezzo){
        $this->codice = $codice;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
    }

    public function applicaSconto($sconto){
        if($sconto > 0){
            $this->prezzo = ($this->prezzo * (100 - $sconto))/100;
        }
    }

	/**
	 * @return mixed
	 */
	public function getPrezzo() {
		return $this->prezzo;
	}
}

class Alimentari extends Prodotto{
    protected $dataScadenza;

    public function __construct($codice,$descrizione,$prezzo, $dataScadenza){
        parent::__construct($codice,$descrizione,$prezzo);
        $this->dataScadenza = $dataScadenza;
    }


	/**
	 * @return mixed
	 */
	public function getDataScadenza() {
		return $this->dataScadenza;
	}

    //Override di applicaSconto
    public function applicaSconto($sconto = 20)
    {
        $this->prezzo = ($this->prezzo * (100 - $sconto))/100; 
    }
}

class NonAlimentari extends Prodotto{
    protected $materiale;

    public function __construct($codice,$descrizione,$prezzo, $materiale){
        parent::__construct($codice,$descrizione,$prezzo);
        $this->materiale = $materiale;
    }
}

//Test Per Sconto
$p1 = new Prodotto("C001","Test",20);

$p1->applicaSconto(-20);
echo $p1->getPrezzo();
