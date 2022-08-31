<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Exercicio 3</title>
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../estilo.css">
<div style="grid-area: cabecalho;
    background-color: #1867c0;
    color: white;
    display: flex;
    flex-direction: column;
    justify-self: center;
    align-items: center;
    padding: 16px;"><h3>Exercicio 3</h3>
<h5>Entrar com nome, sexo e idade de uma pessoa. 
    Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA.
     Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>

    <form method="post">
    <p>informe o nome: 
    </p>
    <input type="text" id="1" name="nome">
    <p>Sexo :
        <input type="radio" name="sexo" value="Feminino">Feminino
        <input type="radio" name="sexo" value="Masculino">Masculino
   
    </p>
    <!-- <input type="text" id="2" name="sexo"> -->
    <p>informe a idade:
        <input type="number" id="3" name="idade">
    </p>

    <input type="submit" value="Registrar">
</form> 

    <?php
    
        if(isset($_POST['nome'], $_POST['sexo'], $_POST['idade'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDOS         
            $nome = $_POST['nome']; //PEGAR O NOME COLOCADO NO CAMPO DO FORMULARIO E USADO
            $sexo = $_POST['sexo'];
            $idade = $_POST['idade'];
            if($sexo == 'Feminino' && $idade<25){
                echo "Nome registrado: $nome";
                echo '<br>';
                echo 'Aceita!';
                
            } else{
                echo "Nome registrado: $nome";
                echo '<br>';
                echo "Não aceita!";
            }
        }
        else{
            echo 'Informe os numeros, queridão...';
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
    position: sticky;
    bottom: 0px;
    height: 40px;">Felipe Silveira 2022 @ Todos os direitos reservados</footer></div>
<script src="../../jquery-3.6.0.min.js"></script>
<script src="../../bootstrap.min.js"></script>
    </body>
</html>