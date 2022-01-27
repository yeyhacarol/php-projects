<?php 
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$operadores = $_POST['rdocalc'];
	$soma = (double) 0;
	$operadores == $soma;

	if (isset($_POST['btncalc'])) {
		if (isset($_POST[$operadores])) {
			$valor1 = $_POST['txtn1'];
			$valor2 = $_POST['txtn2'];
			$soma = $valor1 + $valor2;
		}
		
	}
?>

<html>

<head>
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="conteudo">
		<div id="titulo">
			Calculadora Simples
		</div>

		<div id="form">
			<form name="frmcalculadora" method="post" action="calculadora_simples.php">
				Valor 1:<input type="text" name="txtn1" value="<?php echo ($valor1) ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?php echo ($valor2) ?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair">Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar">Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir">Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">
				</div>
				<div id="resultado">
					Resultado: <?php echo($soma) ?>;
				</div>

			</form>
		</div>
	</div>
</body>

</html>