<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <h1>while</h1>
    <?php

    $i = 0;
    /* enquanto a condição for VERDADEIRA 
       as instruções dentro do while serão executadas
    */
    while ($i < 10) {
        echo "<p>$i</p>";
        $i++;
    }

    /* escreva o código para exibir os números dentro de uma 
       tabela HTML - um número por linha
    */
    $i = 0;
    echo "<table border=\"1\">";
    while ($i < 10) {
        echo "<tr><td>$i</td></tr>";
        $i++;
    }
    echo "</table>";

    /* escreva o código para exibir os números dentro de uma 
       tabela HTML - os número em uma única linha
    */
    $i = 0;
    echo "<table border=\"1\">";
    echo "<tr>";
    while ($i < 10) {
        echo "<td>$i</td>";
        $i++;
    }
    echo "</tr>";
    echo "</table>";

    /* escreva o código para gerar a tabuada do 2 
       usando laço de repetição

    1 x 2 = 2
    2 x 2 = 4
    3 x 2 = 6 
    ...
    10 x 2 = 20
    */
    
    $i = 1;
    while ($i < 11){
        echo "<p>$i x 2 = ". 2*$i ."</p>";
        $i++;
    }




    ?>
</body>
</html>