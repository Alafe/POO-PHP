<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require_once 'Mamifero.php';
	require_once 'Lobo.php';
	require_once 'Cachorro.php';
	$c = new Cachorro();
	$c->reagirFrase("Olá");
	$c->reagirFrase("Vai Apanhar!");

	$c->reagirHora(11);
	$c->reagirHora(14);
	$c->reagirhora(21);

	$c->reagirDono(true);
	$c->reagirDono(false);

	$c->reagirIdadePeso(2, 12.5);
	$c->reagirIdadePeso(17, 4.5);		

	?>
</body>
</html>