<?php
    $valor = (int) 0;
    $contador = (int) 0;
    $resultado = (string) null;

    if(isset($_POST['btnCalc'])) {
        $valor = $_POST['txtNumero'];

        //exemplos de laços de repetição
        while ($contador <= $valor) {
            echo($contador . '<br>');

            /* há três maneiras de atualizar o contador: 
                $contador + 1
                $contador++ */
            $contador+=1; 
        }

        //as chaves não são obrigatórias nesse caso, por possuir apenas uma linha de código
        for ($contador = 0; $contador <= $valor; $contador+=1) 
            //echo('<br>' . $contador);

            //colocar o ponto antes do igual diz que: resultado = resultado . contador, em que . significa concatenação
            $resultado.= $contador;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frmRepeticao" method="post" action="index.php">
        Digite um número:<input type="text" name="txtNumero">
        <input type="submit" name="btnCalc" value="Calcular">
        <div>
            <?php echo($resultado); ?>
        </div>
    </form>
</body>

</html>