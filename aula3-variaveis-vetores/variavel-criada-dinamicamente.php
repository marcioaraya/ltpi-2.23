<?php
// variável criada dinamicamente

$texto = "Porto Alegre";
$futuro_identificador = "cidade";
# aqui vai criar uma nova variável: $cidade

# a expressão abaixo é equivalente a
# $cidade = $texto;
$$futuro_identificador = $texto;

echo "<h2 style=\"color:blue\" align=center>";
echo "Minha cidade é $cidade";
echo "</h2>";
?>
