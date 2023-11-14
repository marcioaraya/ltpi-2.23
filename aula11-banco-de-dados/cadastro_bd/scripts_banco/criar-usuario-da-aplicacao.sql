/* Altera usuário root do MySQL para usar o modo de autenticação no MySQL antigo para aceitar o 
   driver usado pelo PHP 7.x e anteriores
*//*
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'senac'; 
*/


/* cria usuário específico para aplicação agenda, usando algoritimo de criptografia antiga do MySQL.
   se estiver usando PHP 8.x pode retirar "WITH mysql_native_password", pois o PHP 8.x já
   aceita criptografia mais recente utilizada pelo MySQL 
*/
/* se estiver usando notebook da Faculdade e estiver utilizando o MariaDB do XAMPP 
   ou se estiver usando uma versão mais atual do XAMPP
*/
-- CREATE USER 'aplicacao_curso'@'localhost' IDENTIFIED  BY 'curso123';

/* se estiver usando notebook da Faculdade e estiver utilizando o MySQL do Workbench */
-- CREATE USER 'aplicacao_curso'@'localhost' IDENTIFIED WITH mysql_native_password BY 'curso123';

/* concede grant para tabelas existentes no schema curso */
grant select, insert, update, delete on curso.* to 'aplicacao_curso'@'localhost' ;
