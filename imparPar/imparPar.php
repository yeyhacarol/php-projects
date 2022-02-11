<<?php

$num1Acumuladora = null;
$num2Acumuladora = null;
$impares = null;
$pares = null;
$numInicial = null;
$numFinal = null;

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
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ímpar par</title>
</head>

<body>
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