<?php
/* formas de importar arquivos:
		include()
		include_once()
		
		require() -> mais recente
		require_once -> mais recomendado
		
		do qual o _once faz uma trativa para que os arquivos não sejam importados mais de uma vez*/
//import dos arquivos de configuração de variáveis e constantes e dos cálculos das funções
require_once('modulos/config.php');
require_once('modulos/calculos.php');

//Declaração de variáveis
$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;
$opcao = (string) null;

/*
		gettype() - permite verificar qual o tipo de dados de uma variavel
		settype() - permite modificar o tipo de dados de uma variavel
	*/
/*	Exemplo de uma variavel que nasce do tipo inteiro e depois é 
				convertida para string

		$nome = 10;
		echo(gettype($nome));

		settype($nome, "string");

		echo(gettype($nome));

		strtoupper() - permite converter um texto para MAIUSCULO
		strtolower() - permite converter um texto para minusculo
		
	*/

//Validação para verificar se o botão foi clicado
if (isset($_POST['btncalc'])) {
	//Recebe os dados do formulário
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	//Validação de tratamento de erro para caixa vazia
	if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "")
		echo (ERRO_MSG_CAIXA_VAZIA);
	else {
		//Validação de tratamento de erro para rdo sem escolha
		if (!isset($_POST['rdocalc']))
			echo (ERRO_MSG_OPERACAO_CALC);
		else {
			//Validação para tratamento de erro para dados incorreto
			if (!is_numeric($valor1) || !is_numeric($valor2))
				echo (ERRO_MSG_CARATER_INVALIDO_TEXTO);
			else {
				//apenas podemos receber o valor do rdo quando ele existir
				$opcao = strtoupper($_POST['rdocalc']);

				//chamada para a função que vai realizar os calculos matematicos
				$resultado = operacaoMatematica($valor1, $valor2, $opcao);


				// //Processamento do cálculo das operações
				// if($opcao == 'SOMAR')
				// 	$resultado = $valor1 + $valor2;
				// elseif ($opcao == 'SUBTRAIR') 
				// 	$resultado = $valor1 - $valor2;
				// elseif ($opcao == 'MULTIPLICAR')
				// 	$resultado = $valor1 * $valor2;
				// elseif ($opcao == 'DIVIDIR')
				// {
				// 	//Validação para tratamento de erro da divisão por 0
				// 	if($valor2 == 0)
				// 		echo('<script> alert("Não é possível realizar divisão, onde o valor 2 é igual a 0!"); </script>');
				// 	else
				// 		$resultado = $valor1 / $valor2;
				// }

			}
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
				Valor 1:<input type="text" name="txtn1" value="<?= $valor1; ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?= $valor2; ?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" <?= $opcao == 'SOMAR' ? 'checked' : null; ?>>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair" <?= $opcao == 'SUBTRAIR' ? 'checked' : null; ?>>Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar" <?= $opcao == 'MULTIPLICAR' ? 'checked' : null; ?>>Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir" <?= $opcao == 'DIVIDIR' ? 'checked' : null; ?>>Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					<?= $resultado; ?>
				</div>

			</form>
		</div>

	</div>


</body>

</html>