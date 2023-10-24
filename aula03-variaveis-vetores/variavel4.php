<?php
  $num = 5;

// definição da função
// definição da função <> da execução da função
  function escopo(){
	  /* $GLOBALS é uma variável SUPERGLOBAL
	     que contém as variáveis globais 
		 do script
	  */
	  
	  $GLOBALS["num"]++;
	  echo "<h1>".$GLOBALS["num"] . "</h1>";
  }
  
  echo "<p>$num</p>";
  
  // chamada da função escopo()
  escopo();
  escopo();
  echo "<p>O conteúdo da variável é $num</p>";
  echo '<p>O conteúdo da variável é $num</p>';

?>