<?php

$a = 1;
echo '<p>A variável $a vale:'.$a.'</p>';
echo '<p>Usando pré-incremento. Incrementa o valor da variável e depois usa o valor.</p>';
echo '<p>A variável $a agora vale:'.++$a.'</p>'; // vai mostrar o valor 2


echo '<hr>';
$b = 1;
echo '<p>A variável $b vale:'.$b.'</p>';
echo '<p>Usando pós-incremento. Usa o valor da variável e depois incrementa.</p>';
echo '<p>A variável $b vale:'.$b++.'</p>'; // vai mostrar o valor 1
echo '<p>A variável $b agora vale:'.$b.'</p>'; // vai mostrar o valor 2

