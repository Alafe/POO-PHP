<?php
include_once 'Pessoa.php';
class Aluno extends Pessoa
{
	private $matricula;
	private $curso;

	function __construct($nome, $idade, $sexo, $matricula, $curso)
	{
		$this->setNome($nome);
		$this->setIdade($idade);
		$this->setSexo($sexo);
		$this->setMatricula($matricula);
		$this->setCurso($curso);
	}

	function cancelarMatricula(){
		$this->setMatricula(false);
	}

	function getMatricula(){
		return $this->matricula;
	}

	function getCurso(){
		return $this->curso;
	}

	function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	function setCurso($curso){
		$this->curso = $curso;
	}
}