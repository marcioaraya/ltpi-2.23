<?php
  $num = 5;

// definição da função
// definição da função <> da execução da função
  function escopo(){
	  /* a palavra global indica
	     que vai acessar a variável
		 $num no escopo global
	  */
	  
	  global $num;
	  echo $num . "<br>";
  }
  
  echo $num . "<br>";
  
  // chamada da função escopo()
  escopo();
  escopo();
  echo $num . "<br>";

?>