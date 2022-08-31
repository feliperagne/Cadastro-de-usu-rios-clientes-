<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 2</title>
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
    padding: 16px;"><h3>Exercicio 2</h3>
<h5>Entrar com um número e informar se 
    ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
        <form method="post">
        <p>informe o numero: 
        <input type="number" id="1" name="vlr1">
        </p>
        <input type="submit" value="Calcular">
</form>
        <?php
        $n1 = '';
        if(isset($_POST['vlr1'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDO
            $n1 = $_POST['vlr1']; //PEGAR O NUMERO COLOCADO NO CAMPO DO FORMULARIO E USADO
            if(empty($n1)){
                echo 'informe o numero, queridão...';
            }
            else{
                if($n1 % 10 == 0 ){
                    echo  "divisivel por 10 <br>";
                }else{
                    echo "nao divisivel por 10! <br>";
                }
                if($n1 % 5 == 0){
                echo "divisivel por 5 <br>";
    
                }else{
                    echo "nao divisivel por 5! <br>";
                }
                if($n1 % 2 == 0){
                echo  "divisivel por 2 <br>";
                } else{
                
                    echo 'o numero nao é divisivel por 2! <br>';
                }
                
            }
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