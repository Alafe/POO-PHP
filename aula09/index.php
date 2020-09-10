<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php
		include_once 'Pessoa.php';
		include_once 'Aluno.php';
		include_once 'Professor.php';
		include_once 'Funcionario.php';
		

		$p1 = new Pessoa("Pedro", 20, "M");
		$p2 = new Aluno("Maria", 21, "F", true, "TI");
		$p3 = new Professor("Claúdia", 35, "F", "Manutenção", 2500);
		$p4 = new Funcionario("Fabiana", 34, "F","estoque", true);

		$p2->cancelarMatricula();
		$p3->receberAumento(500);
		$p4->mudarTrabalho();

		print_r($p1);
		print_r($p2);
		print_r($p3);
		print_r($p4);




	?>
	</pre>
</body>
</html>