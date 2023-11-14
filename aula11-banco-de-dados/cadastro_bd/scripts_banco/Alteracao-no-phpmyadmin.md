Caso tenha alterado a porta do MySQL(MariaDB) do XAMPP para porta 3307, 
será necessário acrescentar uma linha na configuração do PHPMyAdmin
para informar a esse sistema a porta que deverá usar para conectar
ao banco de dados.
  
Na pasta "C:\xampp\phpMyAdmin" procure o arquivo "config.inc.php"
  
Abra esse arquivo e localize a linha com a instrução abaixo:  
```
$cfg['Servers'][$i]['host'] = '127.0.0.1';
```

Abaixo dessa linha, acrescente:  
```
$cfg['Servers'][$i]['port'] = '3307';
```
