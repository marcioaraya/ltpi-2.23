  <?php
  // conectabd.inc.php
  // 1) se usar o mysql do XAMPP no computador da Faculdade
  //   Altere o arquivo de configuração my.ini. 
  //   Mude a porta(port) de 3306 para 3307 (há dois lugares no arquivo)
  //   salve e reinicie o MariaDB/MySQL
  // altere localhost mysqli_connect("localhost:3307", "senac", "", "curso")
  // 2) se usar o mysql no Workbench, use como abaixo
  // será necessário executar o script que está no arquivo "criar-usuario-da-aplicacao.sql"
  // que está na pasta scripts_banco
  $link = mysqli_connect("localhost:3307", "aplicacao_curso", "curso123", "curso");
  
  // mysqli_connect_errno - devolve o código do erro
  if (mysqli_connect_errno()) {
	  // mysqli_connect_error - devolve a mensagem de erro
	  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error() );
	  exit();
  }

 // var_dump($link);
 //   echo 'aqui <br>';