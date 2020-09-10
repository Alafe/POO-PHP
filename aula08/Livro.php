<?php
require_once 'IPublicacao.php';
require_once 'Pessoa.php';
class Livro implements IPublicacao
{
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

	function __construct($t, $a, $tp, $l)
	{
		$this->titulo = $t;
		$this->autor = $a;
		$this->totPaginas = $tp;
		$this->leitor = $l;
		$this->pagAtual = 0;
		$this->aberto = false;
	}

	public function detalhes()
	{	
		echo "<br>---------------------------------------------------------------------<br>";
		echo "Livro " . $this->titulo . " escrito por " . $this->autor;
		echo "<br>Paginas: " . $this->totPaginas;
		echo "<br>Sendo lido por " . $this->leitor->getNome() . "<br>";
		echo "---------------------------------------------------------------------<br>";
	}

	public function abrir(){
		$this->setAberto(true);
	}
	
	public function fechar(){
		$this->setAberto(false);
	}
	
	public function folhear($p){
		if ($p > $this->totPaginas) {
			$this->pagAtual = 0;
		}else{
			$this->pagAtual = $p;
		}
	}
	
	public function avancarPag(){
		if ($this->getPagAtual() == $this->getTotPaginas()) {
			echo "<p>Não tem mais paginas</p>";	
		}else{
			$this->setPagAtual($this->getPagAtual() + 1);
		}
	}

	public function voltarPag(){
		if ($this->getPagAtual() == 1) {
			echo "<p>Não tem mais paginas</p>";	
		}else
			$this->setPagAtual($this->getPagAtual() - 1);
		}
	}