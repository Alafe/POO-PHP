<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<h1>Controle Remoto</h1>
	<?php
		require_once 'ControleRemoto.php';
		$c = new ControleRemoto();
		$c->ligar();
		$c->abrirMenu();
	?>
	</pre>
</body>
</html>