<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 1</title>
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
    padding: 16px;"><h3>Exercicio 1</h3>
<h5>Construir um algoritmo que leia 2 números e efetue a adição. 
    Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; 
    caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>informe o valor 1: 
    <input type="number" id="1" name="vlr1">
    </p>

    <p>informe o valor 2:
    <input type="number" id="2" name="vlr2">
    </p>
    <input type="submit" value="Calcular">
</form>  
    <?php
        function somar_valores($n1,$n2){
            $soma2 = $n1 + $n2;
            return $soma2;
        }
    
    
        if(isset($_POST['vlr1'], $_POST['vlr2'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDOS
        
            $n1 = $_POST['vlr1']; //PEGAR O NUMERO COLOCADO NO CAMPO DO FORMULARIO E USADO
            $n2 = $_POST['vlr2'];
            


            $soma = somar_valores($n1, $n2);
            if($soma>20){
                $soma = $soma + 8;
                echo "o valor da soma será: $soma";
            }elseif($soma<=20){
                $soma = $soma - 5;
                echo "o valor resultante será: $soma";
            }
        } else{
        
            echo 'Informe os 2 numeros, queridão...';
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