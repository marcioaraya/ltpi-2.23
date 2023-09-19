<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <?php

    for($i=0; $i<10; $i++){
        echo "<p>$i</p>";
    }

    /*
	    Repita o que foi feito com while:
	    a) exiba os números em uma tabela HTML com cada número em uma linha
	*/
	
	echo '<hr>';
	echo '<table border="1">';
	for($i=0; $i<10; $i++){
		echo "<tr><td>$i</td></tr>";
	}
	echo '</table>';
	
	
	/*
	    b) exiba os números em uma tabela HTML com apenas uma linha (cada número em uma coluna)
	*/
	echo '<hr>';
	echo '<table border="1">';
	echo '<tr>';
	for($i=0; $i<10; $i++){
		echo "<td>$i</td>";
	}
	echo '</tr>';
	echo '</table>';	
	
	/*	
	    c) exiba a tabuada do número 2
     */
	 
	echo '<hr>';
	for($i=1;$i<=10;$i=$i+1){
		echo '<p> 2 x ' . $i . " =  ".($i*2)." </p>";
	}

	/*	
	    c) exibir números decrescentes
     */
	 
	echo '<hr>';
	for($i=10;$i>=1;$i=$i-2){
		echo "<p> $i </p>";
	}







    ?>
    
         
</body>
</html>
