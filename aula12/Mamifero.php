<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
	private $corPelo;
	function emitirSom()
	{
		echo "<p>Som de Mamifero</p>";
	}
}