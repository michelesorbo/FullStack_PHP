<?php

class Prodotto {

    protected $codice;
    protected $nome;
    protected $prezzo;

    public function __construct($codice, $nome, $prezzo){
        $this->codice = $codice;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }    

	/**
	 * @return mixed
	 */
	public function getCodice() {
		return $this->codice;
	}
	
	/**
	 * @param mixed $codice 
	 * @return self
	 */
	public function setCodice($codice): self {
		$this->codice = $codice;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPrezzo() {
		return $this->prezzo;
	}
	
	/**
	 * @param mixed $prezzo 
	 * @return self
	 */
	public function setPrezzo($prezzo): self {
		$this->prezzo = $prezzo;
		return $this;
	}

    //Metodi Della Classe
    public function descrizione(){
        return "Codice: " . $this->codice . " Nome: " . $this->nome . " Prezzo: " . $this->prezzo . "<br>";
    }
}


$p1 = new Prodotto("P001", "Latte", 12);
$p2 = new Prodotto("P002","Carne",23);

echo $p1->descrizione();
echo $p2->descrizione();