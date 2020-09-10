<?php
include_once 'Pessoa.php';
class Professor extends Pessoa
{
	private $especialidade;
	private $salario;
	function __construct($nome, $idade, $sexo, $especialidade, $salario)
	{
		$this->setNome($nome);
		$this->setIdade($idade);
		$this->setSexo($sexo);
		$this->setEspecialidade($especialidade);
		$this->setSalario($salario);
	}

	function receberAumento($aumento){
		$this->SetSalario($this->getSalario() + $aumento);
	}

	function getEspecialidade(){
		return $this->especialidade;
	}

	function getSalario(){
		return $this->salario;
	}	

	function setEspecialidade($especialidade){
		$this->especialidade = $especialidade;
	}

	function setSalario($salario){
		$this->salario = $salario;
	}
}