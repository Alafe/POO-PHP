<?php
require_once 'Animal.php';
class Peixe extends Animal
{
	private $corEscama;

	function locomover(){
		echo "<p>Nadando</p>";
	}

	function alimentar(){
		echo "<p>comendo substâncias</p>";
	}

	function emitirSom(){
		echo "<p>Peixe não faz som</p>";
	}

	function soltarBolha()
	{
		echo "<p>soltou uma bolha</p>";
	}

	function getCorEscama()
	{
		return $this->corEscama;
	}

	function setCorEscama($corEscama)
	{
		$this->corEscama = $corEscama;
	}
}