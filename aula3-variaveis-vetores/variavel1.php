<?php
  $num = 5;

// definição da função
// definição da função <> da execução da função
  function escopo(){
	  $num = 10;
	  echo $num . "<br>";
  }
  
  echo $num . "<br>";
  
  // chamada da função escopo()
  escopo();
  escopo();
  echo $num . "<br>";

?>