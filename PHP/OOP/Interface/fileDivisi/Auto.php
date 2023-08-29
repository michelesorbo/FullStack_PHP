<?php

require_once('Veicolo.php');

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