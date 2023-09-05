<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <!-- action = nome do programa que receberá dados do formulário
         method = modo como os dados serão enviados
                  GET (padrão): TEM limite de tamanho. 
                                Dados aparecem na barra de endereços
                  POST: NÃO tem limite de tamanho. 
                        Dados NÃO aparecem na barra de endereços
                  -->

    
    

    <?php
    if (isset($_GET["usuario"]) && ($_GET["usuario"]!="")){
        echo '<h1>Dados recebidos</h1>';
        $usuario = $_GET["usuario"];
        echo "<p>Olá, $usuario !</p>";
        echo '<p><a href="form-prog.php">Voltar</a></p>';
    } else {
?>
        <h1>Formulário</h1>
        <form action="form-prog.php" method="GET">
            <label for="id-nome">Usuário:</label>
            <input type="text" 
                   name="usuario" 
                   id="id-nome"
                   placeholder="Digite o nome do usuário"
            >
            <br>
            <input type="submit" value="Enviar">
        </form>
<?php
    }

    ?>
    
</body>
</html>