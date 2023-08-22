<?php


$media = 5;

if ($media >= 6) {
	$situacao = "aprovado";
} else {
	$situacao = "reprovado";
}
echo "<p>A situação do aluno é $situacao</p>";

# o código acima pode ser reescrito usando operador ternário

$situacao = ($media >=6) ? "aprovado" : "reprovado";
echo "<p>A situação do aluno é $situacao</p>";

/* reescreva o código para que
a) se a média for maior ou igual a 6 a situação é "aprovado"
b) se a média for maior ou igual a 2 e menor que 6 a situação é "exame final"
c) se a média for menor que 2 a situação é "reprovado"

escreva usando "if" e usando operador ternário
*/
if ($media >=6 ) {
	$situacao = "aprovado";
 } else {
	 if ($media >=2 && $media <6) {
		 $situacao = "exame final";
	 } else {
		 $situacao = "reprovado";
	 }
 }
 
# usando elseif
if ($media >=6 ) {
	$situacao = "aprovado";
} elseif ($media >=2) {
    $situacao = "exame final";
} else {
	$situacao = "reprovado";
}

# usando operador ternário


$media = 7;
$situacao = ($media >=6) ? "aprovado" : (($media >=2)?"exame final":"reprovado");
echo "<p>A média do aluno é $media e a situação é $situacao</p>";

$media = 4;
$situacao = ($media >=6) ? "aprovado" : (($media >=2)?"exame final":"reprovado");
echo "<p>A média do aluno é $media e a situação é $situacao</p>";

$media = 1.5;
$situacao = ($media >=6) ? "aprovado" : (($media >=2)?"exame final":"reprovado");
echo "<p>A média do aluno é $media e a situação é $situacao</p>";





 
 
 
 
 
 
 
 
 









