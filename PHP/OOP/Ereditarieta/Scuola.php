<?php

class Persona{
    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($nome,$cognome,$eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function saluta(){
        return "Ciao da " . $this->nome . " " . $this->cognome. "<br>";
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
	public function getCognome() {
		return $this->cognome;
	}
	
	/**
	 * @param mixed $cognome 
	 * @return self
	 */
	public function setCognome($cognome): self {
		$this->cognome = $cognome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEta() {
		return $this->eta;
	}
	
	/**
	 * @param mixed $eta 
	 * @return self
	 */
	public function setEta($eta): self {
		$this->eta = $eta;
		return $this;
	}
}

class Studente extends Persona{
    protected $classe;

    public function __construct($nome, $cognome, $eta, $classe){
        parent::__construct($nome,$cognome,$eta); //Richiamo il costruttore del padre (Persona)
        $this->classe = $classe;
    }

    //Metodo della classe
    
    
    //Overriding del metodo Saluta del Padre
    public function saluta(){
        return "Buongiorno dallo studente " . $this->nome . " " . $this->cognome. "<br>";
    }


	/**
	 * @return mixed
	 */
	public function getClasse() {
		return $this->classe;
	}
	
	/**
	 * @param mixed $classe 
	 * @return self
	 */
	public function setClasse($classe): self {
		$this->classe = $classe;
		return $this;
	}
}

class Docente extends Persona{
    protected $materia;
    public function __construct($nome,$cognome,$eta,$mateira){
        parent::__construct($nome,$cognome,$eta);
        $this->materia = $mateira;
    }


	/**
	 * @return mixed
	 */
	public function getMateria() {
		return $this->materia;
	}
	
	/**
	 * @param mixed $materia 
	 * @return self
	 */
	public function setMateria($materia): self {
		$this->materia = $materia;
		return $this;
	}

    //Override di Saluta
    public function saluta(){
        return "Ciao sono l'insegnate di " . $this->materia."<br>";
    }
}

$p1 = new Persona("Mario", "Rossi", "32");
$s1 = new Studente("Giuseppe", "Verdi","21", "5B");
$d1 = new Docente("Gianni", "Versace", "45", "Matematica");

echo $p1->saluta();
echo $s1->saluta();

echo $d1->saluta();