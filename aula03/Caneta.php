<?php
class Caneta
{
	private $modelo;
	private $ponta;
	private $cor;

	public function __construct($m, $c, $p){
		$this->modelo = $m;
		$this->cor = $c;
		$this->ponta = $p;
	}
	public function getCor(){
		return $this->cor;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function getPonta(){
		return $this->ponta;
	}

	public function setModelo($m){
		$this->modelo = $m;
	}

	public function setPonta($p){
		$this->ponta = $p;
	}

	public function setCor($c){
		$this->cor = $c;
	}
}