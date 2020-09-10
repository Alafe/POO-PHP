<?php
include_once 'Pessoa.php';
class Funcionario extends Pessoa
{
	private $setor;
	private $trabalando;
	
	function __construct($nome, $idade, $sexo, $setor, $trabalando)
	{
		$this->setNome($nome);
		$this->setIdade($idade);
		$this->setSexo($sexo);
		$this->setSetor($setor);
		$this->setTrabalando($trabalando);
	}

	function mudarTrabalho(){
		$this->trabalando = !$this->trabalando;
	}

	function getSetor(){
		return $this->setor;
	}

	function getTrabalando(){
		return $this->trabalando;
	}

	function setSetor($setor){
		$this->setor = $setor;
	}

	function setTrabalando($trabalando){
		$this->trabalando = $trabalando;
	}


}