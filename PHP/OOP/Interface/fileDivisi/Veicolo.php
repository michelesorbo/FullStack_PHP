<?php 

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

    abstract public function Accellera();
    abstract public function Frena();
}