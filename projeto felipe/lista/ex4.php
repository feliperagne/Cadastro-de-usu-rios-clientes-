<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Exercicio 4</title>
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
    padding: 16px;"><h3>Exercicio 4</h3>
<h5>Entrar com 3 números e imprimi-los em ordem decrescente.</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>informe o primeiro número: 
    </p>
    <input type="number" id="1" name="vlr1">
    <p>informe o segundo número :
   
    </p>
    <input type="number" id="2" name="vlr2">
    <p>informe o terceiro número:
    </p>
    <input type="number" id="3" name="vlr3">
    <input type="submit" value="Mostrar em ordem decrescente">
</form>  
    <?php
    
        if(isset($_POST['vlr1'], $_POST['vlr2'], $_POST['vlr3'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDOS
        
            $vlr1 = $_POST['vlr1']; //PEGAR O NOME COLOCADO NO CAMPO DO FORMULARIO E USADO
            $vlr2 = $_POST['vlr2'];
            $vlr3 = $_POST['vlr3'];

            
        } if(empty($vlr1) or empty($vlr2) or empty($vlr3)){
            echo 'informe os numeros,queridão...';
        } else{
            $valores = array($vlr1, $vlr2, $vlr3);
            rsort($valores);
            print_r($valores);
            
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