<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Dados recebidos</h1>
    <?php
    $usuario = $_GET["usuario"];
    echo "<p>Olá, $usuario !</p>"
    ?>
</body>
</html>