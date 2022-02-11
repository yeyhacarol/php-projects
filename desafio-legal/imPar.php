<?php
/* $inicial = null;
$final = null;
$pares = null;
$impares = null;

for ($i = 0; $i <= 500; $i++) {
    $inicial .= '<option value="' . $i . '">' . $i . '</option>';
}

for ($i = 100; $i <= 1000; $i++) {
    $final .= '<option value="' . $i . '">' . $i . '</option>';
}

if (isset($_POST['btnCalcular'])) {
    $escolhidoInicial = $_POST['valor1'];
    $escolhidoFinal = $_POST['valor2'];

    for ($i = $escolhidoInicial; $i <= $escolhidoFinal; $i++) {
        if ($i % 2 == 0) {
            $pares .= '<p>' . $i . '</p>';
            
        } else {
            $impares .= '<p>' . $i . '</p>';
        }
    }
} */

$sltInicial = 0;
$sltFinal = 500;
$arr = range($sltInicial, $sltFinal);
$sltInicialDois = 100;
$sltFinalDois = 1000;
$arrDois = range($sltInicialDois, $sltFinalDois);

foreach ($arr as $num) {
    $arr .= '<option value=">' . $num . '">' . $num . '</option>';
}

foreach ($arrDois as $num2) {
    $arrDois .= '<option value=">' . $num2 . '">' . $num2 . '</option>';
}




?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/imPar.css">
    <link rel="stylesheet" type="text/css" href="./css/botoes.css">
    <title>Pares e ímpares</title>
</head>

<body>
    <header>
        <img src="./img/logo-php.png">
        <ul>
            <li><a href="media.php">Média</a></li>
            <li><a href="calculadora_simples.php">Calculadora simples</a></li>
            <li><a href="tabuada.php">Tabuada</a></li>
            <li><a href="imPar.php">Pares e ímpares</a></li>
        </ul>
    </header>

    <form name="frmImPar" method="post" action="imPar.php">
        <div class="conteiner">
            <div class="imPares">
                <div class="titulo">Ímpares e pares</div>
                <div class="valores">
                    <div class="inicial">
                        <div class="value1">N° inicial:</div>
                        <select class="select" name="valor1">
                            <?php print_r ($arr) ?>
                        </select>
                    </div>
                    <div class="final">
                        <div class="value2">N° final:</div>
                        <select class="select" name="valor2">
                            <?php echo ($arrDois) ?>
                        </select>
                    </div>
                    <div class="botao">
                        <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="resultados">
        <p>pares <?php echo ($pares) ?></p>
        <div></div>
        <p>impares <?php echo ($impares) ?></p>
        <p>qtde. pares </p>
        <p>qtde. impares</p>
    </div>
</body>

</html>