<html>
	<head>
		<title>PHP</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$titulo = "Dados do Formulário ";
			echo "<h1> $titulo <h1>";
			
			$dados['nome'] = $_POST["nome"];
			$dados['sexo'] = $_POST["sexo"];
			$dados['comentarios'] = $_POST["comentarios"];
			
			foreach ($dados as $key => $value) {
				echo "<h2> $key : $value <h2>";
			}
		?>
	</body>
</html>