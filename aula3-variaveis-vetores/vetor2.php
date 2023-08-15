<?php

$aluno1 = ['nome'=>'Lucas', 'nota'=>10];
$aluno2 = ['nome'=>'Heloisa', 'nota'=>10];
$aluno3 = ['nome'=>'Catarina', 'nota'=>9];
$aluno4 = ['nome'=>'Juliano', 'nota'=>7];

$alunos = [$aluno1, $aluno2, $aluno3, $aluno4];

echo '<table border="1">';

echo '<tr>';
echo '<th>Nomes</th><th>Notas</th>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$alunos[0]['nome'].'</td><td>'.$alunos[0]['nota'].'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$alunos[1]['nome'].'</td><td>'.$alunos[1]['nota'].'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$alunos[2]['nome'].'</td><td>'.$alunos[2]['nota'].'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$alunos[3]['nome'].'</td><td>'.$alunos[3]['nota'].'</td>';
echo '</tr>';

echo '</table>';
?>


