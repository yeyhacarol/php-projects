<?php
//declaração de variáveis
$valor1 = (float) 0;
$valor2 = (float) 0;
$opcao = (string) null;
$resultado = (float) 0;

//validação se o botão foi clicado
if (isset($_POST['btncalc'])) {
	//resgatando os valores do formulário
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	/*strtoupper() -> permite converter texto para maiúscula;
			strtolower() -> permite converter texto para minúscula. Assim evito problemas semânticos de igualdade.
			Com elseif(){} temos uma melhor performance do código, pois faz-se apenas um processamento ao invés de dois!
		
	processamento dos cálculos, tradicional*/
	/* if ($opcao == 'SOMAR') {
			$resultado = $valor1 + $valor2;
		} elseif ($opcao == 'SUBTRAIR') {
			$resultado = $valor1 - $valor2;
		} elseif ($opcao == 'MULTIPLICAR') {
			$resultado = $valor1 * $valor2;
		} elseif ($opcao == 'DIVIDIR') {
			$resultado = $valor1 / $valor2;
		}*/

	if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
		//assim podemos encaminhar um comando js na tela
		echo ('<script> alert("Algum campo está vazio!") </script>');

	elseif (!is_numeric($valor1) || !is_numeric($valor2))
		echo ('<script> alert("Algum caractere inválido!") </script>');
	else {
		//validação se algum dos radios foram selecionados
		if (!isset($_POST['rdocalc']))
			echo ('<script> alert("Escolha uma opção de cálculo!"); </script>');
		else {
			/*resgatando os valores do tipo radio da mesma maneira que outros elementos do formulário. Utlizando strtotupper
				antes de resgatar o valor fornecido. Nesse caso estamos recebendo ele nessa posição, pois o cálculo só pode acontecer
				se alguma das opções de operação estiverem setadas*/
			$opcao = strtoupper($_POST['rdocalc']);

			/*Existe essa outra maneira de fazer estrutura de condicional, do qual retiramos as chaves; apenas é 
			válido nas estruturas em que haja apenas uma resposta no bloco de código*/
			if ($opcao == 'SOMAR')
				$resultado = $valor1 + $valor2;
			elseif ($opcao == 'SUBTRAIR')
				$resultado = $valor1 - $valor2;
			elseif ($opcao == 'MULTIPLICAR')
				$resultado = $valor1 * $valor2;
			elseif ($opcao == 'DIVIDIR')
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
				Valor 1:<input type="text" name="txtn1" value=<?= ($valor1) ?>> <br>
				Valor 2:<input type="text" name="txtn2" value=<?= ($valor2) ?>> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar">Somar <br>
					<input type="radio" name="rdocalc" value="subtrair">Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar">Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir">Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					<!-- outra forma de printar um elemento na tela -->
					<?= ($resultado); ?>
				</div>
			</form>
		</div>
	</div>
</body>

</html>