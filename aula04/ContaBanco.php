<?php
class ContaBanco
{
	//atributos
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//métodos
	public function __construct()
	{
		$this->saldo = 0;
		$this->status = false;
	}

	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);
		if ($this->getTipo() == "CP") {
			$this->setSaldo(150);
		}
		elseif ($this->getTipo() == "CC") {
			$this->setSaldo(50);
		}
	}

	public function fecharConta(){
		if ($this->getSaldo() > 0) {
			echo "<p>Conta com dinheiro</p>";
		}elseif ($this->getSaldo() < 0) {
			echo "<p>Conta em debito</p>";
		}else{
			$this->setStatus(false);
			echo "<p>Conta fechada</p>";
		}
	}
	
	public function depositar($v){
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() + $v);
		}else{
			echo "<p>Impossivel depositar</p>";
		}
	}

	public function sacar($v){
		if ($this->getStatus()) {
			if ($this->getSaldo() >= $v) {
				$this->setSaldo($this->getSaldo() - $v);
			}
			else{
				echo "<p>Saldo insuficiente</p>";
			}
		}else{
			echo "<p>Impossivel sacar</p>";
		}
	}

	public function pagarMensal(){
		
		if ($this->getTipo() == "CC") {
			$v = 12;
		}elseif($this->getTipo() == "CP"){
			$v = 20;
		}

		if ($this->getStatus()) {
			if ($this->getSaldo() > $v) {
				$this->setSaldo($this->getSaldo()-$v);
			}
		}
	}

	//numConta
	public function getNumConta(){
		return $this->numConta;		
	}

	public function setNumConta($numConta){
		$this->numConta = $numConta;
	}
	 
	public function getTipo(){
		return $this->tipo;		
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	
	public function getDono(){
		return $this->dono;		
	}

	public function setDono($dono){
		$this->dono = $dono;
	}
	
	public function getSaldo(){
		return $this->saldo;		
	}

	public function setSaldo($saldo){
		$this->saldo= $saldo;
	}
	
	public function getStatus(){
		return $this->status;		
	}

	public function setStatus($status){
		$this->status = $status;
	}
}