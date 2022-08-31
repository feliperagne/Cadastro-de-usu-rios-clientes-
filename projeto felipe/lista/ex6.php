<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 6</title>
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
    padding: 16px;"><h3>Exercicio 6</h3>
<h5>A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado,
     o tipo de usuário (professor ou aluno) e possa imprimir um recibo do empréstimo.
     Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>informe o nome do Livro: 
    <input type="text" id="1" name="nome">
    </p>
    <p>Sexo :
        <input type="radio" name="tipo" value="professor">Professor
        <input type="radio" name="tipo" value="aluno">Aluno
   
    </p>
    <input type="submit" value="Calcular">
</form> 
<?php 
if(isset($_POST['nome'],$_POST['tipo'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDOS
        
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
    if($tipo == 'professor'){
        echo 'Tempo pra devolução: 10 dias';
        echo '<br>';
        echo "Nome do livro: $nome";
    } else if($tipo == 'aluno'){
        echo 'Tempo pra devolução: 3 dias';
        echo '<br>';
        echo "Nome do livro: $nome";
    }
} else if(empty($nome) or empty($tipo)){
    echo 'informe o nome e o tipo ,queridão...';
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