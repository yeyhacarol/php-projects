<?php

$sltUm = range(0, 500);
$sltDois = range(100, 1000);
$inicial = (int) 0;
$final = (int) 0;

if (isset($_POST['btnCalcular'])) {

    $inicial = $_POST[$valueItem];

    

}

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="frmImparPar" method="$_POST" action="imparPar.php">
        <select name="sltUm">
            <?php
            foreach ($sltUm as $keyItem => $valueItem) {
                echo "<option> $valueItem </option>";
            }
            ?>
        </select>
        <select name="sltDois">
            <?php
                foreach ($sltDois as $keyItem => $valueItem) {
                    echo "<option> $valueItem </option>";
                }
            ?>
        </select>
        <input type="submit" name="btnCalcular" value="Calcular"></input>
    </form>
</body>

</html>