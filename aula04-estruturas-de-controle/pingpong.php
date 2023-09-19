<?php

for($i=1;$i<=30;$i++){
	if (($i%3==0) && ($i%5==0)){
		echo 'PingPong';
	} else if ($i%5==0){
		echo 'Pong';
	} else if ($i%3==0) {
		echo 'Ping';
	} else {
		echo "$i";
	}
	echo '<br>';
}


?>