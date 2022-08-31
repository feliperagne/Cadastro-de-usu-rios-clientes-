<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 5</title>
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
    padding: 16px;"><h3>Exercicio 5</h3>
<h5>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. 
    Caso o número seja fora desse intervalo, informar que não existe mês com este número.</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>informe o numero: 
    <input type="number" id="1" name="numero">
    </p>

    <input type="submit" value="Mostrar">
</form>  
    <?php
        if(isset($_POST['numero'])){ //VALIDAR SE OS CAMPOS FORAM PREENCHIDOS
        
            $numero = $_POST['numero']; //PEGAR O NOME COLOCADO NO CAMPO DO FORMULARIO E USADO

            if($numero == 1) {
                echo "Janeiro";
            }
            else if ($numero == 2){
                echo 'Fevereiro';
            } 
            else if($numero == 3){
                echo 'Março';
            }
            else if ($numero == 4){
                echo 'Abril';
            } 
            else if($numero == 5){
                echo 'Maio';
            }
            else if($numero == 6){
                echo 'Junho';
            }
            else if($numero == 7){
                echo 'Julho';
            }
            else if($numero == 8){
                echo 'Agosto';
            }
            else if($numero == 9){
                echo 'Setembro';
            }
            else if($numero == 10){
                echo 'Outubro';
            }
            else if($numero == 11){
                echo 'Novembro';
            }
            else if($numero == 12){
                echo 'Dezembro';
            }
            else {
                echo 'O Mês não existe, queridão';
            }
        }else if(empty($numero)){
            echo 'informe o numero,queridão...';
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