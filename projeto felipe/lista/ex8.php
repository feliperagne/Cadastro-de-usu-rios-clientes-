<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 8</title>
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
    padding: 16px;"><h3>Exercicio 8</h3>
<h5>Armazenar 5 números inteiros em um vetor e 
    imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar.</h5></div>
    <br>
    <br>
    <h5 style="padding-left:2rem;">Resposta:</h5>
    </head>
    <body>
    <form method="post" style="padding-left: 2rem;">
      <p>	
		Informe um número: <br>
		<input type="number" id="1" name="num1">
		</p>
      <p>	
		Informe um números: <br>
		<input type="number" id="1" name="num2">
		</p>
      <p>	
		Informe um números: <br>
		<input type="number" id="1" name="num3">
		</p>
      <p>	
		Informe um números: <br>
		<input type="number" id="1" name="num4">
		</p>
      <p>	
		Informe um números: <br>
		<input type="number" id="1" name="num5">
		</p>
		<input type="submit" value="Calcular">
		</form>

    <?php
     if(isset($_POST['num1'],$_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'])){
    $numero = array($_POST['num1'],$_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'] );
                   
        if(empty($numero)){
            echo"<br/>";
            echo"Informe os números, queridão...";
            }
        else{  
        echo"<br/>";
        for ($i = 0; $i < 5; $i++){
        if ($numero[$i] % 2 == 0)
            echo "O número $numero[$i] é par <br/>";
            else
            echo "O número $numero[$i] é ímpar <br/>";
            }       
                        
        }
    }
    else{
        echo"Informe os números, queridão...";
    }                          
?>
    <div style="border-top: 1px solid #1867c0;
  bottom: 0;
  left: 0;
  height: 40px;
  position: sticky;
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