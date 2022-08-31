<?php 
    require_once 'conexao.php';
    $conexao = new Conexao();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Primeira Pagina em PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <?php
            echo 'teste de conexão MYSQL - Início!! <br><br>';
            echo $conexao->testar_banco();
            echo '<br><br> Teste de conexão MYSQL - FIM!'; 
        ?>
    </body>
</html>