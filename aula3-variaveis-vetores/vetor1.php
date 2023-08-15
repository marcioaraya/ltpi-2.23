<?php

$nomes = [5=>'Arthur', 'Caian', 'Samuel'];
# var_dump serve para examinar
# o conteúdo de uma variável
# mostra o tipo e o conteúdo da mesma
var_dump($nomes);
echo '<hr>';

# print_r também server para
# examinar o conteúdo de uma variável
# mostra apenas o conteúdo da mesma
print_r($nomes);
echo '<hr>';

echo '<table border="1">';

echo '<tr>';
echo '<th>Nomes</th>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$nomes[7].'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$nomes[6].'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$nomes[5].'</td>';
echo '</tr>';

echo '</table>';

?>