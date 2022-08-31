<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 7</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../estilo.css">
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
<div style="grid-area: cabecalho;
    background-color: #1867c0;
    color: white;
    display: flex;
    flex-direction: column;
    justify-self: center;
    align-items: center;
    padding: 16px;"><h3>Exercicio 7</h3>
<h5>Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>informe o numero de vezes que deseja mostrar a palavra: 
    <input type="number" id="1" name="qntd">
    </p>
    <input type="submit" value="Calcular">
</form>  
<?php
if(isset($_POST['qntd'])){ 
        $qntd = $_POST['qntd'];
    for ($i=0; $i<$qntd; $i++) { 
        echo "SOL";
        echo '<br>';
    }
} else if(empty($qntd)){
    echo 'informe o número ,queridão...';
}

?>
    <div style="border-top: 1px solid #1867c0;
  bottom: 0;
  left: 0;
  height: 40px;
  position: fixed;
  width: 100%;"><footer style="grid-area: rodape;
    background-color: whitesmoke;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-size: 1.2rem;
    padding: 0px 20px;
    color: #1867c0;
    bottom: 0px;
    height: 40px;">Felipe Silveira 2022 @ Todos os direitos reservados</footer></div>
    <script src="../../jquery-3.6.0.min.js"></script>
<script src="../../bootstrap.min.js"></script>
    </body>
    
</html>