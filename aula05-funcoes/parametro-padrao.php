<?php
// é possível definir um valor padrão para parâmetros
// não informados
// OBS: não é possível definir valor padrão para uma
// parâmetro passada por referência
function Contar($variável=10){
    for($i=0;$i<=$variável;$i++){
		echo $i . "<br>";
    }
}
Contar(7);
Contar();
?>
