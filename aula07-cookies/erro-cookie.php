<?php


echo '<html><body>';


for($i = 0; $i <= 50; $i++) {
    echo "<p>$i Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste</p>";
}
   
// a instrução setcookie deve ser enviada antes de dados que farão parte da página HTML
setcookie("c_usuario", "Fulano", time()+3600);
setcookie("c_idade", 20,  time()+3600);


echo '<a href="le_cookie.php">Ler dados gravados nos cookies</a>';
echo '</body></html>';

?>
