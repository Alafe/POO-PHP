<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php
	require_once 'Aluno.php';
	require_once 'Bolsista.php';
	require_once 'Visitante.php';

	$a = new Aluno();
	$a->setNome("Maria");
	$a->setIdade(20);
	$a->setSexo("F");
	$a->setCurso("Informática");
	$a->setMatricula(true);

	$b = new Bolsista();
	$b->setNome("Rodrigo");
	$b->setIdade(23);
	$b->setSexo("M");
	$b->setCurso("Manutenção");
	$b->setMatricula(true);
	$b->setBolsa(true);

	$v = new Visitante();
	$v->setNome("Cristina");
	$v->setIdade(25);
	$v->setSexo("F");

	print_r($a);
	print_r($b);
	print_r($v);

	?>
	</pre>
</body>
</html>