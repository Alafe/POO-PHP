<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.infos{
			width: 200px;
			border: 3px solid;
			margin: 5px;
			float: left;
			border-radius: 5px;
		}

		.infos p{
			font-family: 'Arial';
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<?php
		require_once 'Lutador.php';
		$l = array();
		$l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
		$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
		$l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
		$l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
		$l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
		$l[5] = new Lutador("Nerdaart", "EAU", 30, 1.81, 105.7, 12, 2, 4);

		$l[0]->apresentar();
		$l[1]->apresentar();
		$l[2]->apresentar();
		$l[3]->apresentar();
		$l[4]->apresentar();
		$l[5]->apresentar();
	?>
</body>
</html>