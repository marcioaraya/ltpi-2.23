<?php
  $num = 5;

// definição da função
// definição da função <> da execução da função
  function escopo(){
	  /* $GLOBALS é uma variável SUPERGLOBAL
	     que contém as variáveis globais 
		 do script
	  */
	  
	  
	  echo $GLOBALS["num"] . "<br>";
  }
  
  echo $num . "<br>";
  
  // chamada da função escopo()
  escopo();
  escopo();
  echo $num . "<br>";

?>