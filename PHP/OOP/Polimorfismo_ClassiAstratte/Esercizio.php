<?php

abstract class FiguraGeometrica{
    abstract public function calcolaArea();
}

class Quadrato extends FiguraGeometrica{

    private $lato;

    public function __construct($lato){
        $this->lato = $lato;
    }

    public function calcolaArea(){
        return $this->lato * $this->lato;
    }
}

class Cerchio extends FiguraGeometrica{
    private $raggio;

    public function __construct($raggio){
        $this->raggio = $raggio;
    }

    public function calcolaArea(){
        return 3.14 * pow($this->raggio, 2);
    }
}

class Rettangolo extends FiguraGeometrica{

    private $base;
    private $altezza;

    public function __construct($base,$altezza){
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function calcolaArea(){
        return $this->base * $this->altezza;
    }

	/**
	 * @return mixed
	 */
	public function getBase() {
		return $this->base;
	}
	
	/**
	 * @param mixed $base 
	 * @return self
	 */
	public function setBase($base): self {
		$this->base = $base;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAltezza() {
		return $this->altezza;
	}
	
	/**
	 * @param mixed $altezza 
	 * @return self
	 */
	public function setAltezza($altezza): self {
		$this->altezza = $altezza;
		return $this;
	}
}

$q1 = new Quadrato(10);
$c1 = new Cerchio(4);
$r1 = new Rettangolo(5,2);

echo "Area quadrato: " . $q1->calcolaArea() . "<br>";
echo "Area cerchio: " . $c1->calcolaArea() . "<br>";
echo "Area rettangolo: " . $r1->calcolaArea() . "<br>";