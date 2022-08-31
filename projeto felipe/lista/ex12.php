<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicio 12</title>
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
    padding: 16px;"><h3>Exercicio 12</h3>
<h5>Faça um algoritmo que receba a altura e sexo de uma pessoa, 
    calcule e exiba o seu peso ideal, utilizando as seguintes formulas:
a.	Homens = (72.7 * altura) – 58
b.	Mulheres = (62.1 * altura) – 44.7
</h5></div>
    <br>
    <br>
    <h5>Resposta:</h5>
    </head>
    <body>
    <form method="post">
    <p>	
        Informe a Altura: <br>
        <input type="text" id="1" name="altura">
    </p>
    <p>	
        Informe o Sexo (Masculino ou Feminino): <br>
        <input type="text" id="2" name="sexo">
  </p>
    <br/>
  <input type="submit" value="Calcular Peso">
</form>
<?php
function calcular_peso($altura, $sexo)
{     
    if($sexo == 'Masculino'){
      $peso = (72.7 * $altura) - 58 ; 
      echo "<br/>";   
      echo "O peso ideal é: $peso";
    }
    else{
      if($sexo == 'Feminino'){
        $peso = (62.1 * $altura) - 44.7;
        echo "<br/>";   
        echo "O peso ideal é: $peso";
      }
      else
        echo "Informe o sexo com letra maiúscula, queridão...";
    }

}
?>
<?php
    if(isset($_POST['altura'],$_POST['sexo'])){
    $altura = $_POST['altura'];  
    $sexo = $_POST['sexo'];  
        if(empty($altura) && empty($sexo)){
            echo"<br/>";
            echo"Informe a altura e sexo, queridão...";
    }
        else{
            echo"<br/>";
            echo calcular_peso($altura, $sexo);     
    }
}
        else{
            echo"<br/>";
            echo"Informe a altura e sexo, queridão...";
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