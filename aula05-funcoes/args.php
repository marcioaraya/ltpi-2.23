<?php
 function foo()
{
    $numargs = func_num_args();
    echo "Número de argumentos: $numargs<br />";
    if ($numargs >= 2) {
    echo "O segundo argumento é: " . func_get_arg (1) . "<br />";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
    echo "Argumento $i é: " . $arg_list[$i] . "<br />";
    }
} 

foo (1, 2, 3);
?>
