<?php
class Lutador
{
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitoria;
	private $derrota;
	private $empate;

	function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate)
	{
		$this->nome = $nome;
		$this->nacionalidade = $nacionalidade;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->setPeso($peso);
		$this->vitoria = $vitoria;
		$this->derrota = $derrota;
		$this->empate = $empate;
	}

	function apresentar(){
		echo "<div class='infos'>";
		echo "<p>Lutador: " . $this->getNome() . "</p>";
		echo "<p>Origem: " . $this->getNacionalidade() . "</p>";
		echo "<p>Idade: " . $this->getIdade()." Anos</p>";
		echo "<p>Altura: " . $this->getAltura()." de altura</p>";
		echo "<p>Pesando: " . $this->getPeso() . "Kg</p>";
		echo "<p>Ganhou: " . $this->getVitoria() . "</p>";
		echo "<p>Perdeu: " . $this->getDerrota() . "</p>";
		echo "<p>Empate: " . $this->getEmpate() . "</p><br>";
		echo "</div>";
	}

	function status(){
		echo "<p>" . $this->getNome();
		echo ", é um peso " . $this->getCategoria();
		echo ", tem " . $this->getVitoria() . " vitorias";
		echo ", tem " . $this->getDerrota() . " derrotas";
		echo " e " . $this->getEmpate() . " empates";
	}

	function ganharLuta(){
		$this->setVitoria($this->getVitoria() + 1);
	}

	function perderLuta(){
		$this->setDerrota($this->getDerrota() + 1);
	}

	function empatarLuta(){
		$this->setEmpate($this->getEmpate() + 1);
	}

	function getNome(){
		return $this->nome;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function getNacionalidade(){
		return $this->nacionalidade;
	}

	function setNacionalidade($nacionalidade){
		$this->nacionalidade = $nacionalidade;
	}

	function getIdade(){
		return $this->idade;
	}

	function setIdade($idade){
		$this->idade = $idade;
	}

	function getAltura(){
		return $this->altura;
	}

	function setAltura($altura){
		$this->altura = $altura;
	}

	function getPeso(){
		return $this->peso;
	}

	function setPeso($peso){
		$this->peso = $peso;
		$this->setCategoria();
	}

	function getCategoria(){
		return $this->categoria;
	}

	private function setCategoria(){
		if ($this->peso < 52.2) {
			$this->categoria = "Inválido";
		}elseif ($this->peso <= 70.3) {
			$this->categoria = "Leve";
		}elseif ($this->peso <= 83.9) {
			$this->categoria = "Média";
		}elseif ($this->peso <= 120.2) {
			$this->categoria = "Pesado";
		}else{
			$this->categoria = "Inválido";
		}
	}

	function getVitoria(){
		return $this->vitoria;
	}

	function setVitoria($vitoria){
		$this->vitoria = $vitoria;
	}

	function getDerrota(){
		return $this->derrota;
	}

	function setDerrota($derrota){
		$this->derrota = $derrota;
	}

	function getEmpate(){
		return $this->empate;
	}

	function setEmpate($empate){
		$this->empate = $empate;
	}

}