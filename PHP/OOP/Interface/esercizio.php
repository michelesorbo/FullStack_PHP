<?php

interface Casco{
    public function tipoCasco();
}

abstract class Veicolo{
    protected $modello;
    protected $colore;

    public function __construct($modello, $colore){
        $this->modello = $modello;
        $this->colore = $colore;
    }

	/**
	 * @return mixed
	 */
	public function getModello() {
		return $this->modello;
	}
	
	/**
	 * @param mixed $modello 
	 * @return self
	 */
	public function setModello($modello): self {
		$this->modello = $modello;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getColore() {
		return $this->colore;
	}
	
	/**
	 * @param mixed $colore 
	 * @return self
	 */
	public function setColore($colore): self {
		$this->colore = $colore;
		return $this;
	}

    abstract protected function Accellera();
    abstract public function Frena();
}

class Auto extends Veicolo{
    protected $tipoCarburante;

    public function __construct($modello,$colore,$tipoCarburante){
        parent::__construct($modello,$colore);
        $this->setTipoCarburante($tipoCarburante);
    }

	/**
	 * @return mixed
	 */
	public function getTipoCarburante() {
		return $this->tipoCarburante;
	}
	
	/**
	 * @param mixed $tipoCarburante 
	 * @return self
	 */
	public function setTipoCarburante($tipoCarburante): self {
        $tipo = ["GPL","Benzina","Diesel","Elettrico"];
        if(in_array($tipoCarburante,$tipo)){
            $this->tipoCarburante = $tipoCarburante;    
        }else{
            $this->tipoCarburante = "Benzina";
        }
		
		return $this;
	}

    //Implemento le classi Astratte
    public function Accellera(){
        return "Premo l'accelleratore";
    }

    public function Frena(){
        return "Premo il pedale del freno";
    }

    public function __toString(){
        return "Classe Auto, Modello: " . $this->modello . " - Colore: " . $this->colore . " - Carburante: " . $this->tipoCarburante . "<br>";
    }
}

class Bici extends Veicolo implements Casco{
    protected $tipo;
    protected $casco;
    
    public function __construct($modello,$colore,$tipo){
        parent::__construct($modello,$colore);
        $this->setTipo($tipo);
        $this->tipoCasco(); //Richiamo il metodo per sapere che casco inserire
    }

	/**
	 * @return mixed
	 */
	public function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return self
	 */
	public function setTipo($tipo): self {
        $tipoBici = ["Corsa", "BMX", "Passeggio"];
        if(in_array($tipo, $tipoBici)){
            $this->tipo = $tipo;    
        }else{
            $this->tipo = "Passeggio";
        }
		return $this;
	}

    //Metodi Astratti della classe
    public function Accellera(){
        return "Inizio a pedalare";
    }

    public function Frena(){
        return "Premo la leva del freno";
    }

    //Implemento il metodo dell'interfaccia
    public function tipoCasco(){
        if($this->tipo == "Corsa"){
            $this->casco = "Casco aereodinamico";
        }else if($this->tipo == "BMX"){
            $this->casco = "casco Protettivo";
        }else{
            $this->casco = "Nessun Casco";
        }
    }

    public function __toString(){
        return "Classe Bici, Modello: " . $this->modello . " - Colore: " . $this->colore . " - Tipo Bici: " . $this->tipo . " - Casco: " . $this->casco . "<br>";
    }
}

//Testo il programma
$a1 = new Auto("FIAT","Rosso","Benzina");
$b1 = new Bici("Legnano","Verde","Corsa");
$b2 = new Bici("Legnano","Nera","BMX");

echo $a1;
echo $b1;
echo $b2;