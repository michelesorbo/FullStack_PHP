<?php 

require_once("Veicolo.php");
require_once("interfaccia.php");

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