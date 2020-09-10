<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
	private $volume;
	private $ligado;
	private $tocando;
	
	function __construct(){
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}

	function getVolume(){
		return $this->volume;
	}

	function getLigado(){
		return $this->ligado;	
	}

	function getTocando(){
		return $this->tocando;
	}

	function setVolume($volume){
		$this->volume = $volume;
	}

	function setLigado($ligado){
		$this->ligado = $ligado;
	}

	function setTocando($tocando){
		$this->tocando = $tocando;
	}

	public function ligar(){
		$this->setLigado(true);
	}
	
	public function desligar(){
		$this->setLigado(false);
	}
	
	public function abrirMenu(){
		echo "<br>está ligado?: " . ($this->getLigado()? "Sim" : "Não");
		echo "<br>está tocando?: " . ($this->getTocando()? "Sim" : "Não");
		echo "<br>Volume: " . $this->getVolume();
		for ($i=0; $i < $this->getVolume(); $i+=10) { 
			echo " | ";
		}
		echo "<br>";
	}
	
	public function fecharMenu(){
		echo "<br>Fechando Menu...";
	}
	
	public function maisVolume(){
		if ($this->getLigado()) {
			$this->setVolume($this->getVolume() + 10);
		}
	}
	
	public function menosVolume(){
		if ($this->getLigado()) {
			$this->setVolume($this->getVolume() - 10);
		}
	}
	
	public function ligarMudo(){
		if ($this->getLigado() &&  $this->getVolume() == 0) {
			$this->setVolume(50);
		}
	}
	
	public function desligarMudo(){
		if ($this->getLigado() &&  $this->getVolume() > 0) {
			$this->setVolume(0);
		}
	}
	
	public function play(){
		if ($this->getLigado() && !($this->getTocando())) {
			$this->setTocando(true);
		}
	}

	public function pause(){
		if ($this->getLigado() && $this->getTocando()) {
			$this->setTocando(false);
		}
	}

}