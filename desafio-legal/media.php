<?php
$nota1 = (float) 0;
$nota2 = (float) 0;
$nota3 = (float) 0;
$nota4 = (float) 0;
$media = (float) 0;

if (isset($_POST['btnCalcular'])) {

    $nota1 = $_POST['txtNota1'];
    $nota2 = $_POST['txtNota2'];
    $nota3 = $_POST['txtNota3'];
    $nota4 = $_POST['txtNota4'];

    if ($_POST['txtNota1'] == "" || $_POST['txtNota2'] == "" || $_POST['txtNota3'] == "" || $_POST['txtNota4'] == "") {
        echo ('<p class="msgErro"> Obrigatório preencher todos os campos!</p>');
    } else if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
        echo ('<p class="msgErro"> Algum campo com caracteres inválidos!</p>');
    } else {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de média</title>
    <link rel="stylesheet" type="text/css" href="css/media.css">
</head>

<body>
    <header class="menu">
        <img src="./img/logo-php.png">
        <ul>
            <li><a href="media.php">Média</a></li>
            <li>Calculadora simples</li>
            <li>Tabuada</li>
            <li>Pares e ímpares</li>
        </ul>
    </header>
    <div id="form">
        <form name="frmMedia" method="post" action="media.php">
            <div class="conteiner">
                <div class="media">
                    <div class="titulo">Cálculo de médias</div>
                    <div class="notas">
                        <div>
                            <label>Nota 1:</label>
                            <input type="text" name="txtNota1" value="<?php echo ($nota1) ?>">
                        </div>
                        <div>
                            <label>Nota 2:</label>
                            <input type="text" name="txtNota2" value="<?php echo ($nota2) ?>">
                        </div>
                        <div>
                            <label>Nota 3:</label>
                            <input type="text" name="txtNota3" value="<?php echo ($nota3) ?>">
                        </div>
                        <div>
                            <label>Nota 4:</label>
                            <input type="text" name="txtNota4" value="<?php echo ($nota4) ?>">
                        </div>
                        <div class="botoes">
                            <input class="calcular" type="submit" name="btnCalcular" value="Calcular">
                            <div class="novoCalculo">
                                <a href="media.php">Novo Cálculo</a>
                            </div>
                        </div>
                    </div>
                    <footer id="resultado">
                        A média é: <?php echo ($media) ?>
                    </footer>
                </div>
            </div>
        </form>
    </div>
    

</body>

</html>