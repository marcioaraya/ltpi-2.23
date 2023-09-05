<?php
function foo()
{
  function bar()
  {
    echo "Eu não existo até foo() ser chamada.\n";
  }
}

/* Nós não podemos chamar bar() ainda porque ela ainda não foi definida. */
foo();

/* Agora nós podemos chamar bar(), porque o processamento de foo() 
   tornou a primeira acessivel */
bar();
?>
