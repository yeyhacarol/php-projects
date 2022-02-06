<?php
    $multiplicando = (int) 0;
    $multiplicador = (int) 0;
    $resultado = (int) 0;
    $i = (int) 0;

    if(isset($_POST['btnCalc'])) {
        $multiplicador = $_POST['multiplicador'];
        $multiplicando = $_POST['multiplicando'];  

        if($_POST['multiplicador'] == "" || $_POST['multiplicando'] == ""){
            echo('<script> alert("Algum campo está vazio!") </script>');
        } elseif (!is_numeric($multiplicador) || !is_numeric($multiplicando)) {
            echo('<script> alert("Caractere inválido!") </script>');
        } elseif ($_POST['multiplicador'] == 0) {
            echo('<script> alert("Impossível multiplicar 0") </script>');
        } else {
            for ($i=0; $i <= $multiplicando; $i++) {
                $resultado = $multiplicador * $i; 
                echo($multiplicador . "x" . $i . "=" . $resultado . '<br>');
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmTabuada" method="post" action="tabuada.php">
        Multiplicador<input type="text" name="multiplicador" >
        Multiplicando<input type="text" name="multiplicando">
        <input type="submit" name="btnCalc" value="Calcular">
    </form>
</body>
</html>