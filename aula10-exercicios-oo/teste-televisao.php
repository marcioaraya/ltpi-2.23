<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Televisão</title>
</head>
<body>
    <h1>Teste Televisão</h1>
    <?php
      include "ex124-b.php";

      $tv1 = new Televisao();
      echo "<hr>";
      print_r($tv1);
      echo "<hr>";
      $tv1->ligaDesliga();
      echo "<hr>";
      $tv1->aumentaCanal();
      $tv1->aumentaCanal();
      echo "<hr>";
      print_r($tv1);
      echo "<hr>";

    ?>
    
</body>
</html>