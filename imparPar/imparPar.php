<<?php

<<<<<<< HEAD
$num1Acumuladora = null;
$num2Acumuladora = null;
$impares = null;
$pares = null;
$numInicial = null;
$numFinal = null;
=======
$sltUm = range(0, 500);
$sltDois = range(100, 1000);
$inicial = (int) 0;
$final = (int) 0;

if (isset($_POST['btnCalcular'])) {

    $inicial = $_POST[$valueItem];

    

}
>>>>>>> dd1fc5ee5e866e735130e07f536896a67928ca80

for ($i = (int)0; $i <= 500; $i++) {

  $num1Acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
}
for ($i = (int)100; $i <= 1000; $i++) {

  $num2Acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
}

if (isset($_POST['btnCalcular'])) {

  $numInicial = $_POST['sltNumInicil'];
  $numFinal = $_POST['sltNumFinal'];

  //for para armazenar os valores impares e pares do intervalo, checando cada um e se ele é impar ou par

  for ($i = $numInicial; $i <= $numFinal; $i++) {

    if ($i % 2 == 0) {

      $pares .= '<p>' . $i . '</p>';
    } else {

      $impares .= '<p>' . $i . '</p>';
    }
  }
}

?>


<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
=======
<html lang="pt-BR">
>>>>>>> dd1fc5ee5e866e735130e07f536896a67928ca80

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ímpar par</title>
</head>

<body>
<<<<<<< HEAD
  <div id="form">
    <form name="frmTabuada" method="post" action="imparPar.php">
      <div>
        <select name="sltNumInicil" id="">
          <?php echo ($num1Acumuladora); ?>
        </select>
      </div>
      <div>
        <select name="sltNumFinal" id="">
          <?php echo ($num2Acumuladora); ?>
        </select>
      </div>
      <button name="btnCalcular">Calcular</button>
=======
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
>>>>>>> dd1fc5ee5e866e735130e07f536896a67928ca80
    </form>
    <div class="resultados">
      <div class="impar">

        <div class="numImpar"><?php echo ($impares) ?></div>
      </div>
      <div class="par">

        <div class="numPar"><?php echo ($pares) ?></div>
      </div>
    </div>
  </div>
</body>

</html>