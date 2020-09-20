<!DOCTYPE html>
<html>
<head>
	<title>Polimorfismo em PHP (Parte 1)</title>
</head>
<body>
	<?php
	require_once 'Mamifero.php';
	require_once 'Reptil.php';
	require_once 'Peixe.php';
	require_once 'Ave.php';
	
	require_once 'Canguru.php';
	require_once 'Tartaruga.php';
	require_once 'Arara.php';
	require_once 'GoldFish.php';

	$m = new Mamifero();
	$r = new Reptil();
	$p = new Peixe();;
	$a = new Ave();

	$c = new Canguru();
	$t = new Tartaruga();
	$ar = new Arara();;
	$g = new GoldFish();

	$m->locomover();
	$r->locomover();
	$p->locomover();
	$a->locomover();

	$c->locomover();
	$t->locomover();
	$ar->locomover();
	$g->locomover();



	?>
</body>
</html>