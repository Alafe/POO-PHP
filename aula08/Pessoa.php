<?php

class Pessoa
{
	private $nome;
	private $idade;
	private $sexo;

	function __construct($nome, $idade, $sexo)
	{
		$this->setNome($nome);
		$this->setIdade($idade);
		$this->setSexo($sexo);

	}

	function fazerAniversario(){
		$this->setIdade($this->getIdade() + 1);
	}

	function getNome(){
		return $this->nome;
	}

	function getIdade(){
		return $this->idade;
	}

	function getSexo(){
		return $this->sexo;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setIdade($idade){
		$this->idade = $idade;
	}

	function setSexo($sexo){
		$this->sexo = $sexo;
	}
}