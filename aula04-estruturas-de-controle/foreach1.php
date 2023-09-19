<?php

$carros = ["chevrolet"=>"onix", "fiat"=>"argo", "volkswagen"=>"up", "renault"=>"kwid"];

foreach($carros as $c){
    echo $c . "<br>";
}
echo '<hr>';
foreach($carros as $p=>$c){
    echo $p . " - " . $c . "<br>";
}
echo '<hr>';
$alunos = [ ["Nome"=>"Mateus", "Curso"=>"ADS"], 
            ["Nome"=>"Marcos", "Curso"=>"CD"], 
			["Nome"=>"Lucas", "Curso"=>"GTI"], 
			["Nome"=>"João", "Curso"=>"SI"]      ];
			
			
			echo $alunos[1]["Nome"]."<br>";
			echo $alunos[3]["Curso"]."<br>";
			
foreach($alunos as $a){
	echo $a["Nome"] . " - " . $a["Curso"] . "<br>";
	
}	
echo '<hr>';
foreach($alunos as $a){
	foreach($a as $c){
		echo $c;
	}
	echo '<br>';
}	
