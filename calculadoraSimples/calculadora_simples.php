<?php
$valor1 = (float) 0;
$valor2 = (float) 0;

$resultado = (float) 0;

if (isset($_POST['btncalc'])) {
	$operadores = $_POST['rdocalc'];

	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "") {
		echo ('<p class="msgErro">Obrigatório preencher todos os campos!</p>');
	} else if (!is_numeric($valor1) || !is_string($valor2)) {
		echo ('<p class="msgErro"> Caracteres inválidos! </p>');
	} else {
		if ($operadores == 'somar') {
			$resultado = $valor1 + $valor2;
		} else if ($operadores == 'subtrair') {
			$resultado = $valor1 - $valor2;
		} else if ($operadores == 'multiplicar') {
			$resultado = $valor1 * $valor2;
		} else {
			$resultado = $valor1 / $valor2;
		}
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
					Resultado: <?php echo ($resultado) ?>;
				</div>

			</form>
		</div>
	</div>
</body>

</html>